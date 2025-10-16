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
        <section id="kategorie"><h2>Kategorie</h2></section>
        <section id="oferta"><h2>Dodaj Oferte</h2></section>
        <section id="logo">
            <a href="index.php"><h1><img src="" alt="super logo(wcale nie kradzione)"></h1></a>
        </section>
    </header>

        <main>
            <div id="container">
           <h2>Dodaj Ofertę</h2>
           <form action="">
            <ul>
                <li><label for='imie'><input type="text" name='imie' id='imie'></label></li>
                <li><label for='nazwisko'><input type="text" name='nazwisko' id='nazwisko'></label></li>
                <li><label for='tel'><input type="tel" name='tel' id='tel'></label></li>
                <li><label for='email'><input type="text" name='email' id='email'></label></li>
                <li><label for='img'><input type="file" name='img' id='img'></label></li>
                <li><label for='cena'><input type="number" name='cena' id='cena'></label></li>
                <li><label for='towar'><input type="text" name='towar' id='towar'></label></li>
                <li><label for=''>Wybierz nazwę kategori:<select>
                    <?php
                    $zap=mysqli_query("$connect","SELECT nazwa FROM kategoria");
                    while($row=mysqli_fetch_array($zap))
                    {
                        echo "<option value=".$row["nazwa"].">".$row["nazwa"]."</option>";
                    }
                    ?>
                </select></label></li>
            </ul>
           </form>
            </div>
            <article>
                <form action="index.php">
                    <input type="text" placeholder="wyszukiwarka">
                    <label for="">cena:
                    <input type="range"min="0" max="100000"></label>
                    <p>segreguj według: </p>

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