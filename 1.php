<?php
//Maria Henriquez__ CI31532147
class Rectangulo {
    private $longitud;
    private $ancho;

    public function __construct() {
        $this->longitud = 1.0;
        $this->ancho = 1.0;
    }

    public function calcularPerimetro() {
        return 2 * ($this->longitud + $this->ancho);
    }

    public function calcularArea() {
        return $this->longitud * $this->ancho;
    }

    public function establecerLongitud($longitud) {
        if (is_float($longitud) && $longitud > 0.0 && $longitud < 20.0) {
            $this->longitud = $longitud;
        } else {
            echo "El valor de longitud debe ser un número en punto flotante mayor a 0.0 y menor a 20.0.";
        }
    }

    public function establecerAncho($ancho) {
        if (is_float($ancho) && $ancho > 0.0 && $ancho < 20.0) {
            $this->ancho = $ancho;
        } else {
            echo "El valor de ancho debe ser un número en punto flotante mayor a 0.0 y menor a 20.0.";
        }
    }

    public function obtenerLongitud() {
        return $this->longitud;
    }

    public function obtenerAncho() {
        return $this->ancho;
    }
}

// Ejemplo de uso
$rectangulo = new Rectangulo();
echo "Longitud: " . $rectangulo->obtenerLongitud() . "\n";  // Salida: 1.0
echo "Ancho: " . $rectangulo->obtenerAncho() . "\n";  // Salida: 1.0
echo "Perímetro: " . $rectangulo->calcularPerimetro() . "\n";  // Salida: 4.0
echo "Área: " . $rectangulo->calcularArea() . "\n";  // Salida: 1.0

$rectangulo->establecerLongitud(5.0);
$rectangulo->establecerAncho(3.0);
echo "Longitud: " . $rectangulo->obtenerLongitud() . "\n";  // Salida: 5.0
echo "Ancho: " . $rectangulo->obtenerAncho() . "\n";  // Salida: 3.0
echo "Perímetro: " . $rectangulo->calcularPerimetro() . "\n";  // Salida: 16.0
echo "Área: " . $rectangulo->calcularArea() . "\n";  // Salida: 15.0

$rectangulo->establecerLongitud(25.0);  // Mensaje de error
$rectangulo->establecerAncho(-2.0);  // Mensaje de error
?>