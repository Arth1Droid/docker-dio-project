<?php
ini_set("display_errors", 1);

$servername = "mysql";
$username = "root";
$password = "root";
$database = "supermercado";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$produtos = ["Arroz", "Feijão", "Macarrão", "Açúcar", "Café"];
$produto = $produtos[array_rand($produtos)];
$quantidade = rand(1, 5);
$valor = rand(5, 50);
$caixa = "Caixa-" . rand(1, 3);
$host = gethostname();

$sql = "INSERT INTO vendas (produto, quantidade, valor, caixa, host)
        VALUES ('$produto', $quantidade, $valor, '$caixa', '$host')";

$conn->query($sql);

echo "<h2>Venda registrada com sucesso</h2>";
echo "<p><strong>Produto:</strong> $produto</p>";
echo "<p><strong>Quantidade:</strong> $quantidade</p>";
echo "<p><strong>Valor:</strong> R$ $valor</p>";
echo "<p><strong>Caixa:</strong> $caixa</p>";
echo "<p><strong>Atendido pela instância:</strong> $host</p>";

$conn->close();
?>

