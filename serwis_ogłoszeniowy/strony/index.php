<?php
$connect = mysqli_connect("localhost", "root", "", "olx");
if (mysqli_connect_errno()) {
    echo "kaput " . mysqli_connect_error();
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adagio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <section id="informacje"  ><a href="informacje.php"><h2>Informacje</h2></a></section>
        <section id="kategorie"><a href="kategorie.php"><h2>Kategorie</h2></a></section>
        <section id="oferta"><h2>Dodaj Oferte</h2></section>
        <section id="logo">
            <a href="index.php"><h1><img src="" alt="super logo(wcale nie kradzione)"></h1></a>
        </section>
    </header>

        <main>
            <div id="container">
                <h2>Oferty</h2>
                <table>
                    <?php
                    $zap=mysqli_query($connect, "SELECT towar.nazwa,towar.cena,towar.kategoria,towar.data_dodania,towar.opis,towar.img,sprzedajacy.imie,sprzedajacy.nazwisko FROM `oferta` INNER JOIN towar on oferta.towar=towar.id_towar INNER join sprzedajacy on oferta.sprzedawca=sprzedajacy.id_sprzedajacego order by Rand();");

                    while($row=mysqli_fetch_array($zap)){
                        echo "<tr>";
                        echo "<td>".$row["nazwa"]."
<br> ".$row["cena"]."<br> ".$row["imie"]." ".$row["nazwisko"]."</td>";
                        echo "<td>".$row["opis"]."</td>";
                        echo "<td>".$row["data_dodania"]."<br> ".$row["kategoria"]."</td>";
                        echo "<td> <img src='".$row["img"]."' id='zdjecie'></td>";
                        echo "</tr>";
                    }

                    ?>
                </table>
            </div>
            <article>
                <form action="index.php">
                    <input type="text" placeholder="wyszukiwarka">
                    <p>Kryteria wyszukiwania </p>
                    <label for="">cena (MAX):
                    <input type="range"min="0" max="100000" id="cena"></label>
                    <script>
                        //pobiera wartość id cena i wyświetla w paragrafie
                    </script>
                    <p>Kategorie: </p>
                        <!-- zapytanie wyświetla kategorie-->

                    <button id="wyszukiwarka" type="button">zastosuj</button>
                </form>
            </article>
        </main>
    <footer>
 <p>Stronę wykonał:Monka i Pifok</p>
    </footer>

</body>
</html>
<?php
mysqli_close($connect);
?>