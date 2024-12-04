<?php 

require_once 'Item.php';

class Objeto extends Item
{
    private float $peso;

    public function __construct(string $nome, string $descricao, float $peso) {
        parent::__construct($nome, $descricao);
        $this->setPeso($peso);
    }

    public function getPeso(): float{
        return $this->peso;
    }
    public function setPeso(float $peso): void{
        if(!empty($peso) || $peso >= 0){
            $this->peso = $peso;
        } else{
            $this->peso = 0;
        }
    }

    public function identificandoItem(){
        echo"<ul>";
        echo"<li> Nome: {$this->getNome()} </li>";
        echo"<li> Descrição: {$this->getDescricao()} </li>";
        echo"<li> Peso: {$this->getPeso()} kg </li><br>";
        echo"</ul>";
    }

}

?>