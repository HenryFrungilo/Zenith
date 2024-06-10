<?php
    namespace MODEL;

    class Brand{
        private ?int $id;
        private ?string $name;
        private ?int $foundationYear;
        private ?string $country;
        private ?string $logo;

        public function __construct(){}

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName(string $name){
            $this->name = $name;
        }

        public function getFoundationYear(){
            return $this->foundationYear;
        }

        public function setFoundationYear(int $foundationYear){
            $this->foundationYear = $foundationYear;
        }

        public function getCountry(){
            return $this->country;
        }

        public function setCountry(string $country){
            $this->country = $country;
        }

        public function getLogo(){
            return $this->logo;
        }

        public function setLogo(string $logo){
            $this->logo = $logo;
        }
    }
?>