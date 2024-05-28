<?php
session_start();

if(isset($_POST['cadastrar'])){
    if(isset($_POST['nome']) && isset($_POST['credencial']) && isset($_POST['senha']) && isset($_POST['CPF']) && isset($_POST['celular']) && 
    !empty($_POST['nome']) && !empty($_POST['credencial']) && !empty($_POST['senha']) && !empty($_POST['CPF']) && !empty($_POST['celular'])){
        require'../Database/conexao.php' ; 
        $nome = $_POST['nome'];
        $credencial = $_POST['credencial'];
        $senha = $_POST['senha'];
        $CPF = $_POST['CPF'];
        $celular = $_POST['celular'];
        
        $sql = "INSERT INTO funcionarios(nome,credencial,senha,CPF,celular) VALUES (:nome,:credencial,:senha,:CPF,:celular)";
        $resultado = $conn -> prepare($sql);
        $resultado -> bindValue("nome",$nome);
        $resultado -> bindValue("credencial",$credencial);
        $resultado -> bindValue("senha",$senha);
        $resultado -> bindValue("CPF",$CPF);
        $resultado -> bindValue("celular",$celular);
        
        
        $resultado -> execute();

        $_SESSION['cadastro_sucesso'] = true;

        header('Location: ../Form/login/formLogin.php');
        exit(); 
    }
}
