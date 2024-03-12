<?php 
require_once 'required.php';

function createFueltype(PDO $pdo, $name) {
    $sql = 'INSERT INTO fueltype (name) VALUES (:name)';

    $query = $pdo->prepare($sql);

    $query->bindParam(':name', $name, PDO::PARAM_STR);

}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];

    try{
        $newFueltype = createFueltype($pdo, $name);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la creation du fueltype : " . $e->getMessage();
    }
}

function updateFueltype(PDO $pdo, $id, $name) 
{
    $sql = 'UPDATE fueltype SET name = :name WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];

    try{
        $updateFueltype = updateFueltype($pdo, $name, $id);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la modification du fueltype : " . $e->getMessage();
    }
}

function deleteFueltype(PDO $pdo, $id) 
{
    $sql = 'DELETE FROM fueltype WHERE id = :id ';
    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    try{
        $deletedFueltype = deleteFueltype($pdo, $id);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la suppression du fueltype : " . $e->getMessage();
    }
}