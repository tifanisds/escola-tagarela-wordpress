<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/3d67ee454fe5eb796f2c3349/script.js"></script>
    <?php wp_head(); ?>
</head>

<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/logomarca-tagarela.png"
                    alt="Escola Tagarela" class="max-w-[170px]"></a>

            <nav class="hidden md:flex space-x-8 font-medium">
                <a href="quem-somos" class="hover:text-red-700 transition-colors duration-300 ease-in-out">Quem Somos</a>
                <a href="#educacao" class="hover:text-red-700 transition-colors duration-300 ease-in-out">Educação</a>
                <a href="#intercambio" class="hover:text-red-700 transition-colors duration-300 ease-in-out">Intercâmbio</a>
            </nav>

            <a href="#formulario"
                class="hidden md:inline-block bg-red-600 text-white px-4 py-2 rounded-xl shadow 
                  hover:bg-red-700 transition-colors duration-300 ease-in-out">
                Aula Experimental
            </a>

            <!-- Hamburger mobile -->
            <button id="menu-btn" class="md:hidden flex items-center px-3 py-2 border rounded text-gray-700 border-gray-700">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <nav class="flex flex-col space-y-2 p-4">
                <a href="pagina-de-quem-somos" class="hover:text-red-700">Quem Somos</a>
                <a href="#educacao" class="hover:text-red-700">Educação</a>
                <a href="#intercambio" class="hover:text-red-700">Intercâmbio</a>
                <a href="#formulario" class="bg-red-600 text-white px-4 py-2 rounded-xl shadow 
                                   hover:bg-red-700 transition-colors duration-300 ease-in-out mt-2 text-center">
                    Aula Experimental
                </a>
            </nav>
        </div>
    </header>