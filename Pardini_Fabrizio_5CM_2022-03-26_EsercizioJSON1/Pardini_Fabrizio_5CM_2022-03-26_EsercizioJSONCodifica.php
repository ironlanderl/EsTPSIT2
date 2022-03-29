<!-- Pardini_Fabrizio_5CM_2022-03-26_EsercizioJSON1-->

<html>

<head>

</head>

<body>
    <form method="POST" onsubmit="return forzaCalcolo()">
        <div id="banane">
            Banane
            <input type="number" name="quantitab" id="quantitab">
            <input name="costob" id="costob">
        </div>
        <div id="pomodori">
            Pomodori
            <input type="number" name="quantitap" id="quantitap">
            <input name="costop" id="costop">
        </div>
        <button id="aggiungi">Aggiungi</button>
    </form>
    <?php
        if ($_POST){
            $ordine = array();
            $ordine["frutta"] = array();

            // Controllo se sono state ordinate delle banane
            if (isset($_POST['quantitab']) && $_POST["quantitab"] > 0 && isset($_POST['costob'])){
                $banana = [
                    "nome" => "banane",
                    "quantita" => $_POST["quantitab"],
                    "prezzo" => $_POST["costob"]
                ];
                array_push($ordine["frutta"], $banana);
            }

            // Controllo se sono state ordinate dei pomodori
            if (isset($_POST['quantitap']) && $_POST["quantitap"] > 0 && isset($_POST['costop'])){
                $pomodoro = [
                    "nome" => "pomodori",
                    "quantita" => $_POST["quantitap"],
                    "prezzo" => $_POST["costop"]
                ];
                array_push($ordine["frutta"], $pomodoro);
            }
            echo json_encode($ordine);
        }


?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>