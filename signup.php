<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="pglife";
$conn=mysqli_connect("$server","$username","$password","$database");
$message = "";
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}

if(isset($_POST['name'])){
$name = $_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$college=$_POST['college'];
$gender = $_POST['gender'];

$sql = "INSERT INTO users(name, phone, email, password, college, gender)
VALUES('$name','$phone','$email','$password','$college','$gender')";

$result = mysqli_query($conn, $sql);

if($result){
    $message = "Account Created Successfully";
    
}
else{
    $message = "Error: " . mysqli_error($conn);
}
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Signup Form</title>
</head>

<body>
    <?php
    if($message != ""){
        ?>
        <div class="w-[40%] mx-auto mt-4 p-3 bg-green-100 text-green-700 border border-green-500 rounded text-center">
        <?php echo $message; ?>
        </div>
        <?php
    }
    ?>
    <form action="signup.php" method="POST">
        <div class="flex w-[40%] m-auto p-4 text-xl">
            <h1 class="w-[95%] font-serif text-2xl">Signup with PGLife</h1>
            <a href="index.php"><p><i class="fa-solid fa-x w-[5%] text-gray-500 cursor-pointer" ></i></p></a>
        </div>
        <div class="flex flex-col m-auto w-[40%] gap-2 h-80">
            <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
                <i
                    class="fa-solid fa-user w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="text" placeholder="Full Name" name="name" class="w-[91%] pl-2">
            </div>
            <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
                <i
                    class="fa-solid fa-phone w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="tel" placeholder="Phone Number" name="phone" class="w-[91%] pl-2">
            </div>
            <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
                <i
                    class="fa-solid fa-envelope w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="email" placeholder="Email" name="email" class="w-[91%] pl-2">
            </div>
            <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
                <i
                    class="fa-solid fa-lock w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="password" placeholder="Password" name="password" class="w-[91%] pl-2">
            </div>
            <div class="flex border-2 border-gray-400 rounded-md h-[20%]">
                <i
                    class="fa-solid fa-building-columns w-[8%] bg-gray-400 flex justify-center items-center text-gray-700 border-r-2 border-gray-400 rounded-tl rounded-bl"></i>
                <input type="text" placeholder="College Name" name="college" class="w-[91%] pl-2">
            </div>

            <div class="flex  gap-4">
                <p>I'm a </p>
                <label>
                    <input type="radio" name="gender" value="Male">
                    Male
                </label>

                <label>
                    <input type="radio" name="gender" value="Female">
                    Female
                </label>
            </div>
            <div class="create-account-btn">
                <button type="submit" class="text-center w-full p-1 bg-violet-400 rounded-md">Create Account</button>
            </div>
        </div>
        <div class="w-[40%]  mx-auto my-4 flex justify-center">
            <p>Already have an Account?</p>
            <a href="login.php" class="text-blue-700">Login</a>
        </div>
    </form>
</body>

</html>