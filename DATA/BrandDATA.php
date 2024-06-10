<?php
    namespace DATA;

    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\DATA\Conexao.php';
    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\MODEL\Autor.php';

    class BrandData{
        public function Select()
        {
            $scriptSql = "Select * from Brand;";
            $conexao = Conexao::conectarComDB();
            $todosOsRegistros = $conexao->query($scriptSql);
            $conexao = Conexao::desconectarComDB();

            foreach( $todosOsRegistros as $registroUnico){
                $brand = new \MODEL\Brand();

                $brand->setId($registroUnico['id']);
                $brand->setName($registroUnico['name']);
                $brand->setFoundationYear($registroUnico['foundationYear']);
                $brand->setCountry($registroUnico['country']);
                $brand->setLogo($registroUnico['logo']);

                $brandList[] = $brand;
            }

            return $brandList;
        }
    }
?>