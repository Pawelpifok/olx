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
            <ul>
                <li><label for='imie'>Podaj imię:<input type="text" name='imie' id='imie'></label></li><br>
                <li><label for='nazwisko'>Podaj nazwisko:<input type="text" name='nazwisko' id='nazwisko'></label></li><br>
                <li><label for='tel'>Podaj numer_telefonu:<input type="tel" name='tel' id='tel' placeholder="123-456-7890"></label></li><br>
                <li><label for='email'>Podaj E-mail:<input type="text" name='email' id='email'></label></li><br>
                <li><label for='towar'>Podaj nazwę towaru:<input type="text" name='towar' id='towar'></label></li><br>
                <li><label for='img'>Podaj plik zdjęciowy:<input type="file" name='img' id='img'></label></li><br>
                <li><label for='cena'>Podaj cene:<input type="number" name='cena' id='cena'></label></li><br>
                <li>Wybierz nazwę kategori:<select name='kategoria'>
                    <option value="Artykuły spożywcze">Artykuły spożywcze</option>
                    <option value="Odzież i obuwie">Odzież i obuwie</option>
                    <option value="Elektronika">Elektronika</option>
                    <option value="Meble i wyposażenie wnętrz">Meble i wyposażenie wnętrz</option>
                    <option value="Kosmetyki i chemia gospodarcza">Kosmetyki i chemia gospodarcza</option>
                </select></li>
            </ul>
            <button type="submit" name='submit'>Dodaj</button>
           </form>
            </div>
            <?php
            

                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $tel=$_POST["tel"];
                $email=$_POST["email"];
                $kategorie=$_POST["kategoria"];
                $img=$_POST["img"];
                $cena=$_POST["cena"];
                $nazwa=$_POST["towar"];
            
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