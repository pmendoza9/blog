<?php

$user = $_GET["user"];
$pass = $_GET["pass"];

$user1 = "peter";
$pass1 = "mendoza";

if($user == $user1 && $pass == $pass1){
    echo "Acess Granted. Hello $user1";
}

else if($user == "" || $pass == ""){
    echo "TRY AGAIN MOTHER FUCKER";
}

else {
    echo"access denied";
}

?>