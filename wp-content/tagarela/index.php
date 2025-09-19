    <?php
    // Template Name: Home Page
    get_header();
    ?>

    <!-- Hero -->
    <section class="relative bg-[#11468C] md:pt-24">
        <div class="absolute inset-0 bg-cover bg-[#11468C] opacity-30 xl:opacity-100"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/hero-img.png');"></div>
        <div class="relative max-w-4xl mx-auto text-center py-60 px-6 md:text-end md:mr-[60px]">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
                Aprenda inglês com professores americanos de verdade!
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 font-semibold">
                Aulas presenciais em Salvador, Lauro de Freitas e Feira de Santana.
            </p>
            <a href="#formulario" class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
                Quero me inscrever
            </a>
        </div>
    </section>

    <!-- Seção Idades -->
    <section id="educacao" class="max-w-7xl mx-auto py-20 px-6">
        <h2 class="text-4xl font-bold text-center text-blue-900 mb-4">Aulas para todas as idades</h2>
        <p class="text-lg md:text-xl text-center text-gray-700 mb-8 max-w-2xl mx-auto">
            Crianças, adolescentes e adultos. Escolha a faixa estária do seu interesse.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition text-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/criancas.png" class="mx-auto rounded-xl mb-4"
                    alt="Crianças sorrindo representando o curso de inglês infantil">
                <h3 class="text-2xl font-semibold text-red-600 mb-3">Crianças</h3>
                <p class="text-gray-600 mb-6 text-lg">Inglês divertido e interativo para os pequenos.</p>
                <a href="cursos-criancas" class="bg-blue-800 text-white px-4 py-2 rounded-xl shadow hover:bg-blue-700 transition-colors duration-300 ease-in-out">
                    Saiba mais
                </a>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition text-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/adolescentes.png" class="mx-auto rounded-xl mb-4"
                    alt="Adolescentes se divertindo representando o curso de inglês para jovens">
                <h3 class="text-2xl font-semibold text-red-600 mb-3">Adolescentes</h3>
                <p class="text-gray-600 mb-6 text-lg">Turmas dinâmicas que preparam para o futuro.</p>
                <a href="cursos-adolescentes" class="bg-blue-800 text-white px-4 py-2 rounded-xl shadow hover:bg-blue-700 transition-colors duration-300 ease-in-out">
                    Saiba mais
                </a>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition text-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/adult.jpg" class="mx-auto rounded-xl mb-4"
                    alt="Adultos felizes representando o curso de inglês para adultos">
                <h3 class="text-2xl font-semibold text-red-600 mb-3">Adulto</h3>
                <p class="text-gray-600 mb-6 text-lg">Inglês prático e objetivo para o dia a dia e o mercado de trabalho.</p>
                <a href="cursos-adultos" class="bg-blue-800 text-white px-4 py-2 rounded-xl shadow hover:bg-blue-700 transition-colors duration-300 ease-in-out">
                    Saiba mais
                </a>
            </div>
        </div>
    </section>

    <!-- Beneficios -->
    <section class="relative bg-blue-50 py-20 px-6">
        <div class="absolute inset-0 bg-cover bg-center bg-fixed"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/classroom.jpg');">
        </div>


        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(217,41,56,1)_0%,rgba(17,70,140,1)_50%,rgba(53,49,64,1)_100%)] opacity-90"></div>

        <div class="relative max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-white mb-12">
                Por que escolher a Tagarela?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="flex bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
                    <div>
                        <h3 class="text-xl font-semibold text-red-600 mb-3">Professores Nativos</h3>
                        <p class="text-gray-700">Aprenda com quem fala inglês desde o berço.</p>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
                    <h3 class="text-xl font-semibold text-red-600 mb-3">Método Moderno</h3>
                    <p class="text-gray-700">Aulas dinâmicas, leves e personalizadas.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
                    <h3 class="text-xl font-semibold text-red-600 mb-3">Ambiente Acolhedor</h3>
                    <p class="text-gray-700">Você se sente em casa enquanto aprende.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Intercâmbio -->
    <section id="intercambio" class="bg-white py-20 px-6 md:px-12 lg:px-24 flex flex-col md:flex-row items-center gap-10">
        <div class="w-full md:w-1/2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/intercambio.jpg" alt="Aluno em frente à Estátua da Liberdade representando o programa de intercâmbio" class="w-full rounded-xl shadow">
        </div>

        <div class="w-full md:w-1/2 text-center md:text-right">
            <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-6">
                Programa de Intercâmbio
            </h2>
            <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-lg md:ml-auto">
                Viva a experiência de estudar no exterior com segurança e suporte completo.
            </p>
            <a href="/intercambio"
                class="bg-red-600 text-white text-lg px-8 py-3 rounded-xl shadow 
                    hover:bg-red-700 transition-colors duration-300 ease-in-out">
                Saiba mais sobre o programa
            </a>
        </div>
    </section>

    <!-- Onde Estamos? -->
    <section class="bg-blue-900 py-20 px-6 md:px-24">
        <div class="mx-auto flex flex-col md:flex-row items-center justify-between gap-8 text-white">

            <div class="flex items-center gap-3">
                <i class="fa-solid fa-location-dot text-5xl text-white"></i>
                <h2 class="text-5xl font-bold">Onde Estamos</h2>
                <hr class="hide border-t-4 border-white opacity-90 md:w-[200px] xl:w-[700px] mt-2 rounded-lg">
            </div>

            <a href="/localizacao"
                class="bg-red-600 text-white text-lg px-8 py-3 rounded-xl shadow 
                hover:bg-red-700 transition-colors duration-300 ease-in-out">
                Ver Unidades
            </a>

        </div>
    </section>


    <!-- Depoimentos -->
    <section>
    </section>

    <?php
    get_footer();
    ?>