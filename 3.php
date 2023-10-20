<?php
//Maria Henriquez__ CI31532147
class Cuadrado {
    public $a, $caracterRelleno, $caracterPerimetro;

    public function __construct($a) {
        $this->a = $a;
        $this->caracterRelleno = '#';
        $this->caracterPerimetro = '*';
    }

    public function establecerCaracterRelleno($caracter) {
        $this->caracterRelleno = $caracter;
    }

    public function establecerCaracterPerimetro($caracter) {
        $this->caracterPerimetro = $caracter;
    }

    public function dibujar() {
        for ($i = 0; $i < $this->a; $i++) {
            for ($j = 0; $j < $this->a; $j++) {
                if ($i == 0 || $i == $this->a - 1 || $j == 0 || $j == $this->a - 1) {
                    echo $this->caracterPerimetro;
                } else {
                    echo $this->caracterRelleno;
                }
            }
            echo "<br>";
        }
    }
}

$cuadrado = new Cuadrado(10);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = intval($_POST["a"]);
    $caracterRelleno = $_POST["caracter_relleno"];
    $caracterPerimetro = $_POST["caracter_perimetro"];

    $cuadrado = new Cuadrado($a);
    $cuadrado->establecerCaracterRelleno($caracterRelleno);
    $cuadrado->establecerCaracterPerimetro($caracterPerimetro);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dibujo de Cuadrado</title>
    <style>
        pre {
            font-family: monospace;
            white-space: pre-wrap;
            background-color: #f5f5f5;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Generador de Cuadrado</h1>
    <form method="post">
        Lado: <input type="number" name="a" value="<?php echo $cuadrado->a; ?>"><br>
        Carácter de Relleno: <input type="text" name="caracter_relleno" value="<?php echo $cuadrado->caracterRelleno; ?>"><br>
        Carácter de Perímetro: <input type="text" name="caracter_perimetro" value="<?php echo $cuadrado->caracterPerimetro; ?>"><br>
        <input type="submit" value="Calcular">
    </form>

    <h2>Cuadrado Generado:</h2>
    <pre>
    <?php
    $cuadrado->dibujar();
    ?>
    </pre>
</body>
</html>
