<?php
// Template Name: Page Localizacao
get_header();
?>

<!-- Title -->
<section class="px-4 pt-32">
    <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6 drop-shadow-lg text-center">
        Nossas Unidades
    </h1>
    <p class="text-lg md:text-xl text-blue-700 font-semibold text-center">
        Conheça as unidades da Tagarela e escolha a mais próxima de você.
    </p>
</section>

<!-- Unidades -->
<section class="max-w-7xl mx-auto py-20 px-6 grid grid-cols-1 md:grid-cols-3 gap-10">

    <!-- Lauro de Freitas -->
    <div class="bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
        <i class="fa-solid fa-location-dot text-red-600 text-4xl mb-4"></i>
        <h3 class="text-2xl font-bold text-blue-900 mb-2">Tagarela Lauro de Freitas</h3>
        <p class="text-gray-700 mb-1 font-semibold">Rua José Ernesto dos Santos, 245 – Centro</p>
        <p class="text-gray-700 mb-2">Lauro de Freitas, BA – CEP: 42700-000</p>
        <p class="text-gray-600 text-sm mb-4">
            Esta rua é uma das principais vias comerciais da cidade, com boa circulação de pedestres e fácil acesso a transporte público.
        </p>
        <div class="w-full h-64 rounded-xl overflow-hidden">
            <iframe class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.217913236511!2d-38.32687102516!3d-12.893704787414514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x716161b00c2fed5%3A0xf9fda738e993daf3!2sR.%20Jos%C3%A9%20Ernesto%20dos%20Santos%2C%20245%20-%20Centro%2C%20Lauro%20de%20Freitas%20-%20BA%2C%2042700-000!5e0!3m2!1spt-BR!2sbr!4v1757818665197!5m2!1spt-BR!2sbr"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Feira de Santana -->
    <div class="bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
        <i class="fa-solid fa-location-dot text-red-600 text-4xl mb-4"></i>
        <h3 class="text-2xl font-bold text-blue-900 mb-2">Tagarela Feira de Santana</h3>
        <p class="text-gray-700 mb-1 font-semibold">Rua José Joaquim Seabra, 158 – Centro</p>
        <p class="text-gray-700 mb-2">Feira de Santana, BA – CEP: 44000-000</p>
        <p class="text-gray-600 text-sm mb-4">
            Localizada no coração da cidade, esta rua é conhecida por sua intensa atividade comercial e proximidade com pontos de interesse, como a estação de trem e o Mercado de Arte Popular.
        </p>
        <div class="w-full h-64 rounded-xl overflow-hidden">
            <iframe class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.8737190761376!2d-38.966397425171245!3d-12.256823987996654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7143793a1f180f5%3A0xb8fd030246cb2413!2sR.%20Jos%C3%A9%20Joaquim%20Seabra%2C%20158%20-%20Centro%2C%20Feira%20de%20Santana%20-%20BA%2C%2044002-000!5e0!3m2!1spt-BR!2sbr!4v1757818836117!5m2!1spt-BR!2sbr"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Salvador -->
    <div class="bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl">
        <i class="fa-solid fa-location-dot text-red-600 text-4xl mb-4"></i>
        <h3 class="text-2xl font-bold text-blue-900 mb-2">Tagarela Salvador</h3>
        <p class="text-gray-700 mb-1 font-semibold">Rua Haeckel José de Almeida, 177 – Jaguaribe</p>
        <p class="text-gray-700 mb-2">Salvador, BA – CEP: 41915-010</p>
        <p class="text-gray-600 text-sm mb-4">
            Situada em um bairro residencial, com fácil acesso a transporte e comércio local.
        </p>
        <div class="w-full h-64 rounded-xl overflow-hidden">
            <iframe class="w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.22735644914!2d-38.395906125158916!3d-12.95729848735673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71619f0f0fec2b7%3A0xea93978cb25f95f3!2sR.%20Haeckel%20Jos%C3%A9%20de%20Almeida%2C%20177%20-%20Jaguaribe%2C%20Salvador%20-%20BA%2C%2041613-100!5e0!3m2!1spt-BR!2sbr!4v1757818864116!5m2!1spt-BR!2sbr"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</section>

<?php
get_footer();
?>