<?php 

require_once 'class/Armario.php';
require_once 'class/Documento.php';
require_once 'class/Escritorio.php';
require_once 'class/Gaveta.php';
require_once 'class/Item.php';
require_once 'class/Objeto.php';
require_once 'class/Pasta.php';


// criando itens

$objeto1 = new Objeto("Carteira.", "Para guarda documentos e dinheiro.", 0.1);
$objeto2 = new Objeto("Trena.", "Uma régua flexivel usada para medir a distância.", 0.6);
$objeto3 = new Objeto("Gavião de gesso.", "Objeto usado para decorações de casa.", 2.5);

$pasta1 = new Pasta("Pasta com elástico azul.", "Pasta com elásticos  nos cantos que mantém os papéis bem protegidos, evitando que caiam ou amassem.", "Pasta com elástico.");
$pasta2 = new Pasta("Pasta Sanfonada c/12 divisórias.", "Pasta com 12 divisões indicado para uso no trabalho ou em casa.", "Pasta Sanfonada.");
$pasta3 = new Pasta("Pasta em L transparente.", "Modelo de pasta simples e flexível, em formato de L.", "Pasta L.");

$documento1 = new Documento("Termo de Compromisso.", "Documento que cita todos os termos de compromisso para fazer login no Facebook.", "02/09/2023");
$documento2 = new Documento("Declaração de Renda.", "Documento que declara toda a renda da Unimar.", "02/12/2024");
$documento3 = new Documento("Top 5 carros do Seculo XI.", "Documento que apresenta os melhores veiculos do seculo XI.", "08/01/2022");

//Criando gavetas e adiconando

$gaveta1 = new Gaveta([$objeto1, $objeto2]);
$gaveta2 = new Gaveta([$pasta1, $pasta2]);
$gaveta3 = new Gaveta([$documento1, $documento2]);


$gaveta1->adicionarItem($objeto3);
$gaveta2->adicionarItem($pasta3);
$gaveta3->adicionarItem($documento3);

//Criando armarios e adiconando

$armario1 = new Armario([$gaveta1]);
$armario2 = new Armario([$gaveta2]);

$armario1->adicionarGaveta($gaveta3);

// Criando escritorio e testando

$escritorio1 = new Escritorio;
$escritorio1->adicionarArmario($armario1);
$escritorio1->adicionarArmario($armario2);

echo"<hr>Escritório 0:";
$escritorio1->auditoria();

// removendo armario

echo"<hr>Escritório 0:";
$escritorio1->removerArmario(1);
$escritorio1->auditoria();

// removendo gaveta

echo"<hr>Escritório 0:";
$armario1->removerGaveta(1);
$escritorio1->auditoria();

// removendo item

echo"<hr>Escritório 0:";
$gaveta1->removerItem("Trena.");
$escritorio1->auditoria();
?>