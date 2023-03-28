<?php
 $servername = "localhost";
$username = "root";
$password = "";
$database="registration";

$conn = mysqli_connect($servername, $username, $password,$database);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{

$email=$_POST['email'];
$passward=$_POST['passward'];
 
$stmt=$conn->prepare("select * from blood where email = ?");
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt_result = $stmt->get_result();
if($stmt_result->num_rows > 0)
{
$data = $stmt_result->fetch_assoc();
if($data['passward'] =$passward){
    echo "<script>alert('Welcome to the website')</script>";
echo "<script>window.open('index.html','_self')</script>";
 

}
else{
echo "  fild deltils invalid email or passward ";
}
}
else
{
echo "<h2>invalid email or password </h2>";
}
 }
?>
 
<html lang="en">
 
 <style>
body{
    margin: 0;
    padding: 0;
    background: url( https://images.ctfassets.net/uwf0n1j71a7j/5eviJ6Wt9Som0ayOI38kbZ/90ee6e4381d83fd4e6e8fd45e78e0c5f/buy-car-insurance-online.png) no-repeat;
    background-size: cover;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
 .first{
     width: 250px;
     top: 50px;
     left: 40%;
     position: absolute;
     color: rgb(29, 27, 27);
     margin: 10px;
      
 }
 .first h1{
    float: left;
    font-size: 40px;
    border-bottom: 6px solid rgb(16, 17, 16);
    margin-bottom: 50px;
     padding-bottom: 13px 0;
 }
 .text{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 2px solid rgb(11, 12, 11);
 }
</style>
<script src="https://use.fontawesome.com/3cd8e57c08.js"></script>
<body>
    <div class="first">
         
            <h1 style="color:white;">Login</h1>
        <form action="" method="post"> 
        <div class="text">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text"  name="email" placeholder="username">
        </div>

        <div class="text"> 
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <input type="password" name="passward" placeholder="password">
        </div>
        
             <input type="submit" value="login" name="submit">
 
            <hr>
                <a href="" style="color: black ; text-size-adjust: 20px;">Reset password</a>
            <h3>Create new account <a href="signup.php">Register</a></h3> 
        </form>
    </div>
</body>
</html>