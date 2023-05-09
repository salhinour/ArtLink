<?php



include "../../config.php";


class UsersC
{

    public function ajouterUser($User)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO users(username,password,email,phone,role) VALUES (:username, :password, :email, :phone , :role)";

        try {

            $req = $db->prepare($sql);
            $username = $User->getuserName();
            $email = $User->getEmail();
            $password = $User->getPassword();
            $phone = $User->getPhone();
            $role = $User->getRole();



            $req->bindValue(':username', $username);
            $req->bindValue(':email', $email);
            $req->bindValue(':password', $password);
            $req->bindValue(':phone', $phone);
            $req->bindValue(':role', $role);


            $req->execute();


        } catch (Exception $e) {
            die('404:Error');

        }
    }
    public function supprimerUtilisateur($userID)
    {
        
            $db = config::getConnexion();
            $sql = "DELETE FROM users WHERE userID=:userID";
    
            try {
                $req = $db->prepare($sql);
                $req->bindValue(':userID', $userID);
                $req->execute();
            } catch (Exception $e) {
                die('404:Error');
            }
        

    }


    public function showUser($userID)
{
    $db = config::getConnexion();
    $sql = "SELECT * FROM users WHERE userID = :userID";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':userID', $userID);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user) {
            return $user;
        } else {
            return false;
        }

    } catch (PDOException $e) {
        die('404: Error');
    }
}



public function editUser($userID, $username, $email, $password,$phone)
{
    $db = config::getConnexion();
    $sql = "UPDATE users SET username=:username, email=:email, password=:password ,phone=:phone WHERE userID=:userID";
    
    try {
        $req = $db->prepare($sql);
        $req->bindValue(':username', $username);
        $req->bindValue(':email', $email);
        $req->bindValue(':password', $password);
        $req->bindValue(':userID', $userID);
        $req->bindValue(':phone', $phone);
        $req->execute();
    } catch (Exception $e) {
        die('404:Error');
    }
}








    public function modifierUser1($id, $name, $phone, $email, $birthday)
    {

        $sql = "UPDATE users SET name= '$name', phone='$phone', birthday='$birthday', email='$email' WHERE id='$id'";
        $db = config::getConnexion();
        try {
            $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function modifierUser2($id, $adress)
    {

        $sql = "UPDATE users SET adress= '$adress' WHERE id='$id'";
        $db = config::getConnexion();
        try {
            $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function modifierUser3($id, $password)
    {

        $sql = "UPDATE users SET password='$password' WHERE userID='$id'";
        $db = config::getConnexion();
        try {
            $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherUsersearch($search)
    {

        $sql = "SELECT * FROM users WHERE login='$search'";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'login' => $search
            ]);
            return $query->fetch();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function afficherUsertri($cc)
    {

        $sql = "SELECT* FROM users ORDER BY $cc ASC";

        $db = config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



}
?>