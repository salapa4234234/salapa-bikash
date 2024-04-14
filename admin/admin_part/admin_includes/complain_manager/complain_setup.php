<?php
 
if(isset($_POST['complain_email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "client.nisan@gmail.com";
 
    $email_subject =$_POST['sub'];
     
 
    // validation expected data exists
 
    if(!isset($_POST['sub']) ||
 
        !isset($_POST['domain']) ||
 
        !isset($_POST['contact']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['content'])) {
 
        header('location:../../loginsetup.php?topic=complain&msg=fill_up_all_field');       
    }
 
     
 
    $subject = $_POST['sub']; // required
 
    $domain = $_POST['domain']; // required
 
    $contact = $_POST['contact']; // required
 
    $email = $_POST['email']; // not required
 
    $content = $_POST['content']; // required
 
     
 
    
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Domain Name: ".clean_string($domain)."\n";
 
    $email_message .= "contact: ".clean_string($contact)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Complain: ".clean_string($content)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
$check=@mail($email_to, $email_subject, $email_message, $headers);  
 
 if($check){
        header('location:../../loginsetup.php?topic=complain&msg=yes');
 }
 else{
        header('location:../../loginsetup.php?topic=complain&msg=error');
 }
?>
 
<?php
 
}
 
?>