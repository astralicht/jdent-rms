<?php

namespace Controllers;

class Test {
    
    function fetch() {
        return json_encode([
            "status" => 200,
            "message" => "You sent a get request.",
        ]);
    }

    function update() {
        return json_encode([
            "status" => 200,
            "message" => "You sent an update request.",
        ]);
    }

}