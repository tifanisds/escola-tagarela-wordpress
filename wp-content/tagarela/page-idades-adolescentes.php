<?php
// Template Name: Page Idades - Adolescentes
get_header();
?>

<!-- Hero -->
<section class="relative bg-[#11468C] md:pt-24">
    <div class="absolute inset-0 bg-cover bg-[#11468C] opacity-30 xl:opacity-100"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/page-idades-adolescentes.png');"></div>
    <div class="relative max-w-4xl mx-auto text-center py-60 px-6 md:text-end md:mr-[60px]">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
            Inglês para Adolescentes
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 font-semibold">
            Aulas dinâmicas e modernas para adolescentes de 13 a 17 anos, preparando para estudos, intercâmbio e comunicação global.
        </p>
        <a href="#formulario" class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
            Quero me inscrever
        </a>
    </div>
</section>

<!-- Metodologia -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">
        Nossa Metodologia para Adolescentes
    </h2>
    <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto">
        O curso de inglês para adolescentes da <strong>Tagarela</strong> é feito para engajar e motivar jovens, combinando conversação, atividades interativas, desafios de vocabulário e projetos de grupo. 
        O foco é desenvolver fluência, confiança e habilidades para contextos escolares, sociais e futuros profissionais.
    </p>
</section>

<!-- Níveis -->
<section class="bg-[linear-gradient(90deg,rgba(217,41,56,1)_0%,rgba(17,70,140,1)_50%,rgba(53,49,64,1)_100%)] py-20 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Iniciante</h3>
            <p class="text-gray-700">
                Para adolescentes com pouco ou nenhum contato com o inglês. Foco em vocabulário básico, compreensão de textos simples e conversação inicial.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Intermediário</h3>
            <p class="text-gray-700">
                Para quem já conhece o básico. Desenvolvimento de fluência, compreensão de textos mais complexos, escrita e habilidades de comunicação social.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Avançado</h3>
            <p class="text-gray-700">
                Para adolescentes que já têm boa base no idioma. Aperfeiçoamento da pronúncia, vocabulário avançado e preparação para exames, intercâmbio e situações acadêmicas.
            </p>
        </div>

    </div>
</section>

<!-- Benefícios -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
        Por que escolher o curso de adolescentes da Tagarela?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        <div class="p-6">
            <i class="fa-solid fa-school text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Apoio Escolar</h3>
            <p class="text-gray-700">Aulas que ajudam nos estudos, trabalhos escolares e compreensão de conteúdos em inglês.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-plane-departure text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Preparação para Intercâmbio</h3>
            <p class="text-gray-700">Desenvolvimento de habilidades essenciais para estudar no exterior com confiança.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-comments text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Fluência em Conversação</h3>
            <p class="text-gray-700">Atividades interativas para se comunicar de forma natural e segura em inglês.</p>
        </div>
    </div>
</section>

<!-- Formulário Aula Experimental -->
<?php echo do_shortcode('[contact-form-7 id="a632f67" title="Formulário de matricula"]'); ?>


<!-- Chamada Final -->
<section class="bg-white py-16">
  <div class="max-w-4xl mx-auto text-center px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-800">
      Aprender inglês é empolgante, e com a <span class="text-red-800">Tagarela</span> você vai mais longe!
    </h2>
  </div>
</section>

<?php
get_footer();
?>
