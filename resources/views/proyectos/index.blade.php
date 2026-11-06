
@extends('layouts.app')

@section('title', 'Proyectos | Kateryn Martínez')

@section(
    'description',
    'Proyectos de desarrollo frontend y diseño Web UX/UI realizados por Kateryn Martínez.'
)

@section('content')

@php
    $categoriaSeleccionada = request('categoria', 'todos');

    $categoriasValidas = ['todos', 'frontend', 'ux-ui'];

    if (!in_array($categoriaSeleccionada, $categoriasValidas, true)) {
        $categoriaSeleccionada = 'todos';
    }

    $proyectos = [
        [
            'slug' => 'latido-ancestral',
            'nombre' => 'Ancestral Heartbeat',
            'categoria' => 'frontend',
            'etiqueta' => 'FRONTEND · 2025',
            'descripcion' => 'Una historia que nace de nuestras raíces.',
            'imagen' => 'latido-ancestral/latido-ancestral-01.webp',
            'alt' => 'Vista principal del proyecto Latido Ancestral',
            'tecnologias' => [
                'React',
                'TypeScript',
                'Next.js',
                'Tailwind CSS'
            ]
        ],
        [
            'slug' => 'plus-size',
            'nombre' => 'Tienda Virtual Plus Size',
            'categoria' => 'frontend',
            'etiqueta' => 'FRONTEND · 2025',
            'descripcion' => 'Una nueva forma de encontrar tu estilo.',
            'imagen' => 'plus-size/plus-size-01.webp',
            'alt' => 'Vista principal del proyecto Tienda Virtual Plus Size',
            'tecnologias' => [
                'HTML5',
                'CSS3',
                'JavaScript',
                'Figma'
            ]
        ],
        [
            'slug' => 'rastro-cafe',
            'nombre' => 'Rastro',
            'categoria' => 'ux-ui',
            'etiqueta' => 'UX/UI · 2026',
            'descripcion' => 'Donde una taza también puede contar una historia.',
            'imagen' => 'rastro-cafe/rastro-cafe-01.webp',
            'alt' => 'Vista principal del diseño UX/UI Rastro Café',
            'tecnologias' => [
                'Figma',
                'UX/UI',
                'Prototipado',
                'Diseño responsive'
            ]
        ],
        [
            'slug' => 'encanto-belleza',
            'nombre' => 'Encanto',
            'categoria' => 'ux-ui',
            'etiqueta' => 'UX/UI · 2026',
            'descripcion' => 'La belleza vive en los pequeños detalles.',
            'imagen' => 'encanto-belleza/encanto-belleza-01.webp',
            'alt' => 'Vista principal del diseño UX/UI Encanto Belleza',
            'tecnologias' => [
                'Figma',
                'UX/UI',
                'Prototipado',
                'Jerarquía visual'
            ]
        ],
        [
            'slug' => 'catalogo-rastro-cafe',
            'nombre' => 'Catálogo Digital Rastro Café',
            'categoria' => 'ux-ui',
            'etiqueta' => 'UX/UI · 2026',
            'descripcion' => 'El aroma del café también se cuenta entre páginas.',
            'imagen' => 'rastro-cafe/Rastro-catalogo-01.webp',
            'alt' => 'Presentación del catálogo digital Rastro Café',
            'tecnologias' => [
                'Adobe InDesign',
                'Diseño editorial',
                'Catálogo digital interactivo',
                'Composición visual'
            ]
        ]
    ];

    $proyectosFiltrados = array_values(array_filter(
        $proyectos,
        fn ($proyecto) =>
            $categoriaSeleccionada === 'todos'
            || $proyecto['categoria'] === $categoriaSeleccionada
    ));
@endphp


{{-- =========================================================
    ENCABEZADO
========================================================= --}}

