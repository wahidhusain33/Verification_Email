<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<style>
#sub{
    cursor:pointer;
}
</style>
<body>

<?php

use PHPMailer\PHPMailer\PHPMailer;

class Verify{
    public $userName;
    public $email;
    public function Register($userName,$email){
        $this->userName=$userName;
        $this->email=$email;
        $detail=[$this->userName , $this->email];
        return $detail;
    }
}

$obj=new Verify();

$userDetail = $obj->Register($_POST['user1'], $_POST['mail1']);

$user=$_POST['user1'];
$email=$_POST['mail1'];
$sub5=$_POST['sub5'];
$msg=$_POST['msg'];

echo "<p id='vis1' style='display:none'>Name : " .$user."</p>";
echo "<p id='vis2' style='display:none'>Email : " .$email."</p>";
echo "<p id='vis3' style='display:none'>Subject : " .$sub5."</p>";
echo "<p id='vis4' style='display:none'>Message : " .$msg."</p>";


require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";


$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'wahidhusain33@gmail.com'; // Gmail address which you want to use as SMTP server
$mail->Password = 'password20'; // Gmail address Password
$mail->SMTPSecure ="ssl";
$mail->Port = 465;
$otp = rand(100000,999999);

$mail->isHTML(true);
$mail->setFrom($email, $user);

$mail->addAddress($email);
$mail->Subject =("$email");
$mail->Body ="OTP :" .$otp;
echo "<h3 id='mainotp' style='display: none;'>".$otp."</h3>";

$mail->send();

if($mail->send()){

    echo "<input type='number' id='otp' name='otp' placeholder='Enter OTP'>";
    echo "<button id='sub' onclick='clicked()'>Submit</button>";
}

?>


<script>
    function clicked(){
        if($("#otp").val()==$("#mainotp").text()){
            alert("Login Successful");
            document.getElementById("otp").style.display="none";
            document.getElementById("sub").style.display="none";

            document.getElementById("vis1").style.display="block";
            document.getElementById("vis2").style.display="block";
            document.getElementById("vis3").style.display="block";
            document.getElementById("vis4").style.display="block";
            document.getElementById("hid").style.display="none";



        }
        else{            
            alert("Login Failed");
            location.replace("index.php");
        }
    }
    </script>
    
</body>
</html>