<?php
    namespace MODEL;

    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\MODEL\Brand.php';
    
    class CarModel{
        private ?int $id;
        private ?string $name;
        private ?string $motor
        private ?string $color;
        private ?string $year;
        private ?string $licensePlate;
        private ?string $chassis;
        private ?BrandModel $brand;

        public function __construct(){}

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getCnpj(){
            return $this->cnpj;
        }

        public function setCnpj(string $cnpj){
            $this->cnpj = $cnpj;
        }
    }