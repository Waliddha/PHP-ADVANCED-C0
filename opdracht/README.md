# PHP-ADVANCED - MODULEOPDRACHT

## Uitleg

In deze moduleopdracht krijg je een opdracht met technieken die in de verschillende delen van PHP Advanced zijn behandeld. Niet alle technieken komen aan bod, maar in ieder geval één belangrijke per subonderdeel. De onderdelen van deze module waren:

- Associatieve Array's
- Loops
  - while loop
  - for loop
  - foreach loop
- Form handling
  - POST
  - GET
- Functions
  - met argumenten
  - return

De opdracht is om een kleine pagina te maken met informatie over jezelf. Deze wordt op een mooie manier weergegeven op basis van een formulier waar je stylen kunt aangeven. Na versturing wordt het cv in een tweede scherm getoond.

Dus eerst zie je een formulier in je browser waarin je kunt instellen hoe de pagina over jezelf er uit komt te zien en na het versturen van dat formulier zie je jouw informatie.

De opdracht bestaat uit twee stappen. In de eerste stap (Opdracht 1) maak je al de gehele functionaliteit van de applicatie. In de tweede stap (opdracht 2) ga je aan de slag om dezelfde applicatie op een andere manier (met aangepaste code) uit te voeren.

## Opdracht 1 - Formulier maken en resultaat tonen

1. [ ] Maak twee bestanden aan, genaamd formulier.php en resultaat.php
2. [ ] Plaats in beide bestanden standaard HTMLpagina code. Dit omdat beide bestanden als pagina in de browser moeten worden getoond
3. [ ] Maak in het bestand formulier.php een formulier (method = POST)aan waarin je de volgende html elementen plaatst:

   - input met text waar een voornaam ingevuld kan worden
   - input met text waar een achternaam ingevuld kan worden
   - input met number waar een leeftijd ingevuld kan worden
   - naast deze input velden heb je ook een button nodig met type=submit

4. [ ] Zorg ervoor dat de ingevulde gegevens op resultaat.php zichtbaar worden

## Opdracht 2 - CSS opvragen en gebruiken

Je kunt ook andere gegevens vragen aan de gebruiker van je mini-applicatie. Bijvoorbeeld CSS waardes. Deze `echo` je dan in het CSS deel van de pagina.

1. [ ] Maak de volgende array aan:  

    ```php
    $kleuren = array("red", "blue", "green", "black", "brown")
    ```

2. [ ] De bedoeling is nu een onderdeel toe te voegen aan het bestaande formulier.  Met een foreach-loop kun je door de array loopen en de waardes dien je in het formulier te tonen op zo'n wijze dat je gebruiker deze kan kiezen, je kunt dit doen met een `<SELECT>` of `<input type="radio">`, die keuze mag je zelf maken. Het gaat erom dat je dit onderdeel dynamisch (dus met php) in het formulier maakt.
3. [ ] De gekozen kleur moet je gebruiken om achtergrondkleur van resultaat.php aan te passen. Gebruik CSS!

## Opdracht 2 - Tekstkleur aanpassen

1. [ ] Maak wederom gebruik van de kleuren array
2. [ ] Schrijf code waarmee je een van deze kleuren kan kiezen in het formulier
3. [ ] Schrijf code die de gekozen kleur in resultaat.php laat zien, de tekstkleur moet veranderen

## Opdracht 3 - Een array van lettertypes

1. [ ] Maak een array van de volgende lettertypes
    - `Gill Sans Extrabold, sans-serif`
    - `Verdana, Arial, Helvetica, sans-serif`
    - `Times, Times New Roman, Georgia, serif`
    - `Lucida Console, Courier, monospace`

2. [ ] Schrijf code waarmee je een van deze lettertypes kan kiezen in het formulier
3. [ ] Schrijf code die het gekozen lettertype in resultaat.php laat zien

## Opdracht 4 - Toon alle gekozen waardes

1. [ ] Het gehele formulier bevat, na het invullen bepaalde waardes, schrijf code waarmee je alle gekzoen waardes netjes in een tabel toont, gebruik een foreach-loop

## Opdracht 5 - Check de leeftijd van de persoon

1. [ ] Schrijf code waarmee je checkt of de opgegeven leeftijd grote is dan 18.
2. [ ] Als de persoon jonger is dan toon je volgende tekst: "Je bent jonger dan 18 jaar oud"

## Bronnen

> [W3 Schools - PHP Associative Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
> [W3 Schools - PHP Loops foreach](https://www.w3schools.com/php/php_looping_foreach.asp)
> [W3 Schools - PHP Form handling](https://www.w3schools.com/php/php_forms.asp)
> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)
