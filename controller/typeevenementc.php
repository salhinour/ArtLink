<?php
include_once '../../config.php';

class TypeevenementC{
    public static  function listtypeevenement(){
        $sql="SELECT * from typeevenement ";
        $pdo= config::getConnexion();
        try{

            $list=$pdo->query($sql);
            return $list;

        }catch(Exception $e){
            die('Erreur'. $e->getMessage());
        }

    }
    function deletetype($id){
        $sql="DELETE from typeevenement where idtype= :id";
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
    function addtype($typeevent)
    {
        $sql="INSERT into typeevenement VALUES (NULL,:d)";
        $db=config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                
                'd'=>$typeevent->gettype()
            ]);
                
              } catch (Exception $e){
                die('Erreur' . $e->getMessage());
              }       
        }
    
    function showtype($id)
    {
        $sql = "SELECT * from typeevenement where idtype = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $type = $query->fetch();
            return $type;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function updatetype($typeevent, $id )
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE typeevenement SET 
                    typeevent= :typeevent
                    
                WHERE idtype= :id '
            );
            $query->execute([
                'id' => $id,
                'typeevent' => $typeevent->gettype()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "mouch mrigil";
            echo $e->getMessage();
        }
    }
    
}





?>