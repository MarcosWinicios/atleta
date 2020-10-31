<?php 
    class Conexao {
        private $host = 'localhost';
        private $db = 'atividade2';
        private $usuario = 'marcos';
        private $senha = '12345';

        public function conectar(){
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->db",
                    "$this->usuario", "$this->senha"
                );
                return $conexao;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>