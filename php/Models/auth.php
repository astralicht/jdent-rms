<?php

namespace Models;

class Auth extends Model {

    function searchUser($email) {
        $query = "SELECT * FROM users
                    WHERE `date_removed` IS NULL
                    AND `email`=?";

        $result = self::getResult($query, $email);

        if ($result["status"] === 200) {
            // Enter code here
        }
    }

}