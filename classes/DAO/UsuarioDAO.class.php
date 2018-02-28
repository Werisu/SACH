<?php

/**
 * A classe UsuarioDAO vai ser a classe mais complicada de se implementar, não sei se conseguirei.
 *
 * @author Wellysson Rocha
 * @copyright (c) 2017, Wellysson Rocha
 * @version 1.0
 */
class UsuarioDAO {
    private $conexao;
    
    public function __construct() {
        $this->conexao = new Conexao();
    }
    
    public function login($senha, $login) {
        
        $sql = "SELECT * FROM `usuario`, `senha` WHERE usuario.us_nome = '$login' AND senha.us_senha = '$senha'";
        
        $executa = mysqli_query($this->conexao->getCon(), $sql);
        
        if(mysqli_num_rows($executa) > 0):
            return true;
        else:
            return false;
        endif;
        
    }
    
}
