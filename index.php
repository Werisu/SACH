<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <!-- Bootstrap core CSS -->
        <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="style/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin"  method="post" action="index.php">
            <img class="mb-4" src="img/logoSach.fw.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Login</label>
            <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="Entrar">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
          </form>
        
<!--        <form method="post" action="index.php">
            
            Usuário: <input type="text" name="login"><br>
            Senha: <input type="password" name="senha"><br>
            <input type="submit" name="Entrar" value="Entrar">
            
        </form>-->
        <?php
        if($_POST){
            include './classes/DAO/Conexao.class.php';
            include './classes/DAO/UsuarioDAO.class.php';
            
            $usuarioDAO = new UsuarioDAO();
            
            $login = addslashes ($_POST['login']);
            $senha = addslashes ($_POST['senha']);
            
            $user = $usuarioDAO->login($senha, $login);
            
            if($user == true){
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                header("Location: admin.php");
            }else{
                header('Location: index.php?erro-senha');
exit;
            }
        }
        ?>
        
        <?php
        if ($_GET){
            if(isset($_GET['erro'])){
                echo 'Usuário ou senha inválidos!';
            }
        }
        ?>
        
    </body>
</html>
