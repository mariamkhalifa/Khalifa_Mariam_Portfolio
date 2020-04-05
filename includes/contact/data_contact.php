    
<?php

//IF THE FORM IS NOT FILLED OUT
// if(empty($_POST)){
//     echo 'Did you forget to fill out the form?';
//     exit;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //VALIDATE ALL DATA
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $recipient = 'mariamkh2512@gmail.com';

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
        'Reply-To'=>$name.'<'.$email.'>'
    );

    if(mail($recipient, $subject, $message, $headers)){
    //if(mail($recipient, $subject, $message)){
        $msg = 'Yay! Your email was sent! ^_^';
    } else {
        $msg = 'Nooo! Something went horribly wrong. Sorry! :(';
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    $msg = 'There was a problem with your submission, please try again.';
}

echo json_encode($msg);
?>

<!-- <img class="sub-butterflies" src="../../images/butterflies.png" alt="butterflies">
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
</html> -->