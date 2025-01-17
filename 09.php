<?php include 'includes/header.php';

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz {

    public function __construct(protected int $rueda, protected int $capacidad) {}

    public function getInfo() : string {
        return "El transporte tiene: " . $this -> rueda . " ruedas y una capacidad de " . $this-> capacidad;
    }

    public function getRuedas() : int {
        return $this->rueda;
    }
}


include 'includes/footer.php';