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
            $p = new PersonaModelo(1);
            $personas = $p -> ListarTodos();

            $resultado = array();
            foreach($personas as $persona){
                $a = array(
                    'id' => $persona -> Id,
                    'nombre' => $persona -> Nombre,
                    'apellido' => $persona -> Apellido,
                    'telefono' => $persona -> Telefono,
                    'email' => $persona -> Email
                );
                array_push($resultado,$a);
            }
            return $resultado;
        }

        public static function ListarTodos(){
            
        }
    }