<?php 
if(isset($_POST)){
    $failed = 'false';
    $contacts = 'hkharod@gmail.com'; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "BD Contact Form Message";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
   
    if( (empty($from)) || (empty($first_name)) || (empty($_POST['message'])) ) {
      $failed = 'true';
    } else {
        mail($contact,$subject,$message,$headers);    
        echo  "Thank You! Your Message Has Been Sent!";

    }
}

?>