<section class="pb-10 pt-12 sm:pb-14 sm:pt-16 lg:pb-20 lg:pt-24">

    <div class="kate-container min-w-0">

        <div class="mx-auto max-w-4xl text-center">

            {{-- SUBTÍTULO SIN RECUADRO --}}
            <div class="text-[11px] font-extrabold uppercase tracking-[.2em] text-kate-pink-deep sm:text-xs">
                PROYECTOS
            </div>

            <h1 class="mx-auto mt-5 max-w-4xl text-[clamp(2.5rem,8vw,4rem)] font-extrabold leading-[1.05] tracking-[-.06em] sm:text-[clamp(4rem,6vw,6rem)] sm:leading-[.95]">

                Un vistazo

                <span class="text-kate-pink-strong">
                    a lo que hago
                </span>

            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-kate-gray sm:text-base sm:leading-8 lg:text-lg">
                Lo que imagino también puede encontrar su lugar en lo real.
                Cada proyecto guarda un pedacito de mí: lo que descubro,
                lo que aprendo y esa necesidad de transformar lo que nace
                en mi mente en algo que pueda existir más allá de ella.
            </p>

        </div>


        {{-- =====================================================
            FILTROS RESPONSIVE
        ====================================================== --}}

        <nav
            class="mx-auto mt-9 flex max-w-4xl flex-wrap items-center justify-center gap-2 sm:mt-12 sm:gap-3"
            aria-label="Filtrar proyectos por categoría"
        >

            {{-- TODOS --}}
            <a
                href="{{ route('proyectos') }}"
                aria-current="{{ $categoriaSeleccionada === 'todos' ? 'page' : 'false' }}"
                class="inline-flex min-h-11 max-w-full items-center justify-center rounded-full border px-4 py-2.5 text-center text-xs font-bold text-kate-dark transition duration-300 hover:-translate-y-0.5 sm:px-6 sm:py-3 sm:text-sm
                {{ $categoriaSeleccionada === 'todos'
                    ? 'border-kate-pink bg-kate-pink hover:bg-kate-pink-strong'
                    : 'border-kate-border bg-white hover:border-kate-pink hover:bg-kate-pink-light'
                }}"
            >
                Todos
            </a>

            {{-- DESARROLLO FRONTEND --}}
            <a
                href="{{ route('proyectos', ['categoria' => 'frontend']) }}"
                aria-current="{{ $categoriaSeleccionada === 'frontend' ? 'page' : 'false' }}"
                class="inline-flex min-h-11 max-w-full items-center justify-center rounded-full border px-4 py-2.5 text-center text-xs font-bold text-kate-dark transition duration-300 hover:-translate-y-0.5 sm:px-6 sm:py-3 sm:text-sm
                {{ $categoriaSeleccionada === 'frontend'
                    ? 'border-kate-pink bg-kate-pink hover:bg-kate-pink-strong'
                    : 'border-kate-border bg-white hover:border-kate-pink hover:bg-kate-pink-light'
                }}"
            >
                Desarrollo Frontend
            </a>

            {{-- DISEÑO WEB UX/UI --}}
            <a
                href="{{ route('proyectos', ['categoria' => 'ux-ui']) }}"
                aria-current="{{ $categoriaSeleccionada === 'ux-ui' ? 'page' : 'false' }}"
                class="inline-flex min-h-11 max-w-full items-center justify-center rounded-full border px-4 py-2.5 text-center text-xs font-bold text-kate-dark transition duration-300 hover:-translate-y-0.5 sm:px-6 sm:py-3 sm:text-sm
                {{ $categoriaSeleccionada === 'ux-ui'
                    ? 'border-kate-pink bg-kate-pink hover:bg-kate-pink-strong'
                    : 'border-kate-border bg-white hover:border-kate-pink hover:bg-kate-pink-light'
                }}"
            >
                Diseño Web UX/UI
            </a>

        </nav>

    </div>

</section>


{{-- =========================================================
    LISTADO DE PROYECTOS
========================================================= --}}

