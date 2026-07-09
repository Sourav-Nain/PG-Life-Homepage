<?php

session_start();

$server="localhost";
$username="root";
$password="";
$database="pglife";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Connaction failed ".mysqli_connect_error());
}

$message="";

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql= "SELECT * From users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$sql);

    $count=mysqli_num_rows($result); //counting rows
    if($count==1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];   // Stores user's name
        $_SESSION['email'] = $row['email']; // Stores user's email
        header("Location: pglife-dashboard-responsive/index.php");
        exit();
    }
    else{
        $message = "Invalid Email or Password";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Page</title>
</head>

<body>
    <?php
    if(!empty($message)){
        ?>
        <div class="w-[40%] mx-auto mt-4 p-3 bg-green-100 text-green-700 border border-green-500 rounded text-center">
            <?php
            echo $message ?>
            </div> <?php
    }
    ?>
    <form action="login.php" method="POST">
        <div class="flex w-[40%] m-auto p-4 text-xl">
            <h1 class="w-[95%] font-serif text-2xl">Login with PGLife</h1>
            <a href="index.php">
                <p><i class="fa-solid fa-x w-[5%] text-gray-500 cursor-pointer"></i></p>
            </a>
        </div>
        <div class="flex flex-col m-auto w-[40%] gap-2 h-44">
            <div class="flex border-2 border-gray-400 rounded-md h-[33%]">
                <i
                    class="fa-solid fa-envelope w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="email" placeholder="Email" name="email" class="w-[91%] pl-2">
            </div>
            <div class="flex border-2 border-gray-400 rounded-md h-[33%]">
                <i
                    class="fa-solid fa-lock w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="password" placeholder="Password" name="password" class="w-[91%] pl-2">
            </div>
            <div class="login-btn h-[33%]">
            <button type="submit" class="text-center w-full p-1 bg-violet-400 rounded-md">Login</button>
        </div>
        </div>
        <div class="w-[40%]  mx-auto my-4 flex justify-center">
            <p><a class="text-blue-700" href="signup.php">Click here </a> to register a new Account</p>
        </div>
    </form>
</body>

</html>