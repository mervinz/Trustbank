<?php
    include_once('constants.php');
    function getConnection()
    {
        $con = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if($con->connect_error)
            throw new Exception("Error connecting to the database. ".$con->connect_error, 1);
        return $con;
    }
?> 