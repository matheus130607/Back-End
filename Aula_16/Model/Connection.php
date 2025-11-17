<?php

class Connection {

    private static $instance = null;

    public static function getInstance() {
        if (!self::$instance) {
            try {
                // --- Configurações de Conexão ---
                $host = 'localhost';
                $dbname = 'projeto_bebidas2';
                $user = 'root';
                $pass = '1234';

                
                $dsn_server = "mysql:host=$host;charset=utf8";

                self::$instance = new PDO(
                    $dsn_server,
                    $user,
                    $pass
                );
                
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // 2. CRIAÇÃO E SELEÇÃO DO BANCO DE DADOS:

                // Cria o banco de dados se ele não existir
                self::$instance->exec("CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
                
                // Seleciona o banco de dados para que as próximas consultas sejam executadas nele
                self::$instance->exec("USE $dbname");
            
            } catch (PDOException $e) {
                // Se o MySQL estiver desligado, ou senha/usuário errados, a mensagem de erro real aparecerá aqui.
                die("Erro ao conectar ao MySQL: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}