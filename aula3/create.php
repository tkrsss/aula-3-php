<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (name, email) VALUE('$name', '$email')";

    if ($conn -> query($sql) === true){
        echo "Novo registro adicionado com sucesso!";
    }else{
        echo "Erro $sql <br>" . $conn -> error;
    }
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="post" action="create.php">
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>