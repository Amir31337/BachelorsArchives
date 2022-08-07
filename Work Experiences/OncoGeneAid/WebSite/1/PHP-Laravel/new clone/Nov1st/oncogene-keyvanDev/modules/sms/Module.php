<?php

namespace Modules\sms;

use App\BaseModule;

class Module extends BaseModule
{
    public function sms_channel_info(){
        return [
            'title'=>'sms.ir',
            'name'=>'smsIR'
        ];
    }

    public function smsIR_send_sms($data){
        $mobile_number=$data['mobile_number'];
        $message=$data['message'];
        $api =$data['api-key'];
        try{
            if(!empty($data['template'])){
                $api=explode('---',$api);
                if(sizeof($api)==2)
                {
                    $APIKey =$api[0];
                    $SecretKey =$api[1];
                    $apiUrl = "https://ws.sms.ir/";
                    $data = array(
                        "Mobile" => $mobile_number,
                        "TemplateId" => intval($data['template'])
                    );
                    if(is_array($message))
                    {
                        $data['ParameterArray']=array();
                        $i=1;
                        foreach ($message as $key=>$value)
                        {
                            $data['ParameterArray'][$key]=[
                                'Parameter'=>'code'.$i,
                                'ParameterValue'=>$value
                            ];
                            $i++;
                        }
                    }
                    else{
                        $data['ParameterArray']=array(
                            array(
                                "Parameter" => "code1",
                                "ParameterValue" => strval($message)
                            )
                        );
                    }


                    $SmsIR_UltraFastSend = new SmsIRUltraFastSend($APIKey, $SecretKey, $apiUrl);
                    $SmsIR_UltraFastSend->ultraFastSend($data);

                }
            }
        }
        catch(\Exception $e)
        {

        }
    }
}
