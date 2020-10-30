<?php 
    class Recursos{

        public function tabelaAtletas($atletas){
            echo "<table border='2px'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>Idade</th>";
                echo "<th>Altura</th>";
                echo "<th>Peso</th>";
            echo "</tr>";

            foreach($atletas as $key => $atleta){
                echo "<tr>";
                echo "<td>" . $atleta->__get('id') . "</td>";
                echo "<td>" . $atleta->__get('nome') . "</td>";
                echo "<td>" . $atleta->__get('idade') . "</td>";
                echo "<td>" . $atleta->__get('altura') . "</td>";
                echo "<td>" . $atleta->__get('peso') . "</td>";
                echo "</tr>";
            }
            echo "</table>";


        }

    }

?>