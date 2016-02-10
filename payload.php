<?php
    include_once 'dbinfo.php';
    $body = file_get_contents('php://input');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $payload = $body;

        $sql_query = "INSERT INTO events(payload) VALUES('$payload')";
        mysql_query($sql_query);
        echo $payload;
        // sql query for inserting data into database
    }else{
      echo "Didn't recognized the post";
    }
?>
