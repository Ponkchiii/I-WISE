<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.3s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white flex-shrink-0">
            <div class="p-4">
                <h1 class="text-2xl font-bold">BOOK WISE</h1>
            </div>
            <nav class="mt-8">
                <div class="sidebar-item px-6 py-3 flex items-center space-x-3 cursor-pointer">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </div>
                <div class="sidebar-item px-6 py-3 flex items-center space-x-3 cursor-pointer">
                    <i class="fas fa-list"></i>
                    <span>
                    <a href="itemlist.php" target="_blank">
                    <button>Item List</button> </a> 
                    </span>
                    
                    
                </div>


                <div class="sidebar-item px-6 py-3 flex items-center space-x-3 cursor-pointer">
                    <i class="fas fa-book"></i>
                    <span>Borrowed Items</span>
                </div>
                <div class="sidebar-item px-6 py-3 flex items-center space-x-3 cursor-pointer">
                    <i class="fas fa-user-shield"></i>
                    <span>Admins</span>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-blue-800 text-white p-4 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button class="md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="bg-blue-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute right-3 top-3 text-blue-300"></i>
                    </div>
                    <button class="relative">
                        <i class="fas fa-bell"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </button>
                    <div class="h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">OVERVIEW</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Borrow New Item Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 card-hover transition-all duration-200 animate-fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Borrow New Item</h2>
                            <i class="fas fa-plus-circle text-blue-600 text-2xl"></i>
                        </div>
                        <p class="text-gray-600 mb-4">Click to add a new borrowing record</p>
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Borrow Item
                        </button>
                    </div>

                    <!-- Available Items Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 card-hover transition-all duration-200 animate-fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Available Items</h2>
                            <i class="fas fa-box-open text-green-500 text-2xl"></i>
                        </div>
                        <p class="text-3xl font-bold text-gray-800 mb-2">1,248</p>
                        <p class="text-gray-500 text-sm">Total items available</p>
                    </div>

                    <!-- Recently Borrowed Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 card-hover transition-all duration-200 animate-fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Recently Borrowed</h2>
                            <i class="fas fa-history text-purple-500 text-2xl"></i>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-book text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Advanced Physics</p>
                                    <p class="text-gray-500 text-sm">2 days ago</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="h-10 w-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <i class="fas fa-laptop text-green-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">MacBook Pro</p>
                                    <p class="text-gray-500 text-sm">1 week ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 card-hover transition-all duration-200 animate-fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Recent Activity</h2>
                            <i class="fas fa-clock text-yellow-500 text-2xl"></i>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <div class="h-10 w-10 bg-purple-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-user-plus text-purple-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">New user registered</p>
                                    <p class="text-gray-500 text-sm">John Doe - 3 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="h-10 w-10 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-book text-red-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Item returned</p>
                                    <p class="text-gray-500 text-sm">Chemistry Textbook - Yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top Borrowed Items Card -->
                    <div class="bg-white rounded-lg shadow-md p-6 card-hover transition-all duration-200 animate-fade-in">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Top Borrowed Items</h2>
                            <i class="fas fa-chart-line text-red-500 text-2xl"></i>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <p class="font-medium">Calculus Textbook</p>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">42 borrows</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="font-medium">Scientific Calculator</p>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">38 borrows</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="font-medium">Microscope</p>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">29 borrows</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
