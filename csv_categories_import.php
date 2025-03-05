<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_csv_import";
$csvName = "categorie.csv";

echo file_exists($csvName) ? "il file $csvName esiste! <br>" : "il file $csvName non è stato trovato, controlla che ci sia nella cartella";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $readCsv=fopen($csvName,'r');

    while (($data = fgetcsv($readCsv, 1000, ",")) !== false) { // Legge una riga alla volta
        print_r($data[0]); // Stampa l'array con i dati della riga
        print_r($data[1]); // Stampa l'array con i dati della riga
        $id = $data[0];
        $name = $data[1];
        $sql = "INSERT IGNORE INTO categories (id, `name`) VALUES (:id, :name)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id, 'name' => $name]);
        echo "New record created successfully";
    }

    fclose($readCsv); // Chiudi il file dopo aver finito

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    fclose($readCsv); // Chiudi il file dopo aver finito
}