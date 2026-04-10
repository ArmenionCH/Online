<?php

    require "../db.php";
    
    $usern = $_POST["usern"];
    $passw = $_POST["passw"];
    
    $stmt = $db->prepare("
        
        INSERT INTO users(username, password)
        VALUES (?, ?)
    ");
    
    $stmt->bind_param("ss", $usern, $passw);
    
    $stmt->execute();
    $stmt->close();
?>