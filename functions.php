<?php

function add_todo_to_list($result) {
    global $connection;
    if(!$result) {
        die("Query Failed" . mysqli_error($connection));
    }
}

?>