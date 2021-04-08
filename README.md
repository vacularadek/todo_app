# Dokumentace
Aplikace, kde si uživatel může zapisovat všechny věci, které chce splnit. Vidí vstupní (input) pole, kde může uživatel přidat novou položku na seznam úkolů. Uživatel může úkol označit jako dokončený a podívat se následně na seznam všech splněné úkoly. Uživatel může upravit nebo smazat úkol. Uživatel si může vytvořit seznam úkolů na aktuální den. Nad seznamem úkolů bude zobrazen ukazatel postupu, při plnění jednotlivých úkolů.

![hlavni](https://user-images.githubusercontent.com/72737069/114013251-a0195400-9867-11eb-96eb-5d7883b1e43e.png) style="max-width:50%;"

## Použité programy: 
- Visual Studio Code
- Brackets

## Funkce, podmínky:
- if (isset($_GET['err']))  -> chybové hlášky, v tomto případě se kontroluje, zdali skript nepřijal hlášku, když ano, definuje v proměnné číselný typ, v opačném případě nuluje promněnou
- foreach($data as $d)  -> cyklus pro každý řádek v DB, v závorce je každý řádek rozdělen do pole
- if($d['splneno']==0) ->  kontrola, zdali je úkol nesplněný, když není, je možnost jej označit za splněný, v opačném případě už nelze označit

## CSS: 
- header -> nastavuje vzhled, umístění a zarovnání headeru
- body -> odstraní okraje 




