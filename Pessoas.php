<?php
class Pessoa{
    public $nome;
    public function Pessoa($nome){
        $this->nome = $nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}
echo '<b>Contatos:</b><br>';
$x= new Pessoa ();
 $x->Pessoa();
 $x->setNome("Manuel - 963213567<br>");
 print $x->getNome();
$y= new Pessoa();
 $y->Pessoa();
 $y->setNome("Joaquim - 965745987<br>");
 print $y->getNome();
$r= new Pessoa();
 $r->Pessoa();
 $r->setNome("Braz - 96205305<br>");
 print $r->getNome();
 echo "<html>
 <head>
 <body background='tudo.jpeg' style='background-size:cover'>
 <a href='main.php'>home</a>
 </body>
 </head>
 </html>";
?>