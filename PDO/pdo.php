<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=bdPHP7','root', 'root');
$stmt = $conn->prepare("SELECT*FROM tb_usuarios");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);

foreach ($results as $row) {
    foreach($row as $key => $value) {
        echo "<strong>" .$key.":</strong>" .$value."<br/>";
    }
}
echo "==========================================================";


?>
