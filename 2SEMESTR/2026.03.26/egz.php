<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="samochod.css">
    <title>Komis Samochodów</title>
</head>
<body>

<header><h1>Kup dziś samochód!</h1></header>

   <section id="lewy">
<img src="samochod1.png",alt='samochod'>
<p><h4>Witamy w naszym komisie samochodowym. Mamy szeroki wybór aut</h4></p>
    </section>
    <section id="środkowy">
<p><h3>Lista dostępnych samochodów:</h3></p>
<?php
$conn = mysqli_connect("localhost","root","","auto");
        $query = "SELECT marka, model FROM `samochody`;";
        $result= mysqli_query($conn, $query);
        echo"<ul>";
        while($row=mysqli_fetch_array($result)){
       echo "<li>".$row['marka']." ".$row['model']."</li>";
        };
       echo"</ul>";
        mysqli_close($conn);
?>
    </section>
    <section id="prawy">
    <p><h3>Dziaj Polecamy Toyotę:</h3></p>
    <?php
        $conn = mysqli_connect("localhost","root","","auto");
        $query = "SELECT * FROM samochody where marka = 'Toyota'";
        $result= mysqli_query($conn, $query);
        echo"<ul>";
         while($row=mysqli_fetch_array($result)){
        echo "<li  style='list-style-type: none;'>".$row['id']."/".$row['marka']."/".$row['rocznik']."/".$row['kolor']."/".$row['stan']."/"."</li>";
         };
        echo"</ul>";
   
    mysqli_close($conn);
    ?>
</section>

<footer><a href="https://tenor.com/pl/view/what-joe-biden-huh-gif-4802875385642975671">zapytania</a> Autor:MarcinL</footer>
   
</body>
</html>