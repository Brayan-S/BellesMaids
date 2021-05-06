<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

   $mailTo = "estebanm289@outlook.com";
   $headers = "from: ".$mailFrom;
   $txt = "you have recieved an e-mail from".$name.".\n\n".$message;

    mail($mailTo, $number, $txt, $headers );
    header("location: index.php?mailsend");
}
