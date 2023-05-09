<?php 
    require_once 'C:\xampp\htdocs\Farah\config.php';

    class PanierC {


        function afficherProduit() {
            $sql = "SELECT * FROM reservation";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();

                 $liste = $query->fetchAll();
                return $liste;
            } catch(Exception $e){
				$e->getMessage();
			}
        }

        
         public function modifierQuantite($id_panier, $idevent, $quantite) {
                try {
                    $pdo = config::getConnexion();
                    $sql = "UPDATE panier SET quantite = :quantite WHERE id_panier = :id_panier AND idevent = :idevent";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':quantite', $quantite);
                    $stmt->bindParam(':id_panier', $id_panier);
                    $stmt->bindParam(':idevent', $idevent);
                    $stmt->execute();
                    return true;
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                    return false;
                }
            }
        
        function ajouterAuPanier($panier){
                            
         // $nom_musicien=$panier->getnom_musicien();
          //   $quantite=$panier->getquantite();
             $idevent=$panier->getidevent();
             $quantite=$panier->getquantite();
             //$prixtot=$panier->getprixtot();
            // $price=$panier->getprice();
            // $=$panier->getid_user();
    try {
        $sql = "INSERT INTO panier (id_panier,idevent,quantite)
        VALUES(null,'$idevent','$quantite')";

        $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute();
        } catch(Exception $e){
            $e->getMessage();
        }
    }
    function getProd($name) {
        $sql = "SELECT * FROM evenement where idevent=:name";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['idevent'=>$name
                              
        ]);
        
        $liste = $query->fetch();
        return $liste;
    } catch(Exception $e){
        $e->getMessage();
    }
}
    function findProd($name) {
        $sql = "SELECT * FROM panier where idevent=:name";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['idevent'=>$name
                              
        ]);
        //verifier si le produit est la 
        
        $liste = $query->fetch();
        return $liste;
    } catch(Exception $e){
        $e->getMessage();
    }
}
/*    function modifierPanier($produit,$quantite,$prixtot){
            
           
       
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
            "UPDATE panier SET
             quantite = '$quantite' ,prixtot='$prixtot'
            WHERE id_event = '$produit'");
            $query->execute();
        } catch (PDOException $e) {
            $e->getMessage();

        }
     }*/
   /*   function afficherPanier() {
        // Récupérer le panier depuis la session
        if (isset($_SESSION['panier'])) {
            $panier = $_SESSION['panier'];
            
            // Afficher les événements du panier
            foreach ($panier as $produit) {
                echo $produit['idevent'] . ' - ' . $produit['quantite'] . '<br>';
            }
        } else {
            echo 'Le panier est vide.';
        }
    }*/
    
     function afficherPanier() {
        $sql = "SELECT * FROM panier ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

             $liste = $query->fetchAll();
            return $liste;
        } catch(Exception $e){
            $e->getMessage();
        }
    }

    function supprimerPanier($id){
        $db = config::getConnexion();
        $sql = "DELETE FROM panier where id_panier=:id";

        try {
            $query = $db->prepare($sql);
            $query->execute(['id'=>$id]);
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    /*function viderPanier($id){
        $db = config::getConnexion();
        $sql = "DELETE FROM panier where id_user=:id";

        try {
            $query = $db->prepare($sql);
            $query->execute(['id'=>$id]);
        }catch(Exception $e){
            $e->getMessage();
        }
    }
*/
   /* function afficherClientName($name) {
        $sql = "SELECT * FROM client WHERE LoginClient = :name ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['name'=>$name]);

             $liste = $query->fetch();
            return $liste;
        } catch(Exception $e){
            $e->getMessage();
        }
    }*/
}