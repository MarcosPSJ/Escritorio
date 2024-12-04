<?php 

require_once 'Item.php';

class Gaveta
{
    private array $itens = [];

    public function __construct(array $itens) {
        $this->setItens($itens);
    }

    public function getItens(): array{
        return $this->itens;
    }
    public function setItens(array $itens): void{
        $this->itens = $itens;
    }

    public function adicionarItem(Item $item){
        $this->itens[] = $item;
    }

    public function removerItem($nome){
        foreach ($this->itens as $index => $item) {
            if( $item->getNome() == $nome){
                unset($this->itens[$index]);
                break;
            }
        }
        
    }

    public function listarItens(){
        foreach($this->itens as $item){
            echo $item->identificandoItem();
        }
    }    
}
?>