<?php


function db_connect(){

    require_once dirname(__FILE__)."/../config/database.php";
    return mysqli_connect( $database["host"], $database["user"], $database["pass"], $database["name"], $database["port"]);

}

function db_query($sql_string){

    return mysqli_query( db_connect(), $sql_string );
    
}

function db_get($sql_string){

    $result = db_query($sql_string);

    $data = [];

    while ($object = mysqli_fetch_object($result)) {
        $data[] = $object;
        //array_push($data, $object);
    }

    return $data;
}
?>