<section class="pb-16 sm:pb-20 lg:pb-28">

    <div class="kate-container min-w-0">

        {{-- GRID RESPONSIVE --}}
        <div class="grid min-w-0 grid-cols-1 items-stretch gap-6 sm:gap-8 lg:grid-cols-2">

            @forelse ($proyectosFiltrados as $proyecto)

                <article class="group flex min-w-0 flex-col overflow-hidden rounded-[24px] border border-kate-border bg-white transition duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_28px_75px_rgba(244,91,165,.16)] sm:rounded-[30px] lg:rounded-[34px]">

                    {{-- =============================================
                        IMAGEN DEL PROYECTO
                    ============================================== --}}

                    <div class="relative overflow-hidden border-b border-kate-border bg-gradient-to-br from-kate-pink-light via-kate-pink-soft/70 to-kate-pink/45 p-3 sm:p-5 lg:p-6 xl:p-7">

                        <div class="aspect-[4/3] w-full overflow-hidden rounded-[16px] border border-kate-pink/55 bg-white shadow-[0_16px_40px_rgba(244,91,165,.10)] sm:aspect-[16/11] sm:rounded-[22px] lg:aspect-[4/3] xl:rounded-[26px]">

                            @if ($proyecto['imagen'])

                                <img
                                    src="{{ asset($proyecto['imagen']) }}"
                                    alt="{{ $proyecto['alt'] }}"
                                    loading="lazy"
                                    decoding="async"
                                    class="h-full w-full object-cover object-center transition-transform duration-700 group-hover:scale-[1.03]"
                                >

                            @else

                                {{-- PRESENTACIÓN TEMPORAL DEL CATÁLOGO --}}
                                <div
                                    class="flex h-full w-full items-center justify-center bg-gradient-to-br from-kate-pink-light via-white to-kate-pink-soft p-5 sm:p-8"
                                    role="img"
                                    aria-label="{{ $proyecto['alt'] }}"
                                >

                                    <div class="flex aspect-[3/4] max-h-full w-auto max-w-[70%] flex-col items-center justify-center rounded-[8px] border border-kate-pink/50 bg-kate-cream px-5 py-6 text-center shadow-[12px_14px_28px_rgba(33,27,32,.12)] transition-transform duration-700 group-hover:scale-[1.03] sm:px-8">

                                        <span class="text-[9px] font-extrabold uppercase tracking-[.25em] text-kate-pink-deep sm:text-xs">
                                            RASTRO CAFÉ
                                        </span>

                                        <div class="my-5 h-px w-14 bg-kate-pink-strong sm:my-7"></div>

                                        <span class="text-xl font-extrabold leading-tight tracking-[-.05em] text-kate-dark sm:text-3xl">
                                            Catálogo
                                            <span class="block text-kate-pink-deep">
                                                Digital
                                            </span>
                                        </span>

                                        <span class="mt-5 text-[9px] font-medium uppercase tracking-[.18em] text-kate-gray sm:text-xs">
                                            Diseño · 2026
                                        </span>

                                    </div>

                                </div>

                            @endif

                        </div>

                    </div>


                    {{-- =============================================
                        INFORMACIÓN
                    ============================================== --}}

                    <div class="flex min-w-0 flex-1 flex-col p-5 sm:p-7 lg:p-8 xl:p-9">

                        {{-- CATEGORÍA Y AÑO --}}
                        <div class="text-[10px] font-bold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.18em]">
                            {{ $proyecto['etiqueta'] }}
                        </div>

                        {{-- NOMBRE --}}
                        <h2 class="mt-3 break-words text-[clamp(1.6rem,6vw,2rem)] font-extrabold leading-[1.12] tracking-[-.04em] sm:text-3xl xl:text-4xl">
                            {{ $proyecto['nombre'] }}
                        </h2>

                        {{-- DESCRIPCIÓN --}}
                        <p class="mt-4 text-sm leading-7 text-kate-gray sm:text-base">
                            {{ $proyecto['descripcion'] }}
                        </p>

                        {{-- TECNOLOGÍAS --}}
                        <div class="mt-6 flex flex-wrap gap-2">

                            @foreach ($proyecto['tecnologias'] as $tecnologia)

                                <span class="max-w-full rounded-full border border-kate-pink/60 bg-kate-pink-light px-3 py-2 text-xs font-semibold leading-5 text-kate-dark sm:px-3.5">
                                    {{ $tecnologia }}
                                </span>

                            @endforeach

                        </div>

                        {{-- BOTÓN --}}
                        <div class="mt-auto pt-8">

                            <div class="border-t border-kate-border pt-6">

                                <a
                                    href="{{ route('proyectos.show', $proyecto['slug']) }}"
                                    aria-label="Ver proyecto {{ $proyecto['nombre'] }}"
                                    class="group/link inline-flex min-h-11 items-center gap-3 text-sm font-bold text-kate-dark transition duration-300 hover:text-kate-pink-deep sm:text-base"
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

                    </div>

                </article>

            @empty

                <div class="col-span-full rounded-[24px] border border-kate-border bg-white px-5 py-12 text-center sm:px-10">

                    <h2 class="text-2xl font-extrabold tracking-[-.04em]">
                        No hay proyectos en esta categoría
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-kate-gray sm:text-base">
                        Puedes explorar todos los proyectos disponibles.
                    </p>

                    <a
                        href="{{ route('proyectos') }}"
                        class="mt-6 inline-flex items-center justify-center rounded-full bg-kate-pink px-6 py-3 text-sm font-bold text-kate-dark transition duration-300 hover:bg-kate-pink-strong"
                    >
                        Ver todos
                    </a>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
    CTA / CIERRE DE PROYECTOS
