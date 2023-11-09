<?php
include('../database/conexao.php');

$db = new Conexao();

class Contas{
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function cadastrar($nomeUsuario, $email, $senha, $confSenha){
        if($senha === $confSenha){

            $nomeUsuarioExistente = $this->verificarNomeUsuarioExistente($nomeUsuario);
            if($nomeUsuarioExistente){
                print "<script> alert('Nome de usuário já cadastrado!')</script>";
                return false;
            }

            $emailExistente = $this->verificarEmailExistente($email);
            if($emailExistente){
                print "<script> alert('Email já cadastrado!')</script>";
                return false;
            }

            $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

            $sql= "INSERT INTO usuarios (nomeUsuario, email, senha) VALUES( ?, ?, ?)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1,$nomeUsuario);
            $stmt->bindValue(2,$email);
            $stmt->bindValue(3,$senhaCriptografada);
            $result = $stmt->execute();

            return $result;

        }else{
            print "<script> alert('Senhas não conferem!')</script>";
            return false;
        }
    }

    private function verificarNomeUsuarioExistente($nomeUsuario){
        $sql = "SELECT COUNT(*) FROM usuarios WHERE nomeUsuario = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1,$nomeUsuario);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

    private function verificarEmailExistente($email){
        $sql = "SELECT COUNT(*) FROM usuarios WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1,$email);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

    public function logar($nomeUsuario, $senha){
        $sql = "SELECT * FROM usuarios WHERE nomeUsuario = :nomeUsuario";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nomeUsuario',$nomeUsuario);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            $nomeUsuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($senha, $nomeUsuario['senha'])){
                return true;
            }
        }
        return false;
    }
}
?>