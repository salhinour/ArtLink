<?php

include 'C:\xampp\htdocs\farah\model\Panier.php';
require_once 'C:\xampp\htdocs\farah\config.php';

/**
 * Summary of ClientC
 */
class ClientC
{ 
   
    /**
     * Summary of listclient
     * @return mixed
     */
    public function listpanier()
    {
        $sql = "SELECT *from panier";
        $pdo = config::getConnexion();
        try {
            $list = $pdo->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }

    /**
     * Summary of addClient
     * @param mixed $client
     * @return void
     */
    function addpanier($client)
    {
    $db= config::getConnexion();
    try {
        $sql = "INSERT INTO panier (id_reservation, id_panier, quantite, prix) 
                SELECT reservation.id_reservation, :id_panier, :quantite, :prix
                FROM reservation
                WHERE reservation.id_reservation = :id_reservation";
        $query = $db->prepare($sql);
        $query->execute([
            'id_reservation' => $client->getid_reservation(),
            'id_panier' => $client->getid_panier(),
            'quantite' => $client->getqte(),
            'prix' => $client->getprix()
        ]);
        echo "Le panier a été ajouté avec succès!";
    } catch (Exception $e) {
        echo "Une erreur s'est produite lors de l'ajout du panier: " . $e->getMessage();
    } 
}


    /**
     * Summary of DeleteClient
     * @param mixed $id
     * @return void
     */
    public function Deletepanier($id)
    {

        $sql = "DELETE FROM panier WHERE id_panier=:id ";
        $db = config::getConnexion();

        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();

            echo "la panier a été supprimé avec succés";
        } catch (PDOException $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
    function showPanier($id)
    {
        $sql = "SELECT * from panier where id_panier = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $panier= $query->fetch();
            return $panier ;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    /**
     * Summary of updateclient
     * @param mixed $client
     * @param mixed $id
     * @return void
     */
   function updatepanier($client, $id)
    {
        $db = config::getConnexion();
    try {
        $sql = "UPDATE panier
                INNER JOIN reservation ON panier.id_reservation = reservation.id_reservation
                SET panier.id_reservation = :id_reservation,
                    panier.quantite = :quantite,
                    panier.prix = :prix
                WHERE panier.id_panier = :id_panier";
        $query = $db->prepare($sql);
        $query->execute([
            'id_reservation' => $client->getid_reservation(),
            'id_panier' => $client->getid_panier(),
            'quantite' => $client->getqte(),
            'prix' => $client->getprix()
        ]);
        echo "Le panier a été mis à jour avec succès!";
    } catch (Exception $e) {
        echo "Une erreur s'est produite lors de la mise à jour du panier: " . $e->getMessage();
    }
    }
 
}
