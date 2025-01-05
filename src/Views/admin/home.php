<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - CareerLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const sidebarLabels = document.querySelectorAll('.sidebar-label');
            
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');
            mainContent.classList.toggle('ml-64');
            mainContent.classList.toggle('ml-20');
            sidebarLabels.forEach(label => label.classList.toggle('hidden'));
        }

        function switchTab(tabName) {
            document.getElementById('categoriesTab').classList.remove('text-[#04364A]', 'border-b-2', 'border-[#04364A]');
            document.getElementById('tagsTab').classList.remove('text-[#04364A]', 'border-b-2', 'border-[#04364A]');
            document.getElementById('categoriesTab').classList.add('text-gray-500');
            document.getElementById('tagsTab').classList.add('text-gray-500');
            
            if(tabName === 'categories') {
                document.getElementById('categoriesTab').classList.remove('text-gray-500');
                document.getElementById('categoriesTab').classList.add('text-[#04364A]', 'border-b-2', 'border-[#04364A]');
                document.getElementById('addButton').innerHTML = '<i class="fas fa-plus-circle mr-2"></i>Nouvelle Catégorie';
                document.getElementById('categoriesContent').classList.remove('hidden');
                document.getElementById('tagsContent').classList.add('hidden');
            } else {
                document.getElementById('tagsTab').classList.remove('text-gray-500');
                document.getElementById('tagsTab').classList.add('text-[#04364A]', 'border-b-2', 'border-[#04364A]');
                document.getElementById('addButton').innerHTML = '<i class="fas fa-plus-circle mr-2"></i>Nouveau Tag';
                document.getElementById('categoriesContent').classList.add('hidden');
                document.getElementById('tagsContent').classList.remove('hidden');
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-600 to-blue-400">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-white h-screen w-64 fixed transition-all duration-300 flex flex-col">
        <!-- Logo Area -->
        <div class="p-4 border-b flex items-center justify-between">
        <a href="../index.php" className="text-xl font-bold text-blue-900 sidebar-label">
      CareerLink
         </a>
            <button onclick="toggleSidebar()" class="p-2 hover:bg-gray-100 rounded-lg">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>

        <!-- Navigation Items -->
        <nav class="flex-1 p-4">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg bg-[#DAFFFB] text-[#04364A]">
                        <i class="fas fa-th-large"></i>
                        <span class="sidebar-label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-600">
                        <i class="fas fa-users"></i>
                        <span class="sidebar-label">Candidats</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-600">
                        <i class="fas fa-user-tie"></i>
                        <span class="sidebar-label">Recruteurs</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-600">
                        <i class="fas fa-briefcase"></i>
                        <span class="sidebar-label">Offres</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-600">
                        <i class="fas fa-folder-plus"></i>
                        <span class="sidebar-label">Catégories</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-600">
                        <i class="fas fa-tags"></i>
                        <span class="sidebar-label">Tags</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-600">
                        <i class="fas fa-cog"></i>
                        <span class="sidebar-label">Paramètres</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Logout Button -->
        <div class="p-4 border-t">
            <button class="flex items-center space-x-3 text-red-500 hover:bg-red-50 p-3 rounded-lg w-full">
                <i class="fas fa-sign-out-alt"></i>
                <span class="sidebar-label">Déconnexion</span>
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div id="main-content" class="flex-1 ml-64 transition-all duration-300">
        <div class="container mx-auto px-4 py-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-white mb-2">Tableau de bord Admin</h1>
                <p class="text-[#DAFFFB]">Gérez vos catégories et tags d'emploi</p>
            </div>

            <!-- Main Content Area -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <!-- Tabs -->
                <div class="flex mb-6 border-b">
                    <button id="categoriesTab" onclick="switchTab('categories')" class="flex items-center px-6 py-3 font-medium text-[#04364A] border-b-2 border-[#04364A]">
                        <i class="fas fa-folder-plus w-5 h-5 mr-2"></i>
                        Catégories
                    </button>
                    <button id="tagsTab" onclick="switchTab('tags')" class="flex items-center px-6 py-3 font-medium text-gray-500">
                        <i class="fas fa-tags w-5 h-5 mr-2"></i>
                        Tags
                    </button>
                </div>

                <!-- Search and Add Button -->
                <div class="flex justify-between mb-6">
                    <div class="relative w-96">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#64CCC5] focus:border-[#64CCC5]">
                    </div>
                    <button id="addButton" class="flex items-center px-4 py-2 bg-[#04364A] text-white rounded-lg hover:bg-[#176B87] transition-colors">
                        <i class="fas fa-plus-circle mr-2"></i>
                        Nouvelle Catégorie
                    </button>
                </div>

                <!-- Categories Content -->
                <div id="categoriesContent" class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left bg-gray-50">
                                <th class="px-6 py-3 text-[#04364A]">Nom</th>
                                <th class="px-6 py-3 text-[#04364A]">Nombre d'offres</th>
                                <th class="px-6 py-3 text-[#04364A]">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4">Technologie</td>
                                <td class="px-6 py-4">150</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-3">
                                        <button class="text-[#176B87] hover:text-[#04364A]">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4">Marketing</td>
                                <td class="px-6 py-4">89</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-3">
                                        <button class="text-[#176B87] hover:text-[#04364A]">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Tags Content -->
                <div id="tagsContent" class="overflow-x-auto hidden">
                    <table class="w-full">
                        <thead>
                            <tr class="text-left bg-gray-50">
                                <th class="px-6 py-3 text-[#04364A]">Nom</th>
                                <th class="px-6 py-3 text-[#04364A]">Nombre d'offres</th>
                                <th class="px-6 py-3 text-[#04364A]">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4">PHP</td>
                                <td class="px-6 py-4">45</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-3">
                                        <button class="text-[#176B87] hover:text-[#04364A]">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4">Marketing Digital</td>
                                <td class="px-6 py-4">67</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-3">
                                        <button class="text-[#176B87] hover:text-[#04364A]">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>