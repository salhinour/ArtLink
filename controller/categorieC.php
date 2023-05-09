<?php
require_once '../../config.php';
    class categorieC{
        public function listcategories(){
                $sql="SELECT *from categorie";
                $pdo=config::getConnexion();
                try{

                   $list= $pdo->query($sql);
                   return $list;
                }catch(Exception $e){
                    die('Erreur' . $e->getMessage());
                }
        }


        public function getbyid($id){
            $sql = "SELECT * FROM categorie WHERE id_categorie=:id";
            $pdo = config::getConnexion();
            try {
                $list= $pdo->prepare($sql);
                $list->bindValue(":id", $id);
                $list->execute();
                return $list->fetch(PDO::FETCH_ASSOC);
            } catch(Exception $e){
                die('Erreur'.$e->getMessage());
            }
        }


        public function getbynom($nom_categorie){
            $sql = "SELECT id_categorie FROM categorie WHERE nom_categorie=:nom_categorie";
            $pdo = config::getConnexion();
            try {
                $list= $pdo->prepare($sql);
                $list->bindValue(":nom_categorie", $nom_categorie);
                $list->execute();
                return $list->fetch(PDO::FETCH_ASSOC)['id_categorie'];
            } catch(Exception $e){
                die('Erreur'.$e->getMessage());
            }
        }
        
        

        public function deletecategorie($id){
            $sql = "DELETE FROM categorie WHERE id_categorie = :id";
            $pdo=config::getConnexion();
            try {
               
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(":id", $id);
                $stmt->execute();
                echo "categorie a été supprimé avec succès";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }

        public function addcategorie($c) {

            $pdo=config::getConnexion();
            try {
                $query = "INSERT INTO categorie (nom_categorie) VALUES (:nom)";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(":nom", $c->getnom());
                $stmt->execute();
                echo "Categorie a été ajoutée avec succès";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
        
        public function updatecategorie($c,$id){
            $pdo=config::getConnexion();

            try {
                $query = "UPDATE categorie
                SET nom_categorie = :nom
                WHERE id_categorie = :id";
 
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(":id", $id);
                $stmt->bindValue(":nom", $c->getnom());
                $stmt->execute();
                echo "Categorie a été modifié avec succès";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
    }
?>