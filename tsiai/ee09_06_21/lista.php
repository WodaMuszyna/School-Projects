<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="banner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div id="main">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $conn = mysqli_connect('localhost', 'user', '123', 'dane');
            if($result=mysqli_query($conn, 'select imie,nazwisko,opis,zdjecie from osoby where Hobby_id in (1,2,6);'));
            while($row=mysqli_fetch_row($result)){
                echo sprintf('<div id="zdjecie"><img src="%1$s" alt="przyjaciel"></div>', $row[3]);
                echo sprintf('<div id="opis"><h3>%1$s %2$s</h3><p>Ostatni wpis: %3$s</p></div>', $row[0], $row[1], $row[2]);
                echo '<div id="linia"><hr></div>';
            }
            mysqli_close($conn);
        ?>
    </div>
    <div id="left-footer">
        Stronę wykonał: Karol Jabłoński 4Ti
    </div>
    <div id="right-footer">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </div>
</body>
</html>