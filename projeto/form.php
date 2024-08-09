<?php
session_start();
if(isset($_POST['bt_enviar'] )){
    $nome = $_POST['name'];
    $telefone =$_POST['telefone'];
    $endereco = $_POST['endereco'];
    $sabor = $_POST['sabores'];
        //Sanitizar
    $nome = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST,'telefone',FILTER_VALIDATE_INT);
    $endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_SPECIAL_CHARS);
    $sabor = filter_input(INPUT_POST,'sabores',FILTER_SANITIZE_SPECIAL_CHARS);
    

//teste de classe
}  

class Filas {
    public $nome;
    public $telefone;
    public $endereco;
    public $sabor;
    public function __construct($nome,$telefone,$endereco,$sabor){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->sabor = $sabor;

        echo "<div id='objeto' class='bg-gradient fs-6'> \n Cliente: {$this->nome} \n Do Telefone: {$this->telefone} \n Do Endereço: {$this->endereco}  \n Pediu uma Pizza de:  {$this->sabor}
        </div> ";
        
}


public function GetNome(){
    return $this->nome;
}

public function Gettelefone(){
    return $this->telefone;
}
public function Getendereco(){
    return $this->endereco;
}
public function Getsabor(){
    return $this->sabor;
}


}


$cliente = new Filas("Janiio","40028922","rua dos bobos","FrangoCtpy");
$cliente2  = new Filas("Geremilson","9909090","Alió olivardo","Pepperoni");
$cliente3 = new Filas('Gertrudes','4688456465','Casa da mãe joana',"Bróculis com bacon");
$cliente4 = new Filas("Ryuko Matoi","201535112","Honnoji Academy","Pepperoni");
$cliente5 =  new Filas($nome,$telefone,$endereco,$sabor);


