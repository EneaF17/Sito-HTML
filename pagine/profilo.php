<?php
    session_start();
    if (isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        header("location: ../index.php");
    }
    require_once("../backend/dbconfig.php");
    $data = "SELECT username, password, nome, cognome, soldi FROM users WHERE username = '$username'";

    $ris = $conn->query($data);
    
    foreach ($ris as $row){
        $username = $row["username"];
        $nome = $row["nome"];
        $cognome = $row["cognome"];
        $soldi = $row["soldi"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
        <?php
            require("../backend/header.php");
        ?>

    <form action="">
        Username: <input type="text" name="username" id="username" <?php echo "value='$username'"?>></p>
        Nome: <input type="text" name="nome" id="nome" <?php echo "value='$nome'"?>></p>
        Cognome: <input type="text" name="cognome" id="cognome" <?php echo "value='$cognome'"?>></p>
        Soldi:<input type="text" name="soldi" id="soldi" <?php echo "value='$soldi'"?>>
    </form>


</body>
</html>