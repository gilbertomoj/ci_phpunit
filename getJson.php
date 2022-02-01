<?php 
    $json = file_get_contents("JSON/user.json");
    $data = json_decode($json);

    echo $data[1]->name;
?>