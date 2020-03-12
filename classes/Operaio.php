<?php
require_once 'dipendente.php';

class Operaio extends Dipendente
{
    private $oreNotturno;
    public function __construct($_matricola, $_nome, $_cognome, $_codiceFiscale, $_oreNotturno)
    {
        parent::__construct($_matricola, $_nome, $_cognome, $_codiceFiscale);
        $this->oreNotturno = $_oreNotturno;
    }
}
