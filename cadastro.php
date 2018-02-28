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
        <link href="style/cadastro.css" rel="stylesheet">
    </head>
    <body>
        <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome</label>
          <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
          <label for="exampleFormControlInput1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          <label for="exampleFormControlInput1">Senha</label>
          <input type="password" name="senha" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          <label for="exampleFormControlInput1">Confirmar Senha</label>
          <input type="password" name="cSenha" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Sexo</label>
          <select class="form-control" name="sexo" id="exampleFormControlSelect1">
              <option value="m" >Masculino</option>
              <option value="f" >Feminino</option>
          </select>
        </div>
      </form>
    </body>
</html>