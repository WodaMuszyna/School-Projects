<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artykuły papiernicze</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="banner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>
    <div id="lewy">
        <h2>Kontakt</h2>
        <p>telefon: 444333222 <br> e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja2.png" alt="promocja">
    </div>
    <div id="srodkowy">
        <h2>Promocja 10% obejmuje artykuły:</h2>
        <ul>
            <?php
                $conn = mysqli_connect('localhost', 'user', '123', 'sklep');
                if($result=mysqli_query($conn, 'select nazwa from towary where promocja=1;'));
                while($row=mysqli_fetch_row($result)){
                    echo sprintf('<li>%1$s</li>', $row[0]);
                }
                mysqli_close($conn);
            ?>
        </ul>
    </div>
    <div id="prawy">
        <h2>Cena wybranego artykułu w promocji:</h2>
        <form method="POST">
            <select name="produkt" id="produkt">
            <?php
                    $conn = mysqli_connect('localhost', 'user', '123', 'sklep');
                    if($result=mysqli_query($conn, 'select nazwa from towary where promocja=1;'));
                    while($row=mysqli_fetch_row($result)){
                        echo sprintf('<option value="%1$s">%1$s</option>', $row[0]);
                    }
                    mysqli_close($conn);
            ?>
            </select>
            <input type="submit" name="submit" value="WYBIERZ"><br>
            <?php
                    if(isset($_POST['submit'])){
                        $conn = mysqli_connect('localhost', 'user', '123', 'sklep');
                        if($result=mysqli_query($conn, sprintf('select cena from towary where nazwa="%1$s";', $_POST['produkt'])));
                        while($row=mysqli_fetch_row($result)){
                            $cena = round(($row[0]*0.9), 2);
                            echo sprintf('<div>Cena: %1$s</div>', $cena);
                        }
                        mysqli_close($conn);
                    }
            ?>
        </form>
    </div>
    <div id="stopka">
        <h3>Autor strony: Karol Jabłoński 4Ti</h3>
    </div>
</body>
</html>