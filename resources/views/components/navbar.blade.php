<header
    class="sticky top-0 z-50 border-b border-kate-pink/20
           bg-kate-cream/90 backdrop-blur-xl"
>

    <div
        class="kate-container flex h-[82px] items-center justify-between"
    >

        {{-- Marca --}}
        <a
            href="{{ route('home') }}"
            class="text-[1.05rem] font-extrabold tracking-[-0.04em]
                   transition-colors duration-300
                   hover:text-kate-pink-deep"
        >
            KATERYN MARTÍNEZ
        </a>


        {{-- Navegación --}}
        <nav
            class="hidden items-center gap-8 lg:flex"
            aria-label="Navegación principal"
        >

            <a
                href="{{ route('home') }}"
                @class([
                    'relative py-2 text-sm font-medium transition-colors duration-300',
                    'text-kate-dark' => request()->routeIs('home'),
                    'text-kate-gray hover:text-kate-dark' => !request()->routeIs('home'),
                ])
            >
                Inicio

                @if(request()->routeIs('home'))
                    <span
                        class="absolute -bottom-1 left-0 h-[2px] w-full
                               rounded-full bg-kate-pink-strong"
                    ></span>
                @endif
            </a>


            <a
                href="{{ route('sobre-mi') }}"
                @class([
                    'relative py-2 text-sm font-medium transition-colors duration-300',
                    'text-kate-dark' => request()->routeIs('sobre-mi'),
                    'text-kate-gray hover:text-kate-dark' => !request()->routeIs('sobre-mi'),
                ])
            >
                Sobre mí

                @if(request()->routeIs('sobre-mi'))
                    <span
                        class="absolute -bottom-1 left-0 h-[2px] w-full
                               rounded-full bg-kate-pink-strong"
                    ></span>
                @endif
            </a>


            <a
                href="{{ route('habilidades') }}"
                @class([
                    'relative py-2 text-sm font-medium transition-colors duration-300',
                    'text-kate-dark' => request()->routeIs('habilidades'),
                    'text-kate-gray hover:text-kate-dark' => !request()->routeIs('habilidades'),
                ])
            >
                Habilidades

                @if(request()->routeIs('habilidades'))
                    <span
                        class="absolute -bottom-1 left-0 h-[2px] w-full
                               rounded-full bg-kate-pink-strong"
                    ></span>
                @endif
            </a>


            <a
                href="{{ route('proyectos') }}"
                @class([
                    'relative py-2 text-sm font-medium transition-colors duration-300',
                    'text-kate-dark' => request()->routeIs('proyectos*'),
                    'text-kate-gray hover:text-kate-dark' => !request()->routeIs('proyectos*'),
                ])
            >
                Proyectos

                @if(request()->routeIs('proyectos*'))
                    <span
                        class="absolute -bottom-1 left-0 h-[2px] w-full
                               rounded-full bg-kate-pink-strong"
                    ></span>
                @endif
            </a>


            <a
                href="{{ route('contacto') }}"
                @class([
                    'relative py-2 text-sm font-medium transition-colors duration-300',
                    'text-kate-dark' => request()->routeIs('contacto'),
                    'text-kate-gray hover:text-kate-dark' => !request()->routeIs('contacto'),
                ])
            >
                Contacto

                @if(request()->routeIs('contacto'))
                    <span
                        class="absolute -bottom-1 left-0 h-[2px] w-full
                               rounded-full bg-kate-pink-strong"
                    ></span>
                @endif
            </a>

        </nav>


        {{-- CTA --}}
        <a
            href="{{ route('contacto') }}"
            class="group inline-flex items-center gap-2 rounded-full
                   bg-kate-pink px-5 py-3 text-sm font-semibold
                   shadow-[0_10px_30px_rgba(255,175,215,.30)]
                   transition-all duration-300
                   hover:-translate-y-0.5 hover:bg-kate-pink-strong
                   hover:shadow-[0_15px_35px_rgba(244,91,165,.30)]"
        >
            Hablemos

            <span
                class="transition-transform duration-300
                       group-hover:translate-x-0.5
                       group-hover:-translate-y-0.5"
            >
                ↗
            </span>
        </a>

    </div>

</header>