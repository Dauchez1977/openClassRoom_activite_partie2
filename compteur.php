<?php
class compteur
{
  
  
  private static $_compteur = 0;
  
  public function __construct()
  {
    self::$_compteur++;
  }
  
  public static function afficheCompteur()
  {
    return self::$_compteur;
  }
}

$test = new compteur;
echo compteur::afficheCompteur();