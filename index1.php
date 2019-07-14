<html>
<head>
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
        .img {
            width: 200px;
        }
    </style>
</head>

<body>

<?php

    /* Podesiti visinu slike na osnovu zadate promenljive */
    $sirina = 150;
    echo "<img src='images/lights.jpg' width='$sirina'>";
    echo "<br>";


    /* Za preuzeto vreme u satima i minutima, izračunati koliko minuta je prošlo od ponoći */
    $sati = 13;
    $minuti = 39;
    $ukupno = $sati * 60 + $minuti;
    echo $ukupno;
    echo "<br>";

    /*  
        g - 12-hour format of an hour (1 to 12)
        G - 24-hour format of an hour (0 to 23)
        h - 12-hour format of an hour (01 to 12)
        H - 24-hour format of an hour (00 to 23)
        i - Minutes with leading zeros (00 to 59)
    */
    date_default_timezone_set('Europe/Belgrade'); // ako je potrebno da se promeni vremenska zona - kod mene je bilo potrebno :)
    echo date('G:i:s');
    echo "<br>";

    $sati = date('G');
    $minuti = date('i');
    $ukupno = $sati * 60 + $minuti;
    echo "<p>Proslo je: ";
    echo $ukupno;
    echo " minuta od ponoci. </p>";


    /* Za preuzetu godinu sa računara i unetu godinu rođenja izračunati koliko godina ima ta osoba */
    /* 
        Y - A four digit representation of a year
        y - A two digit representation of a year 
    */
    $trenutnaGodina = date('Y');
    $godinaRodjenja = 1989;
    echo "<p>Osoba ima: ";
    echo $trenutnaGodina - $godinaRodjenja;
    echo " godina. </p>";


    /* Za unetu cenu robe, unetu novčanicu kojom kupac plaća račun ispisati koliki kusur kasirka treba da mu vrati. */
    $cenaRobe = 1500;
    $ukupno = 2000;
    echo "<p>Kusur je: ";
    echo $ukupno - $cenaRobe;
    echo " dinara. </p>";


    /* Konverzija valuta iz evra u dinare (i obrnuto)*/
    $evro = 150;
    $dinari = $evro * 117.81;
    echo "<p>Konverzija iz evra u dinare: ";
    echo $dinari;
    echo "</p>";


    /* Konverzija kursa iz dolara u evre, ako znamo dinarsku protivvrednost dolara i dinarsku protivvrednost evra */
    $dolari = 180;
    $dinari = $dolari * 104.84;
    $evri = $dinari / 117.81;
    echo "<p>Konverzija iz dolara u evre: ";
    echo $evri;
    echo "</p>";



    
    /* Temperatura iz Celzijusa u Farenhajte i obrnuto */
    $tempCel = 36;
    $tempFar = $tempCel * 9 / 5 + 32;
    echo "<p>Temperatura u Farenhajtima: ";
    echo $tempFar;
    echo "</p>";

    $tempFar = 99;
    $tempCel = ($tempFar - 32) * 5 / 9;
    echo "<p>Temperatura u Celzijusima: ";
    echo $tempCel;
    echo "</p>";


    /* Temperatura iz Celzijusa u Kelvine */
    $tempCel = 36;
    $tempKel = $tempCel + 273.15;
    echo "<p>Temperatura u Kelvinima: ";
    echo $tempKel;
    echo "</p>";


    /* Zapremina iz galona u litre */
    $galoni = 35;
    $litri = $galoni * 3.785;
    echo $litri;
    echo "<br>";

    /* Za radnika je poznato: broj radnih sati u toku meseca, cena rada po satu,
    kao i procenat odbijanja na osnovu doprinosa. Odrediti bruto i neto dohodak radnika. */
    $sati = 120;
    $cena = 10;
    $procenat = 20;
    $bruto = $sati * $cena;
    $neto = $bruto - $bruto * $procenat / 100;
    echo "Bruto: " . $bruto . "<br>";
    echo "Neto: " . $neto . "<br>";

    /* Pomesano je V1 litara vode temperature T1 sa V2 litara vode temperature T2 stepeni.
    Odrediti temperaturu dobijene mesavine. */


    /* Deljivost brojeva */

    /* Ako je vrednost neke robe x dinara, odrediti najmanju kolicinu novcanica od 500din,
    100din, 10din i 1 din kojima se moze platiti data roba. */
    $cena = 2499;
    $petsto = (int)($cena / 500);
    $cena = $cena % 500;
    $sto = (int) ($cena / 100);
    $cena = $cena % 100;
    $deset = (int) ($cena / 10);
    $jedan = $cena % 10;
    echo $petsto . " " . $sto . " " . $deset . " " . $jedan . "<br>";

    /* Broj minuta pretvoriti u sate i minute */

    $minuti = 850;
    $sati = (int)($minuti / 60);
    $minuti = $minuti % 60;
    echo "<p>Broj sati: ";
    echo $sati;
    echo ", Broj minuta: ";
    echo $minuti;
    echo "</p>";


    /* Da li je broj paran ili neparan */ 
    $broj = 5;
    if($broj % 2 == 0) {
        echo "Broj je paran";
    }
    else {
        echo "Broj je neparan";
    }
    echo "<br>";



    /* if + if-else */

    /* Veci od dva broja */
    $a = 5;
    $b = 9;
    if($a > $b) {
        echo "Veci je $a";
    }
    else {
        echo "Veci je $b";
    }
    echo "<br>";

    /* Bojenje paragrafa */
    $boja = "crvena";
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nulla dui, dignissim vitae semper quis, sagittis eget ex. Phasellus venenatis cursus lectus id tincidunt. Nullam imperdiet tellus dui, feugiat volutpat ex iaculis ut. Suspendisse potenti. Aenean eu mauris massa. Curabitur auctor eget nunc sed malesuada. Proin at pharetra dui. Vestibulum eleifend sagittis quam in venenatis.
    ";
    if($boja == "crvena") {
        echo "<p class='red'>$text</p>";
    }
    else {
        echo "<p class='green'>$text</p>";
    }

    /* Muško/Žensko postaviti avatar */
    $pol = "F";
    if($pol == "M") {
        echo "<img src='images/avatarm.png' class='img'>";
    }
    elseif($pol == "F") {
        echo "<img src='images/avatarf.png' class='img'>";
    }
    else {
        echo "<img src='images/3.jpg' class='img'>";
    }

    /* Ispitati da li je temperatura u plusu ili u minusu */
    $temp = -12;
    if($temp > 0) {
        echo "<p>Temperatura je u plusu</p>";
    }
    else {
        echo "<p>Temperatura je u minusu</p>";
    }

    /* Zamena mesta dvema promenljivama */
    $a = 5; $b = 9;
    $c = $a; $a = $b; $b = $c;
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    /* Za preuzeto vreme ispisati - Dobro jutro, dobar dan ili dobro veče */
    $vreme = date('G');
    if($vreme <= 10) {
        echo "<p>Dobro jutro!</p>";
    }
    elseif($vreme <= 20) {
        echo "<p>Dobar dan!</p>";
    }
    else {
        echo "<p>Dobro vece!</p>";
    }

    /* Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna */
    $godina = date('Y');
    $rodjenja = 1989;
    if($godina - $rodjenja >= 18) {
        echo "<p>Punoletna osoba</p>";
    }
    else {
        echo "<p>Maloletna osoba</p>";
    }

    /* Za preuzeti dan u nedelji ispisati da li je radni dan ili vikend */
    $dan = date('N');
    if($dan <= 5) {
        echo "<p>Radni dan</p>";
    }
    else {
        echo "<p>Vikend</p>";
    }

    /* Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, 
        dobar dan za vreme manje od 18 sati popodne i u ostalim slučajevima ispisati dobro veče.*/
        
    $vreme = date('G');
    if($vreme < 12) {
        echo "<p>Dobro jutro</p>";
    }
    elseif($vreme < 18) {
        echo "<p>Dobar dan</p>";
    }
    else {
        echo "<p>Dobro vece</p>";
    }

    /* Uporediti dva uneta datuma i ispisati koji od njih je raniji. */
    $dan1 = 1; $dan2 = 4;
    $mes1 = 11; $mes2 = 9;
    $god1 = 1989; $god2 = 1989;
    if($god1 < $god2) {
        echo "<p>Prvi je raniji</p>";
    }
    elseif($god1 > $god2) {
        echo "<p>Drugi je raniji</p>";
    }
    elseif($mes1 < $mes2) {
        echo "<p>Prvi je raniji</p>";
    }
    elseif($mes1 > $mes2) {
        echo "<p>Drugi je raniji</p>";
    }
    elseif($dan1 < $dan2) {
        echo "<p>Prvi je raniji</p>";
    }
    elseif($dan1 > $dan2) {
        echo "<p>Drugi je raniji</p>";
    }
    else {
        echo "<p>Datumi su isti</p>";
    }

    /* Radno vreme jedne programerske firme je od 9h do 17h. 
        Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi. */
    $vreme = date('G');
    if($vreme < 9) {
        echo "<p>Ne radi</p>";
    }
    elseif($vreme < 17) {
        echo "<p>Radi</p>";
    }
    else {
        echo "<p>Ne radi</p>";
    }

    /*Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.*/
    $poc1 = 9;
    $kra1 = 16;
    $poc2 = 13;
    $kra2 = 20;
    if($poc2 < $kra1) {
        echo "<p>Preklapaju se</p>";
    }
    else {
        echo "<p>Ne preklapaju se</p>";
    }

