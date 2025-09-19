<?php
// Template Name: Page Idades - Crianças
get_header();
?>

<!-- Hero -->
<section class="relative bg-[#11468C] md:pt-24">
    <div class="absolute inset-0 bg-cover bg-[#11468C] opacity-30 xl:opacity-100"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/page-idades-criancas.png');"></div>
    <div class="relative max-w-4xl mx-auto text-center py-60 px-6 md:text-end md:mr-[60px]">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
            Inglês para Crianças
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 font-semibold">
            Aprender inglês nunca foi tão divertido! Nossas aulas são lúdicas, interativas e adaptadas para crianças de 6 a 12 anos.
        </p>
        <a href="#formulario" class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
            Quero me inscrever
        </a>
    </div>
</section>

<!-- Metodologia -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">
        Nossa Metodologia para Crianças
    </h2>
    <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto">
        O curso de inglês para crianças da <strong>Tagarela</strong> é pensado para estimular a curiosidade e a diversão enquanto aprende. 
        A metodologia combina <span class="text-red-600 font-semibold">jogos, músicas, histórias e atividades interativas</span> para facilitar a memorização e o uso do idioma no dia a dia.
    </p>
</section>

<!-- Níveis -->
<section class="bg-[linear-gradient(90deg,rgba(217,41,56,1)_0%,rgba(17,70,140,1)_50%,rgba(53,49,64,1)_100%)] py-20 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Iniciante</h3>
            <p class="text-gray-700">
                Para crianças que estão começando agora. Foco em vocabulário básico, frases simples e introdução à pronúncia correta.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Intermediário</h3>
            <p class="text-gray-700">
                Para crianças que já conhecem o básico. Desenvolvimento da comunicação em frases mais longas, compreensão de histórias e jogos educativos.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 transition-transform duration-300 ease-in-out 
            hover:-translate-y-2 hover:shadow-2xl">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Avançado</h3>
            <p class="text-gray-700">
                Para crianças que já se comunicam bem em inglês. Aperfeiçoamento da fluência, vocabulário ampliado e atividades de leitura e escrita.
            </p>
        </div>

    </div>
</section>

<!-- Benefícios -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-12">
        Por que escolher o curso de crianças da Tagarela?
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        <div class="p-6">
            <i class="fa-solid fa-puzzle-piece text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Aprendizado Lúdico</h3>
            <p class="text-gray-700">Jogos, histórias e músicas para tornar o inglês divertido e natural.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-brain text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Desenvolvimento Cognitivo</h3>
            <p class="text-gray-700">Atividades que estimulam memória, concentração e criatividade enquanto aprendem inglês.</p>
        </div>
        <div class="p-6">
            <i class="fa-solid fa-users text-red-600 text-4xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Ambiente Seguro</h3>
            <p class="text-gray-700">Turmas pequenas com atenção personalizada para cada criança.</p>
        </div>
    </div>
</section>

<!-- Formulário Aula Experimental -->
<section id="formulario" class="bg-blue-900 text-white py-20 px-6 md:px-12 lg:px-24">
  <div class="max-w-3xl mx-auto bg-white text-gray-800 rounded-2xl shadow-xl p-8 md:p-12">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-800 mb-8">
      Agende uma Aula Experimental
    </h2>

    <form action="#" method="POST" class="space-y-6">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="nome" class="block text-sm font-semibold mb-2">Nome</label>
          <input type="text" id="nome" name="nome" required
                 class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
        </div>
        <div>
          <label for="sobrenome" class="block text-sm font-semibold mb-2">Sobrenome</label>
          <input type="text" id="sobrenome" name="sobrenome" required
                 class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-semibold mb-2">E-mail</label>
        <input type="email" id="email" name="email" required
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
      </div>

      <div>
        <label for="telefone" class="block text-sm font-semibold mb-2">Telefone</label>
        <input type="tel" id="telefone" name="telefone"
               class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
      </div>

      <div>
        <label for="idade" class="block text-sm font-semibold mb-2">Faixa de Idade</label>
        <select id="idade" name="idade" required
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
          <option value="">Selecione</option>
          <option value="6-8">6–8 anos</option>
          <option value="9-10">9–10 anos</option>
          <option value="11-12">11–12 anos</option>
        </select>
      </div>

      <div>
        <label for="unidade" class="block text-sm font-semibold mb-2">Unidade de Ensino Desejada</label>
        <select id="unidade" name="unidade" required
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
          <option value="">Selecione</option>
          <option value="salvador">Salvador</option>
          <option value="lauro">Lauro de Freitas</option>
          <option value="feira">Feira de Santana</option>
        </select>
      </div>

      <div class="text-center">
        <button type="submit"
                class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
          Enviar Inscrição
        </button>
      </div>
    </form>
  </div>
</section>

<!-- Chamada Final -->
<section class="bg-white py-16">
  <div class="max-w-4xl mx-auto text-center px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-800">
      Aprender inglês é divertido e seguro aqui na <span class="text-red-800">Tagarela</span>.
    </h2>
  </div>
</section>

<?php
get_footer();
?>
