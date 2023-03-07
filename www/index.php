<h1>Lista de usuários</h1>
<?php
$pdo = new PDO("mysql:dbname=DB_NAME;host=db", "DB_USER", "DB_PASSWORD");

$sql = $pdo->query("SELECT * FROM usuarios");

if($sql->rowCount() > 0){
    $usuarios = $sql->fetchAll();

    echo "<ul>";

    foreach($usuarios as $u){
        echo "<li>".$u['nome']."</li>";
    }
    echo "</ul>";
} else{
    echo "Não há usuários cadastrados";
}
?>