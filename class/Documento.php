<?php 

require_once 'Item.php';

class Documento extends Item
{
    private string $dataCriacao;

    public function __construct(string $nome, string $descricao, string $dataCriacao) {
        parent::__construct($nome, $descricao);
        $this->setDataCriacao($dataCriacao);
    }

    public function getDataCriacao(): string{
        return $this->dataCriacao;
    }
    public function setDataCriacao(string $dataCriacao): void{
        if(!empty($dataCriacao)){
            $this->dataCriacao = $dataCriacao;
        } else{
            $this->dataCriacao = "Data de criação inválida!";
        }
        
    }   
    
    public function identificandoItem(){
        echo"<ul>";
        echo"<li> Nome: {$this->getNome()} </li>";
        echo"<li> Descrição: {$this->getDescricao()} </li>";
        echo"<li> Data de Criação: {$this->getDataCriacao()} </li><br>";
        echo"</ul>";
    }

}


?>