========================================================= --}}

<section class="pb-16 sm:pb-20 lg:pb-28">

    <div class="kate-container min-w-0">

        <div class="relative isolate overflow-hidden rounded-[24px] border border-kate-pink-strong/45 bg-kate-pink px-5 py-12 text-center text-kate-dark shadow-[0_25px_70px_rgba(244,91,165,.16)] sm:rounded-[32px] sm:px-12 sm:py-16 lg:rounded-[38px] lg:px-20 lg:py-20">

            {{-- Círculo grande superior derecho --}}
            <div
                class="pointer-events-none absolute -right-24 -top-32 -z-10 h-64 w-64 rounded-full bg-kate-pink-light/75 sm:h-80 sm:w-80"
                aria-hidden="true"
            ></div>

            {{-- Círculo delineado superior izquierdo --}}
            <div
                class="pointer-events-none absolute left-10 top-10 -z-10 hidden h-16 w-16 rounded-full border border-white/80 sm:block lg:left-16 lg:top-14"
                aria-hidden="true"
            ></div>

            {{-- Círculo delineado inferior izquierdo --}}
            <div
                class="pointer-events-none absolute -bottom-24 -left-14 -z-10 h-64 w-64 rounded-full border border-white/80"
                aria-hidden="true"
            ></div>

            {{-- Círculo pequeño inferior --}}
            <div
                class="pointer-events-none absolute bottom-14 right-24 -z-10 hidden h-11 w-11 rounded-full border border-white/80 lg:block xl:right-52"
                aria-hidden="true"
            ></div>

            {{-- Detalle cuadrado --}}
            <div
                class="pointer-events-none absolute bottom-10 right-10 -z-10 h-5 w-5 -rotate-12 rounded-sm bg-kate-pink-strong/40 sm:bottom-16 sm:right-16"
                aria-hidden="true"
            ></div>

            {{-- CONTENIDO --}}
            <div class="relative mx-auto max-w-4xl">

                <span class="text-[10px] font-extrabold uppercase tracking-[.12em] text-kate-dark sm:text-xs sm:tracking-[.22em]">
                    ¿Y AHORA, QUÉ PODEMOS CREAR?
                </span>

                <h2 class="mx-auto mt-5 max-w-3xl text-[clamp(2.2rem,7vw,3.2rem)] font-extrabold leading-[1.05] tracking-[-.06em] sm:text-[clamp(3.2rem,5.5vw,5.5rem)] sm:leading-[.95]">

                    Tu idea puede

                    <span class="block text-white">
                        ser el próximo proyecto
                    </span>

                </h2>

                <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-kate-gray sm:mt-7 sm:text-base sm:leading-8 lg:text-lg">
                    Cuéntame qué imaginas y descubramos juntos hasta dónde puede llegar.
                </p>

                <div class="mt-8 sm:mt-9">

                    <a
                        href="{{ route('contacto') }}"
                        class="group inline-flex max-w-full items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-6 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)] sm:px-7 sm:text-base"
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
