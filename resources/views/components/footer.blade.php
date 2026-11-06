
<footer
    class="w-full border-t border-kate-pink-deep/10 bg-kate-pink-light"
>
    <div class="kate-container py-12 sm:py-14 lg:py-16">

        <div
            class="mx-auto grid max-w-6xl grid-cols-1 gap-10 text-center sm:gap-12 md:grid-cols-3 md:gap-8 lg:gap-16"
        >

            {{-- =====================================================
                 MARCA
            ====================================================== --}}

            <div class="flex min-w-0 flex-col items-center">

                <a
                    href="{{ route('home') }}"
                    class="text-center text-lg font-extrabold tracking-[-.04em] text-kate-dark transition-colors duration-300 hover:text-kate-pink-deep sm:text-xl"
                >
                    KATERYN MARTÍNEZ
                </a>

                <p
                    class="mt-4 max-w-sm text-sm leading-7 text-kate-gray sm:mt-5 sm:text-base"
                >
                    Diseño, desarrollo y creo ideas
                    <br class="hidden sm:block">
                    que cobran vida en cada proyecto.
                </p>

            </div>


            {{-- =====================================================
                 NAVEGACIÓN
            ====================================================== --}}

            <div class="flex min-w-0 flex-col items-center">

                <h3
                    class="text-xs font-bold tracking-[.18em] text-kate-pink-deep"
                >
                    NAVEGACIÓN
                </h3>

                <nav
                    class="mt-5 flex flex-col items-center gap-3"
                    aria-label="Navegación del pie de página"
                >

                    <a
                        href="{{ route('home') }}"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        Inicio
                    </a>

                    <a
                        href="{{ route('sobre-mi') }}"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        Sobre mí
                    </a>

                    <a
                        href="{{ route('habilidades') }}"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        Habilidades
                    </a>

                    <a
                        href="{{ route('proyectos') }}"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        Proyectos
                    </a>

                    <a
                        href="{{ route('contacto') }}"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        Contacto
                    </a>

                </nav>

            </div>


            {{-- =====================================================
                 REDES SOCIALES Y CONTACTO
            ====================================================== --}}

            <div class="flex min-w-0 flex-col items-center">

                <h3
                    class="text-xs font-bold tracking-[.18em] text-kate-pink-deep"
                >
                    CONECTEMOS
                </h3>

                <div
                    class="mt-5 flex flex-col items-center gap-3"
                >

                    <a
                        href="https://www.linkedin.com/in/katerynmartinez"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        LinkedIn ↗
                    </a>

                    <a
                        href="https://github.com/kate1560"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        GitHub ↗
                    </a>

                    <a
                        href="mailto:kateryn.y.martinez@gmail.com"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        Correo ↗
                    </a>

                    <a
                        href="https://wa.me/573216392181"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-sm text-kate-gray transition-colors duration-300 hover:text-kate-pink-deep"
                    >
                        WhatsApp ↗
                    </a>

                </div>

            </div>

        </div>


        {{-- =========================================================
             CIERRE Y CRÉDITOS
        ========================================================== --}}

        <div
            class="mt-12 flex flex-col items-center gap-2 border-t border-kate-pink-deep/15 pt-7 text-center text-xs leading-6 text-kate-gray sm:mt-14 sm:text-sm"
        >

            <p>
                © {{ date('Y') }} Kateryn Martínez
            </p>

            <p>
                Diseñado y desarrollado por Kateryn Martínez
            </p>

        </div>

    </div>
</footer>
