
@php
    /*
    |--------------------------------------------------------------------------
    | ENLACES DE NAVEGACIÓN
    |--------------------------------------------------------------------------
    */

    $enlaces = [
        [
            'nombre' => 'Inicio',
            'ruta' => 'home',
            'activo' => request()->routeIs('home'),
        ],
        [
            'nombre' => 'Sobre mí',
            'ruta' => 'sobre-mi',
            'activo' => request()->routeIs('sobre-mi'),
        ],
        [
            'nombre' => 'Habilidades',
            'ruta' => 'habilidades',
            'activo' => request()->routeIs('habilidades'),
        ],
        [
            'nombre' => 'Proyectos',
            'ruta' => 'proyectos',
            'activo' => request()->routeIs('proyectos*'),
        ],
        [
            'nombre' => 'Contacto',
            'ruta' => 'contacto',
            'activo' => request()->routeIs('contacto'),
        ],
    ];
@endphp

<header
    id="kate-navbar"
    class="sticky top-0 z-50 border-b border-kate-pink/20 bg-kate-cream/90 backdrop-blur-xl"
>

    <div class="kate-container flex h-[70px] min-w-0 items-center justify-between gap-3 sm:h-[82px]">

        {{-- =====================================================
             MARCA
        ====================================================== --}}

        <a
            href="{{ route('home') }}"
            class="min-w-0 shrink text-[.85rem] font-extrabold tracking-[-.04em] text-kate-dark transition-colors duration-300 hover:text-kate-pink-deep sm:text-[1.05rem]"
        >
            KATERYN MARTÍNEZ
        </a>


        {{-- =====================================================
             NAVEGACIÓN DE ESCRITORIO
        ====================================================== --}}

        <nav
            class="hidden items-center gap-5 lg:flex xl:gap-8"
            aria-label="Navegación principal"
        >

            @foreach ($enlaces as $enlace)

                <a
                    href="{{ route($enlace['ruta']) }}"
                    @class([
                        'relative py-2 text-sm font-medium transition-colors duration-300',
                        'text-kate-dark' => $enlace['activo'],
                        'text-kate-gray hover:text-kate-dark' => !$enlace['activo'],
                    ])
                    @if ($enlace['activo'])
                        aria-current="page"
                    @endif
                >

                    {{ $enlace['nombre'] }}

                    @if ($enlace['activo'])

                        <span
                            class="absolute -bottom-1 left-0 h-[2px] w-full rounded-full bg-kate-pink-strong"
                            aria-hidden="true"
                        ></span>

                    @endif

                </a>

            @endforeach

        </nav>


        {{-- =====================================================
             BOTÓN HABLEMOS - ESCRITORIO
        ====================================================== --}}

        <a
            href="{{ route('contacto') }}"
            class="group hidden shrink-0 items-center gap-2 rounded-full bg-kate-pink px-5 py-3 text-sm font-semibold shadow-[0_10px_30px_rgba(255,175,215,.30)] transition-all duration-300 hover:-translate-y-0.5 hover:bg-kate-pink-strong hover:shadow-[0_15px_35px_rgba(244,91,165,.30)] lg:inline-flex"
        >

            Hablemos

            <span
                class="transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                aria-hidden="true"
            >
                ↗
            </span>

        </a>


        {{-- =====================================================
             BOTÓN HAMBURGUESA - CELULARES Y TABLETS
        ====================================================== --}}

        <button
            id="kate-menu-button"
            type="button"
            class="inline-flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-kate-pink-strong/25 bg-kate-pink-soft text-kate-dark transition-colors duration-300 hover:border-kate-pink-strong/50 hover:bg-kate-pink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-kate-pink-deep lg:hidden"
            aria-label="Abrir menú de navegación"
            aria-controls="kate-mobile-menu"
            aria-expanded="false"
        >

            {{-- ÍCONO ABRIR MENÚ --}}
            <svg
                id="kate-menu-open-icon"
                xmlns="http://www.w3.org/2000/svg"
                width="23"
                height="23"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
            >
                <path d="M4 6h16"></path>
                <path d="M4 12h16"></path>
                <path d="M4 18h16"></path>
            </svg>


            {{-- ÍCONO CERRAR MENÚ --}}
            <svg
                id="kate-menu-close-icon"
                class="hidden"
                xmlns="http://www.w3.org/2000/svg"
                width="23"
                height="23"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
            >
                <path d="M18 6 6 18"></path>
                <path d="M6 6l12 12"></path>
            </svg>

        </button>

    </div>


    {{-- =========================================================
         MENÚ RESPONSIVE - CELULARES Y TABLETS
    ========================================================= --}}

    <nav
        id="kate-mobile-menu"
        class="hidden border-t border-kate-pink/20 bg-kate-cream/95 shadow-[0_18px_35px_rgba(33,27,32,.06)] lg:hidden"
        aria-label="Navegación móvil"
        inert
    >

        <div class="kate-container flex max-h-[calc(100dvh-70px)] flex-col gap-1 overflow-y-auto py-5 sm:max-h-[calc(100dvh-82px)]">

            @foreach ($enlaces as $enlace)

                <a
                    href="{{ route($enlace['ruta']) }}"
                    @class([
                        'kate-mobile-link flex min-h-12 items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold transition-colors duration-300',
                        'bg-kate-pink-soft text-kate-pink-deep' => $enlace['activo'],
                        'text-kate-gray hover:bg-kate-pink-light hover:text-kate-dark' => !$enlace['activo'],
                    ])
                    @if ($enlace['activo'])
                        aria-current="page"
                    @endif
                >

                    <span>
                        {{ $enlace['nombre'] }}
                    </span>

                    @if ($enlace['activo'])

                        <span
                            class="h-2 w-2 rounded-full bg-kate-pink-strong"
                            aria-hidden="true"
                        ></span>

                    @endif

                </a>

            @endforeach


            {{-- BOTÓN HABLEMOS - MÓVIL --}}
            <a
                href="{{ route('contacto') }}"
                class="kate-mobile-link group mt-4 inline-flex min-h-12 items-center justify-center gap-2 rounded-full bg-kate-pink px-6 py-3 text-sm font-semibold text-kate-dark shadow-[0_10px_30px_rgba(255,175,215,.30)] transition-all duration-300 hover:bg-kate-pink-strong"
            >

                Hablemos

                <span
                    class="transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>

        </div>

    </nav>

