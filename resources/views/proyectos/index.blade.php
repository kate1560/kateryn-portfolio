@extends('layouts.app')

@section('title', 'Proyectos | Kateryn Martínez')

@section(
    'description',
    'Proyectos de desarrollo frontend y diseño Web UX/UI realizados por Kateryn Martínez.'
)

@section('content')

@php
    $categoriaSeleccionada = request('categoria', 'todos');
@endphp


{{-- =========================================================
    ENCABEZADO
========================================================== --}}

<section class="pb-16 pt-20 lg:pb-20 lg:pt-24">

    <div class="kate-container">

        <div class="mx-auto max-w-4xl text-center">

            <div class="kate-label justify-center">
                PROYECTOS
            </div>

            <h1
                class="mt-4 text-[clamp(3.2rem,6vw,6rem)] font-extrabold leading-[.92] tracking-[-.065em]"
            >
                Un vistazo

                <span class="text-kate-pink-strong">
                    a lo que hago
                </span>
            </h1>

            <p
                class="mx-auto mt-6 max-w-2xl text-base leading-8 text-kate-gray sm:text-lg"
            >
               Lo que imagino también puede encontrar su lugar en lo real. Cada proyecto guarda un pedacito de mí: 
               lo que descubro, lo que aprendo y esa necesidad de transformar lo que nace en mi mente en algo que 
               pueda existir más allá de ella.
            </p>

        </div>


        {{-- =====================================================
            FILTROS VISUALES
        ====================================================== --}}

        <div class="mt-12 flex flex-wrap items-center justify-center gap-3">

            {{-- Todos --}}
            <a
                href="{{ route('proyectos') }}"
                class="rounded-full border px-6 py-3 text-sm font-bold text-kate-dark transition duration-300 hover:-translate-y-0.5
                {{ $categoriaSeleccionada === 'todos'
                    ? 'border-kate-pink bg-kate-pink hover:bg-kate-pink-strong'
                    : 'border-kate-border bg-white hover:border-kate-pink hover:bg-kate-pink-light'
                }}"
            >
                Todos
            </a>

            {{-- Desarrollo Frontend --}}
            <a
                href="{{ route('proyectos', ['categoria' => 'frontend']) }}"
                class="rounded-full border px-6 py-3 text-sm font-bold text-kate-dark transition duration-300 hover:-translate-y-0.5
                {{ $categoriaSeleccionada === 'frontend'
                    ? 'border-kate-pink bg-kate-pink hover:bg-kate-pink-strong'
                    : 'border-kate-border bg-white hover:border-kate-pink hover:bg-kate-pink-light'
                }}"
            >
                Desarrollo Frontend
            </a>

            {{-- Diseño Web UX/UI --}}
            <a
                href="{{ route('proyectos', ['categoria' => 'ux-ui']) }}"
                class="rounded-full border px-6 py-3 text-sm font-bold text-kate-dark transition duration-300 hover:-translate-y-0.5
                {{ $categoriaSeleccionada === 'ux-ui'
                    ? 'border-kate-pink bg-kate-pink hover:bg-kate-pink-strong'
                    : 'border-kate-border bg-white hover:border-kate-pink hover:bg-kate-pink-light'
                }}"
            >
                Diseño Web UX/UI
            </a>

        </div>

    </div>

</section>


{{-- =========================================================
    PROYECTOS
========================================================== --}}

