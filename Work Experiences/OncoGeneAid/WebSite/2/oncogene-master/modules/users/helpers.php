<?php

function has_access_author_admin($property,$accessValue=null){

    $result=false;
    $accessList=getAccess();
    if($accessList){
        try{
            $accessList=json_decode($accessList);
            if(is_object($accessList))
            {
                if(property_exists($accessList,$property))
                {
                    if(is_array($accessList->$property))
                    {
                        if($accessValue==null){
                            $result=true;
                        }
                        else{
                            foreach($accessList->$property as $key=>$value)
                            {
                                if($value==$accessValue)
                                {
                                    $result=true;
                                }
                            }
                        }
                    }
                }
            }
        }
        catch (\Exception $e){

        }
    }
    return $result;
}

function getAllAccess(){
    $role_id=Auth::user()->role_id;
    $repository=app(\Modules\users\Repository\UserRoleRepositoryInterface::class);
    return $repository->allAccess($role_id);
}

function checkUserAccess($route,$AccessList){
    $access=getAccess();
    $result=false;
    if($access){
        $access=json_decode($access);
        if(is_object($access)){
            foreach($access as $key=>$value)
            {
                if(array_key_exists($key,$AccessList)){
                    $userAccess=$AccessList[$key]['access'];
                    foreach($value as $key2=>$value2){
                        if(array_key_exists($value2,$userAccess)){
                            if(array_key_exists('routes',$userAccess[$value2]))
                            {
                                foreach($userAccess[$value2]['routes'] as $accessRoute){
                                    if($accessRoute==$route){
                                        $result=true;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return $result;
}

function getAccess(){
    $result=null;
    $modulesMainClass=Config::get('app.modulesMainClass');
    if(array_key_exists('users',$modulesMainClass)) {
        if(method_exists($modulesMainClass['users'],'getUserAccess')){
            $result = $modulesMainClass['users']->getUserAccess();
        }
        return $result;
    }
    return  $result;
}

function personal_user_detail($detail){
    $array=[];

    $name=(\Auth::user()->name=="") ? '-' : \Auth::user()->name;

    $array[]=['title'=>' نام و نام خانوادگی ',
        'value'=>$name,'attr'=>'name',
        'value2'=>getUserPersonalData($detail,'first_name').'-'.getUserPersonalData($detail,'last_name')
    ];
    $array[]=['title'=>' پست الکترنیکی','value'=>getUserPersonalData($detail,'email'),'attr'=>'email'];
    $array[]=['title'=>' شماره تلفن همراه','value'=>\Auth::user()->mobile,'attr'=>'mobile'];
    $array[]=['title'=>'کد ملی','value'=>replace_number(getUserPersonalData($detail,'national_identity_number')),'attr'=>'national_identity_number'];
    $array[]=['title'=>'شماره کارت بانکی','value'=>getUserPersonalData($detail,'bank_card_number'),'attr'=>'bank_card_number'];
    $array[]=['title'=>'تاریخ تولد','value'=>getUserPersonalData($detail,'date_of_birth'),'attr'=>'date_of_birth'];
    $array=CompleteData('personal_user_detail',$array);

    return $array;
}

function getUserPersonalData($additionalInfo,$att1,$attr2=null)
{
    $result='-';
    if($additionalInfo && !empty($additionalInfo->$att1))
    {
        $result=$additionalInfo->$att1;
        if($attr2){
            $result.=' '. $additionalInfo->$attr2;
        }
    }
    return $result;
}

function send_auth_sms($user,$active_code,$mobile=null){

    $repository=app(\Modules\setting\Repository\SettingRepositoryInterface::class);
    $setting=$repository->getValues([
        'users-channel',
        'users-api-key',
        'users-line_number',
        'users-active_template'
    ]);
    $message='';
    if($setting['users-active_template']=='' && !empty($setting['users-line_number'])){
        $message=config('shop-info.shop_name')."\n";
        $message.='کد تایید';
        $message.=' : '.$active_code;
    }
    else{
        $message=$active_code;
    }

    $user->notify(new \Modules\setting\Notifications\SendSms(
        [
            'channel'=>$setting['users-channel'],
            'line_number'=>$setting['users-line_number'],
            'api-key'=>$setting['users-api-key'],
            'template'=>$setting['users-active_template'],
            'mobile_number'=>$mobile!==null ? $mobile : $user->mobile,
            'message'=>$message
        ]
    ));
}

function getAccessMenu($sideBarMenu,$access){
    foreach($sideBarMenu as $key=>$value){
        if(checkParentMenuAccess($access,$value['access'])){
            if(array_key_exists('child',$value)){
                foreach($value['child'] as $key2=>$value2){
                    if (!checkAddChildMuenAccess($access,$value2)){
                        unset($sideBarMenu[$key][$key2]);
                    }
                }
            }
        }
        else{
            unset($sideBarMenu[$key]);
        }
    }
    return $sideBarMenu;
}

function userRegister($name,$mobile,$password,$identifier_code){

    $active_code=rand(99999,1000000);

    $user=\Modules\users\Models\User::create([
        'mobile' => $mobile,
        'password' => Hash::make($password),
        'account_status'=>'InActive',
        'active_code'=>$active_code,
        'role'=>'user',
        'name'=>$name,
        'identifier_code'=>$identifier_code
    ]);
    run_action('registered',[$user]);

    return $user;
}
function validateBankCard($value){
    if(strlen($value)==16)
    {
        $sum=0;
        for($i=0;$i<strlen($value);$i++)
        {
            $n=intval($value[$i]);
            if(checkEven($i))
            {
                $n=$n*2;
                if($n>9){
                    $n=$n-9;
                }
            }
            $sum=$sum+$n;
        }

        if($sum%2==0){
            return  true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
function validateNationalIdentityNumber($value){
     if(is_numeric($value)){
         $sum=0;
         for ($i=0;$i<9;$i++)
         {
             $n=intval(substr($value,$i,1));
             $sum+=(10-$i)*$n;
         }
         $ret=$sum%11;
         $parity=intval(substr($value,9,1));
         if(($ret<2 && $ret==$parity) || ($ret>2 && $ret==(11-$parity))){
             return  true;
         }
         else{
             return  false;
         }
     }
     else{
         return  false;
     }
}
