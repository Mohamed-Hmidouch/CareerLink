<?php
namespace App\auth\login;
require_once "../../../vendor/autoload.php";
use App\Controllers\Auth\AuthController;

session_start();

if(isset($_POST["submit"]))
{

    if(empty($_POST["email"]) && empty($_POST["password"]))
    {
        echo "email or password is empty";
    }
    else{
        $email = $_POST["email"];
        $password = $_POST["password"];
        $authController = new AuthController();
        $authController->login($email, $password);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
    </script>
</head>
<body>
    <div class="min-h-screen bg-gradient-to-br from-primary to-secondary py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-xl shadow-2xl">
                <!-- Header Section -->
                <div class="bg-light rounded-t-xl px-6 py-8 text-center">
                    <h2 class="text-3xl font-bold text-primary">Welcome Back</h2>
                    <p class="mt-2 text-secondary">Please sign in to your account</p>
                </div>

                <!-- Form Section -->
                <div class="p-6">
                    <form action="" method="post" class="space-y-6">
                        <!-- Email Field -->
                        <div>
                            <label class="block text-sm font-medium text-primary">
                                Email Address
                            </label>
                            <div class="mt-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-secondary w-5 h-5"></i>
                                </div>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    required
                                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent bg-light"
                                    placeholder="you@example.com"
                                >
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div>
                            <label class="block text-sm font-medium text-primary">
                                Password
                            </label>
                            <div class="mt-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-secondary w-5 h-5"></i>
                                </div>
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    required
                                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent bg-light"
                                    placeholder="••••••••"
                                >
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input
                                    id="remember-me"
                                    name="remember-me"
                                    type="checkbox"
                                    class="h-4 w-4 text-accent border-gray-300 rounded focus:ring-accent"
                                >
                                <label for="remember-me" class="ml-2 block text-sm text-primary">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-sm">
                                <a href="#" class="font-medium text-accent hover:text-secondary">
                                    Forgot password?
                                </a>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit" name="submit" value="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-secondary to-primary hover:opacity-90 transition-opacity duration-200"
                        >
                            Sign in
                        </button>
                    </form>

                    <!-- Register Link -->
                    <div class="mt-6 text-center">
                        <p class="text-sm text-primary">
                            Don't have an account?
                            <a
                                href="./auth/register/register.php"
                                class="font-medium text-accent hover:text-secondary"
                            >
                                Register here
                            </a>
                        </p>
                    </div>

                    <!-- Social Login Options -->
                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-secondary">Or continue with</span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-3 gap-3">
                            <!-- Google -->
                            <button class="w-full inline-flex justify-center py-2 px-4 border border-gray-200 rounded-lg text-sm font-medium text-secondary bg-white hover:bg-light transition-colors duration-200">
                                <span class="sr-only">Sign in with Google</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.545,12.151L12.545,12.151c0,1.054,0.855,1.909,1.909,1.909h3.536c-0.367,1.99-1.761,3.649-3.535,4.544 c-2.246,1.132-4.982,0.773-6.893-0.841c-2.014-1.697-2.835-4.543-1.984-7.487c0.793-2.745,3.086-4.846,5.872-5.279 c2.777-0.433,5.716,1.296,6.764,3.982" />
                                </svg>
                            </button>

                            <!-- Facebook -->
                            <button class="w-full inline-flex justify-center py-2 px-4 border border-gray-200 rounded-lg text-sm font-medium text-secondary bg-white hover:bg-light transition-colors duration-200">
                                <span class="sr-only">Sign in with Facebook</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </button>

                            <!-- Twitter -->
                            <button class="w-full inline-flex justify-center py-2 px-4 border border-gray-200 rounded-lg text-sm font-medium text-secondary bg-white hover:bg-light transition-colors duration-200">
                                <span class="sr-only">Sign in with Twitter</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>