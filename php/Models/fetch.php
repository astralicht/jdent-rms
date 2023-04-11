<?php

namespace Models;

class Fetch extends Model {

    function patients() {
        $query = "SELECT *
                    FROM patients
                    WHERE `date_removed` IS NULL";
        return self::getResult($query);
    }


    function patient($id) {
        $query = "SELECT *
                    FROM patients
                    WHERE `date_removed` IS NULL
                    AND `id`=?";
        return self::getResult($query, [$id]);
    }


    function transactions($dentistId) {
        $query = "SELECT *
                    FROM transactions
                    WHERE `date_removed` IS NULL
                    AND `id`=?";
        return self::getResult($query, [$dentistId]);
    }

}