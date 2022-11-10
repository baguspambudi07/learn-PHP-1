<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP Jilid 2</title>
</head>
<body>
    <h1>Array PHP</h1>
    <?php 
//----------String Methods---------- 
        //strlen && str_word_count
        //str_replace(find,replace,string)
        //str_repeat(text,times); str_shuffle(text)
        //$text="Hai Semuanya";
        //echo strlen($text);

//----------Tipe data array----------
        //$kotak= array("anjing","kurakura","koala");
        //print_r($kotak);  
        
//----------metode array----------
        //array,unique,_reverse, shuffle, count, sort
            //print_r( array_unique($kotak));

//----------Associative array----------
        //key => isi
            $data = array ("nama" => "hilman" ,
                           "umur" => 21 ,
                           "kerja" => "pengacara"
                          );

        //print_r($data);
            //echo "Namanya Adalah " . $data("nama")


    ?>





</body>
</html>