<section class="pb-28">

    <div class="kate-container">

        <div class="grid gap-8 lg:grid-cols-2">


            {{-- =================================================
                PROYECTOS FRONTEND
            ================================================== --}}

            @if ($categoriaSeleccionada === 'todos' || $categoriaSeleccionada === 'frontend')


                {{-- =================================================
                    LATIDO ANCESTRAL
                ================================================== --}}

                <article
                    class="group overflow-hidden rounded-[34px] border border-kate-border bg-white transition duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_28px_75px_rgba(244,91,165,.16)]"
                >

                    {{-- Imagen --}}
                    <div
                        class="relative h-80 overflow-hidden border-b border-kate-border bg-gradient-to-br from-kate-pink-light via-kate-pink-soft/70 to-kate-pink/45 p-6 sm:h-96 sm:p-7"
                    >

                        <div
                            class="h-full w-full overflow-hidden rounded-[26px] border border-kate-pink/55 bg-white shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                        >
                            <img
                                src="{{ asset('latido-ancestral/latido-ancestral-01.webp') }}"
                                alt="Vista principal del proyecto Latido Ancestral"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.03]"
                            >
                        </div>

                    </div>


                    {{-- Información --}}
                    <div class="p-7 sm:p-9">

                        <div
                            class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                        >
                            FRONTEND · 2025
                        </div>

                        <h2
                            class="mt-3 text-3xl font-extrabold tracking-[-.04em] sm:text-4xl"
                        >
                            Ancestral Heartbeat
                        </h2>

                        <p class="mt-4 leading-7 text-kate-gray">
                          Una historia que nace de nuestras raíces.
                        </p>


                        {{-- Tecnologías --}}
                        <div class="mt-6 flex flex-wrap gap-2">

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                React
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                TypeScript
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Next.js
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Tailwind CSS
                            </span>

                        </div>


                        {{-- Botón --}}
                        <div
                            class="mt-8 border-t border-kate-border pt-6"
                        >

                            <a
                                href="{{ route('proyectos.show', 'latido-ancestral') }}"
                                class="group/link inline-flex items-center gap-3 font-bold text-kate-dark transition duration-300 hover:text-kate-pink-deep"
                            >
                                Ver proyecto

                                <span
                                    class="transition-transform duration-300 group-hover/link:translate-x-1"
                                    aria-hidden="true"
                                >
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </article>


                {{-- =================================================
                    TIENDA VIRTUAL PLUS SIZE
                ================================================== --}}

                <article
                    class="group overflow-hidden rounded-[34px] border border-kate-border bg-white transition duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_28px_75px_rgba(244,91,165,.16)]"
                >

                    {{-- Imagen --}}
                    <div
                        class="relative h-80 overflow-hidden border-b border-kate-border bg-gradient-to-br from-kate-pink-light via-kate-pink-soft/70 to-kate-pink/45 p-6 sm:h-96 sm:p-7"
                    >

                        <div
                            class="h-full w-full overflow-hidden rounded-[26px] border border-kate-pink/55 bg-white shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                        >
                            <img
                                src="{{ asset('plus-size/plus-size-01.webp') }}"
                                alt="Vista principal del proyecto Tienda Virtual Plus Size"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.03]"
                            >
                        </div>

                    </div>


                    {{-- Información --}}
                    <div class="p-7 sm:p-9">

                        <div
                            class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                        >
                           FRONTEND · 2025
                        </div>

                        <h2
                            class="mt-3 text-3xl font-extrabold tracking-[-.04em] sm:text-4xl"
                        >
                            Tienda Virtual Plus Size
                        </h2>

                        <p class="mt-4 leading-7 text-kate-gray">
                            Una nueva forma de encontrar tu estilo.
                        </p>


                        <div class="mt-6 flex flex-wrap gap-2">

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                HTML5
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                CSS3
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                JavaScript
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Figma
                            </span>

                        </div>


                        <div
                            class="mt-8 border-t border-kate-border pt-6"
                        >

                            <a
                                href="{{ route('proyectos.show', 'plus-size') }}"
                                class="group/link inline-flex items-center gap-3 font-bold text-kate-dark transition duration-300 hover:text-kate-pink-deep"
                            >
                                Ver proyecto

                                <span
                                    class="transition-transform duration-300 group-hover/link:translate-x-1"
                                    aria-hidden="true"
                                >
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </article>


            @endif


            {{-- =================================================
                PROYECTOS UX/UI
            ================================================== --}}

            @if ($categoriaSeleccionada === 'todos' || $categoriaSeleccionada === 'ux-ui')


                {{-- =================================================
                    RASTRO CAFÉ
                ================================================== --}}

                <article
                    class="group overflow-hidden rounded-[34px] border border-kate-border bg-white transition duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_28px_75px_rgba(244,91,165,.16)]"
                >

                    {{-- Imagen --}}
                    <div
                        class="relative h-80 overflow-hidden border-b border-kate-border bg-gradient-to-br from-kate-pink-light via-kate-pink-soft/70 to-kate-pink/45 p-6 sm:h-96 sm:p-7"
                    >

                        <div
                            class="h-full w-full overflow-hidden rounded-[26px] border border-kate-pink/55 bg-white shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                        >
                            <img
                                src="{{ asset('rastro-cafe/rastro-cafe-01.webp') }}"
                                alt="Vista principal del proyecto Rastro Café"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.03]"
                            >
                        </div>

                    </div>


                    {{-- Información --}}
                    <div class="p-7 sm:p-9">

                        <div
                            class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                        >
                            UX/UI · 2026
                        </div>

                        <h2
                            class="mt-3 text-3xl font-extrabold tracking-[-.04em] sm:text-4xl"
                        >
                            Rastro 
                        </h2>

                        <p class="mt-4 leading-7 text-kate-gray">
                           Donde una taza también puede contar una historia.
                        </p>


                        <div class="mt-6 flex flex-wrap gap-2">

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Figma
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                UX/UI
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Prototipado
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Diseño responsive
                            </span>

                        </div>


                        <div
                            class="mt-8 border-t border-kate-border pt-6"
                        >

                            <a
                                href="{{ route('proyectos.show', 'rastro-cafe') }}"
                                class="group/link inline-flex items-center gap-3 font-bold text-kate-dark transition duration-300 hover:text-kate-pink-deep"
                            >
                                Ver proyecto

                                <span
                                    class="transition-transform duration-300 group-hover/link:translate-x-1"
                                    aria-hidden="true"
                                >
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </article>


                {{-- =================================================
                    ENCANTO BELLEZA
                ================================================== --}}

                <article
                    class="group overflow-hidden rounded-[34px] border border-kate-border bg-white transition duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_28px_75px_rgba(244,91,165,.16)]"
                >

                    {{-- Imagen --}}
                    <div
                        class="relative h-80 overflow-hidden border-b border-kate-border bg-gradient-to-br from-kate-pink-light via-kate-pink-soft/70 to-kate-pink/45 p-6 sm:h-96 sm:p-7"
                    >

                        <div
                            class="h-full w-full overflow-hidden rounded-[26px] border border-kate-pink/55 bg-white shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                        >
                            <img
                                src="{{ asset('encanto-belleza/encanto-belleza-01.webp') }}"
                                alt="Vista principal del proyecto Encanto Belleza"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-[1.03]"
                            >
                        </div>

                    </div>


                    {{-- Información --}}
                    <div class="p-7 sm:p-9">

                        <div
                            class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                        >
                            UX/UI · 2026
                        </div>

                        <h2
                            class="mt-3 text-3xl font-extrabold tracking-[-.04em] sm:text-4xl"
                        >
                            Encanto 
                        </h2>

                        <p class="mt-4 leading-7 text-kate-gray">
                           La belleza vive en los pequeños detalles.
                        </p>


                        <div class="mt-6 flex flex-wrap gap-2">

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Figma
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                UX/UI
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Prototipado
                            </span>

                            <span
                                class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-3.5 py-2 text-xs font-semibold"
                            >
                                Jerarquía visual
                            </span>

                        </div>


                        <div
                            class="mt-8 border-t border-kate-border pt-6"
                        >

                            <a
                                href="{{ route('proyectos.show', 'encanto-belleza') }}"
                                class="group/link inline-flex items-center gap-3 font-bold text-kate-dark transition duration-300 hover:text-kate-pink-deep"
                            >
                                Ver proyecto

                                <span
                                    class="transition-transform duration-300 group-hover/link:translate-x-1"
                                    aria-hidden="true"
                                >
                                    →
                                </span>
                            </a>

                        </div>

                    </div>

                </article>


            @endif

        </div>

    </div>

