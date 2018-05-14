<?php
    require_once dirname(__FILE__)."/../framework/helpers.php";
    
    echo '<hr>';

    $result = db_get("SELECT * FROM pages");

    foreach ($result as $page){
        echo $page->title;
    }

    echo '<hr>';
?>