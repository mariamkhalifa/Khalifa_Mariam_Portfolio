    
<?php

//IF THE FORM IS NOT FILLED OUT
// if(empty($_POST)){
//     echo 'Did you forget to fill out the form?';
//     exit;
// }

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//if(isset($_GET['contact'])) {
//var_dump($_POST);
    //if(empty($_POST)){
            //$msg = 'Did you forget to fill out the form?';
            //exit;
    //} else {
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
    
        $headers = array(
            'From'=>'no-reply@mariamkhalifa.ca',
            'Reply-To'=>$name.'<'.$email.'>'
        );
    
        if(mail($recipient, $subject, $message, $headers)){
        //if(mail($recipient, $subject, $message)){
            $msg = 'Thank you!';
        } else {
            $msg = 'Oops! That did not go as expected!';
        }
    //}

//} else {
    // Not a POST request, set a 403 (forbidden) response code.
    //http_response_code(403);
    //$msg = 'There was a problem with your submission, please try again.';
//}

echo json_encode($msg);
