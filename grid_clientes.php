<?php 
require_once("./functions/conexao.php");

$conn = conectarAoBancoDeDados();

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html>
<head>
    
<body>
      <table class="table">
        <tr scope="row">
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf_Cnpj</th>
            <th>RG_IE</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Pais</th>
            <th>Editar</th>
        </tr>

        <?php
        $sql = "SELECT * FROM clientes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idclient"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["cpf_cnpj"] . "</td>";
                echo "<td>" . $row["rg"] . "</td>";
                echo "<td>" . $row["telephone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["endereco"] . "</td>";
                echo "<td>" . $row["numero"] . "</td>";
                echo "<td>" . $row["complemento"] . "</td>";
                echo "<td>" . $row["bairro"] . "</td>";
                echo "<td>" . $row["cidade"] . "</td>";
                echo "<td>" . $row["estado"] . "</td>";
                echo "<td>" . $row["pais"] . "</td>";
                echo "<i class='fa-sharp fa-solid fa-pen-to-square' style='width:10px; height:10px; color:black;></i>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum resultado encontrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
