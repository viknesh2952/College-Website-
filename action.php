<?php include "config.php"; ob_start(); ?>
<?php session_start(); ?>
<?php 

if (isset($_GET['register'])) {

    if(!empty($_GET['username']) && !empty($_GET['password'])) {  
    $name=$_GET['username'];  
    $password=$_GET['password'];
   
        $ciphering = "AES-128-CTR"; 
  
// Use OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
// Non-NULL Initialization Vector for encryption 
$encryption_iv = '1234567891011121'; 
  
// Store the encryption key 
$encryption_key = "GeeksforGeeks"; 
  
// Use openssl_encrypt() function to encrypt the data 
$password = openssl_encrypt($password, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
                          
$c="SELECT * FROM registration WHERE userid='".$name."' AND passid='".$password."'";
    $query=mysqli_query($conn,$c);  
    $numrows=mysqli_num_rows($query);  
    $result = $conn->query($c);
          
if($numrows!=0)  
    {  
    while($row = $result->fetch_assoc())  
    {  
    $dbusername=$row['userid'];  
    $dbpassword=$row['passid'];  
    }    
if($name == $dbusername && $password == $dbpassword)  
    {

            $_SESSION['s_username'] = $dbusername;
            header( "Location:user/bookshop.php" ); die;
        }
    }
        else {
              $message = "Invalid username or password";
echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}

?>

