<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title><em>Login do Funcionário<em></title>

      <link href="login.css" rel="stylesheet">
      <style>
    body {
      background-image: url("./condon.png");
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
   </head>
   <body>
      <center>
         <br>
      <img src="logoSF.png" alt="Imagem Reduzida"/>
         <h1>Login</h1>
         <h4> Insira os dados do funcionário!<h4>
         <form action="./controller/loginController.php" method="post">
            <p>
               <label for="login">Usuário:</label>
               <input type="text" name="login" id="login">
            </p>
            <p>
               <label for="password">Senha:</label>
               <input type="text" name="senha" id="senha">
            </p>
            <input type="submit" value="Entrar">

         </form>
         <br>
        <a href='./view_cadastro_funcionario.php'>
        <button>
        Cadastrar novo funcionário
        </button>
        </a>
      </center>
   </body>
</html>