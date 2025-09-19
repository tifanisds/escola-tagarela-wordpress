<?php
// Template Name: Aula experimental
get_header();
?>

<!-- Hero -->
<section class="relative bg-[#11468C] md:pt-24">
  <div class="absolute inset-0 bg-cover bg-[#11468C] opacity-40 xl:opacity-100"
       style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/aula-experimental-hero.png');"></div>
  <div class="relative max-w-4xl mx-auto text-center py-48 px-6">
      <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
          Aula Experimental de Inglês
      </h1>
      <p class="text-lg md:text-xl text-gray-200 mb-8 font-semibold">
          Experimente nossa metodologia inovadora e descubra como é aprender com professores nativos.
      </p>
      <a href="#formulario" 
         class="bg-red-600 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-red-700 transition-colors duration-300 ease-in-out">
          Quero agendar minha aula
      </a>
  </div>
</section>

<!-- Explicação -->
<section class="max-w-7xl mx-auto py-20 px-6 text-center">
  <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-6">
      Por que fazer uma Aula Experimental?
  </h2>
  <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
      A <strong class="text-blue-800">Aula Experimental</strong> é a oportunidade perfeita para conhecer nossa escola, 
      professores e metodologia. Sem compromisso, você vivencia como é aprender inglês com 
      aulas dinâmicas, práticas e adaptadas para <span class="font-semibold text-blue-700">crianças, adolescentes e adultos</span>.
  </p>
</section>

<!-- Benefícios -->
<section class="bg-blue-50 py-20 px-6">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition">
          <i class="fa-solid fa-chalkboard-user text-blue-700 text-4xl mb-4"></i>
          <h3 class="text-xl font-semibold text-blue-900 mb-2">Conheça a Metodologia</h3>
          <p class="text-gray-700">Experimente aulas leves, interativas e personalizadas.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition">
          <i class="fa-solid fa-users text-blue-700 text-4xl mb-4"></i>
          <h3 class="text-xl font-semibold text-blue-900 mb-2">Professores Nativos</h3>
          <p class="text-gray-700">Aprenda inglês com quem tem o idioma como língua materna.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition">
          <i class="fa-solid fa-graduation-cap text-blue-700 text-4xl mb-4"></i>
          <h3 class="text-xl font-semibold text-blue-900 mb-2">Indicação de Nível</h3>
          <p class="text-gray-700">Descubra seu nível atual e a turma ideal para você.</p>
      </div>
  </div>
</section>

<!-- Formulário -->
<section id="formulario" class="bg-blue-900 text-white py-20 px-6">
  <div class="max-w-3xl mx-auto bg-white text-gray-800 rounded-2xl shadow-xl p-8 md:p-12">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8">
        Inscreva-se na Aula Experimental
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
          <label for="publico" class="block text-sm font-semibold mb-2">Público Alvo</label>
          <select id="publico" name="publico" required
                  class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:outline-none">
              <option value="">Selecione</option>
              <option value="crianca">Criança</option>
              <option value="adolescente">Adolescente</option>
              <option value="adulto">Adulto</option>
          </select>
      </div>

      <div class="text-center">
          <button type="submit"
                  class="bg-blue-700 text-white px-8 py-3 rounded-xl text-lg shadow hover:bg-blue-800 transition-colors duration-300 ease-in-out">
              Enviar Inscrição
          </button>
      </div>
    </form>
  </div>
</section>

<?php
get_footer();
?>