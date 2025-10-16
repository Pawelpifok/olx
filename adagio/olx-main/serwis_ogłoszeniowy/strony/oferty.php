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
           <form action="oferty.php" method='POST'>
            
                <label for='imie'>Podaj imię:<input type="text" name='imie' id='imie'></label><br><br>
                <label for='nazwisko'>Podaj nazwisko:<input type="text" name='nazwisko' id='nazwisko'></label></li><br><br>
                <label for='tel'>Podaj numer_telefonu:<input type="number" name='tel' id='tel' placeholder="123-456-7890"></label><br><br>
                <label for='email'>Podaj E-mail:<input type="text" name='email' id='email'></label><br><br>
                <label for='towar'>Podaj nazwę towaru:<input type="text" name='towar' id='towar'></label><br><br>
                <label for='img'>Podaj plik zdjęciowy:<input type="file" name='img' id='img'></label><br><br>
                <label for='cena'>Podaj cene:<input type="number" name='cena' id='cena'></label><br><br>
                Wybierz nazwę kategori:<select name='kategoria'>
                    <option value="Artykuły spożywcze" for='kategoria'>Artykuły spożywcze</option>
                    <option value="Odzież i obuwie" for='kategoria'>Odzież i obuwie</option>
                    <option value="Elektronika" for='kategoria'>Elektronika</option>
                    <option value="Meble i wyposażenie wnętrz" for='kategoria'>Meble i wyposażenie wnętrz</option>
                    <option value="Kosmetyki i chemia gospodarcza" for='kategoria'>Kosmetyki i chemia gospodarcza</option>
                </select><br><br>
                <label for="opis">Dodaj opis:</label>
            <textarea name="opis" id="opis" row='10' cols='40' placeholder='Opis....'></textarea>
            <br>
            <button type="submit" name='submit'>Dodaj</button>
           </form>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $imie =$_POST["imie"];
                $nazwisko =$_POST["nazwisko"];
                $tel =$_POST["tel"];
                $email =$_POST["email"];
                $kategoria =$_POST["kategoria"];
                $cena =$_POST["cena"];
                $towar =$_POST["towar"];
                $img =$_POST["img"];
                $opis =$_POST["opis"];
                $zap2 = mysqli_query($connect, "INSERT INTO `sprzedajacy` (`imie`, `nazwisko`, `nr_telefonu`, `e-mail`) VALUES ('$imie','$nazwisko','$tel','$email')");
                $zap3 = mysqli_query($connect, "INSERT INTO `towar` (`nazwa`, `opis`, `kategoria`, `cena`, `img`) VALUES ('$towar','$opis','$kategoria','$cena','$img')");
            }
            
            ?>
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