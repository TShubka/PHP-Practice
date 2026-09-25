 <h3>Compare Three Numbers</h3>

    <?php
    $a = 12;
    $b = 7;
    $c = 19;

    $greatest = $a;
    $smallest = $a;

    if ($b > $greatest) {
        $greatest = $b;
    }
    if ($c > $greatest) {
        $greatest = $c;
    }

    if ($b < $smallest) {
        $smallest = $b;
    }
    if ($c < $smallest) {
        $smallest = $c;
    }

    echo "Numbers: $a, $b, $c <br>";
    echo "Greatest number: $greatest <br>";
    echo "Smallest number: $smallest <br><br>";

  