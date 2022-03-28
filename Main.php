<?php

$wynik = "wynik";
$wynik2 = "wynik";

function liczba_uzytkownika()
{

    $liczba = $_GET['dziesietny'];

    return $liczba;

}

function Binarny()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 2);
    
    
    return $wynik;

}

function Szesnastkowy()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 16);
    
    
    return $wynik;

}

function Ósemkowy()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 8);
    
    
    return $wynik;

}

function Siódemkowy()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 7);
    
    
    return $wynik;

}

function Trójkowy()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 3);
    
    
    return $wynik;

}

function Czwórkowy()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 4);
    
    
    return $wynik;

}

function Piątkowy()
{
    
     $liczba = liczba_uzytkownika();
    $wynik = base_convert($liczba, 10, 5);
    
    
    return $wynik;

}

function który_system()
{

    $system = $_GET['systemy'];

    switch($system)
    {

        case 'Binarny':
            
            return Binarny();
            
        break;

        case 'Szesnastkowy':
            
            return Szesnastkowy();
            
        break;

        case 'Ósemkowy':
            
            return Ósemkowy();
            
        break;

        case 'Siódemkowy':
            
            return Siódemkowy();
           
        break;

        case 'Trójkowy':
            
            return trójkowy();
            
        break;

        case 'Czwórkowy':
           
            return czwórkowy();
            
        break;

        case 'Piatkowy':
           
           return Piątkowy();
            
        break;

        default:
            return "Nie wybrano";
        break;
    }
 

}

function ustal_wynik()
{

    $wynik = $_GET['wynik'];
    $wartosc = strval(który_system());
    $wynik = $wartosc;
    
    return $wynik;
}



function liczba_uzytkownika2()
{

    $liczba = $_GET['liczba2'];

    return $liczba;

}

function Binarny2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 2, 10);
    
    
    return $wynik;

}

function Szesnastkowy2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 16, 10);
    
    
    return $wynik;

}

function Ósemkowy2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 8, 10);
    
    
    return $wynik;

}

function Siódemkowy2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 7, 10);
    
    
    return $wynik;

}

function Trójkowy2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 3, 10);
    
    
    return $wynik;

}

function Czwórkowy2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 4, 10);
    
    
    return $wynik;

}

function Piątkowy2()
{
    
     $liczba = liczba_uzytkownika2();
    $wynik = base_convert($liczba, 5, 10);
    
    
    return $wynik;

}

function ustal_wynik2()
{

    $wynik = $_GET['wynik2'];
    $wartosc = strval(który_system2());
    $wynik = $wartosc;
    
    return $wynik;
}

function który_system2()
{

    $system = $_GET['systemy2'];

    switch($system)
    {

        case 'Binarny':
            
            return Binarny2();
            
        break;

        case 'Szesnastkowy':
            
            return Szesnastkowy2();
            
        break;

        case 'Ósemkowy':
            
            return Ósemkowy2();
            
        break;

        case 'Siódemkowy':
            
            return Siódemkowy2();
           
        break;

        case 'Trójkowy':
            
            return trójkowy2();
            
        break;

        case 'Czwórkowy':
           
            return czwórkowy2();
            
        break;

        case 'Piatkowy':
           
           return Piątkowy2();
            
        break;

        default:
            return "Nie wybrano";
        break;
    }
 

}

if(array_key_exists('oblicz', $_GET))
{

    $wynik = ustal_wynik();

}
else if(array_key_exists('oblicz2', $_GET))
{
    $wynik2 = ustal_wynik2();
}