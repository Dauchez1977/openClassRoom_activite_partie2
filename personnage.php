<?php
class personnage
{
  private $_force = 20;
  private $_localisation = 'Lyon';
  private $_experience = 0;
  private $_degats = 0;
  
  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;
  
  private static $_textADire = 'Je vais tous vous tuer';
  
  public function __construct($force)
  {
    echo 'Voici le constructeur';
    
    $this -> setForce($force);
    //$this -> setDegats($degats);
    //$this -> _experience = 1;
  }
  
  public function force()
  {
    return $this -> _force;
  }
  
  public function setForce($force)
  {
    
    if(in_array($force, [self::FORCE_PETITE, self:: FORCE_MOYENNE, self:: FORCE_GRANDE]))
    {
      $this -> _force = $force;
    }
       
  }
  
  public function experience()
  {
    return $this -> _experience;
  }
  
  public function setExperience($experience)
  {
    if(!is_int($experience))
    {
      trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
    }
    
    if($experience > 100)
    {
      trigger_error('l\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
    }
    
    $this -> _experience = $experience;
  }
  
  public function degats()
  {
    return $this -> _degats;
  }
  
  public function setDegats($degats)
  {
    if(!is_int($degats))
    {
      trigger_error('Leniveau de dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
    }        
    
    $this -> _degats = $degats;
  }
  
  public function deplacer()
  {
    
  }
  
  public function frapper(personnage $persoAFrapper)
  {
    $persoAFrapper -> _degats += $this -> _force;
  }
  
  public function gagnerExperience()
  {
    $this -> _experience ++;
  }
  
  public static function parler()
  {
    echo self::$_textADire;
  }
  
  public function afficherExperience()
  {
    echo $this -> _experience;
  }
  
  public function __destruct()
  {
  }
  
  
}