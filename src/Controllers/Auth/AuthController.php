<?php
namespace App\Controllers\Auth;

use App\Models\UtilisateurModel;
use com_exception;
use PDO;

class AuthController{

   
    
    public function login($email, $password){
        
        $userModel = new UtilisateurModel();
        $user =  $userModel->findUserByEmailAndPassword($email, $password);
        if($user == null)
        {
            echo "user not found please check ...";
        }
        else {
            if($user->getRole()->getTitle() == "Admin") {
                header("Location: ../../../src/Views/admin/home.php");
                exit();
            }
            elseif($user->getRole()->getTitle() == "candidate") {
                header("Location: ../../../src/Views/candidate/home.php");
                exit();
            }
            elseif($user->getRole()->getTitle() == "recruiter") {
                header("Location: ../../../src/Views/recruiter/home.php");
                exit();
            }
        }
    }

}