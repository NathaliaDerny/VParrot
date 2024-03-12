<?php 
require_once 'required.php';

function createBrands(PDO $pdo, $name) {
    $sql = 'INSERT INTO brands (name) VALUES (:name)';

    $query = $pdo->prepare($sql);

    $query->bindParam(':name', $name, PDO::PARAM_STR);

}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];

    try{
        $newBrands = createBrands($pdo, $name);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la creation de brands : " . $e->getMessage();
    }
}

function updateBrands(PDO $pdo, $id, $name) 
{
    $sql = 'UPDATE brands SET name = :name WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];

    try{
        $updateBrands = updateBrands($pdo, $name, $id);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la modification de brands : " . $e->getMessage();
    }
}

function deleteBrands(PDO $pdo, $id) 
{
    $sql = 'DELETE FROM brands WHERE id = :id ';
    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    try{
        $deletedBrands = deleteBrands($pdo, $id);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la suppression de brands : " . $e->getMessage();
    }
}