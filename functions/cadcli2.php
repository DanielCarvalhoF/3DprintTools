<?php
require_once("conexao.php");

// Verifica se todos os campos do formulário foram preenchidos antes de prosseguir
if (isset($_POST['nome_cliente'], $_POST['cpf_cliente'], $_POST['rg_cliente'], $_POST['tel_cliente'], $_POST['email_cliente'], $_POST['end_cliente'], $_POST['num_cliente'], $_POST['comple_cliente'], $_POST['bairro_cliente'], $_POST['cidade_cliente'], $_POST['uf_cliente'], $_POST['pais_cliente'])) {

    // Atribui os valores do formulário a variáveis
    $nome = $_POST['nome_cliente'];
    $cpfCnpj = $_POST['cpf_cliente'];
    $rg = $_POST['rg_cliente'];
    $telefone = $_POST['tel_cliente'];
    $email = $_POST['email_cliente'];
    $endereco = $_POST['end_cliente'];
    $numero = $_POST['num_cliente'];
    $complemento = $_POST['comple_cliente'];
    $bairro = $_POST['bairro_cliente'];
    $cidade = $_POST['cidade_cliente'];
    $estado = $_POST['uf_cliente'];
    $pais = $_POST['pais_cliente'];

    // Obtém a conexão com o banco de dados
    $conn = conectarAoBancoDeDados();

    // Verifica se a conexão foi bem-sucedida
    if (!$conn) {
        die("<script>alert('Erro ao conectar ao banco de dados')</script>");
    }

    // Define a string SQL com parâmetros (?)
    $sql = "INSERT INTO clientes (name, cpf_cnpj, rg, telephone, email, endereco, numero, complemento, bairro, cidade, estado, pais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara a declaração SQL
    $stmt = mysqli_prepare($conn, $sql);

    // Verifica se a preparação da declaração foi bem-sucedida
    if ($stmt === false) {
        die("<script>alert('Erro ao preparar a query')</script>" . mysqli_error($conn));
    }

    // Liga os parâmetros à declaração SQL
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $nome, $cpfCnpj, $rg, $telefone, $email, $endereco, $numero, $complemento, $bairro, $cidade, $estado, $pais);

    // Executa a gravação dos dados
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        // Fecha a declaração e a conexão
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        // Redireciona para a página "index.php"
        header("location: /3DTools/cadastrarcliente.php");
        exit; // Certifica-se de que não haja mais saída após o redirecionamento
    } else {
        echo "<script>alert('Erro ao cadastrar')</script>" . mysqli_stmt_error($stmt);
    }

    // Fecha a declaração e a conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Caso algum campo não tenha sido preenchido, redireciona para teste.php
    header("location: /3DTools/cadastrarcliente.php");
    exit; // Certifica-se de que não haja mais saída após o redirecionamento
}
   
?>
