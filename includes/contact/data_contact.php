<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../public/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Manjari:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/main.css">
    <script src="https://kit.fontawesome.com/cfa5b23a00.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/ScrollToPlugin.min.js"></script>
    <title>Form Submission\</title>
</head>
<body>
<h1 class="hidden">Form Submission</h1>
<header id="submission-header">
    <i class="fas fa-bars fa-2x"></i>
    <ul class="main-nav">
        <a id="link-dev" href="../index.php#development"><li>Web Development</li></a>
        <a id="link-motion" href="../index.php#motion"><li>Motion Design</li></a>
        <a id="link-about" href="../index.php#about"><li>About</li></a>
        <a id="link-contact" href="../index.php#contact"><li>Contact</li></a>
    </ul>
    <a href="../index.php" class="link-home">
        <picture class="logo">
            <source media="(min-width: 767px)" srcset="../public/images/logo.svg">
            <img  src="../public/images/logo-alt.svg" alt="logo">
        </picture>
    </a>
</header>

<div class="submission-con">
<?php

//IF THE FORM IS NOT FILLED OUT
if(empty($_POST)){
    echo 'no...';
    exit;
}

//VALIDATE ALL DATA
$name = '';
$email = '';
$subject = '';
$message = '';
$recipient = 'mariam.khalifa.gabr@gmail.com';

if (isset($_POST['name'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['email'])) {
    // if there's a line break in an email (it's very long), strip it out
   $email = str_replace(array("\r", "\n", "%0a", "%0d"),'',$_POST['email']);
   $email = filter_var($email,FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['subject'])) {
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['message'])) {
    $message = $_POST['message']; 
}

//SEND OUT EMAIL
$headers = array(
    'From'=>'no-reply@mariamkhalifa.ca',
    'Reply=To'=>$name.'<'.$email.'>'
);

if(mail($recipient, $subject, $message, $headers)){
//if(mail($recipient, $subject, $message)){
    echo '<p>Yay! <br>Your email was sent.<br> ^_^</p>';
}else{
    echo '<p>Nooo! <br>Something went horribly wrong.<br> Sorry! :(</p>';
}
?>
<img class="sub-butterflies" src="../public/images/butterflies.png" alt="butterflies">
</div>

<footer id="footer">
    <h1 class="hidden">Main Footer</h1>
    <p>&copy; Mariam Khalifa 2019.</p>
    <div class="social-media">
        <a href="https://github.com/mariamkhalifa" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/mariamkhalifa/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        <a href="https://vimeo.com/mariamkhalifa" target="_blank"><i class="fab fa-vimeo fa-2x"></i></a>
    </div>
</footer>

</body>
</html>