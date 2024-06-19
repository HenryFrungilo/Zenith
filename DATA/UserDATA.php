<?php
    namespace DATA;

    include_once '../DATA/Conexao.php';
    include_once '../MODEL/User.php';

    class UserDATA{

        public function SelectByEmail(string $email){
            $scriptSql = 'Select * from user where email=?;';
            $conexao = Conexao::conectarComDB();
            $query = $conexao->prepare($scriptSql);
            $query->execute(array($email));
            $registroUnico = $query->fetch(\PDO::FETCH_ASSOC);
            $conexao = Conexao::desconectarComDB();

            $user = new \MODEL\User();
            $user->setId($registroUnico['id']);
            $user->setNome($registroUnico['nome']);
            $user->setEmail($registroUnico['email']);
            $user->setSenha($registroUnico['senha']);

            return $user;
        }
    }
?>