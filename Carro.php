<?php
class Carro extends Veiculo{

 public function acelerar(){

 }
 public function trocarMarcha(){
 }
 protected $atualizarVelocidade;

 public function atualizaVelocidade($velocidade){
 $this -> atualizarVelocidade = $velocidade;
 }
}
