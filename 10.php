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

class Automovil extends Transporte implements TransporteInterfaz {

    public function __construct(protected int $rueda, protected int $capacidad,  protected string $color) {}

    public function getInfo() : string {
        return "El transporte auto tiene: " . $this -> rueda . " ruedas y una capacidad de " . $this-> capacidad . " y su color es el " . $this->color;
    }

    public function getColor() : string {
        return "El color es ". $this->color;
    }
}

echo "<pre>";
var_dump($auto = new Automovil(4, 4, "Verde"));
var_dump($bus = new Transporte(6, 40));

echo $bus->getInfo();
echo "<br>";
echo $auto->getInfo();
echo "<br>";
echo $auto->getColor();
echo "</pre>";

include 'includes/footer.php';