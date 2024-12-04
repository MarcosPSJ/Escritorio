<?php 

require_once 'Item.php';

class Pasta extends Item
{
    private string $categoria;

    public function __construct(string $nome, string $descricao, string $categoria) {
        parent::__construct($nome, $descricao);
        $this->setCategoria($categoria);
    }


    public function getCategoria(): string{
        return $this->categoria;
    }
    public function setCategoria(string $categoria): void{
        if(!empty($categoria)){
            $this->categoria = $categoria;
        } else{
            $this->categoria = "Categoria inválida";
        }
    }

    public function identificandoItem(){
        echo"<ul>";
        echo"<li> Nome: {$this->getNome()} </li>";
        echo"<li> Descrição: {$this->getDescricao()} </li>";
        echo"<li> Categoria: {$this->getCategoria()} </li><br>";
        echo"</ul>";
    }
}



?>