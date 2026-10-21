<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

<?php
    echo "<h1>Benvenuto utente!</h1>";
    echo "<p>inserisci i tuoi dati nel modulo qui sotto:</p>";
?>

    <form id="mionModulo">
        <label>Nome:</label><br>
        <input type="text" id="nome"><br><br>

        <label>Cognome:</label><br>
        <input type="text" id="cognome"><br><br>

        <label>Età:</label><br>
        <input type="number" id="eta"><br><br>

        <label>Nazionalità:</label><br>
        <input type="text" id="nazionalita"><br><br>

        <button type="button" onclick="salutaUtente()">Invia Dati</button>
    </form>

    <div id="messaggio"></div>

    <script>
        function salutaUtente() {
            let nome = document.getElementById("nome").value;
            let cognome = document.getElementById("cognome").value;
            let eta = document.getElementById("eta").value;
            let nazionalita = document.getElementById("nazionalita").value;

            document.getElementById("messaggio").innerHTML = 
                "<h3>Riepilogo:</h3>" +
                "Ciao <strong>" + nome + " " + cognome + "</strong>! Hai <strong>" + eta + "</strong> anni e la tua nazionalità è <strong>" + nazionalita + "</strong>.";
        }
    </script>

</body>
</html>