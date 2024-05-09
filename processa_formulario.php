<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $genero = $_POST["genero"];
    $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : array();
    $opcao = $_POST["opcao"];

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Senha: " . $senha . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Endereço: " . $endereco . "<br>";
    echo "Gênero: " . $genero . "<br>";
    echo "Interesses: " . implode(", ", $interesses) . "<br>";
    echo "Opção escolhida: " . $opcao . "<br>";
}
?>