</header>


{{-- =============================================================
     JAVASCRIPT DEL MENÚ RESPONSIVE
     No requiere modificar app.js
============================================================= --}}

<script>
    (() => {

        const navbar = document.getElementById('kate-navbar');

        const menuButton = document.getElementById('kate-menu-button');

        const mobileMenu = document.getElementById('kate-mobile-menu');

        const openIcon = document.getElementById('kate-menu-open-icon');

        const closeIcon = document.getElementById('kate-menu-close-icon');


        if (
            !navbar ||
            !menuButton ||
            !mobileMenu ||
            !openIcon ||
            !closeIcon
        ) {
            return;
        }


        /*
        |--------------------------------------------------------------------------
        | ABRIR Y CERRAR MENÚ
        |--------------------------------------------------------------------------
        */

        const setMenuOpen = (isOpen) => {

            mobileMenu.classList.toggle('hidden', !isOpen);

            mobileMenu.inert = !isOpen;

            menuButton.setAttribute(
                'aria-expanded',
                String(isOpen)
            );

            menuButton.setAttribute(
                'aria-label',
                isOpen
                    ? 'Cerrar menú de navegación'
                    : 'Abrir menú de navegación'
            );

            openIcon.classList.toggle('hidden', isOpen);

            closeIcon.classList.toggle('hidden', !isOpen);

        };


        /*
        |--------------------------------------------------------------------------
        | BOTÓN HAMBURGUESA
        |--------------------------------------------------------------------------
        */

        menuButton.addEventListener('click', () => {

            const isOpen =
                menuButton.getAttribute('aria-expanded') === 'true';

            setMenuOpen(!isOpen);

        });


        /*
        |--------------------------------------------------------------------------
        | CERRAR AL SELECCIONAR UN ENLACE
        |--------------------------------------------------------------------------
        */

        mobileMenu.querySelectorAll('a').forEach((link) => {

            link.addEventListener('click', () => {

                setMenuOpen(false);

            });

        });


        /*
        |--------------------------------------------------------------------------
        | CERRAR CON TECLA ESCAPE
        |--------------------------------------------------------------------------
        */

        document.addEventListener('keydown', (event) => {

            if (event.key === 'Escape') {

                const isOpen =
                    menuButton.getAttribute('aria-expanded') === 'true';

                if (isOpen) {

                    setMenuOpen(false);

                    menuButton.focus();

                }

            }

        });


        /*
        |--------------------------------------------------------------------------
        | CERRAR AL HACER CLIC FUERA
        |--------------------------------------------------------------------------
        */

        document.addEventListener('click', (event) => {

            const isOpen =
                menuButton.getAttribute('aria-expanded') === 'true';

            if (isOpen && !navbar.contains(event.target)) {

                setMenuOpen(false);

            }

        });


        /*
        |--------------------------------------------------------------------------
        | CERRAR AL CAMBIAR A ESCRITORIO
        |--------------------------------------------------------------------------
        */

        const desktopBreakpoint = window.matchMedia(
            '(min-width: 1024px)'
        );

        const handleBreakpointChange = (event) => {

            if (event.matches) {

                setMenuOpen(false);

            }

        };

        desktopBreakpoint.addEventListener(
            'change',
            handleBreakpointChange
        );


        /*
        |--------------------------------------------------------------------------
        | ESTADO INICIAL
        |--------------------------------------------------------------------------
        */

        setMenuOpen(false);

    })();
</script>
