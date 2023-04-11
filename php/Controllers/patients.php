<?php

session_start();

require_once("php/Models/fetch.php");

class PatientsController {

    function create() {

    }

    function patients() {
        $Fetch = new FetchModel();
        $Fetch->patients();
    }

    function patient() {
        $Fetch = new FetchModel();
        $Fetch->patient($_GET["id"]);
    }

    function update() {
        $Update = new UpdateModel();
        $Update->patient($_POST["id"]);
    }

    function delete() {
        $Delete = new DeleteModel();
        $Delete->patient($_POST["id"]);
    }

}