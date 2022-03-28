const tekst = "Star Programu";
alert(tekst);

// const number = parseInt(prompt('Enter a decimal number: '));

// // convert to binary
// const result = number.toString(2);
// alert(result);

function Ciemny()
{
    const tekst = "Zmieniony motyw na ciemny";
    alert(tekst);

    let h1 = document.getElementById("naglowek1");
    let h2 = document.getElementById("naglowek2");
    let h3 = document.getElementById("naglowek3");

    document.body.style.backgroundColor = "brown";

    h1.style.color = "white";
    h2.style.color = "white";
    h3.style.color = "white";

    document.getElementById("jeden").style.backgroundColor = "black";

    document.getElementById("b1").style.backgroundColor = "darkgreen";
    document.getElementById("b2").style.backgroundColor = "darkgreen";
    document.getElementById("b3").style.backgroundColor = "darkgreen";
    document.getElementById("b4").style.backgroundColor = "darkgreen";
    document.getElementById("b5").style.backgroundColor = "darkgreen";
    
}

function Jasny()
{

    const tekst = "Zmieniony motyw na jasny";
    alert(tekst);

    let h1 = document.getElementById("naglowek1");
    let h2 = document.getElementById("naglowek2");
    let h3 = document.getElementById("naglowek3");


    document.body.style.backgroundColor = "white";

    h1.style.color = "black";
    h2.style.color = "black";
    h3.style.color = "black";

    document.getElementById("jeden").style.backgroundColor = "cyan";

    document.getElementById("b1").style.backgroundColor = "mintcream";
    document.getElementById("b2").style.backgroundColor = "mintcream";
    document.getElementById("b3").style.backgroundColor = "mintcream";
    document.getElementById("b4").style.backgroundColor = "mintcream";
    document.getElementById("b5").style.backgroundColor = "mintcream";
    
}

function Standardowy()
{

    const tekst = "Zmieniony motyw na STANDARDOWY";
    alert(tekst);

    let h1 = document.getElementById("naglowek1");
    let h2 = document.getElementById("naglowek2");
    let h3 = document.getElementById("naglowek3");

    document.body.style.backgroundColor = "blueviolet";

     h1.style.color = "chartreuse";
    h2.style.color = "chartreuse";
    h3.style.color = "chartreuse";

    document.getElementById("jeden").style.backgroundColor = "darkmagenta";

    document.getElementById("b1").style.backgroundColor = "crimson";
    document.getElementById("b2").style.backgroundColor = "crimson";
    document.getElementById("b3").style.backgroundColor = "crimson";
    document.getElementById("b4").style.backgroundColor = "crimson";
    document.getElementById("b5").style.backgroundColor = "crimson";
    
}

function Podana_Liczba()
{

    let liczba = parseInt(document.getElementById("dziesisentny").value);

    return liczba;

}

function Binarny()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(2);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}

function Szesnastkowy()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(16);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}

function Ósemkowy()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(8);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}

function trójkowy()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(3);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}

function czwórkowy()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(4);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}

function Piątkowy()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(5);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}

function Siódemkowy()
{

    let liczba = Podana_Liczba();
    let wynik = liczba.toString(7);
    
    alert("Wynik: "+ wynik);
    document.getElementById("wynik").value = wynik;

}


function Który_System()
{

    let system = document.getElementById("systemyliczbowe").value;


    switch(system)
    {

        case 'Binarny':
            Binarny();
            return ("Binarny");
        break;

        case 'Szesnastkowy':
            Szesnastkowy();
            return ("Szenastkowy");
        break;

        case 'Ósemkowy':
            Ósemkowy();
            return ("Ósemkowy");
        break;

        case 'Siódemkowy':
            Siódemkowy();
            return ("Siódemkowy");
        break;

        case 'Trójkowy':
            trójkowy();
            return ("Trójkowy");
        break;

        case 'Czwórkowy':
            czwórkowy();
            return ("Czwórkowy");
        break;

        case 'Piatkowy':
            Piątkowy();
            return ("Piatkowy");
        break;

        default:
            return "Nie wybrano";
        break;
    }

}

function Oblicz()
{

   let system = Który_System();
   alert("Wybrany system: " + system);

    let tekst = Podana_Liczba();
    alert("Wybrana liczba: " + tekst);

}

function Podana_Liczba2()
{

    let liczba = document.getElementById("wybranysystem").value;

    return liczba;

}

function z_systemu()
{

    let system = document.getElementById("systemyliczbowe2").value;

    console.log(system);
    switch(system)
    {

        case 'Binarny':
            
            return 2;
        break;

        case 'Szesnastkowy':
            
            return 16;
        break;

        case 'Ósemkowy':
            
            return 8;
        break;

        case 'Siódemkowy':
           
            return 7;
        break;

        case 'Trójkowy':
           
            return 3;
        break;

        case 'Czwórkowy':
           
            return 4;
        break;

        case 'Piatkowy':
           
            return 5;
        break;

        default:
            return "Nie wybrano";
        break;
    }

}

function dziesisentny()
{

    let system = z_systemu();
    console.log(system);
    let liczba = Podana_Liczba2();
    let wynik = parseInt(liczba,system);

    alert("wynik: "+wynik);
    document.getElementById("wynik2").value = wynik;

}

function Na_Dziesietny()
{

    let liczba = Podana_Liczba2();
    alert("wybrana liczba: "+ liczba);
    
    let system = z_systemu();
    alert("wybrany system: "+system)

    dziesisentny();

}
