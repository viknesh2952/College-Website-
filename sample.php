<?php
$userid = $_POST['userid'];
$passid = $_POST['passid'];
// Store the cipher method 
$ciphering = "AES-128-CTR"; 
  
// Use OpenSSl Encryption method 
$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 
  
// Non-NULL Initialization Vector for encryption 
$encryption_iv = '1234567891011121'; 
  
// Store the encryption key 
$encryption_key = "GeeksforGeeks"; 
  
// Use openssl_encrypt() function to encrypt the data 
$passid = openssl_encrypt($passid, $ciphering, 
            $encryption_key, $options, $encryption_iv); 
  
// Display the encrypted string 
//echo "Encrypted String: " . $passid . "\n";

$username = $_POST['username'];
$address = $_POST['address'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$description = $_POST['description'];
$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dr.sacoe";
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(userid,passid,username,address,country,zip,email,description) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$userid,$passid,$username,$address,$country,$zip,$email,$description);
    $stmt->execute();
    //echo "registration successfully";?><script>alert("Registration successful!!!.you may log in");</script><?php
    include('books.html');
    $stmt->close();
    $conn->close();
}

?>