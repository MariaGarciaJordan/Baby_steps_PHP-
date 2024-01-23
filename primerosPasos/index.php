<!-- Declara una variable por cada tipo de dato y asignar un valor
<?php
$intVar = 123; // Integer
$floatVar = 12.3; // Float
$strVar = "Hola Mundo"; // String
$arrVar = array("manzana", "banana", "cereza"); // Array
$boolVar = true; // Boolean
$nullVar = NULL; // Null
?>


Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor booleano (que imprima true o false), un array y un valor nulo (que imprima NULL)
<?php
// Imprimir en la consola
error_log($intVar);
error_log($floatVar);
error_log($strVar);
error_log(print_r($arrVar, true)); 
error_log($boolVar ? 'true' : 'false'); 
error_log(is_null($nullVar) ? 'NULL' : $nullVar); 

// Imprimir en la pantalla
echo $intVar . "<br>";
echo $floatVar . "<br>";
echo $strVar . "<br>";
echo implode(", ", $arrVar) . "<br>"; 
echo $boolVar ? 'true' : 'false'; 
echo is_null($nullVar) ? 'NULL' : $nullVar; 
?>
/////////////////////////////////////////////////////////
¿Qué tipo de dato son las siguientes variables?
<?php
$nombre = "Luna";  ///es una cadena de texto (string).
$apellido = "Lovegood"; //es una cadena de texto (string).
$edad = 42; //es un entero (integer).
$Ravenclaw = true; //es un booleano (boolean).

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //es un número de punto flotante (float) porque el resultado de la operación es un número decimal.
$nombre_completo = $nombre . " " . $apellido; ///es una cadena de texto (string) porque estás concatenando dos cadenas de texto.
$presento_examen = (bool) 1; //es un booleano (boolean) porque estás convirtiendo un entero a booleano.

//Avanzado

$numero_preguntas = 5 + "5";// es un entero (integer) porque PHP convierte automáticamente la cadena de texto “5” a un entero para realizar la operación de suma.
$numero_respuestas = "5" + 5; //es un entero (integer) por la misma razón que la anterior.
$promedio_maximo = $numero_respuestas / 1.0; //es un número de punto flotante (float) porque estás dividiendo un entero por un número de punto flotante.
$nargles = 3 + "5 nargles"; //es un entero (integer) porque PHP ignora la parte de la cadena de texto que no puede convertir a un número al realizar la operación de suma.

////////////////////////////////////////////////////////////////////

//Suponiendo estas variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;
// ¿Cuál es el resultado según las tablas de verdad?
$es_un_michi_grande && $le_gusta_comer; // es verdadero (true) porque ambas variables son verdaderas.
$es_un_michi_grande || $sabe_volar; //es verdadero (true) porque al menos una de las variables es verdadera.
$sabe_volar || $tiene_2_patas; //es falso (false) porque ambas variables son falsas.
!$le_gusta_comer ;//es falso (false) porque la variable $le_gusta_comer es verdadera, y el operador de negación (!) invierte su valor.
!$le_gusta_comer || $es_un_michi_grande;// es verdadero (true) porque aunque !$le_gusta_comer es falso, $es_un_michi_grande es verdadero, y en una operación OR (||), si al menos una de las variables es verdadera, el resultado es verdadero.
?>
////////////////////////////////////////////////////////////////////////////////////////


//Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.

<?php
    $nombre = "Luna";
    echo strtoupper($nombre);
?>

● Imprime en pantalla la longitud de la variable tipo string.
<?php
$nombre = "Luna";
echo strlen($nombre);
?>


● Imprime en pantalla la cantidad de palabras de la variable tipo string.
<?php
$nombre = "Luna Lovegood";
echo str_word_count($nombre);
?>


● Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
variable original.
<?php
$nombre = "Luna Lovegood";
echo strrev($nombre);
?>


● Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
<?php
$frase = "El Gato está en el tejado";
echo str_replace("Gato", "Michi", $frase);
?>


● Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
<?php
$var1 = 10;
$var2 = 20;

echo $var1 . "<br>";
echo $var2;
?>


● Suma ambas variables de tipo integer e imprime en pantalla.
<?php
$var1 = 10;
$var2 = 20;

$suma = $var1 + $var2;

echo $suma;
?>


● Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
consola
<?php
$var1 = 1;
$var2 = 0;

// Imprimir en la consola
error_log(gettype($var1));
error_log(gettype($var2));

// Imprimir en la pantalla
echo gettype($var1) . "<br>";
echo gettype($var2);
?>


● a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
en pantalla y consola.
<?php
$var1 = 1;
$var2 = 0;

$var1 = (bool) $var1;
$var2 = (bool) $var2;

error_log(gettype($var1));
error_log(gettype($var2));

echo gettype($var1) . "<br>";
echo gettype($var2);

?>


● Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
en pantalla y por consola el resultado

<?php

function suma($num1, $num2) {
    $resultado = $num1 + $num2;
    error_log($resultado);
    echo $resultado;
    return $resultado;
}
suma(10, 20);

?>


● Crear función que determine si un número es par o impar. Imprime por consola y pantalla
<?php
function esPar($num) {
    $resultado = $num % 2 == 0 ? "par" : "impar";
    error_log($resultado);
    echo $resultado;
    return $resultado;
}
esPar(10);

?>

● Crear un array de 10 números
<?php
$array_numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($array_numeros);

?>

● Obtén el largo del array e imprime en pantalla y consola.
<?php
$array_numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$longitud = count($array_numeros);
error_log($longitud);
echo $longitud;

?>

● Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
<?php
$miArray = array("valor1", "valor2", "valor3");
$miArray[] = "nuevo_valor";
print_r($miArray);

?>

● Ahora agrega 2 elementos más a tu array e imprime en pantalla.
<?php
$miArray = array("valor1", "valor2", "valor3");
$miArray[] = "nuevo_valor1";
$miArray[] = "nuevo_valor2";

print_r($miArray);

?>

● Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
<?php
$miArray = array("valor1", "valor2", "valor3");
$nuevoArray = array("nuevo_valor1", "nuevo_valor2");
$arrayConcatenado = array_merge($miArray, $nuevoArray);

print_r($arrayConcatenado);

?>

