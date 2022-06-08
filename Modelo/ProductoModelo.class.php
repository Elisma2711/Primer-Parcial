<?php

    require "Utils/autoload.php";
    
    class ProductoModelo{
        public $Id;
        public $Nombre;
        public $Descripcion;
        public $Stock;

        public function Alta(){
            $sql = "INSERT INTO producto (nombre,descirpcion,stock) VALUES
            '" . $this -> Nombre . "',
            '" . $this -> Descripcion . "',
            " . $this -> Stock . ");";
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Baja(){
            $sql = "DELETE FROM producto WHERE id = " . $this -> Id;
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function Modificar(){
            $sql = "UPDATE producto  SET 
            nombre = '" . $this -> Nombre . "',
            descripcion = '" . $this -> Descripcion . "',
            stock = " . $this -> Stock . "
            WHERE id = " . $this -> Id;
        }

        public function ListarUno(){
            $sql = "SELECT * FROM producto WHERE id = " . $this -> Id;
            $this -> conexionBaseDeDatos -> query($sql);
        }

        public function ListarTodos(){
            $sql = "SELECT * FROM producto";
            $this -> conexionBaseDeDatos -> query($sql);
        }
    }