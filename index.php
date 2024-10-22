<?php
//estrutura de uma classe:
class Pessoa {
    //Pessoa (que é a classe) possui características. Estas caracteristicas são os atributos
    public $nome;
    public $idade;
    public $cpf;
    public $apelido;
    public $numeroIrmaos;
    public $curso;

    //Pessoa (que é a classe) realiza ações. Estas ações são os métodos/funções

    //para usar os atributos ou métodos dentro do escopo da classe, precisa usar a palavra this
    public function Falar() {
        echo $this->nome." de ".$this->idade." anos, também conhecida como ".$this->apelido.", acabou de falar ";
    }
    public function comer() {
        echo "comeu";
    }
}

//para instancianr (instanciar é criar um objeto a partir de uma classe):

$bianca = new Pessoa();
$bianca->nome = "Bianca Barros"; //quando acessa o atributo, não precisa colocar o cifrão
$bianca->idade = 20;
$bianca->cpf = "000.000.000-21";
$bianca->apelido = "Bia";
$bianca->numeroIrmaos = 2;
$bianca->curso = "ADS";
$bianca->Falar();

echo "<hr>";

Class Perfume{
    public $nome;
    public $notasOlfativas;
    public $marca;
    public $quantidade;
    public $cheiro;

    public function Fixar (){
        echo "O perfume ".$this->nome.", da marca ".$this->marca.", tem cheiro de ".$this->cheiro." e vem ".$this->quantidade;
    }
}

$perfume = new Perfume();
    $perfume->nome = "ília Secreto";
    $perfume->notasOlfativas = "Quentes";
    $perfume->marca = "Natura";
    $perfume->quantidade = "50 ml";
    $perfume->cheiro = "uva";
    $perfume-> Fixar();

    echo "<hr>";

//Getters e Setters = ações relacionadas a acessar e modificar ATRIBUTOS de um objeto

class Login {
    private $email;
    private $senha;

    public function getEmail(){
        //o get pega esse valor
        return $this->email;
    }

    PUBLIC FUNCTION setEmail($e) {
        $this->email = $e;
    }
    public function getSenha(){
        //o get pega esse valor
        return $this->senha;
    }

    PUBLIC FUNCTION setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "logado com sucesso";
        else:
            echo "Login ou senha inválido";

        endif;
    }
}

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar-> Logar();
echo "<br>";
echo $logar->getEmail();
echo $logar->getSenha();

echo"<hr>";

Class Caneta {
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    public function __construct() {
        $this->cor = "azul";
        $this->tampada();
    }

    public function tampar() {
        $this->tampada = true;
    }

    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;

    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}

$c1 = new Caneta();
print_r($c1);

echo "<hr>";

Class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function AbrirConta(){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        }
        elseif ($t == "CP"){
            $this->setSaldo(150);
        }
        else {
            echo "tipo não encontrado";
        }
    }
    public function FecharConta(){
        if ($this->getSaldo() > 0){
            echo "Conta com dinheiro";
        } elseif ($this->getSaldo() < 0){
            echo "Conta em débito";
        } else{
            $this->setStatus(false);
        }
    }
    public function Depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "conta fechada";
        }
    }
    public function Sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo > $v) {
                $this->saldo = $this->saldo - $v;
            }
        }
    }
    public function pagarMensal(){

    }
    //metodos especiais
    public function __construct(){
        $this->saldo = 0;
        $this->status = falso;
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($numConta){
        $this->$numConta;
    }
    public function gettipo(){
        return $this->tipo;
    }
    public function settipo($tipo){
        $this->$tipo;
    }
    public function getdono(){
        return $this->dono;
    }
    public function setdono($dono){
        $this->$dono;
    }
    public function getsaldo(){
        return $this->saldo;
    }
    public function setsaldo($saldo){
        $this->$saldo;
    }
    public function getstatus(){
        return $this->status;
    }
    public function setstatus($status){
        $this->$status;
    }

}



