<?php
// Template Name: Page Intercâmbio
get_header();
?>

<!-- Hero -->
<section class="relative bg-[#11468C] md:pt-24">
    <div class="absolute inset-0 bg-cover bg-[#11468C] opacity-30 xl:opacity-50"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/page-intercambio.png');"></div>
    <div class="relative max-w-4xl mx-auto text-center py-60 px-6 md:text-end md:mr-[60px]">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
            Intercâmbio Escolar
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 font-semibold">
            Estude inglês em países como Canadá, Estados Unidos e Inglaterra, vivenciando uma experiência cultural e acadêmica única.
        </p>
        <a href="#formulario" class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
            Quero Participar
        </a>
    </div>
</section>

<!-- Destinos -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">
        Nossos Destinos de Intercâmbio
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        <div class="p-6 bg-white rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300 ease-in-out">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/canada.png"
                alt="Intercâmbio no Canadá"
                class="mx-auto mb-4 rounded-xl w-80 h-48 object-cover">
            <h3 class="text-xl font-semibold mb-2 text-red-600">Canadá</h3>
            <p class="text-gray-700">Programas de estudo em cidades como Toronto e Vancouver, combinando aprendizado de inglês com atividades culturais.</p>
        </div>

        <div class="p-6 bg-white rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300 ease-in-out">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/usa.png"
                alt="Intercâmbio nos Estados Unidos"
                class="mx-auto mb-4 rounded-xl w-80 h-48 object-cover">
            <h3 class="text-xl font-semibold mb-2 text-red-600">Estados Unidos</h3>
            <p class="text-gray-700">Experiências acadêmicas em cidades como Nova York e Boston, com foco em conversação, cultura e vivência escolar.</p>
        </div>

        <div class="p-6 bg-white rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300 ease-in-out">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/uk.png"
                alt="Intercâmbio na Inglaterra"
                class="mx-auto mb-4 rounded-xl w-80 h-48 object-cover">
            <h3 class="text-xl font-semibold mb-2 text-red-600">Inglaterra</h3>
            <p class="text-gray-700">Cursos intensivos em Londres e outras cidades, combinando aprendizado de inglês, cultura e turismo educacional.</p>
        </div>
    </div>

</section>

<!-- Benefícios -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
        Por que fazer intercâmbio com a Tagarela?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        <div class="p-6">
            <i class="fa-solid fa-plane-departure text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Experiência Internacional</h3>
            <p class="text-gray-700">Vivencie novas culturas, conheça pessoas de diferentes países e melhore sua fluência no inglês.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-graduation-cap text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Aprendizado Acelerado</h3>
            <p class="text-gray-700">Cursos intensivos e acompanhamento pedagógico para garantir evolução rápida e prática do idioma.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-globe text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Imersão Cultural</h3>
            <p class="text-gray-700">Atividades e passeios que proporcionam vivência cultural real nos destinos escolhidos.</p>
        </div>
    </div>
</section>

<!-- Formulário Intercâmbio -->

<?php echo do_shortcode('[contact-form-7 id="662ea4c" title="Formulário de intercambio"]'); ?>

<!-- Chamada Final -->
<section class="bg-white py-16">
    <div class="max-w-4xl mx-auto text-center px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-800">
            Amplie seus horizontes e aprenda inglês no exterior com a <span class="text-red-800">Tagarela</span>!
        </h2>
    </div>
</section>

<?php
get_footer();
?>