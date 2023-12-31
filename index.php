<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="main_container">
        <form action="" method="post">
            <label for="">Email: </label>
            <input type="email" class="form-control" name="email" id="email">  
            <label for="">Senha: </label>
            <input type="password" class="form-control" name="senha" id="senha">
            <section class="action_buttons">
                <input type="submit" class="btn btn-success" name="submit" value="Login">
                <a href="./pages/cadastro.php" class="btn btn-secondary">Cadastre-se</a>                
            </section>
        </form>
    </main>
</body>
</html>
