<?php
include '../../config.php';
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
  $sql="INSERT into reclamations values(Null,:d,:o,:m,:e) ";
  $db=config::getConnexion();
  try{
    $query=$db->prepare($sql);
    $query->execute([
    'd'=>$reclamations->getdate()->format('Y/m/d'),
    'o'=>$reclamations->getobjet(),
    'm'=>$reclamations->getmessage(),
    'e'=>$reclamations->getetat(),]);
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
                     DateRec = :datee,
                     ObjetRec = :objet,  
                     MessageRec= :messagee, 
                     EtatRec = :etat
                WHERE IdReclamation= :idrec'
            );
            $query->execute([
                'idrec' => $idrec,
                'datee' => $reclamations->getdate()->format('Y/m/d'),
                'objet' => $reclamations->getobjet(),
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

}

?>