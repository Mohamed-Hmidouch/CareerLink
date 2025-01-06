<?php
namespace App\Controllers\Auth;

use App\Models\UtilisateurModel;
use com_exception;
use PDO;

class RegisterController{

   
    
    public function register($name,$role,$email, $password){
        
        $userModel = new UtilisateurModel();
        $user =  $userModel->registerUser($name,$role,$email, $password);
        if($user == null)
        {
            echo "user not found please check ...";
        }
        else {
            if($user) {
                header("Location: ../../../src/Views/index.php");
                exit();
            }
        }
    }

}