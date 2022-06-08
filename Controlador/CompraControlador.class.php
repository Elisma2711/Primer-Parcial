<?php

    require "Utils/autoload.php";

    class CompraControlador{
        public static function Alta($nombre,$apellido,$telefono,$email){
            $p = new CompraModelo();
            $p -> Nombre = $nombre;
            $p -> Apellido = $apellido;
            $p -> Telefono = $telefono;
            $p -> Email = $email;
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