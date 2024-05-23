<?php
    session_start();
    require_once("dbconfig.php");
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        header("location: ../index.php");
    }
    $costo = $_SESSION["Prezzo"];

    $controllo_soldi = "SELECT soldi FROM users WHERE username = '$username'";

    $ris = $conn->query("$controllo_soldi");
    
    foreach($ris as $row){
        $soldi = $row["soldi"];
    }
    if($soldi>=$costo){
        $soldirim = $soldi - $costo;
        $update_soldi = "UPDATE users SET soldi = '$soldirim' WHERE username = '$username'";
        $conn->query("$update_soldi") or die("esplode tutto");
        header("location: ../index.php");
    }
?>