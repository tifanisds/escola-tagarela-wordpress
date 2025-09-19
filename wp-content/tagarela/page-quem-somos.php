<?php
// Template Name: Quem Somos
get_header();
?>

<!-- Hero Quem Somos -->
<section class="relative">
    <div class="w-full">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/quem-somos-hero.png" alt="">
    </div>
    <div class="relative max-w-4xl mx-auto text-center py-20 px-5">
        <h1 class="text-4xl md:text-5xl font-bold text-red-700 mb-6 drop-shadow-lg">
            Quem Somos
        </h1>
        <p class="text-lg md:text-xl text-gray-800 mb-8 font-semibold leading-relaxed">
            A Escola Tagarela nasceu para transformar o aprendizado de inglês em uma experiência divertida e eficaz.
            Criada por apaixonados por idiomas, nossa missão sempre foi mostrar que aprender pode ser leve e motivador.
            <br><br>
            Hoje, somos referência em ensino inovador, com professores dedicados e métodos que unem prática, cultura e tecnologia.
            Aqui, aprender inglês é mais do que estudar: é abrir portas para novas oportunidades.
        </p>
        <a href="aula-experimental" class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg md:text-xl shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
            Quero me inscrever
        </a>
    </div>

</section>

<!-- Valores -->
<section class="py-20 px-6 bg-blue-900">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-12">Nossos Valores</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-blue-100 rounded-2xl p-8 shadow hover:shadow-xl transition transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
                <h3 class="text-2xl font-semibold text-red-600 mb-3">Excelência</h3>
                <p class="text-gray-700 text-lg">Compromisso em oferecer sempre o melhor em ensino de inglês.</p>
            </div>
            <div class="bg-blue-100 rounded-2xl p-8 shadow hover:shadow-xl transition transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
                <h3 class="text-2xl font-semibold text-red-600 mb-3">Inovação</h3>
                <p class="text-gray-700 text-lg">Métodos modernos, tecnologia e criatividade no aprendizado.</p>
            </div>
            <div class="bg-blue-100 rounded-2xl p-8 shadow hover:shadow-xl transition transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
                <h3 class="text-2xl font-semibold text-red-600 mb-3">Acolhimento</h3>
                <p class="text-gray-700 text-lg">Ambiente seguro, amigável e motivador para todos os alunos.</p>
            </div>
        </div>
    </div>
</section>

<!-- Equipe -->
<section class="bg-white py-20 px-6">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-900 mb-2">Nossa Equipe</h2>
        <h3 class="text-xl font-bold text-blue-800 mb-12">Professores nativos dedicados ao aprendizado de todos os níveis</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-xl transition transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/professor1.png" alt="Marina Santos professora da turma infantil" class="mx-auto rounded-full mb-4 w-32 h-32 object-cover">
                <h3 class="text-2xl font-semibold text-red-600 mb-2">Marina Santos</h3>
                <p class="text-gray-700 text-lg">Professora da turma infantil</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-xl transition transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/professor2.png" alt="João Barreto professor da turma de adolescentes" class="mx-auto rounded-full mb-4 w-32 h-32 object-cover">
                <h3 class="text-2xl font-semibold text-red-600 mb-2">João Barreto</h3>
                <p class="text-gray-700 text-lg">Professor da turma dos adolescentes</p>
            </div>
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-xl transition transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/professor3.png" alt="Ísis Amaral professora da turma de adultos" class="mx-auto rounded-full mb-4 w-32 h-32 object-cover">
                <h3 class="text-2xl font-semibold text-red-600 mb-2">Ísis Amaral</h3>
                <p class="text-gray-700 text-lg">Professora da turma dos adultos</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>