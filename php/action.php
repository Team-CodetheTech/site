<!-- <?php
	$name = $_POST['Name'];
	$email = $_POST['email'];
	$subject = "Mail From Website"
	$message = $_POST['Message'];
    $to = "team@codethetech.hackclub.com"
    $header = "From: ".$name. "\r\n". 
    "CC: shrey@codethetech.hackclub.com";

    $txt = "You Have Recieved an Email ".$name."\r\nEmail: ".$email."\r\nMessage: ". $message;

    if($email!=NULL){
        mail($to, $subject, $txt, $header);
    }
header('Location:thankyou.html')
    
?> -->