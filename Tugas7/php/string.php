<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
        <?php   
        // SOAL 1
        echo "<h3> Soal No 1</h3>";

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        echo "Kalimat Soal 1 : $first_sentence <br>";
        echo  "Panjang Kalimat soal 1 : " . strlen($first_sentence) . "<br>";
        echo  "Jumlah Kata Soal 1 : " . str_word_count($first_sentence) . "<br>";
        echo "<br>";
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        echo "Kalimat Soal 1 : $second_sentence <br>";
        echo  "Panjang Kalimat soal 1 : " . strlen($second_sentence) . "<br>";
        echo  "Jumlah Kata Soal 1 : " . str_word_count($second_sentence) . "<br>";

        // SOAL 2
        echo "<h3> Soal No 2</h3>";

        $string2 = "I love PHP";
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " . substr($string2, 2, 5) . "<br>";
        echo "Kata Ketiga: " . substr($string2, 6, 9) . "<br>";

        // SOAL 3
        echo "<h3> Soal No 3 </h3>";

        $string3 = "PHP is old but sexy!";
        echo "String: " . $string3 . "<br>";
        echo "Ganti Kalimat: " . str_replace("sexy", "awesome", $string3);
        // OUTPUT : "PHP is old but awesome"

        ?>
</body>
</html>