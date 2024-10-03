<?php
include "conexao.php";

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $textarea = $_POST["textarea"];
    $mysqlierrno = "falha";
    
    $mysqli->query("INSERT INTO feedback (email, textarea) values('$email', '$textarea')") or
        die($mysqlierrno);
} else {
    echo "algo deu errado";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar bg-dark fixed-top justify-content-center">
        <ul class="nav justify-content-center">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Assuntos
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="conteudo.html">Conteúdo</a></li>
                    <li><a class="dropdown-item" href="casas.html">Casas Inteligentes</a></li>
                    <li><a class="dropdown-item" href="fazer.html">Como é feita a automação</a></li>
                    <li><a class="dropdown-item" href="beneficios.html">Benefícios</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <br>
    <h1 class="titulo mt-5 text-center">FEEDBACK</h1>

    <div class="container d-flex justify-content-center mt-5">
        <div class="form-container ">
            <form method="post" class="form">
                <h3 class="">Envie um feedback para podermos melhorar sua expericia.</h3>
                <div class="form-group">
                    <label for="email">Seu email:</label>
                    <input required="" name="email" id="email" type="text">
                </div>
                <div class="form-group">
                    <label for="textarea">Escreva sua mensagem aqui:</label>
                    <textarea required="" cols="50" rows="10" id="textarea" name="textarea">          </textarea>
                </div>
                <button type="submit" class="form-submit-btn">Enviar</button>
            </form>
        </div>
    </div>
    <br><br>

    <footer class="footer">
        <p>&copy; 2024 Feito por Arthur Schimanski Vieira. Todos os direitos reservados.</p>
        <p>
            <a href="sobre.html">Sobre</a>
            <a href="Contatos.php">Contato</a>
        </p>
    </footer>
</body>

</html>