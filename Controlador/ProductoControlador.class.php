<?php

    require "Utils/autoload.php";

    class ProductoControlador{
        public static function Alta($nombre,$descirpcion,$stock){
            $p = new ProductoModelo();
            $p -> Nombre = $nombre;
            $p -> Descripcion = $descirpcion;
            $p -> Stock = $stock;
            $p -> Alta();
        }

        public static function Baja(){
            
        }

        public static function Modificar(){

        }

        public static function ListarUno(){

        }

        public static function ListarTodos(){
            
        }
    }