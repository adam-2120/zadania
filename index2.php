<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Zadania JavaScript</title>
</head>
<body>


<h3>1. SUMA</h3>
<input type="number" id="suma1">
<input type="number" id="suma2">
<button onclick="SUMA()">Oblicz</button>
<p id="wynik1"></p>
<hr>

<h3>2. PODSTAWY</h3>
<input type="number" id="pod1">
<input type="number" id="pod2">
<button onclick="PODSTAWY()">Oblicz</button>
<p id="wynik2"></p>
<hr>

<h3>3. KALKULATOR</h3>
<input type="number" id="kal1">
<input type="number" id="kal2">

<select id="operacja">
    <option value="+">Suma</option>
    <option value="-">Różnica</option>
    <option value="*">Iloczyn</option>
    <option value="/">Iloraz</option>
</select>

<button onclick="KALKULATOR()">Oblicz</button>
<p id="wynik3"></p>
<hr>

<h3>4. MAKS</h3>
<input type="number" id="max1">
<input type="number" id="max2">
<input type="number" id="max3">
<button onclick="MAKS()">Sprawdź</button>
<p id="wynik4"></p>
<hr>

<h3>5. WZROST</h3>
<input type="number" id="wzrost">
<button onclick="WZROST()">Sprawdź</button>
<p id="wynik5"></p>
<hr>

<h3>6. BMI</h3>
<input type="number" id="bmiWzrost" placeholder="Wzrost cm">
<input type="number" id="bmiWaga" placeholder="Waga kg">
<button onclick="BMI()">Oblicz BMI</button>
<p id="wynik6"></p>
<hr>

<h3>7. STARSZY</h3>
<input type="date" id="data1">
<input type="date" id="data2">
<button onclick="STARSZY()">Sprawdź</button>
<p id="wynik7"></p>
<hr>

<h3>8. PRZESTĘPNY</h3>
<input type="number" id="rok">
<button onclick="PRZESTEPNY()">Sprawdź</button>
<p id="wynik8"></p>
<hr>

<h3>9. SIŁA HASŁA</h3>
<input type="text" id="haslo">
<button onclick="SILA()">Sprawdź</button>
<p id="wynik9"></p>
<hr>

<h3>10. TRÓJKĄT</h3>
<input type="number" id="t1">
<input type="number" id="t2">
<input type="number" id="t3">
<button onclick="TROJKAT()">Sprawdź</button>
<p id="wynik10"></p>
<hr>

<h3>11. SZYFR</h3>
<input type="text" id="tekst">
<p id="wynik11"></p>

<script>

function SUMA() {
    let a = parseInt(document.getElementById("suma1").value);
    let b = parseInt(document.getElementById("suma2").value);

    document.getElementById("wynik1").innerHTML =
        "Suma: " + (a + b);
}

function PODSTAWY() {
    let a = parseFloat(document.getElementById("pod1").value);
    let b = parseFloat(document.getElementById("pod2").value);

    document.getElementById("wynik2").innerHTML =
        "Różnica: " + (a - b) +
        "<br>Iloczyn: " + (a * b) +
        "<br>Iloraz: " + (a / b);
}

function KALKULATOR() {

    let a = parseFloat(document.getElementById("kal1").value);
    let b = parseFloat(document.getElementById("kal2").value);
    let op = document.getElementById("operacja").value;

    let wynik;

    if(op == "+") wynik = a + b;
    if(op == "-") wynik = a - b;
    if(op == "*") wynik = a * b;
    if(op == "/") wynik = a / b;

    document.getElementById("wynik3").innerHTML =
        "Wynik: " + wynik;
}

function MAKS() {

    let a = Number(document.getElementById("max1").value);
    let b = Number(document.getElementById("max2").value);
    let c = Number(document.getElementById("max3").value);

    document.getElementById("wynik4").innerHTML =
        "Największa liczba: " + Math.max(a,b,c);
}

function WZROST() {

    let wzrost = Number(document.getElementById("wzrost").value);

    if(wzrost < 150)
        document.getElementById("wynik5").innerHTML = "Niski";

    else if(wzrost > 180)
        document.getElementById("wynik5").innerHTML = "Wysoki";

    else
        document.getElementById("wynik5").innerHTML = "Średni";
}

function BMI() {

    let wzrost = Number(document.getElementById("bmiWzrost").value)/100;
    let waga = Number(document.getElementById("bmiWaga").value);

    let bmi = waga / (wzrost*wzrost);

    if(bmi < 18.5)
        document.getElementById("wynik6").innerHTML =
            bmi.toFixed(2) + " - za mało";

    else if(bmi > 25)
        document.getElementById("wynik6").innerHTML =
            bmi.toFixed(2) + " - za dużo";

    else
        document.getElementById("wynik6").innerHTML =
            bmi.toFixed(2) + " - OK";
}

function STARSZY() {

    let d1 = new Date(document.getElementById("data1").value);
    let d2 = new Date(document.getElementById("data2").value);

    if(d1 < d2)
        document.getElementById("wynik7").innerHTML =
            "Pierwsza osoba jest starsza";

    else if(d2 < d1)
        document.getElementById("wynik7").innerHTML =
            "Druga osoba jest starsza";

    else
        document.getElementById("wynik7").innerHTML =
            "Ten sam wiek";
}

function PRZESTEPNY() {

    let rok = Number(document.getElementById("rok").value);

    if((rok % 4 == 0 && rok % 100 != 0) || rok % 400 == 0)
        document.getElementById("wynik8").innerHTML =
            "Rok przestępny";

    else
        document.getElementById("wynik8").innerHTML =
            "Rok nieprzestępny";
}

function SILA() {

    let haslo = document.getElementById("haslo").value;

    let wynik = "";

    if(haslo.length < 4)
        wynik += "Hasło słabe<br>";
    else if(haslo.length <= 8)
        wynik += "Hasło średnie<br>";
    else
        wynik += "Hasło mocne<br>";

    if(!/[0-9]/.test(haslo))
        wynik += "Brak cyfry<br>";

    if(!/[A-Z]/.test(haslo))
        wynik += "Brak dużej litery<br>";

    if(!/[a-z]/.test(haslo))
        wynik += "Brak małej litery<br>";

    if(!/[!@#$%^&*(),.?\":{}|<>]/.test(haslo))
        wynik += "Brak znaku specjalnego";

    document.getElementById("wynik9").innerHTML = wynik;
}

function TROJKAT() {

    let a = Number(document.getElementById("t1").value);
    let b = Number(document.getElementById("t2").value);
    let c = Number(document.getElementById("t3").value);

    if(a+b>c && a+c>b && b+c>a)
        document.getElementById("wynik10").innerHTML =
            "Można utworzyć trójkąt";

    else
        document.getElementById("wynik10").innerHTML =
            "Nie można utworzyć trójkąta";
}

function SZYFR() {

    let tekst = document.getElementById("tekst").value;
    let wynik = "";

    for(let i=0;i<tekst.length;i++) {

        let znak = tekst[i];

        if(znak >= 'a' && znak <= 'z') {

            wynik += String.fromCharCode(
                ((znak.charCodeAt(0)-97+2)%26)+97
            );
        }
        else if(znak >= 'A' && znak <= 'Z') {

            wynik += String.fromCharCode(
                ((znak.charCodeAt(0)-65+2)%26)+65
            );
        }
        else {
            wynik += znak;
        }
    }

    document.getElementById("wynik11").innerHTML = wynik;
}

document.getElementById("tekst").addEventListener("keyup", SZYFR);

</script>

</body>
</html>
