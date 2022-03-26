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
            $banana = "{'nome': 'banane', 'quantita': '" . $_POST["quantitab"] . "', prezzo: '" . $_POST["costob"] . "'}";
            //var_dump($banana);
            $pomodori = "{'nome': 'pomodori', 'quantita': '" . $_POST["quantitap"] . "', prezzo: '" . $_POST["costop"] . "'}";
            //var_dump($pomodori);
            $ordine = array();
            $ordine["frutta"] = array();
            array_push($ordine["frutta"], $banana);
            array_push($ordine["frutta"], $pomodori);
            echo(json_encode($ordine));
        }






?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>