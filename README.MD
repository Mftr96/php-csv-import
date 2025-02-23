# TITOLO





## Indice

1. [consegna](#consegna)
2. [considerazioni_pre-progetto](#considerazioni-pre-progetto)
3. [strumenti-aggiuntivi](#strumenti-aggiuntivi )
3. [esecuzione](#esecuzione-milestone)
5. [prossimamente-sul-piccolo-schermo](#roadmap)



## Consegna

🎯 Obiettivi
nome repo: php-csv-import

🎯 Obiettivi
L’obiettivo di questo esercizio è creare uno script PHP che legga due file CSV contenenti informazioni su prodotti e categorie, e carichi questi dati in un database MySQL.
 Prima di iniziare con il codice, dovrai anche progettare la struttura del database utilizzando un diagramma E/R.

 Milestone 1
Progettazione Database
• Analizza la struttura dei file prodotti.csv e categorie.csv
• Progetta un diagramma E/R che rappresenti:
o Entità prodotti e categorie
o Attributi di ciascuna entità
o Relazioni tra le entità
o Cardinalità delle relazioni
• Crea il database e le tabelle necessarie

Script PHP 2
• Crea uno script PHP che:
si connetta al database MySQL utilizzando le credenziali appropriate
legga i dati dai file CSV ( prodotti.csv e categorie.csv )
carichi i dati nelle rispettive tabelle del database

Bonus: esponi i dati in una pagina
Crea una pagina PHP funzionante che visualizza i dati dei prodotti in una tabella.
Questo non solo ti aiuterà a verificare il corretto caricamento dei dati, ma offrirà anche
un'interfaccia semplice per gli utenti.

AI Bonus
Ecco alcuni spunti su come potresti sfruttare una chat Al (come ChatGPT) per facilitare
lo svolgimento dell'esercizio:
• generare lo scheletro del codice per connetterti al database MySQL
• generare le query SQL per creare le tabelle prodottie categorie basandoti sul
diagramma E/R che hai progettato
• confrontare diversi metodi per leggere file CSV in PHP e di evidenziarne i pro e i
contro

References
Approfondisci il formato CSV:
https://www.php.net/manual/it/function.fgetcsv.php
https://www.html.it/articoli/file-csv-cosa-sono-come-si-aprono-e-come-crearli/
https://www.geeksforgeeks.org/how-to-parse-a-csv-file-in-php/
## considerazioni pre-progetto


## Esecuzione milestone
milestone 1: vado a elaborare tramite [drawsql](https://drawsql.app/) il diagramma E/R.
Considerazioni fatte per la tabella:
- la tabella categories ha una relazione one to many rispetto ai products.
- i prodotti e la categoria hanno i valori nullable per la possibilità di creare delle bozze di prodotti o categorie 
- la colonna price è segnata con decimal per segnare nel modo piàù orretto possibile il prezzo senza arrotondamenti eccessivi.
![diagramma](/drawSQL-image-export-2025-02-23.png).

Creata la tabella vado quindi su phpMyadmin per creare la tabella relativa a questo progetto.



## Roadmap