<?php
include "../../config.php";
require_once 'categorieC.php';
    class musicianC{
        public function listmusicians(){
            $sql="SELECT * FROM musician";
            $pdo=config::getConnexion();
            try {
                $list= $pdo->query($sql);
                return $list->fetchAll(PDO::FETCH_ASSOC);
            } catch(Exception $e) {
                die('Erreur' . $e->getMessage());
            }
        }
        


        public function getbyid($id){
            $sql = "SELECT * FROM musician WHERE id_musician=:id";
            $pdo = config::getConnexion();
            try {
                $list= $pdo->prepare($sql);
                $list->bindValue(":id", $id);
                $list->execute();
                return $list->fetch(PDO::FETCH_ASSOC);
            } catch(Exception $e){
                die('Erreur' . $e->getMessage());
            }
        }


        public function getbyide($id){
            $sql = "SELECT * FROM musician WHERE id_musician=:id";
            $pdo = config::getConnexion();
            try {
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(":id", $id);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                // create Musician object from database result
                $musician = new musician($result['nom_musician'],$result['prenom_musician'],$result['description'],$result['prix'],$result['image'],$result['id_categorie'], $result['likes'], $result['dislikes']);
                return $musician;
            } catch(Exception $e){
                die('Erreur' . $e->getMessage());
            }
        }

        public function listbycategorie($nom){
            $catc=new categorieC();
            $idcategorie=$catc->getbynom($nom);
            $sql = "SELECT * FROM musician WHERE id_categorie=:id";
            $pdo = config::getConnexion();
            try {
                $list= $pdo->prepare($sql);
                $list->bindValue(":id", $idcategorie);
                $list->execute();
                return $list->fetchAll(PDO::FETCH_ASSOC);
            } catch(Exception $e){
                die('Erreur' . $e->getMessage());
            }
        }
        
        
        public function getbynom($nom) {
            $sql = "SELECT * FROM musician WHERE nom_musician LIKE :nom";
            $pdo = config::getConnexion();
            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(":nom", "%$nom%");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die('Erreur' . $e->getMessage());
            }
        }
        

        
        public function deletemusician($id){
            $sql = "DELETE FROM musician WHERE id_musician = :id";
            $pdo=config::getConnexion();
            try {
               
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(":id", $id);
                $stmt->execute();
                echo "musicien a été supprimé avec succès";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
  


        public function addmusician($musician) {

            $pdo=config::getConnexion();
            try {
                $query = "INSERT INTO musician (nom_musician,prenom_musician,description,prix,image,id_categorie) VALUES (:nom_musician,:prenom_musician,:description,:prix,:image,:categorie)";
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(":nom_musician", $musician->getnom());
                $stmt->bindValue(":prenom_musician", $musician->getprenom());
                $stmt->bindValue(":description", $musician->getdescription());
                $stmt->bindValue(":prix", $musician->getprix());
                $stmt->bindValue(":image", $musician->getimage());
                $stmt->bindValue(":categorie", $musician->getcategorie());
                $stmt->execute();
                echo "Le musicien a été ajouté avec succès";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
        
        public function updatemusician($musician,$id){
            $pdo=config::getConnexion();

            try {
                $query = "UPDATE musician
                SET nom_musician = :nom, prenom_musician = :prenom, description = :desc, prix = :prix, image = :image, id_categorie = :categorie
                WHERE id_musician = :id";
 
                $stmt = $pdo->prepare($query);
                $stmt->bindValue(":id", $id);
                $stmt->bindValue(":nom", $musician->getnom());
                $stmt->bindValue(":prenom", $musician->getprenom());
                $stmt->bindValue(":desc", $musician->getdescription());
                $stmt->bindValue(":prix", $musician->getprix());
                $stmt->bindValue(":image", $musician->getimage());
                $stmt->bindValue(":categorie", $musician->getcategorie());
                $stmt->execute();
                echo "Le musician a été modifié avec succès";
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }



        public function incrementlikes($musician,$id){
            $pdo=config::getConnexion();
        
            try {
                $query = "UPDATE musician
                          SET likes = likes + 1
                          WHERE id_musician = :id";
                $params = array(':id' => $id);
        
                $stmt = $pdo->prepare($query);
                $stmt->execute($params);
        
                echo "Le like a été ajouté avec succès";
        
                $musician->setlikes($musician->getlikes()+1);
                $musician = $this->getbyide($id);
                        
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
        
        
        public function incrementdislikes($musician,$id){
            $pdo=config::getConnexion();
        
            try {
                $query = "UPDATE musician
                          SET dislikes = dislikes + 1
                          WHERE id_musician = :id";
                $params = array(':id' => $id);
        
                $stmt = $pdo->prepare($query);
                $stmt->execute($params);
        
                echo "Le like a été ajouté avec succès";
        
                $musician->setlikes($musician->getdislikes()+1);
                $musician = $this->getbyide($id);
                        
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
        
    
    
    
    }

?>