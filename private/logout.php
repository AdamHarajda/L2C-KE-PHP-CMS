<?php
if (isset($_POST)){
    if ( isset($_POST["id"]) ) session_start();
    if($_POST["id"] == $_SESSION["id"]){
        session_destroy();
        header("Location: index.php");
    }
}
?>