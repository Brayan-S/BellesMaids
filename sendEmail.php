<?php 
 use PHPMailer\PHPMailer\PHPMailer;

 if(isset($_POST['name']) && isset($_POST['email'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phoneNumber = $_POST['phoneNumber'];
   $body = $_POST['body'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();


  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "estebanm9362@gmail.com";
  $mail->Password = "Elkomander97";
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  $mail->isHTML(true);
  $mail->BodyFrom($email, $name);
  $mail->addAddress("estebanm9362@gmail.com");
  $mail->phoneNumber = ("$email($phoneNumber)");
  $mail->Body = $body;

  if($mail->send()){
      $status = "success";
      $response = "Email is send";
  } else {
      $status = "failed";
      $response = "somethin is wrong: <br>" . $mail ->ErrorInfo;
  }
    exit (json_encode(array("status" => $status, "response" =>$response)));

 }

?>