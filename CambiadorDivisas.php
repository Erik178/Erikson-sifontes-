<?php
class ConversorDivisa {
private $coeficienteCambio;

public function __construct($coeficienteCambio) {
$this->coeficienteCambio = $coeficienteCambio;
}

public function calcularEnDolares($cantidadBolivares) {
return $cantidadBolivares / $this->coeficienteCambio;
}
}
?>