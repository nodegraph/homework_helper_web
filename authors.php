<?php
// Include config for global variables
require_once 'config.php';

// Authors Data 
$authorsPage = [
    "title" => "Made by YouMacro",
    "description" => "An AI tutor to help you finish homework, while you download videos.",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $pageTitle = "Authors";
    $pageDescription = $authorsPage['description'];
    include '_components/meta.php'; 
    ?>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-50 min-h-screen font-body">
    <!-- Header -->
    <?php include '_components/header.php'; ?>
    
    <!-- Main Section -->
    <section class="pt-24 pb-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="flex items-center justify-center gap-3 text-4xl font-bold text-gray-900 mb-4 font-heading">
                    <?php echo $authorsPage['title']; ?>
                    <img src="./assets/cassette.png" alt="Cassette" class="h-10 w-auto object-contain">
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto font-body mb-8"><?php echo $authorsPage['description']; ?></p>
                
                <a href=".." class="inline-flex items-center px-6 py-3 text-lg font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    <span class="material-icons mr-2">home</span>
                    See Main Page
                </a>
            </div>

            <div class="max-w-3xl mx-auto mt-8 mb-12 bg-blue-100 backdrop-blur-sm rounded-2xl border border-blue-200 p-8 shadow-sm">
                <ul class="space-y-4 text-lg text-gray-600 font-body">
                    <li class="flex items-start">
                        <span class="material-icons text-blue-600 mr-3 mt-1">check_circle</span>
                        <span>You can install the app or run it inside the YouMacro web browser.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-icons text-blue-600 mr-3 mt-1">check_circle</span>
                        <span>Homework Helper is your friendly AI tutor.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-icons text-blue-600 mr-3 mt-1">check_circle</span>
                        <span>Take a photo, take a screenshot, use your voice, type or handwrite to get real-time solutions and help writing essays.</span>
                    </li>
                </ul>
            </div>
            
            <!-- Authors Grid -->
            <div class="grid grid-cols-1 gap-6 max-w-3xl mx-auto">
                <div class="group relative bg-gradient-to-br from-white to-gray-50/50 rounded-3xl border border-gray-200/60 overflow-hidden hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-1">
                    <img src="./assets/youmacro_homework_helper_main.png" 
                         alt="YouMacro Homework Helper Main" 
                         class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="group relative bg-gradient-to-br from-white to-gray-50/50 rounded-3xl border border-gray-200/60 overflow-hidden hover:shadow-xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-1">
                    <img src="./assets/youmacro_homework_helper_chat.png" 
                         alt="YouMacro Homework Helper Chat" 
                         class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include '_components/footer.php'; ?>
</body>
</html>
