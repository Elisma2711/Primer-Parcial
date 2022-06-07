<?php

    class Conexion{
        public $IpDataBase;
        public $NombreDataBase;
        public $UserDataBase;
        public $PassDataBase;
        public $ConexionBaseDeDatos;

        public function __construct(){
            $this -> conexionDataBase();

            $this -> conexionBaseDeDatos = new mysqli(
                $this -> IpDataBase,
                $this -> UserDataBase,
                $this -> PassDataBase,
                $this -> NombreDataBase
            );
        }

        private function conexionDataBase(){
            $this -> IpDataBase = IP_DB;
            $this -> NombreDataBase = NAME_DB;
            $this -> UserDataBase = USER_DB;
            $this -> PassDataBase = PASS_DB;
        }
    }