<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Strings</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="input">
            <input type="submit" name="submit" value="Submit">
        </form>
    <style>
        body{
            text-align: center;
            padding:300px;
        }


    </style>
    </body>
</html>
    
<?php

$input = $_POST['input'];
$submit = $_POST['submit'];

$str_length = strlen($input);
$str_ucfirst = ucfirst($input);
$str_toupper = strtoupper($input);
$str_subcount  = substr_count($input, " ");
$str_pos = stripos($input, " ");

if(isset($submit)){

    echo '<pre><p>'. "De String heeft zoveel karakters: ".'</p></pre>';
    echo '<pre><p>' . $str_length. '</p></pre>';

    echo '<pre><p>'. "De eerste letter veranderen we naar een hoofdletter: ".'</p></pre>';
    echo '<pre><p>' . $str_ucfirst. '</p></pre>';

    echo '<pre><p>'. "Nu veranderen we alles naar hoofdletters: ".'</p></pre>';
    echo '<pre><p>' . $str_toupper. '</p></pre>';

    echo '<pre><p>'. "Aantal spaties in de zin: ".'</p></pre>';
    echo '<pre><p>' . $str_subcount. '</p></pre>';

    echo '<pre><p>'. "De eerste spatie zit op positie: ".'</p></pre>';
    echo '<pre><p>' . $str_pos. '</p></pre>';
}
?>