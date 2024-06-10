<?php
    namespace DATA;

    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\DATA\Conexao.php';
    include_once 'C:\Users\henry\OneDrive\Documentos\Github\Car-manager\MODEL\User.php';

    class UserDATA{
        public function Select()
        {
            $scriptSql = "Select * from User;";
            $conexao = Conexao::conectarComDB();
            $todosOsRegistros = $conexao->query($scriptSql);
            $conexao = Conexao::desconectarComDB();

            foreach( $todosOsRegistros as $registroUnico){
                $user = new \MODEL\User();

                $user->setId($registroUnico['id']);
                $user->setNome($registroUnico['nome']);

                $listaDeUsers[] = $user;
            }

            return $listaDeUsers;
        }
    }
?>