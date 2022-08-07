<?php




try {
    date_default_timezone_set("Asia/Tehran");

    // your sms.ir panel configuration

    var_dump($UltraFastSend);

} catch (Exception $e) {
    echo 'Error UltraFastSend : '.$e->getMessage();
}

?>
