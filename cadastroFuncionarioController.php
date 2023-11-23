<?php
include("../connect.php");
class FuncionarioController extends ConexaoMySQL{
    private $nome_funcionario;
    private $login_funcionario;
    private $senha_funcionario;

    public function registroFuncionario(){
        $this->nome_funcionario = $_POST['nome_funcionario'];
        $this->login_funcionario = $_POST['login_funcionario'];
        $this->senha_funcionario = $_POST['senha_funcionario'];

        $sql = "INSERT INTO funcionario ( nome, login, senha)
        VALUES ('$this->nome_funcionario', '$this->login_funcionario', '$this->senha_funcionario')";

      if($this->executarConsulta ($sql)){
        echo "funcionario cadastrado com sucesso;
        <script> window.location.href = '../login.php';</script>";
      }else{
        echo "erro ao salvar funcionario";
      } 
    }
}
$objControlador = new FuncionarioController();
$objControlador ->registroFuncionario();