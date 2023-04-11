<?php

namespace Controllers;

class Auth {
    
    function login () {
        session_start();

        include_once("../Models/auth.php");

        $userDetails = (new \Models\Auth())->searchUser($_POST["email"]);

        if ($userDetails["status"] !== 200) {
            header("Location: login?e=nouser");
            return;
        }

        // add checksum validation and/or other forms of validation here

        $_SESSION["user_type"] = $userDetails["type"];
        $_SESSION["first_name"] = $userDetails["first_name"];

        if ($_SESSION["user_type"] === "ADMIN") header("Location: admin-dashboard");
        else header("Location: dashboard");
    }

    function logout () {
        session_unset();
        session_destroy();
    }

}