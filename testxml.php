<html>
    <body>

        <table border="1">
            <?php
                $xml = simplexml_load_file("Classe.xml");

                echo "<tr><th>Nome</th><th>Cognome</th><th>Città</th></tr>";

                foreach ($xml->persona as $persona) {
                    echo "<tr>";
                    echo "<td>" . $persona->nome . "</td>";
                    echo "<td>" . $persona->congome . "</td>";
                    echo "<td>" . $persona->citta . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>

