<?php

class Player{
  protected $hand; //sert à stocker les cartes ue le joueur possède
  protected $pseudo;
  public function __construct($toto){
      $this->hand = [];
      $this->pseudo = $toto;
  }
  public function take($cards){
    array_push($this->hand, $cards);
  }
  public function getHandValue(){
    $taille = 0;
    foreach ($this->hand as $card){
    	$taille = $this->card->getValue();
    }
    return $taille;
  }
}
