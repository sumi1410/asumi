<?php

class Auto {
    public $conexion;
    public $placa, $modelo, $color;

    public function __construct($conexion, $placa = null, $modelo = null, $color= null) 
    {
        $this->conexion = $conexion;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    // Registrar un auto
    public function registrar() {
        $sql = "INSERT INTO `auto`(`placa`, `modelo`, `color`) VALUES ('$this->placa','$this->modelo','$this->color')";
        return mysqli_query($this->conexion, $sql);
    }

    // Obtener todos los libros
    public static function obtenerTodos($conexion) {
        $sql = "SELECT * FROM libros";
       return mysqli_query($conexion, $sql);
    }

    // Actualizar un auto
    public function actualizar($id) {
        $sql = "UPDATE autos SET placa='$this->placa', modelo='$this->modelo', color=$this->color WHERE id=$id";
        return mysqli_query($this->conexion, $sql);
    }

    // Eliminar un Auto
    public static function eliminar($conexion, $id) {
        $sql = "DELETE FROM autos WHERE id=$id";
        return mysqli_query($conexion, $sql);
    }
}
?>