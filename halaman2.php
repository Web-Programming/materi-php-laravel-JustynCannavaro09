<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Welcome to PHP -- Selamat Datang di PHP";?></h1>

    <?php
        //Variable
        $jam = 12;
        if($jam < 12 ){
            echo "<h3>Selamat Pagi </h3>";
        }else {
            echo "<h3>Selamat Siang </h3>";
        }

        echo "<br/>";
        //Variable Array
        $hoby = ['Makan', 'Minum', 'Tidur'];
        var_dump($hoby);
        if(is_array($hoby)){
            echo "Hoby saya ada".count($hoby);
        }

        echo "<br/>";
        //Type data null
        $nilaiuts = NULL;
        if(is_null($nilaiuts)){ //$nilaiuts == NULL 
            echo "Nilai UTS BELUM KELUAR";
        }

        echo "<br/>";
        
        ?>
</body>
</html>