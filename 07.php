<?php include 'includes/header.php';

class Transporte {
    public function __construct(protected int $rueda, protected int $capacidad) {}

    public function getInfo() : string {
        return "El transporte tiene: " . $this -> rueda . " ruedas y una capacidad de " . $this-> capacidad;
    }
}

class Bicicleta extends Transporte {

    public function getInfo() : string{
        return "El transporte tiene: " . $this -> rueda . " ruedas y una capacidad de " . $this-> capacidad . ". No gasta gasolina.";
    }
}

class Carro extends Transporte{

    public function __construct(protected int $rueda, protected int $capacidad, protected string $transmision) {}

    public function gettransmi() : string{
        return $this-> transmision;
    }

}

$bicicleta = new Bicicleta(2,1);
echo $bicicleta -> getInfo();
echo "<hr>";

$auto = new Carro(4,4, 'manual');
echo $auto -> getInfo();
echo $auto -> gettransmi();
echo "<hr>";
include 'includes/footer.php';