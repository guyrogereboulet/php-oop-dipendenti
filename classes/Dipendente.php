
<?php
 class Dipendente 
 {
   private $matricola;
   private $nome;
   private $cognome;
   private $codiceFiscale;
   private $iban;
   private $indirizzo;
   public function __construct($_matricola, $_nome, $_cognome, $_codiceFiscale)
   {
     $this->matricola = $_matricola;
     $this->nome = $_nome;
     $this->cognome = $_cognome;
     $this->codiceFiscale = $_codiceFiscale;
   }
   public function getDipendente() {
     $result = [
       "Nome"=> $this->nome
     ];
   }
 }
