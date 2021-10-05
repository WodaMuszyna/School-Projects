<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="banner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div id="mecze">
        <?php
            $conn = mysqli_connect('localhost', 'user', '123', 'egzamin');
            if($result=mysqli_query($conn, 'select zespol1,zespol2,wynik,data_rozgrywki from rozgrywka where zespol1="EVG";'));
            while($row=mysqli_fetch_row($result)){
                echo sprintf('<div id="mecz"><h3>%1$s - %2$s</h3><h4>%3$s</h4><p>w dniu: %4$s</p></div>', $row[0], $row[1], $row[2], $row[3]);
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="main">
        <h2>Reprezentacja Polski</h2>
    </div>
    <div id="left">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form method="POST">
            <input type="number" name="liczba">
            <input type="submit" value="Sprawdź">
        </form>
            <?php
                    if(!empty($_POST['liczba'])){
                        $conn = mysqli_connect('localhost', 'user', '123', 'egzamin');
                        if($result=mysqli_query($conn, 'select imie,nazwisko from zawodnik where pozycja_id='.$_POST['liczba']));
                        while($row=mysqli_fetch_row($result)){
                            echo sprintf('<ul><li><p>%1$s %2$s</p></li></ul>', $row[0], $row[1]);
                        }
                        mysqli_close($conn);
                    }
            ?>
    </div>
    <div id="right">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 0000000000</p>
    </div>
</body>
</html>