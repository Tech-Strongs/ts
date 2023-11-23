<?php
include("../connect.php");

class Login extends ConexaoMySQL
{ 
    protected $nome;
    protected $senha;

    public function logar()
    {
        if (isset($_POST['login']) && isset($_POST['senha'])) { 
            $this->nome = $_POST['login'];
            $this->senha = $_POST['senha'];

            // Conectar ao banco de dados
            $conexao = $this->conectar();

            // Verificar se a conexão foi estabelecida com sucesso
            if (!$conexao->connect_error) {
                // Preparar a declaração SQL usando prepared statements
                $sql = "SELECT * FROM funcionario WHERE login LIKE BINARY ? AND senha LIKE BINARY ?";
                $stmt = $conexao->prepare($sql);

                // Verificar se a preparação da declaração foi bem-sucedida
                if ($stmt) {
                    // Bind dos parâmetros
                    $stmt->bind_param("ss", $this->nome, $this->senha);

                    // Executar a consulta preparada
                    $stmt->execute();

                    // Obter os resultados
                    $result = $stmt->get_result();

                    // Verificar se há linhas retornadas
                    if ($result->num_rows > 0) {
                        // Usuário autenticado com sucesso
                        session_start();
                        $_SESSION["logado"] = true;
                        header('Location: ../view_veiculo.php');
                        exit(); // Importante sair após redirecionar
                    } else {
                        echo "Usuário ou senha inválidos.";
                    }

                    // Fechar a declaração preparada
                    $stmt->close();
                } else {
                    // Tratamento de erro na preparação da declaração
                    echo "Erro na preparação da declaração SQL.";
                }

                // Fechar a conexão com o banco de dados
                $conexao->close();
            } else {
                // Tratamento de erro na conexão com o banco de dados
                echo "Erro na conexão com o banco de dados: " . $conexao->connect_error;
            }
        } else {
            echo "Username and password are required.";
        }
    }
}

$objLogin = new Login();
$objLogin->logar();
?>
