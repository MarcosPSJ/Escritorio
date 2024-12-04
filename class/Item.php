<?php 

class Item

{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao) {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function setNome(string $nome): void{
        if(!empty($nome)){
            $this->nome = $nome;
        } else{
            $this->nome = "Nome invalido";
        }
    }

    public function getDescricao(): string{
        return $this->descricao;
    }
    public function setDescricao(string $descricao): void{
        if(!empty($descricao)){
            $this->descricao = $descricao;
        } else{
            $this->nome = "Descrição inválida";
        }
    }

    public function identificandoItem(){
        echo"<ul>";
        echo"<li> Nome: {$this->getNome()} </li>";
        echo"<li> Descrição: {$this->getDescricao()} </li>";
        echo"</ul>";
    }




}

?>