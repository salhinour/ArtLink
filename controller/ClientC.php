<?php
require_once "../config.php";
include '../Controller';

class ClientC
{
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

    function addClient($client)
    {

        $sql = "INSERT INTO reservation(Nom_utilisateur,Prenom_utilisateur,nom_musicien,nom_event,Date_reservation,Heure,Email,Telephone_utilisateur,lieu,id_panier)
        VALUES(:lastname,:firstname,:nom_musicien,:nom_event,:date,:time,:email,:phone,:lieu,:id_panier)";
        $db = config::getConnexion();
        try {

            $query = $db->prepare($sql);

            $query->execute([
                'lastname' => $client->getnom(),
                'firstname' => $client->getprenom(),
                'email' => $client->getEmail(),
                'phone' => $client->getPhone(),
                'nom_musicien' => $client->getnom_musicien(),
                'nom_event' => $client->getnom_event(),
                'time' => $client->getHeure(),
                'date' =>  $client->getDate(),
                'lieu' => $client->getLieu() ,
                'id_panier'=> $client->getid_panier()
            ]);
            echo "la reservation a été ajouté avec succés";
        } catch (Exception $e) {
            $e->getMessage();
        }
    }


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


    function updateclient($client, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reservation SET 
                    id_reservation = :id,
                    Nom_utilisateur = :lastname, 
                    Prenom_utilisateur = :firstname, 
                   nom_musicien = :nom_musicien,
                   nom_event = :nom_event,
                    Date_reservation = :date,
                    Heure = :time , 
                    Email =:email , 
                    Telephone_utilisateur =: phone , 
                    lieu=:lieu ,
                    id_panier=:id_panier
                     
                WHERE id_reservation= :id'
            );
            $query->execute([
                'id' => $id,
                'lastname' => $client->getnom(),
                'firstname' => $client->getprenom(),
                'email' => $client->getEmail(),
                'phone' => $client->getPhone(),
                'nom_musicien' => $client->getnom_musicien(),
                'nom_event' => $client->getnom_event(),
                'time' => $client->getHeure(),
                'date' =>  $client->getDate(),
                'lieu' => $client->getLieu() ,
                'id_panier' => $client->getid_panier()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
  
}
