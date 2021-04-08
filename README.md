# Dokumentace
![hlavni](https://user-images.githubusercontent.com/72737069/114014424-e4592400-9868-11eb-8ab2-e3aef1fd7f33.png)
![prihlaseni](https://user-images.githubusercontent.com/72737069/114016392-1075a480-986b-11eb-9223-96f15e49ff33.png)
![registrace](https://user-images.githubusercontent.com/72737069/114016404-123f6800-986b-11eb-8270-2e85679a797c.png)![ukoly](https://user-images.githubusercontent.com/72737069/114016720-6c402d80-986b-11eb-9c1a-11c083608141.png)




Aplikace, kde si uživatel může zapisovat všechny věci, které chce splnit. Vidí vstupní (input) pole, kde může uživatel přidat novou položku na seznam úkolů. Uživatel může úkol označit jako dokončený a podívat se následně na seznam všech splněné úkoly. Uživatel může upravit nebo smazat úkol. Uživatel si může vytvořit seznam úkolů na aktuální den. Nad seznamem úkolů bude zobrazen ukazatel postupu, při plnění jednotlivých úkolů.
 


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




