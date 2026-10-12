<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <form action="" method="post">
        <label for="email">email</label>
        <input type="text" name="email">
<br>
<label for="password">password</label>
        <input type="text" name="password">
        <br>
        <button type="submit">submit</button>
    </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $errors=[];
    $email=$_POST["email"];
    $password=$_POST["password"];


if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]="please enter a vaild email <br>";
}
if(empty($password)){
    $errors[]="enter password  please";
}
$password_hash=password_hash($password,PASSWORD_DEFAULT);


if(count($errors)>0){
    foreach ($errors as $error) {
        echo "the error is: " . $error;
    }
}

}


?>