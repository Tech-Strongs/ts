<?php
class ConexaoMySQL{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    public $banco = "tech_strong";
    public $conexao;

    public function conectar() {

        return $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $this->conexao->connect_error);
        }

     
    }

    public function desconectar() {
        if ($this->conexao) {
            $this->conexao->close();
        }
    }

    public function executarConsulta($sql) {
        $this->conectar();

        if(!$resultado = $this->conexao->query($sql)){
            echo $this->conexao->error;
        }
        $this->desconectar();
        return $resultado;
    }
}
?>