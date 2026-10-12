<?php
require_once "connect.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
 <form action="" method="post">
    <h2>sign up</h2>
    <label for="name">name</label>
    <br>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">email</label>
    <br>
    <input type="text" name="email" id="email">
    <br>
    <label for="pass">password</label>
    <br>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">signup</button>

 </form>
</body>
</html>

<?php
function clean($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=strip_tags($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $errors=[];
    $name=clean($_POST["name"]);
    $email=clean($_POST["email"]);
    $password=clean($_POST["password"]);
    

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]="please enter a vaild email <br>";
}
if(empty($password) || strlen($password)<8){
    $errors[]="enter a vaild password  please";
}
if(count($errors)==0){
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (`name`,`email`,`password`)
                VALUES('$name','$email','$password_hash')";

        if(mysqli_query($conn, $sql)){
            header("location:signup.php");
            exit;
        }
    }
    
if(count($errors)>0){
    foreach ($errors as $error) {
        echo "the error is: " . $error;
        
    }

}
// $password_hash=password_hash($password,PASSWORD_DEFAULT);
// $sql ="INSERT INTO users (`name`,`email`,`password`) VALUES('$name','$email','$password_hash')";
//     if(mysqli_query($conn,$sql)){
//         header("location:signup.php");
//     }


}





?>