<?php

//if (!empty($_POST)) {
if (isset($_POST['submit'])) {
$nameUser = $_POST['name'];
$emailUser = $_POST['email'];
$messageUser = $_POST['message'];
/*
if (empty($name)) {
    $errors[] = 'Name is empty';
}
if (empty($email)) {
    $errors[] = 'Email is empty';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid';
}
if (empty($message)) {
    $errors[] = 'Message is empty';
}
if (!empty($errors)) {
   $allErrors = join('<br/>', $errors);
   $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}
*/
$mailTo = "studiomfb@gmail.com";
$subject = "contact form - Gallery Unique";
$headers = "From: ".$emailUser;
$txt = "You have recieve an email from " .$nameUser.".\n\n".$messageUser;

if (mail($mailTo, $txt, $headers)){
    echo "<h1>Sent Successfuly! Thank you"." ".$nameUser.", We will contact you shortly.</h1>";
}
else{
    echo "OOPS! Something went wromg!";
}

header("Location: index.php?mailsend");
}

?>
