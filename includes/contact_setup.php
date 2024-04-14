<?php
 
if(isset($_POST['contact_send'])) {
 
     require_once'../php/db.php';
 
    // EDIT THE 2 LINES BELOW AS REQUIRED 
 	$sql="select * from tbl_companyprofile";
	$result=$obj->select($sql);
	$da=mysqli_fetch_assoc($result);
	
    $email_to = $da['email1'];
 
    $email_subject =$obj->sql_inject($_POST['contact_for']);
 
     
 
    $subject = $obj->sql_inject($_POST['contact_for']); // required
    $name= $obj->sql_inject($_POST['name']); 
    $email = $obj->sql_inject($_POST['email']); // required 
    $contact = $obj->sql_inject($_POST['contact']); // required 
    $message = $obj->sql_inject($_POST['message']); // required
 
     
 
    
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
	
	$email_message .= "<b>Subject: ".clean_string($subject)." </b>\n  <br><br> ";
    	$email_message .= "Message: ".clean_string($message)."\n  <br><br>";
    	$email_message .= "Name: ".clean_string($name)."\n <br>";
    	$email_message .= "Email: ".clean_string($email)."\n  <br>";
    	$email_message .= "Contact: ".clean_string($contact)."\n  <br>";
 
     
 
     
 
// create email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();
 
$check=@mail($email_to, $email_subject, $email_message, $headers);  
 
 if($check){
        header('location:../');
 }
 else{
        header('location:../');
 }
?>
 
<?php
 
}
 
?>