<?php 

require_once 'Gaveta.php';

class Armario
{
    private array $gaveta = [];

    public function __construct(array $gaveta) {
        $this->setGaveta($gaveta);
    }

    public function getGaveta(): array{
        return $this->gaveta;
    }
    public function setGaveta(array $gaveta){
        $this->gaveta = $gaveta;
    }

    public function adicionarGaveta(Gaveta $gaveta){
        $this->gaveta[] = $gaveta; 
    }

    public function removerGaveta($indice){
        unset($this->gaveta[$indice]);
    }

    public function listarGaveta(){
        foreach($this->gaveta as $index => $gaveta){
            echo $index;
            foreach($gaveta->getItens() as $item){
                $item->identificandoItem();
            } 
            
        }
    }

}

?>