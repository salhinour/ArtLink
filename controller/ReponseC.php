<?php
include '../../config.php';
class ReponseC{ 
  public function listClients(){
    $sql="SELECT * from reponse";
    $pdo=config::getConnexion();
    try{
       $list = $pdo->query($sql);//executer la valeur eli mawjouda fel sql
       return $list;
    }catch (Exception $e){
        die('Erreur' . $e->getMessage());
    }
  }
  public function afficher()
  {
    $sql="SELECT * from reponse";
    $db=config::getConnexion();
    try{
      $list=$db->query($sql);
      return $list;
    }catch (Exception $e){
      die('Erreur' . $e->getMessage());
  }
}
public function delete($idrep)
{
  $sql="DELETE from reponse where IdReponse=:idrep";
  $db=config::getConnexion();
  $query=$db->prepare($sql);
  $query->bindValue(':idrep',$idrep);
  try{
    $query->execute();
  }catch (Exception $e){
    die('Erreur' . $e->getMessage());
}
}
public function ajouterRep($reponse)
{
  $sql="INSERT into reponse values(Null,:d,:r,:idrec) ";
  $db=config::getConnexion();
  try{
    $query=$db->prepare($sql);
    $query->execute([
    'd'=>$reponse->getdate()->format('Y/m/d'),
    'r'=>$reponse->getreponse(),
    'idrec'=>$reponse->getidrec(),

  ]);
  } catch (Exception $e){
    die('Erreur' . $e->getMessage());
}
}
/*function modifierclient($client, $id){
  try {
    $db = config::getConnexion();
    $query = $db->prepare(
      'UPDATE client SET 
        firstName =:nom, 
        lastName=:prenom,
        adress =:adresse,
        dob=:dns,
      WHERE idClient =:id'
    );
    echo "hi";
    $query->execute([
      'id' => $id,
      'nom' => $client->getfirstname(),
      'prenom' => $client->getlastname(),
      'adresse' => $client->getadress(),
      'dns' => $client->getdob()->format('Y/m/d')
      ]);
     
    echo $query->rowCount() . " records UPDATED successfully <br>";
  } catch (PDOException $e) {
    $e->getMessage() ;
  }
}*/

public function modifierreponse($reponse,$idrep)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reponse SET 
                     DateRep = :datee, 
                     ReponseRec= :reponsee
                WHERE IdReponse= :idrep'
            );
            $query->execute([
                'idrep' => $idrep,
                'datee' => $reponse->getdate()->format('Y/m/d'),
                'reponsee' =>$reponse->getreponse()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
           echo $e->getMessage(); 
        }
    }

 public function showClient($id)
    {
        $sql = "SELECT * from reponse where IdReponse=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $reponse = $query->fetch();
            return $reponse;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

}

?>