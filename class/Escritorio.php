z1  <?php 

require_once 'Armario.php';



class Escritorio
{
    private array $armarios = [];

    public function getArmario(): array{
        return $this->armarios;
    }
    public function setArmario(array $armarios){
        $this->armarios = $armarios;
    }

    public function adicionarArmario(Armario $armario){
        $this->armarios[] = $armario;
    }

    public function removerArmario($indice){
        unset($this->armarios[$indice]);
    }

    public function listarArmarios(){
        return $this->armarios;
    }

    public function auditoria(){
        echo"<hr>";
        foreach ($this->armarios as $indexArmario => $armario) {
            echo"<h4>Armario {$indexArmario}:</h4>";
            echo"<ul>";
            foreach ($armario->getGaveta() as $indexGavetas => $gaveta) {
                echo"<br><li>{$indexGavetas}</li>";

                foreach ($gaveta->getItens() as $item) {
                    $item->identificandoItem();
                }
            }
            echo"</ul>";
        }
    }

}

?>