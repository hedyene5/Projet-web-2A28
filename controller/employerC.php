<?php
include "../config.php";
class employerC
{
    public function listEmployees()
    {
        $sql = "SELECT * FROM employer";
        $db=config::getConnexion();
        try {
            $liste=$db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Error: ' . $e->getMessage());
        }
    }

public function delete($id)
{
    $sql = "DELETE FROM employer WHERE id = :id";
    $db = config::getConnexion();
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true; // Return true on successful deletion
    } catch(Exception $e){
        die('Error: ' . $e->getMessage());
    }
}}

?>