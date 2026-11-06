
@extends('layouts.app')

@section('title', 'Habilidades | Kateryn Martínez')

@section(
    'description',
    'Habilidades técnicas y personales de Kateryn Martínez en desarrollo frontend, diseño web UX/UI y herramientas digitales.'
)

@section('content')

{{-- =========================================================
    ÁREA TÉCNICA
========================================================= --}}

<section class="pb-16 pt-12 sm:pb-20 sm:pt-16 lg:pb-28 lg:pt-20">

    <div class="kate-container min-w-0">

        {{-- ENCABEZADO --}}
        <div class="mx-auto mb-10 max-w-4xl text-center sm:mb-14">

            {{-- Subtítulo sin borde ni fondo --}}
            <div class="text-[10px] font-bold uppercase tracking-[.18em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                ÁREA TÉCNICA
            </div>

            <h1 class="mx-auto mt-5 max-w-4xl break-words text-[clamp(2.3rem,8vw,3.2rem)] font-extrabold leading-[1.05] tracking-[-.055em] sm:text-[clamp(3.2rem,5vw,4.8rem)] sm:leading-[.98]">

                Las herramientas

                <span class="text-kate-pink-strong">
                    detrás de lo que creo
                </span>

            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-kate-gray sm:text-base sm:leading-8 lg:text-lg">
                Cada idea necesita algo que la haga posible. Aquí se encuentran las tecnologías,
                herramientas y conocimientos que me ayudan a llevar una idea desde sus primeros
                trazos hasta convertirse en una experiencia digital.
            </p>

        </div>

        {{-- =====================================================
            TARJETAS TÉCNICAS
        ====================================================== --}}

        <div class="grid min-w-0 grid-cols-1 gap-5 sm:gap-6 lg:grid-cols-2">

            {{-- FRONTEND --}}
            <article class="group relative min-w-0 overflow-hidden rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:rounded-[32px] sm:p-8 xl:p-10">

                <div
                    class="pointer-events-none absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                    aria-hidden="true"
                ></div>

                <div class="relative">

                    <div class="flex h-14 w-14 items-center justify-center rounded-[18px] bg-kate-pink text-xl font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong sm:h-16 sm:w-16 sm:rounded-[20px] sm:text-2xl">
                        &lt;/&gt;
                    </div>

                    <div class="mt-6 sm:mt-8">

                        <span class="text-[10px] font-bold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.18em]">
                            DESARROLLO
                        </span>

                        <h2 class="mt-2 text-2xl font-extrabold tracking-[-.04em] sm:text-3xl">
                            Frontend
                        </h2>

                        <p class="mt-4 max-w-lg text-sm leading-7 text-kate-gray sm:text-base">
                            Tecnologías que utilizo para transformar diseños
                            en interfaces web funcionales, responsivas y llenas de vida.
                        </p>

                    </div>

                    <div class="mt-7 flex flex-wrap gap-2 sm:mt-8 sm:gap-3">

                        @foreach ([
                            'HTML5',
                            'CSS3',
                            'JavaScript',
                            'TypeScript',
                            'React',
                            'Next.js',
                            'Tailwind CSS · Básico'
                        ] as $skill)

                            <span class="max-w-full rounded-full border border-kate-pink/60 bg-kate-pink-light px-3 py-2 text-xs font-semibold text-kate-dark sm:px-4 sm:text-sm">
                                {{ $skill }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </article>

            {{-- DISEÑO WEB UX/UI --}}
            <article class="group relative min-w-0 overflow-hidden rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:rounded-[32px] sm:p-8 xl:p-10">

                <div
                    class="pointer-events-none absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                    aria-hidden="true"
                ></div>

                <div class="relative">

                    <div class="flex h-14 w-14 items-center justify-center rounded-[18px] bg-kate-pink text-lg font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong sm:h-16 sm:w-16 sm:rounded-[20px] sm:text-xl">
                        UI
                    </div>

                    <div class="mt-6 sm:mt-8">

                        <span class="text-[10px] font-bold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.18em]">
                            DISEÑO
                        </span>

                        <h2 class="mt-2 break-words text-2xl font-extrabold tracking-[-.04em] sm:text-3xl">
                            Diseño Web UX/UI
                        </h2>

                        <p class="mt-4 max-w-lg text-sm leading-7 text-kate-gray sm:text-base">
                            Herramientas y conocimientos que me permiten cuidar lo visual,
                            crear interfaces claras y pensar en cómo se siente cada experiencia al recorrerla.
                        </p>

                    </div>

                    <div class="mt-7 flex flex-wrap gap-2 sm:mt-8 sm:gap-3">

                        @foreach ([
                            'Figma',
                            'Canva',
                            'Adobe Illustrator',
                            'Adobe inDesign',
                            'Wireframes',
                            'Prototipado',
                            'Diseño responsive',
                            'Jerarquía visual'
                        ] as $skill)

                            <span class="max-w-full rounded-full border border-kate-pink/60 bg-kate-pink-light px-3 py-2 text-xs font-semibold text-kate-dark sm:px-4 sm:text-sm">
                                {{ $skill }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </article>

            {{-- BACKEND Y DATOS --}}
            <article class="group relative min-w-0 overflow-hidden rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:rounded-[32px] sm:p-8 xl:p-10">

                <div
                    class="pointer-events-none absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                    aria-hidden="true"
                ></div>

                <div class="relative">

                    <div class="flex h-14 w-14 items-center justify-center rounded-[18px] bg-kate-pink text-lg font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong sm:h-16 sm:w-16 sm:rounded-[20px] sm:text-xl">
                        &#123; &#125;
                    </div>

                    <div class="mt-6 sm:mt-8">

                        <span class="text-[10px] font-bold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.18em]">
                            CONOCIMIENTOS
                        </span>

                        <h2 class="mt-2 break-words text-2xl font-extrabold tracking-[-.04em] sm:text-3xl">
                            Backend &amp; Datos
                        </h2>

                        <p class="mt-4 max-w-lg text-sm leading-7 text-kate-gray sm:text-base">
                            Conocimientos que me ayudan a entender lo que ocurre detrás
                            de una interfaz y cómo cada parte de una aplicación se conecta
                            para funcionar.
                        </p>

                    </div>

                    <div class="mt-7 flex flex-wrap gap-2 sm:mt-8 sm:gap-3">

                        @foreach ([
                            'PHP · Básico',
                            'Laravel · Básico',
                            'Laravel Jetstream · Básico',
                            'SQL · Básico',
                            'SQLite · Básico',
                            'Python · Básico'
                        ] as $skill)

                            <span class="max-w-full rounded-full border border-kate-pink/60 bg-kate-pink-light px-3 py-2 text-xs font-semibold text-kate-dark sm:px-4 sm:text-sm">
                                {{ $skill }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </article>

            {{-- HERRAMIENTAS --}}
            <article class="group relative min-w-0 overflow-hidden rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:rounded-[32px] sm:p-8 xl:p-10">

                <div
                    class="pointer-events-none absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                    aria-hidden="true"
                ></div>

                <div class="relative">

                    <div class="flex h-14 w-14 items-center justify-center rounded-[18px] bg-kate-pink text-lg font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong sm:h-16 sm:w-16 sm:rounded-[20px] sm:text-xl">
                        +
                    </div>

                    <div class="mt-6 sm:mt-8">

                        <span class="text-[10px] font-bold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.18em]">
                            FLUJO DE TRABAJO
                        </span>

                        <h2 class="mt-2 text-2xl font-extrabold tracking-[-.04em] sm:text-3xl">
                            Herramientas
                        </h2>

                        <p class="mt-4 max-w-lg text-sm leading-7 text-kate-gray sm:text-base">
                            Recursos que me acompañan durante el proceso: desde crear
                            y organizar hasta probar, mejorar y dar forma a cada proyecto.
                        </p>

                    </div>

                    <div class="mt-7 flex flex-wrap gap-2 sm:mt-8 sm:gap-3">

                        @foreach ([
                            'Git',
                            'GitHub',
                            'VS Code'
                        ] as $skill)

                            <span class="max-w-full rounded-full border border-kate-pink/60 bg-kate-pink-light px-3 py-2 text-xs font-semibold text-kate-dark sm:px-4 sm:text-sm">
                                {{ $skill }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </article>

        </div>

    </div>

</section>

{{-- =========================================================
    HABILIDADES PERSONALES
========================================================= --}}

<section class="border-y border-kate-pink/20 bg-white/55 py-16 sm:py-20 lg:py-28">

    <div class="kate-container min-w-0">

        {{-- ENCABEZADO --}}
        <div class="mx-auto max-w-3xl text-center">

            {{-- Subtítulo sin borde ni fondo --}}
            <div class="text-[10px] font-bold uppercase tracking-[.18em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                HABILIDADES PERSONALES
            </div>

            <h2 class="mt-5 break-words text-[clamp(2.4rem,8vw,3.2rem)] font-extrabold leading-[1.05] tracking-[-.055em] sm:text-[clamp(3.2rem,5vw,5rem)] sm:leading-[.98]">

                Más allá

                <span class="text-kate-pink-strong">
                    del código
                </span>

            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-kate-gray sm:text-base sm:leading-8 lg:text-lg">
                Crear no es solo saber cómo hacerlo. También es tener curiosidad para aprender,
                paciencia para resolver, atención para cuidar los detalles y disposición para crecer
                con cada reto.
            </p>

        </div>

        {{-- =====================================================
            TARJETAS DE HABILIDADES PERSONALES
            Responsabilidad incluida en el mismo grid.
            En móvil todas quedan alineadas a la izquierda.
            En pantallas grandes la última queda centrada.
        ====================================================== --}}

        <div class="mx-auto mt-10 grid max-w-5xl grid-cols-1 gap-4 sm:mt-14 sm:grid-cols-2">

            @foreach ([
                ['icono' => '✦', 'nombre' => 'Creatividad'],
                ['icono' => '↗', 'nombre' => 'Comunicación efectiva'],
                ['icono' => '+', 'nombre' => 'Trabajo en equipo'],
                ['icono' => '↻', 'nombre' => 'Adaptabilidad'],
                ['icono' => '✓', 'nombre' => 'Organización'],
                ['icono' => '◇', 'nombre' => 'Atención al detalle'],
                ['icono' => '●', 'nombre' => 'Responsabilidad']
            ] as $habilidad)

                <div
                    class="group flex min-w-0 items-center justify-start gap-3 rounded-[20px] border border-kate-border bg-white p-4 text-left transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)] sm:gap-4 sm:rounded-[24px] sm:p-5 {{ $loop->last ? 'sm:col-span-2 sm:mx-auto sm:w-full sm:max-w-[490px]' : '' }}"
                >

                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong sm:h-11 sm:w-11">
                        {{ $habilidad['icono'] }}
                    </span>

                    <span class="min-w-0 text-sm font-bold leading-6 sm:text-base">
                        {{ $habilidad['nombre'] }}
                    </span>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- =========================================================
    CTA / PROYECTOS
========================================================= --}}

<section class="py-14 sm:py-20 lg:py-24">

    <div class="kate-container">

        <div class="relative isolate overflow-hidden rounded-[24px] border border-kate-pink-strong/30 bg-kate-pink px-5 py-12 text-center text-kate-dark shadow-[0_25px_70px_rgba(244,91,165,.16)] sm:rounded-[38px] sm:px-12 sm:py-16 lg:px-20 lg:py-20">

            {{-- Círculo superior izquierdo --}}
            <div
                class="pointer-events-none absolute -left-20 -top-28 -z-10 h-72 w-72 rounded-full border border-white/80 bg-white/5"
                aria-hidden="true"
            ></div>

            {{-- Cuadrado rosa --}}
            <div
                class="pointer-events-none absolute left-10 top-10 -z-10 h-5 w-5 rotate-12 rounded-sm bg-kate-pink-strong/35 sm:left-16 sm:top-14"
                aria-hidden="true"
            ></div>

            {{-- Círculo grande inferior derecho --}}
            <div
                class="pointer-events-none absolute -bottom-28 -right-16 -z-10 h-80 w-80 rounded-full bg-kate-pink-light/70"
                aria-hidden="true"
            ></div>

            {{-- CONTENIDO --}}
            <div class="relative mx-auto max-w-4xl">

                <span class="text-[10px] font-extrabold uppercase tracking-[.12em] text-kate-dark sm:text-xs sm:tracking-[.2em]">
                    DEL CONOCIMIENTO A LA PRÁCTICA
                </span>

                <h2 class="mx-auto mt-5 max-w-3xl break-words text-[clamp(2.3rem,8vw,3rem)] font-extrabold leading-[1.05] tracking-[-.055em] sm:text-[clamp(3rem,5vw,5rem)] sm:leading-[.98]">

                    Ahora mira cómo lo

                    <span class="text-white">
                        llevo a proyectos
                    </span>

                </h2>

                <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-kate-gray sm:text-base">
                    Todo lo que aprendo encuentra su lugar cuando una idea empieza
                    a tomar forma. Aquí puedes conocer algunos de los proyectos donde diseño,
                    código y creatividad dejaron de ser herramientas para convertirse en algo real.
                </p>

                <div class="mt-9">

                    <a
                        href="{{ route('proyectos') }}"
                        class="group inline-flex max-w-full flex-wrap items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-5 py-3.5 text-center text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)] sm:px-7 sm:py-4 sm:text-base"
                    >
                        Explora lo que he creado

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
