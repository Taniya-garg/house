<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("not connected" . mysqli_connect_error());
}
// echo "successfully connected";

$name = $_POST['name'];
$age = $_POST['age'];
$religion = $_POST['religion'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `house`.`data` (`name`, `age`, `religion`, `email`, `phone`, `dt`) VALUES ('$name', '$age', '$religion', '$email', '$phone', current_timestamp());";

if($con->query($sql)==true){
    $insert =true;
}
else{
    echo "ERROR : $sql <br> $con->error";
}

$con -> close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gitaan Housing Solution </title>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
</head>
<style>
    body {
        padding: 0%;
        margin: 0%;
        background: url('img/bg.jpg');
        /* height: 4589px; */
    }

    .left {
        display: inline-block;
        position: absolute;
        left: 46px;
        top: 8px;
    }

    .left img {
        width: 117px;

    }

    .left div {
        text-align: center;
        font-family: 'Corinthia', cursive;
        font-size: 25px;
        line-height: 5px;

    }

    .mid {
        display: block;
        width: 53%;
        margin: 20px auto;
    }

    .btn {
        border-radius: 25px;
        padding: 7px 31px;
        cursor: pointer;
        font-size: 16px;
        background-color: rgb(47, 238, 211);
    }

    .right {
        position: absolute;
        display: inline-block;
        top: 20px;
        right: 25px;
    }

    .nav li {
        display: inline-block;

    }

    .nav li a {
        text-decoration: none;
        padding: 25px 30px;
        color: rgb(231, 13, 156);
        font-size: 26px;
    }

    .nav li a:hover,
    .nav li a.active {
        text-decoration: underline;
        color: salmon;

    }

    .container {
        border-radius: 28px;
        margin: 106px 82px;
        padding: 75px;
        border: 2px solid rgb(58, 6, 243);
        width: 33%;
    }

    .form-group input {
        text-align: center;
        font-size: 22px;
        display: block;
        width: 486px;
        border-radius: 9px;
        padding: 2px;
        margin: 12px auto;
    }

    .container h1 {
        text-align: center;
    }

    .container button {
        width: 470px;
        display: block;
        margin: auto;
        font-size: 23px;
    }
</style>

<body>
    <header class="header">
        <div class="left">
            <img src="img/logo.png" alt="">
            <div>Gitaan Housing</div>
        </div>
        <div class="mid">
            <ul class="nav">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">content</a></li>
                <li><a href="#">Photo gallery</a></li>
                <li><a href="#">About US</a></li>
            </ul>
        </div>
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1>House Related Query Form for Customer</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="age" id="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="religion" id="religion" placeholder="Enter your religion">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Enter your E-mail Id">
            </div>
            <div class="form-group">
                <input type="text" name="phone" id="phone" placeholder="Contact Number">
            </div>
            <button class="btn">Submit</button>
            <!-- INSERT INTO `data` (`sno`, `name`, `age`, `religion`, `email`, `phone`, `dt`) VALUES ('1', 'demo', '20', 'india', 'demo@gmail.com', '999999999', current_timestamp()); -->
        </form>


    </div>

</body>
</html>