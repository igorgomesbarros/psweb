<?php

// CONEXÃO AO BD
$username="root";
$password="";
try {
    $conn = new PDO('mysql:host=localhost;dbname=pswebdb', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

// VERIFICANDO LOGIN
function login($email, $senha) {
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM prestador WHERE email like :email AND senha = :senha');
    $stmt->execute(array('email' => $email, 'senha' => $senha));
    while($row = $stmt->fetch()) {
        return $row;
    }
    return false;
}

// CADASTRO DE PRESTADORES
function cadastrarPrestador($dados) {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO prestador (nome, email, celular, cpf, nome_empresa, email_empresa, telefone_comercial, cnpj, senha) 
                  VALUES (:nome, :email, :celular, :cpf, :nome_empresa, :email_empresa, :telefone_comercial,:cnpj, :senha)');
    $stmt->execute(array('nome' => $dados['nome'], 'email' => $dados['email'],'celular' => $dados['celular'], 'cpf' => $dados['cpf'],'nome_empresa' => $dados['nomeEmpresa'], 'telefone_comercial' => $dados['telefone'],'cnpj' => $dados['cnpj'], 'senha' => $dados['senha'],'email_empresa' => $dados['emailEmpresa']));
    $stmt->execute();
}

// CADASTRO DE SERVIÇOS
function cadastrarServico($dados) {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO servico (id_prestador, tipo, descricao, preco) 
                              VALUES (:id_prestador, :tipo, :descricao, :preco)');
    $stmt->execute(array('id_prestador' => $dados['id_prestador'], 'tipo' => $dados['tipo'],'descricao' => $dados['descricao'], 'preco' => $dados['preco']));
    $stmt->execute();
}

// LISTAGEM DE SERVIÇOS
function buscaServicos() {
    global $conn;
    $stmt = $conn->prepare('SELECT s.*, p.nome_empresa, p.email_empresa, p.telefone_comercial FROM servico s JOIN prestador p on s.id_prestador = p.id_prestador');

    $stmt->execute();
    return $stmt->fetchAll();
}
?>