<?php


namespace Modules\ariasms;


use nusoap_client;

class Module
{
    public function sms_channel_info(){
        return [
            'title'=>'ariasms',
            'name'=>'AriaSms'
        ];
    }

    public function AriaSms_send_sms($data){
        $mobile_number=$data['mobile_number'];
        $message=$data['message'];
        $api =$data['api-key'];

        $client = new nusoap_client($api);
        $err = $client->getError();
        if ($err)
        {
            echo 'Constructor error' . $err;
        }
        $parameters['username'] = "aria8735";
        $parameters['password'] = "8641";
        $parameters['to'] = $mobile_number;
        $parameters['from'] = $data['line_number'];
        $parameters['text'] =$message;
        $parameters['isflash'] =false;

        $result = $client->call('SendSimpleSMS2', $parameters);
        print_r($result);
    }
}
