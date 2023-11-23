<?php 

include("connect.php");

$objeto = new veiculo($_REQUEST);
$objeto->salvarveiculo();

class veiculo{
    public $id_placas;
    public $tipo;
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
    public function __construct($arDados){
        
        if(!empty($arDados)){

            $this->tipo = $arDados["tipo"];
            $this->modelo = $arDados["modelo"]; 
            $this->marca = $arDados["marca"]; 
            $this->ano = $arDados["ano"]; 
            $this->cor = $arDados["cor"]; 
        }
      
    }
    
        public function salvarveiculo(){
          
            $conexao = new ConexaoMySQL();
            $conexao->conectar();
            $sql = "INSERT INTO veiculo (id_placas, tipo, modelo, marca, ano, cor)
             VALUES (null ,'$this->tipo', '$this->modelo', '$this->marca', '$this->ano', '$this->cor')";

        
            $conexao->executarConsulta($sql);
            

            $stmt = $conexao->executarConsulta($sql);

            // Verificar se a preparação da declaração foi bem-sucedida
            if ($stmt) {
                // Bind dos parâmetros
        


           
                // Usuário autenticado com sucesso
                session_start();
                $_SESSION["logado"] = true;
                header('Location: ./view_unidade.php');
                exit();

            }
            }    
}

?>