/*    Za uneti broj ispitati da li je paran ili nije.
Za uneti broj ispisati da li je deljiv sa 3 ili ne.
Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu.
*/

    /* Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, 
        a ukoliko je veći od nule ispisati njegov sledbenik.*/
    
    $a = 5;
    if($a <= 0) {
        echo $a - 1;
    }
    else {
        echo $a + 1;
    }
    echo "<br>";

    /* Za tri uneta broja ispisati koji od njih ne najveći, koji od njih je srednji, a koji od nih je najmanji.  */
    $a = 5; $b = -4; $c = 6;
    $a = -4; $b = 5; $c = 6;
    $a = 5; $b = 6; $c = -4;
    $a = -4; $b = 6; $c = 5;
    $a = 6; $b = -4; $c = 5;
    $a = 6; $b = 5; $c = -4;
    /*
    if ($a < $b && $b < $c) echo  $a , " " , $b , " " , $c ;
    if ($a < $c && $c < $b) echo  $a , " " , $c , " " , $b  ;
    if ($b < $a && $a < $c) echo  $b , " " , $a , " " , $c  ;
    if ($b < $c && $c < $a) echo  $b , " " , $c , " " , $a  ; 
    if ($c < $a && $a < $b) echo  $c , " " , $a , " " , $b  ;
    if ($c < $b && $b < $a) echo  $c , " " , $b , " " , $a  ;*/
    $max = $a;
    $sr = $b;
    $min = $c;
    if($b > $max) {
        $max = $b;
        $sr = $a;
    }
    if($c > $sr) {
        $min = $sr;
        $sr = $c;
    }
    if($c > $max) {
        $sr = $max;
        $max = $c;
    }
    echo $max . " " . $sr . " " . $min;
    echo "<br>";


    /* Za učitani broj ispitati da li je ceo. */
    $a = 4;
    if($a - ((int)$a) == 0) {
        echo "<p>Ceo je</p>";
    }
    else {
        echo "<p>Nije ceo</p>";
    }
?>
</body>
</html>