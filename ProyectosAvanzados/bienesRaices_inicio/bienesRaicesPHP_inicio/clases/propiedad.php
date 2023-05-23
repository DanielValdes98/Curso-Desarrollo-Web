<?php

namespace App;

class Propiedad
{

    //Base de datos
    protected static $db;
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedorId'];

    //Errores
    protected static $errores = [];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    //Definir la conexion a la base de datos
    public static function setDB($database)
    {
        self::$db = $database;
    }

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? ''; // En caso de no tener titulo, será un string vacio
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedorId = $args['vendedorId'] ?? '';
    }

    public function guardar()
    {
        // Sanitizar los datos:
        $atributos = $this->sanitizarAtributos();


        // INSERTAR EN LA BASE DE DATOS:
        $query = "INSERT INTO propiedades ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        // debuguear($query);


        $resultado = self::$db->query($query);
        return $resultado;
    }

    // Identificar y unir los atrbutos de la BD
    public function atributos()
    {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna === 'id') continue; // Si se cumple la condicion, deja de ejecutar el if. Lo ignora.
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos()
    {
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    // Subida de archivos
    public function setImagen($imagen) {
        // Asignar al atributo imagen el nombre de la imagens
        if($imagen) {
            $this->imagen = $imagen;
        }
    }

    // Validacion
    public static function getErrores()
    {
        return self::$errores;
    }

    public function Validar()
    {

        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }


        if (!$this->precio) {
            self::$errores[] = "Debes añadir un precio";
        }


        if (!$this->descripcion) {
            self::$errores[] = "La descripcion es obligatoria. Minimo 150 caracteres";
        }


        if (!$this->habitaciones) {
            self::$errores[] = "Debes añadir el numero de habitaciones";
        }


        if (!$this->wc) {
            self::$errores[] = "Debes añadir el numero de baños";
        }


        if (!$this->estacionamiento) {
            self::$errores[] = "Debes añadir el numero de estacionamientos";
        }


        if (!$this->vendedorId) {
            self::$errores[] = "Debes añadir el vendedor";
        }

        if($this->imagen) {
            self::$errores[] = "La imagen es obligatoia";
        }

        return self::$errores;
    }

    // Lista todas las propiedades
    public static function all() {
        $query = "SELECT * FROM propiedades";
        $resultado = self::$db->query($query);
        debuguear($resultado);
        exit;
    }
}
