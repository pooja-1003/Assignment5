<?php

$conn = null;

try {
    $conn = new PDO("mysql:host=localhost;dbname=id14797759_testdb", "id14797759__pooja_1003_", "Pkaulge@1003");
} catch(PDOException $e) {
    echo "Connection to data failed: " . $e->getMessage();
}

?>