<?php
//Maria Henriquez__ CI31532147
class Rectangulo {
    private $esquinaSuperiorIzquierda;
    private $esquinaSuperiorDerecha;
    private $esquinaInferiorIzquierda;
    private $esquinaInferiorDerecha;

    public function __construct($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4) {
        $this->establecer($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4);
    }

    public function establecer($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4) {
        $coordenadas = [
            [$x1, $y1],
            [$x2, $y2],
            [$x3, $y3],
            [$x4, $y4]
        ];

        // Verificar que todas las coordenadas están en el primer cuadrante
        foreach ($coordenadas as $coordenada) {
            if ($coordenada[0] < 0 || $coordenada[1] < 0) {
                throw new Exception('Todas las coordenadas deben estar en el primer cuadrante.');
            }
        }

        // Verificar que ninguna coordenada excede 20.0
        foreach ($coordenadas as $coordenada) {
            if ($coordenada[0] > 20.0 || $coordenada[1] > 20.0) {
                throw new Exception('Ninguna coordenada puede ser mayor que 20.0.');
            }
        }

        // Verificar que las coordenadas formen un rectángulo
        $lados = [];
        for ($i = 0; $i < 3; $i++) {
            $lados[] = $this->calcularDistancia($coordenadas[$i], $coordenadas[$i+1]);
        }
        $lados[] = $this->calcularDistancia($coordenadas[3], $coordenadas[0]);

        sort($lados);
        if ($lados[0] !== $lados[1] || $lados[2] !== $lados[3]) {
            throw new Exception('Las coordenadas no forman un rectángulo válido.');
        }

        $this->esquinaSuperiorIzquierda = [$x1, $y1];
        $this->esquinaSuperiorDerecha = [$x2, $y2];
        $this->esquinaInferiorIzquierda = [$x3, $y3];
        $this->esquinaInferiorDerecha = [$x4, $y4];
    }
?>