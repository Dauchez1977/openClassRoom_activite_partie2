<?php

function chargerClasse($classe)
{
  require $classe.'.php';
}

spl_autoload_register('chargerClasse');

$perso = new personnage(personnage::FORCE_MOYENNE);
personnage::parler();