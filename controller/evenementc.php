<?php
include '../../config.php';

class EvenementC{
    public static  function listevenement(){
        $sql="SELECT * from evenement ";
        $pdo= config::getConnexion();
        try{

            $list=$pdo->query($sql);
            return $list;

        }catch(Exception $e){
            die('Erreur'. $e->getMessage());
        }

    }
    public static  function listevenement2($where_clause){
        $sql="SELECT * from evenement where idtype='$where_clause'";
        $pdo= config::getConnexion();
        try{

            $list=$pdo->query($sql);
            return $list;

        }catch(Exception $e){
            die('Erreur'. $e->getMessage());
        }

    }
    function deleteevenement($id){
        $sql="DELETE from evenement where idevent= :id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(":id",$id);
        try{
            $req->execute();
        }
        catch(PDOException $e){
        die('Erreur'. $e->getMessage());
        }

    }
    function addevenement($evenement)
    {
        $sql="INSERT into evenement VALUES (NULL,:dd,:ti,:disc,:loca,:cap,:img,:idType)";
        $db=config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'dd'=>$evenement->getdateevent()->format('Y/m/d'),
                'ti'=>$evenement->gettitre(),
                'disc'=>$evenement->getdescription(),
                'loca'=>$evenement->getlocalisaton(),
                'cap'=>$evenement->getcapciter(),
                'img'=>$evenement->getimage(),
                'idType'=>$evenement->getIdType()

            ]);
              } catch (Exception $e){
                die('Erreur' . $e->getMessage());
              }       
        }
    
    function showEvenement($id)
    {
        $sql = "SELECT * from evenement where idevent = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $evenement = $query->fetch();
            return $evenement;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function updateEvenement($evenement, $id )
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE evenement SET 
                    dateevent= :dateevent, 
                    titre = :titre, 
                    description = :description, 
                    localisation = :localisation,
                    capaciter=:capaciter,
                    image= :image
                WHERE idevent= :id '
            );
            $query->execute([
                'id' => $id,
                'dateevent' => $evenement->getdateevent()->format('Y/m/d'),
                'titre' => $evenement->gettitre(),
                'description' => $evenement->getdescription(),
                'localisation' => $evenement->getlocalisaton(),
                'capaciter' => $evenement->getcapciter(),
                'image' => $evenement->getimage(),

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "mouch mrigil";
            echo $e->getMessage();
        }
    }
    
}





?>