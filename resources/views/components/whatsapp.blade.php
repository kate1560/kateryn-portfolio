
{{-- =========================================================
     BOTÓN FLOTANTE DE WHATSAPP
     RESPONSIVE PARA CELULARES, TABLETS Y COMPUTADORES
========================================================= --}}

<a
    href="https://wa.me/573216392181?text={{ urlencode('Hola, Kateryn. Vi tu portafolio y me gustaría conversar contigo.') }}"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contactar a Kateryn por WhatsApp"

    class="group fixed bottom-4 right-4 z-50
           grid h-12 w-12 place-items-center
           rounded-full
           bg-kate-dark text-white
           shadow-[0_15px_40px_rgba(33,27,32,.25)]
           transition-all duration-300
           hover:-translate-y-1
           hover:bg-kate-pink-strong
           hover:text-kate-dark
           focus-visible:outline-2
           focus-visible:outline-offset-4
           focus-visible:outline-kate-pink-deep
           sm:bottom-6 sm:right-6
           sm:h-14 sm:w-14"
>

    {{-- ÍCONO ORIGINAL --}}
    <span
        class="text-lg leading-none sm:text-xl"
        aria-hidden="true"
    >
        ✆
    </span>


    {{-- TEXTO FLOTANTE --}}
    <span
        class="pointer-events-none absolute right-14
               hidden whitespace-nowrap rounded-full
               bg-kate-dark px-3 py-2
               text-xs text-white
               opacity-0
               translate-x-2
               transition-all duration-300
               group-hover:translate-x-0
               group-hover:opacity-100
               group-focus-visible:translate-x-0
               group-focus-visible:opacity-100
               sm:block sm:right-16"
        aria-hidden="true"
    >
        Escríbeme
    </span>

</a>
