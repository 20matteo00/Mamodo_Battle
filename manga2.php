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
                <a class="nav-link" href="#capitoli">Capitoli</a>
            </li>
        </ul>
    </navbar>
    <br>
    <div class="container">
        <div class="text-center">
            <img src="/images/manga2.jpg" width="25%" height="25%" alt="Zatch Bell" class="img-fluid">
        </div>
        <br>
        <h1 class="titolo" id="trama">Trama</h1><br>
        <p class="trama">
            Cento bambini demoniaci hanno combattuto per determinare chi fosse adatto a diventare 
            il nuovo re del mondo dei demoni. Tuttavia, una volta finita la guerra, 
            un nuovo re è stato incoronato ed ora il mondo dei demoni si ritrova ad attraversare 
            un periodo di pace. O almeno è quello che sembrava all'inizio. La scioccante realtà del regno
            dei demoni dei nostri tempi viene rivelata e tre bambini demone, presi dalla disperazione, 
            fanno una scelta rischiosa.
        </p>
        <br>
        <h1 class="titolo" id="capitoli">Capitoli</h1><br>
        <div class="row">
            <?php
                $c=1;
                for($i=1;$i<=10;$i++){
                    echo '<div class="col-md-2">';
                    echo '<a class="link" href="/manga2/'.$i.'.pdf" download>Capitolo '.$i.'</a>';
                    echo '</div>';
                    if($c%6==0){
                        echo '</div><br><div class="row">';
                    }
                    $c++;
                }
                for($i=1;$i<=1;$i++){
                    echo '<div class="col-md-2">';
                    echo '<a class="link" href="/manga2/S'.$i.'.pdf" download>Capitolo Speciale '.$i.'</a>';
                    echo '</div>';
                    if($c%6==0){
                        echo '</div><br><div class="row">';
                    }
                    $c++;
                }
            ?>
        </div>
        <br>
    </div>
</body>
</html>