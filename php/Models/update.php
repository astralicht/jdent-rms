<?php

namespace Models;

class Update extends Model {

    function patient($data) {
        $query = "";
        return self::getResult($query, [$data]);
    }
    
}
