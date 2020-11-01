<?php 
    require_once "atleta.php";
    class AtletaDao{
        private $conexao;

        public function __construct(Conexao $conexao) {
            $this->conexao = $conexao->conectar();
        }

        public function listarTudo(){
            $sql = "SELECT * FROM atleta";
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            $atletas = array();

            foreach($resultados as $id => $objeto){
                $atleta = new Atleta($objeto->nome, $objeto->idade, $objeto->altura, $objeto->peso);
                $atleta->__set('id', $objeto->id);
                $atletas[] = $atleta;

            }

            return $atletas;
        }

        // public function pesquisarNome($nome){
        //     $sql = "SELECT * FROM atleta WHERE nome like :nome";
        //     $stmt = $this->conexao->prepare($sql);
        //     $stmt->bindValue(':nome', "$nome");
        //     $stmt->execute();

        //     $resultado = $stmt->fetch(PDO::FETCH_OBJ);

        //     echo "<pre>";
        //     print_r($resultado);
        //     echo "</pre>";

        //     $atleta = new Atleta($resultado->nome, $resultado->idade, $resultado->altura, $resultado->peso);
        //     $atleta->__set('id', $resultado->id);

        //     return $atleta;
        // }

        public function pesquisarNomeAprox($nome){
            $sql = "SELECT * FROM atleta WHERE nome like :nome";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':nome', "%$nome%");
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            $atletas = array();

            foreach($resultados as $id => $objeto){
                $atleta = new Atleta($objeto->nome, $objeto->idade, $objeto->altura, $objeto->peso);
                $atleta->__set('id', $objeto->id);
                $atletas[] = $atleta;
            }

            return $atletas;
        }

        public function cadastrar(Atleta $a){
            $sql = 'INSERT INTO atleta (nome, idade, altura, peso) VALUES (:nome, :idade, :altura, :peso)';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':nome', $a->__get('nome'));
            $stmt->bindValue(':idade', $a->__get('idade'));
            $stmt->bindValue(':altura', $a->__get('altura'));
            $stmt->bindValue(':peso', $a->__get('peso'));
            $stmt->execute();

        }

        public function deletar(Atleta $atleta){
            $sql = 'DELETE FROM atleta WHERE id = :id';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':id', $atleta->__get('id'));
            $stmt->execute();
        }

    }
?>