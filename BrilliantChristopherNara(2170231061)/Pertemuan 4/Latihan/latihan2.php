<!DOCTYPE html>
<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
            $nama[1]="Brilliant";
            $nama[2]="Christopher";
            $nama[3]="Nara";
            echo $nama[1] . $nama[2] . $nama[3];
            echo"<br>";
            $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;

        ?>
    </body>
</html>