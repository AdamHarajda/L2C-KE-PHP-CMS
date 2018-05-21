<?php
require_once dirname(__FILE__)."/../framework/helpers.php";

if (isset($_POST)) {
 

    if ( isset($_POST["email"]) && isset($_POST["password"]) ) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        //$user = db_single("SELECT * FROM Users WHERE email = '{$email}'");
        $user = db_single("SELECT * FROM Users WHERE email = '".$email."'");

        if( !empty($user->email) && $user->email === $email){

            if($user->password === $password)
            {
                echo $email." ".$password;
            }
            else{
                echo "Zle heslo!";
            }

        }
        else{
                echo "Neplatný email!";
        }


    }   

}

?>