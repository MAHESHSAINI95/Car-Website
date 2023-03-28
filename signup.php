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
 $Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$email=$_POST['email'];
$passward=$_POST['passward'];
 
$Age=$_POST['Age'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Zip=$_POST['Zip'];
$sql=" insert into blood(Firstname,Lastname,email,passward,Age, Address,City,State,Zip)
values('$Firstname','$Lastname','$email','$passward','$Age','$Address','$City','$State','$Zip')";
if(mysqli_query($conn,$sql))
{
  echo "<script>window.open('login.php','_self')</script>";
  echo "<script>alert('succesfully registration')</script>";
  
}
else
{
echo "error:".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    background: url(  https://wallpapers.com/images/hd/black-sports-car-pc-aojd7q4tjxjsi04j.jpg) no-repeat;
    background-size: cover;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.first{
     width: 400px;
     top: 100px;
     left: 70%;
     position: absolute;
     color: white;
     margin: 10px;
border: 2px solid white;
      
 }
 /* :root{
    --green:#27ae60;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
} */

 
  
</style>
<link rel="stylesheet" href="">
 
<body>
  
    <div class="first">
<h1 >Register the website</h1>
        
           <form action="" method="post"   >
          <div>
            <label>First Name</label>
            <input type="text" name="Firstname"placeholder="enter first name"> 
          </div><br>
          <div  >
            <label >Last Name</label>
            <input type="text" name=" Lastname" placeholder="enter last name"> 
          </div><br>
           
          <div  >
            <label  >Email</label>
            <input type="email" name=" email" placeholder="enter personal email" > 
          </div><br>
          <div  >
            <label >Passward</label>
            <input type="password" name="passward" placeholder="enter password" > 
          </div><br>
          <div >
          <label >phone no</label>
            <input type="text" name="number" placeholder="enter your phone number" > 
          </div><br>
          <div >
            
        <div  >
          <label >Age</label>
          <input type="text" name="Age" placeholder="enter age"> 
        </div><br>
          <div  >
            <label  >Address</label>
            <input type="text"  name="Address" placeholder="enter  current address"> 
          </div><br>
           
          <div  >
            <label  >City</label>
            <input type="text"  name="City" placeholder="enter your city"> 
          </div><br>
          <div  >
            <label  >State</label>
            <select    name="State">
              <option selected>Bihar</option>
              <option>Rajasthan</option>
              <option>panjab</option>
              <option>haryana</option>
              <option>Gujrat</option>
              <option>goa</option>
               
            </select> 
          </div><br>
          <div  >
            <label  >pincode</label>
            <input type="text"  name="Zip" placeholder="enter pincode"> 
          </div><br>
          
          <div  >
            <button type="submit"  name="submit">submit</button>
          </div>
        </form>
        <h4>or</h4>
        

         <h3>already Register <a href="login.php">login</a></h3>
             
              
         
    </div>
     
</body>
</html>