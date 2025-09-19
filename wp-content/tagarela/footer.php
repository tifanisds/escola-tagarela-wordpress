<!-- Footer -->
<footer class="bg-blue-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 text-left">

        <!-- Sobre -->
        <div>
            <h3 class="text-lg font-semibold mb-3">Escola Tagarela</h3>
            <p class="text-sm text-gray-200 leading-relaxed">
                A Escola Tagarela é um projeto fictício criado para fins acadêmicos e de portfólio.
                Nenhum serviço aqui oferecido é real.
            </p>
        </div>

        <!-- Links rápidos -->
        <div>
            <h3 class="text-lg font-semibold mb-3">Links Rápidos</h3>
            <ul class="flex flex-wrap gap-x-6 gap-y-2 text-sm md:flex-col">
                <li><a href="/" class="hover:text-red-400 transition">Início</a></li>
                <li><a href="/aula-experimental" class="hover:text-red-400 transition">Aula Experimental</a></li>
                <li><a href="/intercambio" class="hover:text-red-400 transition">Intercâmbio</a></li>
                <li><a href="/localizacao" class="hover:text-red-400 transition">Unidades</a></li>
            </ul>
        </div>

        <!-- Contato -->
        <div>
            <h3 class="text-lg font-semibold mb-3">Contato</h3>
            <p class="text-sm mb-1">Email: contato@escolatagarela.com</p>
            <p class="text-sm">Telefone: (71) 99999-9999</p>
            <div class="flex gap-5 mt-4">
                <a href="#" class="hover:text-red-400 transition"><i class="fa-brands fa-facebook text-xl"></i></a>
                <a href="#" class="hover:text-red-400 transition"><i class="fa-brands fa-instagram text-xl"></i></a>
                <a href="#" class="hover:text-red-400 transition"><i class="fa-brands fa-linkedin text-xl"></i></a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-700 mt-12 pt-6 text-center text-sm text-gray-300 px-6">
        © 2025 Escola Tagarela — Todos os direitos reservados.
        <span class="italic block mt-1">
            Este é um site fictício, desenvolvido apenas para fins de estudo e demonstração.
        </span>
    </div>
</footer>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>

</html>