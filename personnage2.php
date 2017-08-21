<?php
class personnage
{ 
  private $_id;
  private $_nom;
  private $_forcePerso;
  private $_degats;
  private $_niveau;
  private $_experience;
  private $_note;
  
  public function getId()
  {
    return $this -> _id;
  }
  
  public function setId($id)
  {
    if(!is_int($id))
    {
      trigger_error('L\'identifiant doit être un nombre entier', E_USER_WARNING);
    }
    
    if($id <= 0)
    {
      trigger_error('L\'identifiant doit être un nombre entier strictement positif', E_USER_WARNING);
    }
    
    $this -> _id = $id;
    
    
  }
  
  public function getNom()
  {
    return $this -> _nom;
  }
  
  public function setNom($nom)
  {
    $this -> _nom = $nom;
  }
  
  public function getForcePerso()
  {
    return $this -> _forcePerso;
  }
  
  public function setForcePerso($forcePerso)
  {
    if(!is_int($forcePerso))
    {
      trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
    }
    
    if($forcePerso < 1 && $forcePerso > 100)
    {
      trigger_error('La force d\'un personnage doit être comprise entre 1 et 100', E_USER_WARNING);
    }
    
    $this -> _forcePerso = $forcePerso;
  }
  
  public function getDegats()
  {
    return $this -> _degats;
  }
  
  public function getNiveau()
  {
    return $this -> _niveau;
  }
  
  public function getExperience()
  {
    return $this -> _experience;
  }
}