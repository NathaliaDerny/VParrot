<?php 
require_once 'required.php';

function createGearbox(PDO $pdo, $name) {
    $sql = 'INSERT INTO gearbox (name) VALUES (:name)';

    $query = $pdo->prepare($sql);

    $query->bindParam(':name', $name, PDO::PARAM_STR);

    try {
        $success = $query->execute();
        if ($success) {
            return "La gearBox a été créée.";
        } else {
            return "Erreur lors de la création de la gearBox.";
        }
    } catch (PDOException $pdoException) {
        return "Erreur PDO : " . $pdoException->getMessage();
    } catch (Exception $exception) {
        return "Erreur : " . $exception->getMessage();
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];

    try{
        $newGearbox = createGearbox($pdo, $name);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la creation de la gearBox : " . $e->getMessage();
    }
}

function updateGearbox(PDO $pdo, $id, $name) 
{
    $sql = 'UPDATE gearbox SET name = :name WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);

    try {
        $success = $query->execute();
        if ($success) {
            return "La gearBox a été modifié.";
        } else {
            return "Erreur lors de la modification de la gearBox.";
        }
    } catch (PDOException $pdoException) {
        return "Erreur PDO : " . $pdoException->getMessage();
    } catch (Exception $exception) {
        return "Erreur : " . $exception->getMessage();
    }

}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];

    try{
        $updateGearbox = updateGearbox($pdo, $name, $id);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la modification de la gearBox : " . $e->getMessage();
    }
}

function deleteGearbox(PDO $pdo, $id) 
{
    $sql = 'DELETE FROM gearbox WHERE id = :id ';
    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    
    try {
        $success = $query->execute();
        if ($success) {
            return "La gearBox a été supprimé.";
        } else {
            return "Erreur lors de la suppression de la gearBox.";
        }
    } catch (PDOException $pdoException) {
        return "Erreur PDO : " . $pdoException->getMessage();
    } catch (Exception $exception) {
        return "Erreur : " . $exception->getMessage();
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    try{
        $deletedGearbox = deleteGearbox($pdo, $id);
    } catch(Exception $e) {
        echo "Une erreur est survenue lors de la suppression de la gearBox : " . $e->getMessage();
    }
}
