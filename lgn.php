
 <?php

$nameErr =$PasswordErr ="";
$name = $Password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (empty($_POST["u_name"])) {
$nameErr = " Enter your Name ";
 } 
else 
{
    $name = test_input($_POST["u_name"]);   
     if (!preg_match("/^[a-zA-Z-']*$/",$name)) 
    { 
     $nameErr = "No digits should be there"; 
    }
 }

if (empty($_POST["pass_c"])) {
    $PasswordErr = "Enter the Password";
  } else {
    $Password = test_input($_POST["pass_c"]);
    $plength=strlen($Password);
    if($plength<8)
    {
        $PasswordErr= "Password should be of atleast 8 characters";
    }
  }

   if($nameErr == "" && $PasswordErr == "")
   {
      session_start();
      $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech_signup";
  
    $conn = new mysqli($servername,$username, $password, $dbname);
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['submit']))
     {
       $name = $_POST['u_name'];
       $Pass = $_POST['pass_c'];
$sql=mysqli_query($conn,"SELECT * FROM signup where USER_NAME='$name' and PASS_WRD_C='$Pass'");
    $row  = mysqli_fetch_array($sql);
if(is_array($row))
{
    $_SESSION["u_name"]=$row['USER_NAME'];  
    $_SESSION["pass_c"]=$row['PASS_WRD_C']; 
    
  
}
else
{
    echo "<b>Invalid Credentials, Please check if you have entered correct details...</b>";
}
}
   }
   }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>