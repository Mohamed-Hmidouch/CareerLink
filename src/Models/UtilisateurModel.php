<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\Utilisateur;
use App\Config\Database;
use PDO;

class UtilisateurModel{
    private $conn;

    public function __construct() {
            $db = new Database();
            $this->conn = $db->getconnection();
    }

    public function findUserByEmailAndPassword($email, $password){
        $query = "SELECT Utilisateur.id , Utilisateur.email , Utilisateur.motDePasse, Role.id as role_id , Role.nom as `role`
        FROM Utilisateur join Role
         on Role.id = Utilisateur.roleId
          where Utilisateur.email = :email and Utilisateur.motDePasse = :password";
   
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         if(!$row){
         return null;
         }
         else{
            $role = new Role($row["role_id"], $row["role"]);
            return new Utilisateur($row['id'],$row["email"],$role,$row["motDePasse"]);
         }
    }
}