<?php
// Template Name: Page Idades - Adulto
get_header();
?>

<!-- Hero -->
<section class="relative bg-[#11468C] md:pt-24">
    <div class="absolute inset-0 bg-cover bg-[#11468C] opacity-30 xl:opacity-100"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/page-idades-adultos.png');"></div>
    <div class="relative max-w-4xl mx-auto text-center py-60 px-6 md:text-end md:mr-[60px]">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
            Inglês para Adultos
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 font-semibold">
            Do nível básico ao avançado, nosso método foi criado para adultos que querem resultados reais: aulas práticas, conteúdo personalizado e foco total na comunicação.
        </p>
        <a href="#formulario" class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
            Quero me inscrever
        </a>
    </div>
</section>

<!-- Metodologia -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">
        Nossa Metodologia para Adultos
    </h2>
    <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto">
        O curso de inglês para adultos da <strong>Tagarela</strong> foi desenvolvido para atender às necessidades de quem busca
        aprender de forma prática, eficiente e personalizada. 
        A metodologia é focada em <span class="text-red-600 font-semibold">conversação</span>, mas respeitando o nível de cada aluno:
        Básico, Intermediário e Avançado.
    </p>
</section>

<!-- Níveis -->
<section class="bg-[linear-gradient(90deg,rgba(217,41,56,1)_0%,rgba(17,70,140,1)_50%,rgba(53,49,64,1)_100%)] py-20 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        
        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Básico</h3>
            <p class="text-gray-700">
                Para quem está começando do zero ou tem pouco contato com o idioma. 
                Foco em vocabulário essencial, frases do dia a dia e introdução à pronúncia.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Intermediário</h3>
            <p class="text-gray-700">
                Ideal para quem já entende o básico. Desenvolvimento da fluência, construção de frases mais complexas 
                e maior confiança em situações sociais e profissionais.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Avançado</h3>
            <p class="text-gray-700">
                Para alunos que já se comunicam bem em inglês. O foco é aperfeiçoar sotaque, 
                ampliar vocabulário e se preparar para contextos acadêmicos e de negócios.
            </p>
        </div>

    </div>
</section>

<!-- Benefícios -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
        Por que escolher o curso de adultos da Tagarela?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        <div class="p-6">
            <i class="fa-solid fa-briefcase text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Inglês Profissional</h3>
            <p class="text-gray-700">Preparação para o mercado de trabalho com foco em reuniões, apresentações e entrevistas.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-plane-departure text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Inglês para Viagens</h3>
            <p class="text-gray-700">Treinamento para se comunicar em aeroportos, hotéis, restaurantes e passeios.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-comments text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Fluência em Conversação</h3>
            <p class="text-gray-700">Aulas dinâmicas com professores nativos para ganhar confiança ao falar.</p>
        </div>
    </div>
</section>

<!-- Formulário Aula Experimental -->
<?php echo do_shortcode('[contact-form-7 id="a632f67" title="Formulário de matricula"]'); ?>

<!-- Chamada Final -->
<section class="bg-white py-16">
  <div class="max-w-4xl mx-auto text-center px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-800">
      Seu futuro fala inglês. E ele começa aqui na <span class="text-red-800">Tagarela</span>.
    </h2>
  </div>
</section>


<?php
get_footer();
?>
