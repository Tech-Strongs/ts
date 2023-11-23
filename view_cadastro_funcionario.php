<!DOCTYPE html>

<html lang="pt-br">
   <head>
      <title>Cadastro do funcionário</title>
      <link rel="stylesheet" href="style.css">
      <style>
    body {
      background-image: url("security.png");
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
   </head>
   <body>
      <center>
      <img src="logoSF.png" alt="Imagem Reduzida"/>
         <h1>Cadastro</h1>
         <form action="./controller/cadastroFuncionarioController.php" method="post">
            <p>
               <label for="Name">Nome:</label>
               <input type="text" name="nome_funcionario" id="nome">
            </p>
            <p>
               <label for="login">Login:</label>
               <input type="text" name="login_funcionario" id="login">
            </p>
            <p>
               <label for="password">Senha:</label>
               <input type="text" name="senha_funcionario" id="senha">
            </p>
            <input type="submit" value="Salvar">

         </form>
         <a href='./login.php'></a>

      </center>
   </body>
</html>