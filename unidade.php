<?php
include("connect.php");

class Unidade extends ConexaoMySQL {

   
    private $bloco;
    private $apartamento;
    private $responsavel;
    private $veiculo_id_placas;
    public function __construct($arDados){
        
      if(!empty($arDados)){
        $this->bloco = $_POST['bloco'];
        $this->apartamento = $_POST['apartamento'];
        $this->responsavel = $_POST['responsavel'];
        $this->veiculo_id_placas = $_POST['veiculo_id_placas'];
      }
    }

        public function salvarunidade(){
            $conexao = new ConexaoMySQL();
            $conexao->conectar();
            
            $sql = "INSERT INTO unidade ( bloco, apto, responsavel, veiculo_id_placas)
            VALUES (' $this->bloco', ' $this->apartamento', ' $this->responsavel', ' $this->veiculo_id_placas')";

          if($this->executarConsulta ($sql)){
            echo "unidade salva";
          }else{
            echo "erro ao salvar a unidade";
          } 

     


}

}





