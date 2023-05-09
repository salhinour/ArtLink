<?php

include 'C:\xampp\htdocs\ArtLink_Integration\ArtLink_Integration\model\reser.php';
//include 'C:\xampp\htdocs\Zahi\controller\reserC.php';
require_once 'C:\xampp\htdocs\ArtLink_Integration\ArtLink_Integration\config.php';

/**
 * Summary of ClientC
 */
class ClientC
{ 
   
    /**
     * Summary of listclient
     * @return mixed
     */
    public function listclient()
    {
        $sql = "SELECT *from reservation";
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
    function addClient($client)
    {
   $sql = "INSERT INTO reservation(Nom_utilisateur,Prenom_utilisateur,nom_musicien,nom_event,Date_reservation,Heure,Email,Telephone_utilisateur,lieu)
        VALUES(:lastName,:firstName,:nom_musicien,:nom_event,:Date,:Heure,:Email,:Phone,:lieu)";
     
        $db = config::getConnexion();
        try {

            $query = $db->prepare($sql);

            $query->execute([
                'lastName' => $client->getnom(),
                'firstName' => $client->getprenom(),
                'nom_musicien' => $client->getnom_musicien(),
                'nom_event' => $client->getnom_event(),
                'Date' =>  $client->getDate(),
                'Heure' => $client->getHeure(),
                'Email' => $client->getEmail(),
                'Phone' => $client->getPhone(),
                'lieu' => $client->getLieu() 


            ]);
           
                echo "La réservation a été ajoutée avec succès!";
           
        } catch (Exception $e) {
            $e->getMessage();
        }
    }


    /**
     * Summary of DeleteClient
     * @param mixed $id
     * @return void
     */
    public function DeleteClient($id)
    {

        $sql = "DELETE FROM reservation WHERE id_reservation=:id ";
        $db = config::getConnexion();

        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();

            echo "la reservation a été supprimé avec succés";
        } catch (PDOException $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
    function showReser($id)
    {
        $sql = "SELECT * from reservation where id_reservation = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $reservation = $query->fetch();
            return $reservation ;
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
   function updateclient($client, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reservation SET 
                    id_reservation = :id,
                    Nom_utilisateur = :lastName, 
                    Prenom_utilisateur = :firstName, 
                   nom_musicien = :nom_musicien,
                   nom_event = :nom_event,
                    Date_reservation = :Date,
                    Heure = :Heure , 
                    Email =:Email , 
                    Telephone_utilisateur = :Phone , 
                    lieu= :lieu 
                     
                WHERE id_reservation= :id'
            );
            $query->execute([
                'id' => $id,
                'lastName' => $client->getnom(),
                'firstName' => $client->getprenom(),
                'nom_musicien' => $client->getnom_musicien(),
                'nom_event' => $client->getnom_event(),
                'Date' =>  $client->getDate(),
                'Heure' => $client->getHeure(),
                'Email' => $client->getEmail(),
                'Phone' => $client->getPhone(),
                'lieu' => $client->getLieu() 
            


            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

 public static function trireservation()
    {
        $db = config::getConnexion();
        $sql = "SELECT * FROM reservation ORDER by nom_musicien ASC";
        
        $liste = $db->query($sql);
        return $liste;
    }
    
 public static function trireservation2()
    {
        $db = config::getConnexion();
        $sql = "SELECT * FROM reservation ORDER by nom_musicien DESC";
        $liste = $db->query($sql);
        return $liste;
    }  
}
