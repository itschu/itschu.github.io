<?php

require_once('../config/functions.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/PHPMailer.php'; // Only file you REALLY need
require '../PHPMailer-master/src/Exception.php'; // If you want to debug


        
if(isset($_GET['trxref']) && isset($_GET['reference'])){
    $ref = $_GET['reference'];
}else{
    header('Location : https://zimarex.com');
}

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/$ref",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_a7b277eaef1027fefe63674fca48268bbb8a6e1d",
        "Cache-Control: no-cache",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$obj = json_decode($response);

if ($err) {
    // echo "cURL Error #:" . $err;
    $tran_status = 'failed';
} else {
    $date_now= date("d/m/Y h:i:sa");
    $tran_status = $obj->data->status;
    if($tran_status == 'success'){

        $sql="update transactions set payment_status = 'paid', payment_date = '$date_now' where tran_id = '$ref' ";

        if($conn->query($sql) ){
            $currentStat = 'complete';
            $mail_success_payment1 = new PHPMailer(true); 
            $mail_success_payment2 = new PHPMailer(true);
            
            //require_once('../send-mail/paymentMade.php');
            //require_once('../send-mail/paymentMade2.php');

        }else{
            //echo $conn->error;
        }
    }
}

    
?>