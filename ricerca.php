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
        include 'config.php';
        echo "<br><div class='container'>";
        $nome=$_POST['nome'];
        $cerca=$_POST['cerca'];
        
        switch($cerca){
            case "tutto":
                echo "<h1>Episodi</h1>";
                $sql = "SELECT * FROM episodi WHERE titolo LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a class='link' href='/videos/".$row["id"].".mp4'>Episodio ".$row["id"].": ".$row["titolo"]."</a><br>";
                    }
                }
                echo "<br><h1>Film</h1>";
                $sql = "SELECT * FROM film WHERE titolo LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a class='link' href='/videos/".$row["id"].".mp4'>".$row["titolo"]."</a><br>";
                    }
                }
                echo "<br><h1>Mamodo</h1>";
                $sql = "SELECT * FROM mamodo WHERE nome LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a href='personaggi.php#".$row["nome"]."'>".$row["nome"]."</a><br>";
                    }
                }
                $sql = "SELECT * FROM mamodomillenari WHERE nome LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a href='personaggi.php#".$row["nome"]."'>".$row["nome"]."</a><br>";
                    }
                }
                break;
            case "episodi":
                echo "<h1>Episodi</h1>";
                $sql = "SELECT * FROM episodi WHERE titolo LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a class='link' href='/videos/".$row["id"].".mp4'>Episodio ".$row["id"].": ".$row["titolo"]."</a><br>";
                    }
                }
                break;

            case "film":
                echo "<h1>Film</h1>";
                $sql = "SELECT * FROM film WHERE titolo LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a class='link' href='/videos/".$row["id"].".mp4'>".$row["titolo"]."</a><br>";
                    }
                }
                break;

            case "mamodo":
                echo "<h1>Mamodo</h1>";
                $sql = "SELECT * FROM mamodo WHERE nome LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a href='personaggi.php#".$row["nome"]."'>".$row["nome"]."</a><br>";
                    }
                }
                $sql = "SELECT * FROM mamodomillenari WHERE nome LIKE '%$nome%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<a href='personaggi.php#".$row["nome"]."'>".$row["nome"]."</a><br>";
                    }
                }
                break;
        }
        echo "</div>";
        $conn->close();
    ?>
</body>

</html>