<?php
$name_error = $phone_error = $email_error = $comment_error = "";
$name = $phone = $email = $comment = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["name"])) {
        $name_error = "Name is Required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_error = "Only Letters and Whitespace Allowed";
        }
    }

    if (empty($_POST["phone"])) {
        $phone_error = "Phone Number is Required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^(\+1|001)?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})/", $phone)) {
            $phone_error = "Phone Number is Invalid";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is Required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Email is Invalid";
        }
    }

    $contact_info = "From: $name\nEmail: $email\nPhone Number: $phone";

    if(empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if ($name_error == '' and $phone_error == '' and $email_error == '') {
        $comment_body = '';
        unset($_POST["submit"]);
        foreach($_POST as $key => $value){
            $comment_body .= "$key: $value\n";
        }

        $to = 'mackenziehevans@gmail.com';
        if(mail($to, $name, $contact_info, $comment)) {
            $success = "Message Sent, Thank You!";
            $name = $phone = $email = $comment = "";
        }
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>