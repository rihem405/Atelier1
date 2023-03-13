<?php

namespace App\Taxes;

class calculateur
{
  public function prixTVA($prix):float
  {
      $montantTVA=$prix * 0.2;
      return $montantTVA;
  }
  public function prixTTC($prix):float
  {
      $montantTTC=$prix * (1+0.2);
      return $montantTTC;
  }
}