<?php
include_once '../../config.php';

class ReclamationC{ 
  public function listClients(){
    $sql="SELECT * from reclamations";
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
    $sql="SELECT * from reclamations";
    $db=config::getConnexion();
    try{
      $list=$db->query($sql);
      return $list;
    }catch (Exception $e){
      die('Erreur' . $e->getMessage());
  }
}
public function delete($idrec)
{
  $sql="DELETE from reclamations where IdReclamation=:idrec";
  $db=config::getConnexion();
  $query=$db->prepare($sql);
  $query->bindValue(':idrec',$idrec);
  try{
    $query->execute();
  }catch (Exception $e){
    die('Erreur' . $e->getMessage());
}
}
public function ajouterRec($reclamations)
{
  $sql="INSERT into reclamations values(Null,:o,:d,:m,:e,:r) ";
  $db=config::getConnexion();
  try{
    $query=$db->prepare($sql);
    $query->execute([
    'd'=>$reclamations->getdate()->format('Y/m/d'),
    'o'=>$reclamations->getobjet(),
    'm'=>$reclamations->getmessage(),
    'e'=>$reclamations->getetat(),
    'r'=>$reclamations->getrating(),
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

public function modifierreclamation($reclamations, $idrec)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE reclamations SET 
                  ObjetRec = :objet,
                     DateRec = :datee,
                     
                     MessageRec= :messagee, 
                     EtatRec = :etat
                WHERE IdReclamation= :idrec'
            );
            $query->execute([
                'idrec' => $idrec,
                'objet' => $reclamations->getobjet(),
                'datee' => $reclamations->getdate()->format('Y/m/d'),
                
                'messagee' =>$reclamations->getmessage(),
                'etat' => $reclamations->getetat()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
           echo $e->getMessage(); 
        }
    }

 public function showClient($id)
    {
        $sql = "SELECT * from reclamations where IdReclamation=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $reclamations = $query->fetch();
            return $reclamations;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


public function getTotalDechetsCount()
    {
        $pdo = config::getConnexion();

        $query = "SELECT COUNT(*) as total FROM reclamations";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['total'];
    }

    public function listPaginatedDechets($offset, $limit)
    {
        $pdo = config::getConnexion();

        $query = "SELECT * FROM reclamations LIMIT $offset, $limit";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>