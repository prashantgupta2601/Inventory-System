<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Inventory System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="index.php" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">Inventory System</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="index.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">Home</a>
                        <a href="about.php" class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">About</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <?php if (isset($_SESSION['user'])): ?>
                        <a href="dashboard.php" class="py-2 px-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-400 transition duration-300">Dashboard</a>
                        <a href="logout.php" class="py-2 px-2 bg-red-500 text-white font-semibold rounded hover:bg-red-400 transition duration-300">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="py-2 px-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-400 transition duration-300">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">About Our Inventory System</h1>
                
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">System Features</h2>
                    <ul class="list-disc pl-5 text-gray-600 space-y-2">
                        <li>Real-time inventory tracking</li>
                        <li>Low stock alerts</li>
                        <li>Inventory value calculation</li>
                        <li>Category-based organization</li>
                        <li>Supplier management</li>
                        <li>Responsive dashboard with charts</li>
                        <li>Secure user authentication</li>
                    </ul>
                </div>
                
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Technology Stack</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-700 mb-2">Frontend</h3>
                            <ul class="text-gray-600 space-y-1">
                                <li>HTML5</li>
                                <li>CSS3 with Tailwind CSS</li>
                                <li>JavaScript (ES6+)</li>
                                <li>Chart.js for data visualization</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-700 mb-2">Backend</h3>
                            <ul class="text-gray-600 space-y-1">
                                <li>PHP for server-side logic</li>
                                <li>JSON for data storage</li>
                                <li>RESTful API architecture</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Getting Started</h2>
                    <p class="text-gray-600 mb-4">To begin using the inventory system, please log in with your credentials. If you don't have an account, contact your system administrator.</p>
                    
                    <?php if (!isset($_SESSION['user'])): ?>
                        <a href="login.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                            Login Now
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>