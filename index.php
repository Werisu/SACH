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
    </head>
    <body>
        <form method="post" action="index.php">
            
            Usuário: <input type="text" name="login"><br>
            Senha: <input type="password" name="senha"><br>
            <input type="submit" name="Entrar" value="Entrar">
            
        </form>
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
