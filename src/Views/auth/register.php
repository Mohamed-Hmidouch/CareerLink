<?php
namespace App\auth\register;
require_once "../../../vendor/autoload.php";

use App\Controllers\Auth\RegisterController;
use App\Controllers\Auth\RegisterControllerController;



if(isset($_POST["submit"]))
{

    if(empty($_POST["email"]) && empty($_POST["password"]))
    {
        echo "email or password is empty";
    }
    else{
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        $roleId = ($role == "candidate") ? 2 : 3;
        $authController = new RegisterController();
        $authController->register($name,$role_id,$email,$password);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CareerLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#04364A',
                        secondary: '#176B87',
                        accent: '#64CCC5',
                        light: '#DAFFFB',
                    }
                }
            }
        }

        function checkRole(roleType) {
    const selectedRole = document.querySelector('input[name="role"]:checked').value;
    let roleId;
    
    if(selectedRole === 'candidate') {
        roleId = 2;  // Pour Candidat
    } else if(selectedRole === 'employer') {
        roleId = 3;  // Pour Employeur
    }
    
    console.log('Selected Role:', selectedRole);
    console.log('Role ID:', roleId);
    return roleId;
}

    </script>
</head>
<body class="bg-light">
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <!-- Form Container -->
            <div class="bg-white rounded-xl shadow-xl">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-primary to-secondary rounded-t-xl p-8 text-center">
                    <h2 class="text-3xl font-bold text-white">Créez votre compte</h2>
                    <p class="mt-2 text-light/80">Rejoignez CareerLink et commencez votre nouvelle aventure professionnelle</p>
                </div>

                <!-- Form Content -->
                <form class="p-8 space-y-6" method="Post" action="">
                    <!-- Personal Info Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Last Name -->
                        <div>
                            <label class="block text-sm font-medium text-primary mb-2">
                                Nom
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-user text-secondary"></i>
                                </span>
                                <input 
                                    type="text" name="name"
                                    class="w-full pl-10 pr-4 py-3 bg-light border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent"
                                    placeholder="Doe"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-primary mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-envelope text-secondary"></i>
                            </span>
                            <input 
                                type="email" name="email"
                                class="w-full pl-10 pr-4 py-3 bg-light border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent"
                                placeholder="john.doe@example.com"
                            >
                        </div>
                    </div>

                    <!-- Profile Type -->
                    <div>
    <label class="block text-sm font-medium text-primary mb-4">
        Type de profil
    </label>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Candidate Option -->
        <label class="relative flex cursor-pointer">
        <input
                type="radio"
                name="role"
                value="candidate"
                class="sr-only"
                id="candidate-option"
                onchange="checkRole('candidate')"
            >
            <div
                class="flex items-center w-full p-4 bg-light border border-gray-300 rounded-lg hover:border-accent group transition-colors"
            >
                <div class="flex items-center">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-accent/10 mr-4">
                        <i class="fas fa-user-tie text-accent"></i>
                    </div>
                    <div>
                        <p class="font-medium text-primary">Candidat</p>
                        <p class="text-sm text-secondary">Chercher un emploi</p>
                    </div>
                </div>
            </div>
        </label>

        <!-- Employer Option -->
        <label class="relative flex cursor-pointer">
        <input
                type="radio"
                name="role"
                value="employer"
                class="sr-only"
                id="employer-option"
                onchange="checkRole('employer')"
            >
            <div
                class="flex items-center w-full p-4 bg-light border border-gray-300 rounded-lg hover:border-accent group transition-colors"
            >
                <div class="flex items-center">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-accent/10 mr-4">
                        <i class="fas fa-building text-accent"></i>
                    </div>
                    <div>
                        <p class="font-medium text-primary">Employeur</p>
                        <p class="text-sm text-secondary">Poster des offres</p>
                    </div>
                </div>
            </div>
        </label>
    </div>
</div>


                    <!-- Password Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-medium text-primary mb-2">
                                Mot de passe
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-lock text-secondary"></i>
                                </span>
                                <input 
                                    type="password"  name ="motDePasse"
                                    class="w-full pl-10 pr-4 py-3 bg-light border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent"
                                    placeholder="••••••••"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input 
                                type="checkbox" 
                                class="h-4 w-4 text-accent border-gray-300 rounded focus:ring-accent"
                            >
                        </div>
                        <label class="ml-3 text-sm text-secondary">
                            J'accepte les 
                            <a href="#" class="text-accent hover:text-secondary">conditions d'utilisation</a>
                            et la
                            <a href="#" class="text-accent hover:text-secondary">politique de confidentialité</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-3 px-4 flex justify-center items-center text-white bg-gradient-to-r from-secondary to-primary rounded-lg hover:opacity-90 transition-opacity"
                    >
                        Créer mon compte
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>

                    <!-- Login Link -->
                    <p class="text-center text-sm text-secondary">
                        Déjà inscrit? 
                        <a href="/login" class="text-accent hover:text-secondary font-medium">
                            Connectez-vous ici
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- Toast Message (Example) -->
    <div class="fixed bottom-4 right-4 max-w-md bg-white rounded-lg shadow-lg border border-gray-200 p-4 hidden">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <i class="fas fa-check-circle text-accent text-xl"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-primary">
                    Compte créé avec succès!
                </p>
                <p class="mt-1 text-sm text-secondary">
                    Vous allez être redirigé vers la page de connexion.
                </p>
            </div>
        </div>
    </div>
</body>
</html>