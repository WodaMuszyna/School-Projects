<html>
<head>
    <meta charset="utf-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="header">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <main>
        <div id="left">
            <h3>Ryby drapieżne naszych wód</h3>
                <?php
                    $mysql = mysqli_connect('localhost', 'user', '123', 'wedkowanie');
                    if($result=mysqli_query($mysql, "select id,nazwa,wystepowanie from Ryby where styl_zycia=2"));
                    while($row=mysqli_fetch_row($result)){
                        echo sprintf('%1$s. %2$s, występuje w: %3$s <br>', $row[0], $row[1], $row[2]);
                    }
                ?>
            <ol>
                <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
                <li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
            </ol>
        </div>
        <div id="right">
            <img src="ryba1.jpg" alt="Sum">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </main>
    <div id="footer">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>