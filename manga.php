<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <title>Zatch Bell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        include 'navbar.php';
    ?>
    <navbar class="navbar navbar-expand-md navbar-secondary bg-secondary">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" href="#trama">Trama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ita">Capitoli Ita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#eng">Capitoli Eng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#classifica">Classifica</a>
            </li>
        </ul>
    </navbar>
    <br>
    <div class="container">
        <div class="text-center">
            <img src="/images/manga.jpg" width="25%" height="25%" alt="Zatch Bell" class="img-fluid">
        </div>
        <br>
        <h1 class="titolo" id="trama">Trama</h1><br>
        <p class="trama">
            Ogni mille anni, cento <b>mamodo</b> (in giapponese mamono, cioè demoni) scendono sulla terra per darsi
            battaglia e stabilire <b>il nuovo Re del mondo dei mamodo</b> (in giapponese makai, cioè inferno).
            Per combattersi, i mamodo si avvalgono di unici e potenti incantesimi, la cui formula magica è scritta
            in un <b>misterioso libro</b> che ciascun mamodo porta con sé. Ma i mamodo, non potendo leggere il proprio
            libro autonomamente, devono rifarsi all'aiuto di un <b>compagno umano</b>, il quale è l'unico in grado di
            comprendere l'arcana scrittura del libro e di risvegliarne così il potere contenuto fra le righe.
            Se il libro di un mamodo viene bruciato, questi dovrà tornare nel proprio mondo e ritirarsi dalla corsa
            al trono. L'ultimo rimasto sulla terra verrà incoronato Re del mondo dei mamodo! In Zatch Bell!
            (Konjiki no Gash Bell!!) protagonista della storia è <b>Zatch Bell</b> (Gash Bell), un mamodo bambino dai
            capelli dorati e dal libro di colore rosso che usa il potere del fulmine. A differenza degli altri
            mamodo, egli ha perduto la memoria della vita nel mondo dei mamodo, e ignora la ragione per cui si
            trovi sulla terra. Viene ritrovato in una foresta inglese da un docente universitario, che lo affiderà
            al figlio residente in giappone, <b>Kiyo Takamine</b> (Kiyomaro). Kiyo è un brillante studente di
            quattordici anni che frequenta le scuole medie, nonché, come presto si scoprirà, compagno umano di Zatch.
            Inizialmente fra i due non scorrerà buon sangue, ma, ritrovandosi a combattere fianco a fianco nella
            battaglia per il trono, essi inizieranno a conoscersi ed apprezzarsi... E a conoscere, frammento dopo
            frammento, il passato di Zatch, che, paradossalmente, si farà via via sempre più misterioso. Il motivo
            per cui egli ha perso la memoria, infatti, non è casuale: dietro si cela il preciso lavoro di qualcosa...
            o qualcuno! Durante la storia non mancheranno ovviamente incontri con nuovi compagni!
        </p>
        <br>
        <h1 class="titolo" id="ita">Capitoli Italiano</h1><br>
        <div class="row">
            <?php
                $c=1;
                for($i=1;$i<=54;$i++){
                    echo '<div class="col-md-2">';
                    echo '<a class="link" href="leggiit.php?id='.$i.'">Capitolo '.$i.'</a>';
                    echo '</div>';
                    if($c%6==0){
                        echo '</div><br><div class="row">';
                    }
                    $c++;
                }
                for($i=212;$i<=217;$i++){
                    echo '<div class="col-md-2">';
                    echo '<a class="link" href="leggiit.php?id='.$i.'">Capitolo '.$i.'</a>';
                    echo '</div>';
                    if($c%6==0){
                        echo '</div><br><div class="row">';
                    }
                    $c++;
                }
                echo '<div class="col-md-2">';
                echo '<a class="link" href="leggiit.php?id=0">Speciale Gaiden</a>';
                echo '</div>';
            ?>
        </div>
        <br>
        <h1 class="titolo" id="eng">Capitoli Inglese</h1><br>
        <div class="row">
            <?php
                $i=1;
                for($i=1;$i<=324;$i++){
                    echo '<div class="col-md-2">';
                    echo '<a class="link" href="leggi.php?id='.$i.'">Capitolo '.$i.'</a>';
                    echo '</div>';
                    if($i%6==0){
                        echo '</div><br><div class="row">';
                    }
                }
            ?>
        </div>
        <h1 class="titolo" id="classifica">Classifica</h1><br>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM classifica";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table class='table' align= 'center'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nome</th>
                </tr>
            </thead>
            <tbody>";
            while($row = $result->fetch_assoc()) {
                if($row["rank"] < 11){
                    echo "<tr class='table-success'>";
                }
                else if($row["rank"] < 41){
                    echo "<tr class='table-warning'>";
                }
                else if($row["rank"] < 71){
                    echo "<tr class='table-danger'>";
                }
                else{
                    echo "<tr>";
                }
                echo "<th scope='row'>" . $row["rank"] . "</th>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>
            </table>";
        }

    ?>
    </div>
</body>
</html>