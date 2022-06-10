<?php
    
    require "Utils/autoload.php";

    class PersonaControlador{
        public static function Alta($nombre,$apellido,$telefono,$email){
            $p = new PersonaModelo();
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
            $p = new PersonaModelo(1234);
            $personas = $p -> ListarTodos();

            $resultado = array();
            foreach($personas as $elemento){
                $a = array(
                    'id' => $elemento -> Id,
                    'nombre' => $elemento -> Nombre,
                    'apellido' => $elemento -> Apellido,
                    'telefono' => $elemento -> Telefono,
                    'email' => $elemento -> Email
                );
                array_push($resultado,$a);
            }
            return $resultado;
        }

        public static function ListarTodos(){
            
        }
    }