● Crear una función que imprima en consola y pantalla todos los números de un array en una lista
<?php
function imprimirNumeros($arrayNumeros) {
    echo "Números en pantalla:\n";
    echo "<ul>";
    foreach ($arrayNumeros as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";

    foreach ($arrayNumeros as $numero) {
        echo "$numero\n";
    }
}

$numeros = array(1, 2, 3, 4, 5);
imprimirNumeros($numeros);

?>

● Crear una función que añade un número al array
<?php
$array_numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function añadirNumero($array, $numero) {
    array_push($array, $numero);

    error_log(print_r($array, true));

    print_r($array);

    return $array;
}
añadirNumero($array_numeros, 11);

?>

● Crear una función que elimine los números pares de ese array.
<?php
function eliminarPares(&$arrayNumeros) {
    $arrayNumeros = array_filter($arrayNumeros, function($numero) {
        return $numero % 2 != 0;
    });
}
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "Array original:\n";
print_r($numeros);

eliminarPares($numeros);

echo "Array sin números pares:\n";
print_r($numeros);

?>

● Crear una función que devuelva el número mayor de un array.
<?php
function encontrarNumeroMayor($arrayNumeros) {
    if (empty($arrayNumeros)) {
        return null; 
    }
    $numeroMayor = max($arrayNumeros);

    return $numeroMayor;
}

$numeros = array(15, 7, 42, 9, 23);
$mayor = encontrarNumeroMayor($numeros);
if ($mayor !== null) {
    echo "El número mayor es: $mayor";
} else {
    echo "El array está vacío"; 
}

?>

● Crear una función que devuelva el número menor de un array.
<?php
$array_numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function numeroMenor($array) {
    $menor = min($array);
    error_log($menor);

    echo $menor;

    return $menor;
}

numeroMenor($array_numeros);

?>

● Crear un función que convierta en minúsculas todas las letras de un texto.
<?php
function aMinusculas($texto) {
    $texto_minusculas = strtolower($texto);
    error_log($texto_minusculas);

    echo $texto_minusculas;

    return $texto_minusculas;
}
aMinusculas("HOLA MUNDO");

?>

● Crear una función que convierta en mayúsculas todas las letras de un texto.
<?php
function convertirAMayusculas($texto) {
    $textoMayusculas = strtoupper($texto);
    return $textoMayusculas;
}

$textoOriginal = "Hola, esto es un ejemplo.";

$textoEnMayusculas = convertirAMayusculas($textoOriginal);

echo "Texto original: $textoOriginal\n";
echo "Texto en mayúsculas: $textoEnMayusculas";

?>

● Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
en mayúscula.
<?php
function capitalizarPrimerLetraNombres($arrayNombres) {
    $nombresCapitalizados = array_map('ucfirst', $arrayNombres);
    return $nombresCapitalizados;
}

$nombres = array("juan", "maría", "pedro", "ana");

$nombresCapitalizados = capitalizarPrimerLetraNombres($nombres);

echo "Nombres originales: " . implode(", ", $nombres) . "\n";
echo "Nombres capitalizados: " . implode(", ", $nombresCapitalizados);

?>

● Crear una clase coche con sus atributos y un atributo puede ser de tipo array
<?php
class Coche {

    public $marca;
    public $modelo;
    public $color;
    public $año;
    public $caracteristicas = array();

    public function __construct($marca, $modelo, $color, $año, $caracteristicas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->año = $año;
        $this->caracteristicas = $caracteristicas;
    }
}

$miCoche = new Coche("Toyota", "Corolla", "Rojo", 2020, array("Aire acondicionado", "GPS", "Bluetooth"));

?>

● Crear una función que devuelva la marca del carro.
<?php
class CocheBlue {
    public $marca;
    public $modelo;
    public $color;
    public $año;
    public $caracteristicas = array();

    public function __construct($marca, $modelo, $color, $año, $caracteristicas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->año = $año;
        $this->caracteristicas = $caracteristicas;
    }

    public function obtenerMarca() {
        return $this->marca;
    }
}

$miCoche = new CocheBlue("Toyota", "Corolla", "Rojo", 2020, array("Aire acondicionado", "GPS", "Bluetooth"));
echo $miCoche->obtenerMarca();

?>

● Crear una función que devuelva la cantidad de puertas que tiene el carro.
<?php
class CocheRed{

    public $marca;
    public $modelo;
    public $color;
    public $año;
    public $caracteristicas = array();
    public $puertas;

    public function __construct($marca, $modelo, $color, $año, $caracteristicas, $puertas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->año = $año;
        $this->caracteristicas = $caracteristicas;
        $this->puertas = $puertas;
    }

    public function obtenerPuertas() {
        return $this->puertas;
    }
}

$miCoche = new CocheRed("Toyota", "Corolla", "Rojo", 2020, array("Aire acondicionado", "GPS", "Bluetooth"), 4);
echo $miCoche->obtenerPuertas();

?>

● Crear una función que devuelva un atributo del array. -->
<?php
function obtenerAtributo($array, $atributo) {
    if (array_key_exists($atributo, $array)) {
        return $array[$atributo];
    } else {
        return "El atributo no existe en el array.";
    }
}
$array_ejemplo = array(
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "color" => "Rojo",
    "año" => 2020,
    "caracteristicas" => array("Aire acondicionado", "GPS", "Bluetooth")
);

echo obtenerAtributo($array_ejemplo, "marca");

?>
