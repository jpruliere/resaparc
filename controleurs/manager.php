<?php

class Manege {
  private $_id;
  private $_nom;
  private $_nbPlaces;
  private $_duree;
  private $_horaireOuverture;
  private $_horaireFermeture;
  private $_numPlan;
  private $_consignes;

  public function __construct(array $donnees){
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  // Liste des getters
  public function id(){ return $this->_id; }
  public function nom(){ return $this->_nom; }
  public function nbPlaces() { return $this->_nbPlaces; }
  public function duree() { return $this->_duree; }
  public function horaireOuverture(){ return $this->_horaireOuverture; }
  public function horaireFermeture(){ return $this->_horaireFermeture; }
  public function numPlan(){ return $this->_numPlan; }
  public function consignes(){ return $this->_consignes; }

  // Liste des setters
  public function setId($id){
    if(is_int($id)){
      $this->_id = $id;
    }
  }

  public function setNom($nom){
    if(is_string($nom)){
      $this->_nom = $nom;
    }
  }

  public function setNbPlaces($nbPlaces){
    if(is_int($nbPlaces) && $nbPlaces >= 1){
      $this->_nbPlaces = $nbPlaces;
    }
  }

  public function setDuree($duree){
    if(is_int($duree) && $duree > 0){
      $this->_duree = $duree;
    }
  }

  public function setHoraireOuverture($horaireOuverture){
    if(is_int($horaireOuverture){
      $this->_horaireOuverture = ^$horaireOuverture;
    }
  }

  public function setHoraireFermeture($horaireFermeture){
    if(is_int($horaireFermeture)){
      $this->_horaireFermeture = $horaireFermeture;
    }
  }

  public function setnumPlan($numPlan){
    if(is_int($numPlan)){
      $this->_numPlan = $numPlan;
    }

    public function setConsignes($consignes){
      if(is_string($consignes)){
        $this->_consignes = $consignes;
      }
    }
  }
}
