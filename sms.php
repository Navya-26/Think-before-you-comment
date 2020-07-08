<?php
      function send_sms($senderid,$number,$message,$route){
      $message = urlencode($message);
      $api_key = "be110514caacebe15b6ed3ae0c8d0b";
      $url = 'https://api.paysify.com/send_sms?api_key='.$api_key.'&sender_id='.$senderid.'&number='.$number.'&message='.$message.'&route='.$route.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
      return $response;
      }
    $data = send_sms("PAYSFY","9912739769","Warning! please delete your abusive comments","1");
    echo "<pre>";
    print_r($data);
	header("location:abuselevel.php");
    ?>