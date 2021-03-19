<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $user= $_POST['user1'];
  $num=$_POST['num1'];

  $otp=rand(100,999);
  echo "<h3 id='mainotp' style='display: none;'>".$otp."</h3>";

  
  $fields = array(
    "sender_id" => "SMSINI",
    "message" => "2",
    "variables_values" => "Your OTP: $otp",
    "route" => "s",
    "numbers" => "$num",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization:utVgayqvZTUQi2lhIAS8w4Ps9DbKYeE03kRpCOfBrcJjnXF56oqPSeUTBs1d2fbEzXrGjtcuw5I7l94x",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "<input type='number' id='otp' name='otp'>";
  echo "<button type='submit' id='but' onclick=clicked()>Get Otp</button>"
} 

  ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    function clicked(){
        if($("#otp").val()==$("#mainotp").text()){
            alert("Login Successful");
        }
        else{
            alert("Login Failed");
        }
    }
    </script>
</body>
</html>