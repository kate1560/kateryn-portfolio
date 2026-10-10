<footer
    class="border-t border-kate-pink-deep/10 bg-kate-pink-light"
>
    <div class="kate-container py-16">

        <div
            class="mx-auto grid max-w-6xl gap-12 text-center md:grid-cols-3 md:gap-16"
        >

            {{-- Marca --}}
            <div class="flex flex-col items-center">
                <a
                    href="{{ route('home') }}"
                    class="text-xl font-extrabold tracking-[-.04em]"
                >
                    KATERYN MARTÍNEZ
                </a>

                <p
                    class="mt-5 max-w-sm leading-7 text-kate-gray"
                >
                    Diseño, desarrollo y creo ideas <br>
                    que cobran vida en cada proyecto.
                </p>
            </div>


            {{-- Navegación --}}
            <div class="flex flex-col items-center">
                <h3
                    class="text-xs font-bold tracking-[.18em] text-kate-pink-deep"
                >
                    NAVEGACIÓN
                </h3>

                <nav
                    class="mt-5 flex flex-col items-center gap-3"
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


            {{-- Redes --}}
            <div class="flex flex-col items-center">
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


        {{-- Cierre centrado --}}
        <div
            class="mt-14 flex flex-col items-center gap-2 border-t border-kate-pink-deep/15 pt-7 text-center text-sm text-kate-gray"
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