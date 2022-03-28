<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systemy</title>
    <style>
        body
        {
            background-color: blueviolet;
            
        }
        #naglowek1,#naglowek2,#naglowek3
        {
             color:chartreuse;
        }
        button,.motyw,#b4
        {
            background-color: crimson;
            font-size: larger;
        }
        hr
        {
            height: 40px;
           background-color: darkmagenta  ;
        }
    </style>
</head>
<body>
    <h1 id="naglowek1">Kalkulator sytemów liczbowych</h1><hr id="jeden">

    <form method="post">
        <input type="submit" name="Jasny"class="motyw" value="Motyw jasny">
        <input type="submit" name="Ciemny"class="motyw" value="Motyw Ciemny">
        <input type="submit" name="Standardowy"class="motyw" value="Motyw Standardowy">
    </form>

        <?php
        include "Main.php";
        ?>

    <h2 id="naglowek2"><p>Przelicz z systemu dziesiętnego na wybrany: </p></h2>
    <form method="get">
        <input type="text" placeholder="System Dziesiętny" name="dziesietny" id="dziesisentny">
        <input list="systemy" name="systemy" id="systemyliczbowe">
        <datalist id="systemy">
        <option value="Binarny"></option>
        <option value="Szesnastkowy"></option>
        <option value="Ósemkowy"></option>
        <option value="Siódemkowy"></option>
        <option value="Trójkowy"></option>
        <option value="Czwórkowy"></option>
        <option value="Piatkowy"></option>
        </datalist>
        <input type="text" value="<?php echo $wynik;?>" name="wynik" id="wynik" readonly>
        <input type="submit"  name ="oblicz"id="b4" value="Przelicz"></input>
    
    </form>
        
    <h2 id="naglowek3">Przelicz z wybranego systemu na dziesiętny:</h2>
    <form method="get">
        <input type="text" placeholder="Liczba w wybranym systiemie"name="liczba2" id="wybranysystem">
        <input list="systemy2" name="systemy2" id="systemyliczbowe2">
        <datalist id="systemy2">
        <option value="Binarny"></option>
        <option value="Szesnastkowy"></option>
        <option value="Ósemkowy"></option>
        <option value="Siódemkowy"></option>
        <option value="Trójkowy"></option>
        <option value="Czwórkowy"></option>
        <option value="Piatkowy"></option>
    </datalist>
    <input type="text" value="<?php echo $wynik2;?>" name="wynik2" id="wynik" readonly>
    <input type="submit"  name ="oblicz2" id="b4" value="Przelicz"></input>
    </form>
</body>
</html>