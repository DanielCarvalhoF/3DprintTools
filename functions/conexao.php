<?php
	
	function conectarAoBancoDeDados() {
    $servidor = "localhost"; // substitua pelo nome do servidor do seu banco de dados
    $usuario = "root"; // substitua pelo nome de usuário do seu banco de dados
    $senha = "191215Ad."; // substitua pela senha do seu banco de dados
    $bancoDeDados = "3dprinttools"; // substitua pelo nome do banco de dados que deseja conectar

    // Criar uma conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

    // Verificar se a conexão foi estabelecida corretamente
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Configurar o charset da conexão para UTF-8
    $conexao->set_charset("utf8");

    return $conexao;
}



?>