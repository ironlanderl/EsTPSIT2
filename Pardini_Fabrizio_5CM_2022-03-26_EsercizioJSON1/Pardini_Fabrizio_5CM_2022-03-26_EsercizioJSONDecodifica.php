<!-- Pardini_Fabrizio_5CM_2022-03-26_EsercizioJSON1-->

<html>

<head>

</head>

<body>
    <form method="POST">
        <textarea rows="10" cols="60" name="text" placeholder="Enter JSON">{"frutta":[{"nome":"banane","quantita":"3","prezzo":"4.5"},{"nome":"pomodori","quantita":"4","prezzo":"10"}]}</textarea>
        <br />
        <input type="submit"/>
    </form>

    <?php 
        if ($_POST){
            $json = $_POST["text"];
            $json = json_decode($json, false);
            $frutta = $json["frutta"];
            // Controllo se sono presenti delle banane
            print($frutta[0]["nome"]);
            if (isset($frutta[0]["nome"]) && $frutta[0]["nome"] == "banane"){
                echo "Banane: " . $frutta[0]["quantita"] . " x " . $frutta[0]["prezzo"] . "€<br />";
            }
            // Controllo se sono presenti dei pomodori
            if (isset($frutta[1]["nome"]) && $frutta[1]["nome"] == "pomodori"){
                echo "Pomodori: " . $frutta[1]["quantita"] . " x " . $frutta[1]["prezzo"] . "€<br />";
            }
        }





?>




    
    <script type="text/javascript" src="script.js"></script>
</body>

</html>