<html>
<head>
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
        .blue {
            color: blue;
        }
    </style>
</head>

<body>
    <?php
    /* Ispis brojeva od 1 do 10 */
    
    $i = 1;
    while($i <= 10) {
        echo $i;
        echo "<br>";
        $i++;
    }

    /* Odrediti kolicnik i ostatak pri deljenju brojeva a sa b bez koriscenja operacija / i %. */
    $a = 82;
    $b = 8;
    $ost = $a; $kol = 0;
    while($ost >= $b) {
        $ost = $ost - $b;
        $kol++;
    }
    echo "$a = $kol * $b + $ost";
    echo "<br>";

    /* Ispis parnih brojeva */
    $i = 1;
    while($i <= 10) {
        if($i % 2 == 0) {
            echo $i;
            echo "<br>";
        }
        $i++;
    }

    /* Sest paragrafa naizmenicno obojiti sa tri razlicite boje. */
    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eleifend euismod eros ut hendrerit. Etiam in hendrerit massa, quis lobortis nunc. Praesent commodo, nulla eu eleifend pulvinar, elit metus euismod nulla, vel cursus ex libero eget nulla. Morbi condimentum odio id leo consequat, eu convallis sem semper. Proin posuere libero vitae nunc luctus, at consectetur magna placerat. Morbi nec augue id mi bibendum imperdiet. Nullam tincidunt vel ante ut rutrum. Curabitur volutpat, dui sed fermentum auctor, ante eros laoreet nibh, nec dapibus purus leo ut odio. Nulla ultrices, sem sed venenatis accumsan, arcu sapien semper ex, eget accumsan sem magna non nunc. Curabitur fringilla eros eu euismod scelerisque. Donec mollis pellentesque placerat. Duis a libero sollicitudin, cursus leo et, congue sapien. Sed tempor feugiat molestie. Nam risus dolor, hendrerit in neque non, lacinia elementum orci.";
    $i = 1;
    while($i <= 6) {
        if($i % 3 == 0) {
            echo "<p class='red'>$text</p>";
        }
        elseif($i % 3 == 1) {
            echo "<p class='green'>$text</p>";
        }
        else {
            echo "<p class='blue'>$text</p>";
        }
        $i++;
    }
    /*
        Ako je brojač deljiv sa tri postaviti sliku tri.jpg, ako brojač pri deljenju sa tri daje ostatak jedan postaviti sliku 
        jedan.jpg, a ukoliko brojač pri deljenu sa tri daje ostatak dva postaviti sliku dva.jpg
    */

    /*  Dvostruka vrednost brojeva od 5 do 15 */
    $vr = 0;
    for($i = 5; $i <= 15; $i++) {
        $vr += 2 * $i;
    }
    echo $vr;
    echo "<br>";

    /*
        Suma brojeva od 1 do n
        Suma brojeva od n do m
        Proizvod brojeva od 1 do n
        Proizvod brojeva od n do m
        Suma kvadrata brojeva od n do m
        Imenovati tri sličice 1.png, 2.png i 3.png i for petljom u HTML-u ispisati svaku od sličica uz pomoć brojača

    */
    ?>
</body>
</html>