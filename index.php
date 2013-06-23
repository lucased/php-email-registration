<?php

require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if ( empty($name) || empty($email) || !validate_email($email)) {
        $status = "Please fill out name and email address";
    }
    else {
    	add_registered_user($name, $email);
        $status = "Thankyou, your details have been registered";
    }
}


require 'index.tmpl.php';
?>