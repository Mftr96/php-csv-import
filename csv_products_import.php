<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_csv_import";
$csvName = "prodotti.csv";

echo file_exists($csvName) ? "il file $csvName esiste! <br>" : "il file $csvName non è stato trovato, controlla che ci sia nella cartella";
$readCsv = fopen($csvName, 'r');
fgetcsv($readCsv);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    while (($data = fgetcsv($readCsv, 1000, ",")) !== false) { // Legge una riga alla volta
        print_r($data[0]); // Stampa l'array con i dati della riga
        print_r($data[1]); // Stampa l'array con i dati della riga
        $id = $data[0];
        $name = $data[1];
        $price = $data[2];
        $cat_id = $data[3];
        //values has placeholders written with ":", in execute put values you want to insert in db
        $sql = "INSERT IGNORE INTO products (id, `name`, price,category_id) VALUES (:id, :name, :price, :category_id)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id, 'name' => $name, 'price'=>$price,'category_id'=>$cat_id]);
        echo "New record created successfully <br>";
    }

    fclose($readCsv); // Chiudi il file dopo aver finito

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    fclose($readCsv); // Chiudi il file dopo aver finito
}