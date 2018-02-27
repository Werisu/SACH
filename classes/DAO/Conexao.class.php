<?php

/**
 * A classe Conexao vai ser a classe mais complicada de se implementar, não sei se conseguirei.
 *
 * @author Wellysson Rocha
 * @copyright (c) 2017, Wellysson Rocha
 * @version 1.0
 */
class Conexao {
    
    private $usuario = 'root';
    private $senha = '';
    private $caminho = 'localhost';
    private $banco = 'sach';
    private $con;
    
    public function __construct() {
     $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("Conexão com o banco de dados falho!" .mysqli_error($this->con));
     mysqli_select_db($this->con, $this->banco) or die("Conexão com o banco de dados falho!" . mysqli_error($this->con));
 }
 
 public function getCon() {
     return $this->con;
 }
    
}
