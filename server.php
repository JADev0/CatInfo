<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatInfo - Dados cadastrados</title>
    <link rel="stylesheet" href="server.css">
</head>
<body>
   <header class= "cabecalho">
    <h1>CatInfo</h1>
<h2>Dados cadastrados</h2>
<nav>
            <a href="index.html">Formulário</a>
            <a href="server.php">Dados Cadastrados</a>
            <a href="paginaDev.html">Desenvolvedores</a>
           
        </nav>
</header>
<main>
    <?php 
    print_r($_POST);
    ?>
</main>
<footer>
    <span>IFRN Campus Santa Cruz</span>
    <span>Trabalho de Autoria Web</span>
    <span>Prof. Marcelo Figueiredo Barbosa Júnior</span>
    <span>Alunos:</span>
    <span>Isabelle Letícia da Silva Matias</span>
    <span>João Victor da Silva Alves</span>
    <span>Maria Tamires de Pontes Onofre</span>

</footer>
</body>
</html>


