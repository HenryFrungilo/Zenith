<?php

namespace DATA;

include_once '../DATA/Conexao.php';
include_once '../MODEL/User.php';

class UserDATA
{
    public function SelectByEmail(string $email)
    {
        $scriptSql = 'SELECT * FROM user WHERE email=?;';
        $conexao = Conexao::conectarComDB();
        $query = $conexao->prepare($scriptSql);
        $query->execute(array($email));
        $registroUnico = $query->fetch(\PDO::FETCH_ASSOC);
        $conexao = Conexao::desconectarComDB();

        if ($registroUnico === false) {
            return null; // Return null or throw an exception if no user is found
        }

        $user = new \MODEL\User();
        $user->setId($registroUnico['id'] ?? null); // Use null coalescing operator to handle null
        $user->setNome($registroUnico['nome']);
        $user->setEmail($registroUnico['email']);
        $user->setSenha($registroUnico['senha']);

        return $user;
    }
}