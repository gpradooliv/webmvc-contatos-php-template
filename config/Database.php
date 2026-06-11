<?php

class Database
{
    public static function conectar(): PDO
    {
        /*
         * Configuração local para uso didático com XAMPP.
         * Em produção, não deixe credenciais sensíveis diretamente no código.
         */
        $host = '127.0.0.1';
        $porta = '3306';
        $banco = 'aula_camadas';
        $usuario = 'root';
        $senha = '';

        $dsn = "mysql:host={$host};port={$porta};dbname={$banco};charset=utf8mb4";

        return new PDO(
            $dsn,
            $usuario,
            $senha,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
    }
}
