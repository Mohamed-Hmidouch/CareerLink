<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink</title>
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
<body class="bg-light font-sans">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 backdrop-blur-lg bg-white/80 border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-secondary to-primary rounded-xl flex items-center justify-center">
                        <i class="fas fa-briefcase text-2xl text-white"></i>
                    </div>
                    <span class="text-2xl font-bold text-primary">CareerLink</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-primary hover:text-accent transition-colors duration-200">Accueil</a>
                    <a href="#" class="text-primary hover:text-accent transition-colors duration-200">Offres</a>
                    <a href="#" class="text-primary hover:text-accent transition-colors duration-200">Entreprises</a>
                    <a href="#" class="text-primary hover:text-accent transition-colors duration-200">Blog</a>
                    <div class="flex items-center space-x-4">
                        <a href="../Views/auth/register.php" class="border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-2.5 rounded-xl transition-all duration-200">
                            Inscription
                        </a>
                        <a href="../Views/auth/login.php" class="bg-gradient-to-r from-secondary to-primary text-white px-6 py-3 rounded-xl hover:opacity-90 transition-opacity duration-200">
                            Connexion
                        </a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <button class="md:hidden text-primary">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            <!-- Mobile menu (hidden by default) -->
            <div class="md:hidden hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="block text-primary hover:text-accent p-2">Accueil</a>
                    <a href="#" class="block text-primary hover:text-accent p-2">Offres</a>
                    <a href="#" class="block text-primary hover:text-accent p-2">Entreprises</a>
                    <a href="#" class="block text-primary hover:text-accent p-2">Blog</a>
                    <a href="../Views/auth/register.php" class="block text-primary hover:bg-primary hover:text-white p-2 rounded-lg">Inscription</a>
                    <a href="../Views/auth/login.php" class="block bg-gradient-to-r from-secondary to-primary text-white p-2 rounded-lg mt-2">Connexion</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-primary via-secondary to-accent relative overflow-hidden">
        <!-- Abstract Shapes Background -->
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <div class="absolute -top-1/2 -right-1/2 w-96 h-96 bg-light rounded-full blur-3xl"></div>
            <div class="absolute -bottom-1/2 -left-1/2 w-96 h-96 bg-accent rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <div class="relative">
                        <span class="inline-block px-4 py-2 bg-accent/20 text-light rounded-lg text-sm mb-6">
                            Plus de 5000+ emplois disponibles
                        </span>
                        <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white leading-tight">
                            Découvrez votre <br/>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-light">
                                prochain défi
                            </span>
                        </h1>
                        <p class="text-lg text-light mb-8 leading-relaxed max-w-xl">
                            Explorez des milliers d'opportunités professionnelles adaptées à vos compétences et à vos aspirations.
                        </p>
                        <!-- Stats Section -->
                        <div class="flex flex-wrap gap-6">
                            <div class="flex items-center space-x-2 text-light">
                                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-building text-accent"></i>
                                </div>
                                <div>
                                    <div class="font-semibold">2000+</div>
                                    <div class="text-sm text-accent">Entreprises</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-light">
                                <div class="w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-users text-accent"></i>
                                </div>
                                <div>
                                    <div class="font-semibold">10K+</div>
                                    <div class="text-sm text-accent">Candidats</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Form -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 backdrop-blur-xl bg-white/90">
                        <h3 class="text-xl font-semibold mb-6 text-primary">Trouvez votre emploi idéal</h3>
                        <form class="space-y-6">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-search text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    placeholder="Titre du poste ou entreprise" 
                                    class="w-full pl-12 pr-4 py-4 bg-light border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition"
                                >
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-layer-group text-gray-400"></i>
                                    </div>
                                    <select class="w-full pl-12 pr-4 py-4 bg-light border border-gray-200 rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition">
                                        <option>Toutes les catégories</option>
                                        <option>Développement</option>
                                        <option>Design</option>
                                        <option>Marketing</option>
                                        <option>Finance</option>
                                    </select>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-map-marker-alt text-gray-400"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        placeholder="Localisation" 
                                        class="w-full pl-12 pr-4 py-4 bg-light border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition"
                                    >
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-secondary to-primary text-white py-4 rounded-xl hover:opacity-90 transition-opacity duration-200">
                                Rechercher un emploi
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 text-primary">Parcourez par catégorie</h2>
                <p class="text-secondary">Explorez les opportunités par domaine d'expertise</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="group cursor-pointer">
                    <div class="bg-light p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-200">
                        <div class="w-14 h-14 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-200">
                            <i class="fas fa-code text-2xl text-secondary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-primary mb-2">Développement</h3>
                        <p class="text-secondary text-sm">450 offres</p>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="bg-light p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-200">
                        <div class="w-14 h-14 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-200">
                            <i class="fas fa-paint-brush text-2xl text-secondary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-primary mb-2">Design</h3>
                        <p class="text-secondary text-sm">280 offres</p>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="bg-light p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-200">
                        <div class="w-14 h-14 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-200">
                            <i class="fas fa-chart-line text-2xl text-secondary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-primary mb-2">Marketing</h3>
                        <p class="text-secondary text-sm">320 offres</p>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="bg-light p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-200">
                        <div class="w-14 h-14 bg-gradient-to-br from-accent/20 to-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-200">
                            <i class="fas fa-coins text-2xl text-secondary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-primary mb-2">Finance</h3>
                        <p class="text-secondary text-sm">190 offres</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Jobs Section -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-primary mb-2">Offres en vedette</h2>
                    <p class="text-secondary">Les meilleures opportunités sélectionnées pour vous</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Job Cards -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-shadow duration-200">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-light rounded-xl flex items-center justify-center">
                                <img src="https://via.placeholder.com/50" alt="Company Logo" class="w-10 h-10">
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Senior Developer</h3>
                                <p class="text-secondary text-sm">TechCorp</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-accent/20 text-secondary rounded-lg text-sm font-medium">CDI</span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-map-marker-alt text-accent"></i>
                            <span class="text-sm">Paris, France</span>
                        </div>
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-euro-sign text-accent"></i>
                            <span class="text-sm">45K-55K € / an</span>
                        </div>
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-clock text-accent"></i>
                            <span class="text-sm">Temps plein</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary">Publié il y a 2 jours</span>
                            <a href="#" class="text-accent hover:text-secondary font-medium text-sm">
                                Voir l'offre
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-shadow duration-200">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-light rounded-xl flex items-center justify-center">
                                <img src="https://via.placeholder.com/50" alt="Company Logo" class="w-10 h-10">
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">UX/UI Designer</h3>
                                <p class="text-secondary text-sm">DesignStudio</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-accent/20 text-secondary rounded-lg text-sm font-medium">CDD</span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-map-marker-alt text-accent"></i>
                            <span class="text-sm">Lyon, France</span>
                        </div>
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-euro-sign text-accent"></i>
                            <span class="text-sm">35K-45K € / an</span>
                        </div>
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-clock text-accent"></i>
                            <span class="text-sm">Temps plein</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary">Publié il y a 3 jours</span>
                            <a href="#" class="text-accent hover:text-secondary font-medium text-sm">
                                Voir l'offre
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-shadow duration-200">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-light rounded-xl flex items-center justify-center">
                                <img src="https://via.placeholder.com/50" alt="Company Logo" class="w-10 h-10">
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary mb-1">Chef de Projet Marketing</h3>
                                <p class="text-secondary text-sm">MarketPro</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-accent/20 text-secondary rounded-lg text-sm font-medium">Freelance</span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-map-marker-alt text-accent"></i>
                            <span class="text-sm">Bordeaux, France</span>
                        </div>
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-euro-sign text-accent"></i>
                            <span class="text-sm">400€ / jour</span>
                        </div>
                        <div class="flex items-center space-x-2 text-secondary">
                            <i class="fas fa-clock text-accent"></i>
                            <span class="text-sm">Remote</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary">Publié il y a 4 jours</span>
                            <a href="#" class="text-accent hover:text-secondary font-medium text-sm">
                                Voir l'offre
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white">
        <div class="container mx-auto p-4 text-center">
            <p class="text-light">&copy; 2023 CareerLink. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>