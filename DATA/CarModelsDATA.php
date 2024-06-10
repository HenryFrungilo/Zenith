<?php
    namespace DATA;
    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\DATA\Conexao.php';
    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\MODEL\CarModel.php';

    class CarModelDATA{
        public function Select()
        {
            $scriptSql = "Select * from CarModel;";
            $conexao = Conexao::conectarComDB();
            $todosOsRegistros = $conexao->query($scriptSql);
            $conexao = Conexao::desconectarComDB();

            foreach($todosOsRegistros as $registroUnico){
                $carModel = new \MODEL\CarModel();

                $carModel->setId($registroUnico['id']);
                $carModel->setNome($registroUnico['nome']);
                $carModel->setMotor($registroUnico['motor']);
                $carModel->setColor($registroUnico['color']);
                $carModel->setYear($registroUnico['year']);
                $carModel->setLicensePlate($registroUnico['licensePlate']);
                $carModel->setChassis($registroUnico['chassis']);
                $carModel->setBrand($registroUnico['brand']);

                $carModelsList[] = $carModel;
            }

            return $carModelsList;
        }
    }
?>