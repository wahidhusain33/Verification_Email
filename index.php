<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<style>
div{
    margin-left:38%;
}
#sub{
    margin-top:2vh;
    cursor:pointer;
}
</style>
<body>
 
<form action="index1.php" method="POST" id="login">
     <fieldset>
     <legend>Verification Form</legend>
     <div>
    Name: <br>
    <input type="text" name="user1" id="user" placeholder="User Name" required><br><br>

    Email: <br>
    <input type="text" name="mail1" id="mail" placeholder="Email" required><br><br>
    Subject: <br>
    <input type="text" name="sub5" id="sub1" placeholder="Subject"><br><br>
    Message: <br>
    <textarea name="msg" id="msg" cols="31" rows="5"></textarea><br><br>

    <input type="submit" name="sub" id="sub2" value="Submit" onclick='fun()'>
    </form>
    </div>
    </fieldset>

</body>
<script>
function fun(){
    var name=document.getElementById('user').value;
    var email=document.getElementById('mail').value;

    if(email && email.value !="" && name && name.value != ""){
    alert("An OTP has been sent");
    }
    else{
        alert("Please Fill the Detail");
    }
}
</script>
</html>