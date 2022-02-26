<!-- Pardini_Fabrizio_5CM_2022-02-19_EsCalciatori -->
<html>
    <body>
        <?php

            $xml = simplexml_load_file("calcio.xml");

            echo "Nome squadra: " . $xml->nome . "<br>";
            echo "Serie: " . $xml->serie . "<br>";
            echo "Presidente: " . $xml->presidente . "<br>";
            echo "Allenatore: " .$xml->allenatore . "<br>";

            foreach ($xml->giocatore as $elementi) {
                echo "<br>Nome giocatore: " . $elementi->nome . "<br>";
                foreach ($elementi->ruolo as $ruolo){
                    echo "Ruolo: " . $ruolo . "<br>";
                }
                echo "È un titolare? " . $elementi->titolare . "<br>";
            }

        ?>
    </body>
</html>