</section>


{{-- =========================================================
    CTA / CIERRE DE PROYECTOS
========================================================= --}}

<section class="pb-28">

    <div class="kate-container">

        <div
            class="relative overflow-hidden rounded-[38px] border border-kate-pink-strong/45 bg-kate-pink px-7 py-14 text-center text-kate-dark shadow-[0_25px_70px_rgba(244,91,165,.16)] sm:px-12 lg:px-20 lg:py-20"
        >

            {{-- Círculo grande superior derecho --}}
            <div
                class="absolute -right-24 -top-32 h-80 w-80 rounded-full bg-kate-pink-light/75"
                aria-hidden="true"
            ></div>


            {{-- Círculo delineado superior izquierdo --}}
            <div
                class="absolute left-16 top-14 h-16 w-16 rounded-full border border-white/80"
                aria-hidden="true"
            ></div>


            {{-- Círculo delineado inferior izquierdo --}}
            <div
                class="absolute -bottom-24 -left-14 h-64 w-64 rounded-full border border-white/80"
                aria-hidden="true"
            ></div>


            {{-- Círculo pequeño inferior centro-derecha --}}
            <div
                class="absolute bottom-14 right-52 h-11 w-11 rounded-full border border-white/80"
                aria-hidden="true"
            ></div>


            {{-- Detalle cuadrado inferior derecho --}}
            <div
                class="absolute bottom-16 right-16 h-5 w-5 -rotate-12 rounded-sm bg-kate-pink-strong/40"
                aria-hidden="true"
            ></div>


            <div class="relative mx-auto max-w-4xl">

                <span
                    class="text-xs font-extrabold uppercase tracking-[.22em] text-kate-dark"
                >
                   ¿Y AHORA, QUÉ PODEMOS CREAR?
                </span>


                <h2
                    class="mt-5 text-[clamp(2.8rem,5.5vw,5.5rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                >
                    Tu idea puede 

                    <span class="block text-white">
                       ser el proximo proyecto
                    </span>
                </h2>


                <p
                    class="mx-auto mt-7 max-w-xl text-base leading-7 text-kate-gray sm:text-lg"
                >
                    Cuéntame qué imaginas y descubramos juntos hasta dónde puede llegar.
                </p>


                <div class="mt-9">

                    <a
                        href="{{ route('contacto') }}"
                        class="group inline-flex items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-7 py-4 font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)]"
                    >
                        Dale forma 

                        <span
                            class="transition-transform duration-300 group-hover:translate-x-1"
                            aria-hidden="true"
                        >
                            →
                        </span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection