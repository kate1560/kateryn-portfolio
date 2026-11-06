
@extends('layouts.app')

@php
    /*
    |--------------------------------------------------------------------------
    | INFORMACIÓN DE LOS PROYECTOS
    |--------------------------------------------------------------------------
    */

    $proyectos = [

        'latido-ancestral' => [
            'titulo' => 'Ancestral Heartbeat',
            'categoria' => 'Desarrollo Frontend',
            'anio' => '2025',
            'numero' => '01',
            'modalidad' => 'Proyecto grupal',
            'contexto' => 'Riwi',

            'descripcion' => [
                'Ancestral Heartbeat nació con una intención muy especial: llevar al mundo digital un pedacito de la riqueza artesanal y cultural de San Jacinto Bolívar.',

                'Su inspiración vive en esas tradiciones que hablan de nuestra tierra, de sus colores, de las manos que crean y de historias que han pasado de generación en generación. El desafío fue llevar todo ese significado a una experiencia de comercio electrónico moderna y cercana, encontrando un punto en el que lo artesanal y lo digital pudieran encontrarse sin que ninguno tuviera que renunciar a su esencia.',

                'Porque detrás de cada pieza hay algo más que un producto: hay una historia, unas manos y un lugar de donde viene.',

                'Por eso, más que construir una tienda virtual, Ancestral Heartbeat fue una manera de abrirle una nueva ventana a la tradición; una forma distinta de descubrirla, recorrerla y reconocerla, demostrando que nuestras raíces también pueden encontrar su lugar entre píxeles, interfaces y nuevas formas de conectar.'
            ],

            'aporte' => [
                'Fui parte de la construcción de la interfaz frontend, convirtiendo ideas y propuestas visuales en componentes y vistas capaces de tomar forma en pantalla y convertirse en una experiencia navegable.',

                'Al ser un proyecto grupal, hubo que aprender a escuchar, organizar tareas, compartir avances y unir diferentes formas de crear. Cada aporte era una pequeña pieza y el verdadero reto estaba en conseguir que, al juntarlas, todas hablaran el mismo lenguaje y llevaran la plataforma hacia una misma dirección.',

                'Ancestral Heartbeat avanzó hasta las fases de pruebas y despliegue dentro del ciclo de vida del desarrollo de software. Acompañé ese recorrido hasta llegar a una versión publicada y ver cómo aquello que alguna vez comenzó como una idea terminó encontrando su propio espacio en la web.'
            ],

            'tecnologias' => [
                'React',
                'TypeScript',
                'Next.js',
                'Tailwind CSS'
            ],

            'herramientas' => [
                'Git',
                'GitHub',
                'VS Code',
                'Figma',
                'Canva'
            ],

            'portada' => 'latido-ancestral/latido-ancestral-01.webp',

            'imagenes' => [
                'latido-ancestral/latido-ancestral-02.webp',
                'latido-ancestral/latido-ancestral-03.webp',
                'latido-ancestral/latido-ancestral-04.webp'
            ],

            'enlace' => 'https://ancestral-heartbeat.vercel.app/'
        ],

        'plus-size' => [
            'titulo' => 'Tienda Virtual Plus Size',
            'categoria' => 'Desarrollo Frontend',
            'anio' => '2025',
            'numero' => '02',
            'modalidad' => 'Proyecto grupal',
            'contexto' => 'Riwi',

            'descripcion' => [
                'Tienda Virtual Plus Size nació de una pregunta que parecía sencilla, pero escondía una necesidad mucho más profunda: ¿por qué encontrar una prenda que refleje quiénes somos tendría que convertirse en una búsqueda tan difícil?.',

                'La idea surgió pensando en mujeres de tallas grandes que desean vestir con libertad, descubrir nuevas tendencias y encontrar prendas modernas, juveniles y llenas de personalidad. Porque la moda no debería sentirse como un espacio al que hay que intentar encajar, sino como una oportunidad para expresarse y elegir aquello que nos hace sentir auténticas.',

                'Así comenzó a tomar forma una propuesta que buscaba reunir diferentes tiendas, estilos y posibilidades en un mismo lugar. Un espacio donde cada búsqueda pudiera convertirse en un descubrimiento, donde las clientas encontraran prendas que conectaran con su esencia y los proveedores una nueva manera de acercar sus productos a quienes los estaban buscando.',

                'Porque, al final, no se trataba solamente de construir una tienda virtual. Se trataba de imaginar un lugar donde la moda dejara de imponer límites y comenzara a abrir posibilidades, recordándonos que el estilo no se mide en tallas, sino en la libertad de ser quienes somos.'
            ],

            'aporte' => [
                'Fui parte de la construcción de la interfaz frontend, transformando ideas y propuestas en vistas donde productos, tiendas y proveedores pudieran encontrarse dentro de una misma experiencia digital.',

                'Trabajar en equipo también me enseñó que una misma idea puede tomar caminos diferentes cuando se mira desde distintas perspectivas. Entre conversaciones, decisiones compartidas y pequeños desafíos, aprendimos a complementar nuestras fortalezas y a encontrar soluciones juntos, descubriendo que el valor de lo construido no estaba solamente en el resultado, sino también en todo lo que aprendimos durante el camino.',

                'Tienda Virtual Plus Size avanzó hasta la fase de pruebas dentro del ciclo de vida del desarrollo de software. Allí pudimos recorrer, verificar y ajustar lo construido. Aunque no llegó a la etapa de despliegue, quedó la experiencia de haber convertido una necesidad en una idea, una idea en pantallas y esas pantallas en una propuesta que pudimos hacer realidad.'
            ],

            'tecnologias' => [
                'HTML5',
                'CSS3',
                'JavaScript'
            ],

            'herramientas' => [
                'VS Code',
                'Figma',
                'GitHub'
            ],

            'portada' => 'plus-size/plus-size-01.webp',
            'imagenes' => [],
            'enlace' => null
        ],

        'rastro-cafe' => [
            'titulo' => 'Rastro',
            'categoria' => 'Diseño Web UX/UI',
            'anio' => '2026',
            'numero' => '03',
            'modalidad' => 'Proyecto de diseño',
            'contexto' => 'Proyecto personal',

            'descripcion' => [
                'Rastro nació de una esencia que va mucho más allá de una taza de café. Una esencia que guarda memorias, tradiciones y pequeños fragmentos de la historia de San Jacinto Bolívar.',

                'Su identidad vive en esos detalles que hablan de nuestra tierra, de las costumbres que permanecen y de las historias que encuentran nuevas maneras de seguir siendo contadas. Cada rincón conserva algo de ese legado, convirtiendo lo cotidiano en una experiencia que puede sentirse, recorrerse y recordarse.',

                'El desafío fue trasladar esa identidad al mundo digital, encontrando un equilibrio entre la calidez de lo ancestral y la frescura de lo contemporáneo. Una manera de acercar sus espacios, sus sabores y su historia a nuevas miradas, sin dejar atrás aquello que los hace únicos.',

                'Porque Rastro Café no se trataba solamente de mostrar un lugar a través de una pantalla, sino de abrir una ventana a su esencia. De permitir que la tradición encontrara otra forma de permanecer y que, incluso entre píxeles, una historia pudiera seguir dejando rastro.'
            ],

            'aporte' => [
                'Mi aporte comenzó con el desafío de transformar la esencia de Rastro Café en una propuesta visual. A través de la composición, los colores y la organización de cada sección, busqué construir un recorrido capaz de transmitir la identidad del lugar y aquello que lo hace especial.',

                'Cada decisión de diseño fue una oportunidad para acercar dos mundos: la memoria de lo ancestral y las posibilidades de lo digital. Más allá de imaginar pantallas atractivas, el propósito fue conseguir que cada elemento tuviera una intención y que juntos contaran una misma historia.',

                'Así descubrí que diseñar también puede ser una forma de preservar. De tomar aquello que tiene significado, darle un nuevo lenguaje y permitir que su historia siga dejando huella, incluso al otro lado de una pantalla.'
            ],

            'tecnologias' => [],

            'herramientas' => [
                'Figma'
            ],

            'portada' => 'rastro-cafe/rastro-cafe-01.webp',

            'imagenes' => [
                'rastro-cafe/rastro-cafe-02.webp',
                'rastro-cafe/rastro-cafe-03.webp',
                'rastro-cafe/rastro-cafe-04.webp'
            ],

            'enlace' => 'https://www.figma.com/design/xuQWGW9vbR0sq1iflCAR1d/Mockup---Rastro-Caf%C3%A9?node-id=0-1&t=ZkoZ5nwELdwIQeaw-1'
        ],

        'encanto-belleza' => [
            'titulo' => 'Encanto Belleza',
            'categoria' => 'Diseño Web UX/UI',
            'anio' => '2026',
            'numero' => '04',
            'modalidad' => 'Proyecto de diseño',
            'contexto' => 'Proyecto personal',

            'descripcion' => [
                'Encanto Belleza nació de una idea sencilla: hay cosas que comienzan mucho antes de elegir un producto. Comienzan con una mirada, con un color que nos atrae o con ese pequeño detalle que, sin saber muy bien por qué, consigue despertar algo en nosotros.',

                'Su inspiración surgió de una tienda de belleza de San Jacinto, Bolívar, y del deseo de trasladar su esencia a una propuesta visual donde cada tono, cada forma y cada elemento encontraran su lugar. El desafío fue imaginar un espacio que no solo mostrara productos, sino que transmitiera esa sensación especial de descubrir algo que conecta con nuestra personalidad.',

                'Porque la belleza también vive en los pequeños encuentros: en aquello que llama nuestra atención, en lo que elegimos para expresarnos y en los detalles que hacen que una experiencia se sienta nuestra.',

                'Así, Encanto Belleza comenzó a tomar forma como una nueva manera de recorrer ese universo de colores y posibilidades. Una propuesta donde lo visual y lo cotidiano pudieran encontrarse, demostrando que, a veces, el verdadero encanto no está solamente en lo que vemos, sino en lo que nos hace sentir.'
            ],

            'aporte' => [
                'Mi aporte comenzó con la intención de transformar la identidad de Encanto Belleza en una propuesta visual que conservara su esencia. A través de los colores, las composiciones y la organización de cada sección, busqué crear un espacio donde cada detalle tuviera un propósito.',

                'Fui dando forma a las pantallas y a los recorridos, buscando un equilibrio entre la delicadeza de lo estético y la claridad de una experiencia pensada para descubrir, explorar y elegir con facilidad.',

                'Y en ese proceso comprendí que diseñar no siempre significa añadir más, sino aprender a reconocer lo esencial. Encontrar ese pequeño detalle capaz de darle sentido a todo y conseguir que, incluso desde una pantalla, una idea tenga su propio encanto.'
            ],

            'tecnologias' => [],

            'herramientas' => [
                'Figma'
            ],

            'portada' => 'encanto-belleza/encanto-belleza-01.webp',

            'imagenes' => [
                'encanto-belleza/encanto-belleza-02.webp',
                'encanto-belleza/encanto-belleza-03.webp',
                'encanto-belleza/encanto-belleza-04.webp'
            ],

            'enlace' => 'https://www.figma.com/design/i0xCe2y7g7ol49zD3SF5YS/Encanto?node-id=0-1&t=l4JZpyDxjp1wIQaB-1'
        ],

        /*
        |--------------------------------------------------------------------------
        | NUEVO PROYECTO: CATÁLOGO DIGITAL RASTRO CAFÉ
        |--------------------------------------------------------------------------
        */

        'catalogo-rastro-cafe' => [
            'titulo' => 'Catálogo Rastro Café',
            'categoria' => 'Diseño Web UX/UI',
            'anio' => '2026',
            'numero' => '05',
            'modalidad' => 'Proyecto de diseño',
            'contexto' => 'Proyecto académico SENA',

            'descripcion' => [
                'Mi aporte comenzó con la intención de convertir la esencia de Rastro Café en una historia que pudiera recorrerse entre páginas. A través de las imágenes, la tipografía y la composición, busqué que cada detalle conservara la calidez y la identidad del lugar.',

                'Cada página fue una oportunidad para encontrar armonía entre lo visual y lo cotidiano. Más allá de organizar productos, quise construir un recorrido donde los colores, los espacios y las palabras se complementaran para transmitir una misma esencia.',

                'Así comprendí que el diseño editorial también puede ser una forma de contar historias. De transformar pequeños detalles en experiencias y permitir que aquello que nace de una tradición encuentre nuevas maneras de permanecer.'
            ],

            'aporte' => [
                'Mi aporte estuvo en dar forma al catálogo desde su composición editorial: organizar los contenidos, elegir cómo presentar cada elemento y construir una secuencia visual que conservara la identidad de Rastro Café.',

                'Trabajé en la distribución de imágenes y textos, la jerarquía tipográfica y la relación entre los espacios para que cada página tuviera claridad, equilibrio y continuidad con la siguiente. El objetivo fue que la lectura se sintiera natural y que los productos pudieran destacar sin perder la calidez de la propuesta.',

                'Al llevarlo a un formato de publicación digital, descubrí otra manera de conectar diseño y experiencia: una en la que pasar de página también puede convertirse en una invitación a conocer una historia.'
            ],

            'tecnologias' => [],

            'herramientas' => [
                'Adobe InDesign',
                'Adobe Publish Online'
            ],

            'portada' => 'rastro-cafe/Rastro-catalogo-01.webp',

            'imagenes' => [
                'rastro-cafe/Rastro-catalogo-02.webp',
                'rastro-cafe/Rastro-catalogo-03.webp',
                'rastro-cafe/Rastro-catalogo-04.webp'
            ],

            'enlace' => 'https://indd.adobe.com/view/d8d91215-e85b-4306-bb7f-c7413358dd4e'
        ]
    ];

    $proyecto = $proyectos[$slug] ?? null;

    abort_if(!$proyecto, 404);

    $esDiseno = $proyecto['categoria'] === 'Diseño Web UX/UI';
@endphp

@section('title', $proyecto['titulo'] . ' | Kateryn Martínez')

@section(
    'description',
    $proyecto['titulo'] . ' — ' . $proyecto['categoria'] .
    ' realizado por Kateryn Martínez.'
)

@section('content')

{{-- =========================================================
    HERO DEL PROYECTO
========================================================= --}}

<section class="relative isolate overflow-hidden pb-12 pt-10 sm:pb-16 sm:pt-16 lg:pb-24 lg:pt-24">

    <div
        class="pointer-events-none absolute -right-40 top-10 -z-10 hidden h-[500px] w-[500px] rounded-full bg-kate-pink/20 blur-3xl lg:block"
        aria-hidden="true"
    ></div>

    <div class="kate-container min-w-0">

        <a
            href="{{ route('proyectos') }}"
            class="group inline-flex min-h-11 items-center gap-2 text-sm font-bold text-kate-gray transition duration-300 hover:text-kate-pink-deep"
        >
            <span
                class="transition-transform duration-300 group-hover:-translate-x-1"
                aria-hidden="true"
            >
                ←
            </span>

            Volver a proyectos
        </a>

        <div class="relative mx-auto mt-9 max-w-6xl text-center sm:mt-12 lg:mt-14">

            <div class="flex flex-wrap items-center justify-center gap-2 text-[10px] font-extrabold uppercase tracking-[.12em] text-kate-pink-deep sm:gap-3 sm:text-xs sm:tracking-[.18em]">

                <span>
                    {{ $proyecto['categoria'] }}
                </span>

                <span
                    class="h-1 w-1 shrink-0 rounded-full bg-kate-pink-strong"
                    aria-hidden="true"
                ></span>

                <span>
                    {{ $proyecto['anio'] }}
                </span>

            </div>

            <h1 class="relative mx-auto mt-6 max-w-6xl break-words text-[clamp(2.5rem,9vw,4.5rem)] font-extrabold leading-[1.05] tracking-[-.065em] text-kate-dark sm:mt-8 sm:text-[clamp(4.5rem,7vw,8rem)] sm:leading-[.95] lg:leading-[.9]">
                {{ $proyecto['titulo'] }}
            </h1>

            <div class="relative mx-auto mt-8 max-w-4xl space-y-5 text-left text-sm leading-7 text-kate-gray sm:mt-10 sm:space-y-6 sm:text-base sm:leading-8 lg:space-y-7 lg:text-lg lg:leading-9">

                @foreach ($proyecto['descripcion'] as $parrafo)

                    <p>
                        {{ $parrafo }}
                    </p>

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    PORTADA DEL PROYECTO
========================================================= --}}

<section class="pb-14 sm:pb-20 lg:pb-28">

    <div class="kate-container min-w-0">

        <div class="group relative overflow-hidden rounded-[20px] border border-kate-pink-strong/25 bg-kate-pink-light p-2 shadow-[0_24px_70px_rgba(33,27,32,.08)] transition duration-500 hover:border-kate-pink-strong/40 hover:shadow-[0_30px_80px_rgba(244,91,165,.12)] sm:rounded-[28px] sm:p-4 lg:rounded-[34px] lg:p-5">

            @if ($proyecto['portada'])

                <div class="flex w-full items-center justify-center overflow-hidden rounded-[14px] border border-kate-pink-strong/15 bg-white sm:rounded-[22px] lg:rounded-[25px]">

                    <img
                        src="{{ asset($proyecto['portada']) }}"
                        alt="Vista principal del proyecto {{ $proyecto['titulo'] }}"
                        class="block h-auto max-h-[650px] w-full object-contain transition-transform duration-700 group-hover:scale-[1.01]"
                        decoding="async"
                    >

                </div>

            @else

                <div class="relative flex aspect-[4/3] items-center justify-center overflow-hidden rounded-[14px] bg-gradient-to-br from-kate-pink-light via-kate-cream to-kate-pink-soft sm:aspect-[16/9] sm:rounded-[25px]">

                    <div class="relative px-5 text-center">

                        <span class="text-[10px] font-extrabold uppercase tracking-[.15em] text-kate-pink-deep sm:text-xs">
                            IMAGEN DEL PROYECTO
                        </span>

                        <p class="mt-4 text-2xl font-extrabold tracking-[-.04em] text-kate-dark sm:text-4xl">
                            {{ $proyecto['titulo'] }}
                        </p>

                    </div>

                </div>

            @endif

        </div>

    </div>

</section>


{{-- =========================================================
    MI APORTE EN EL PROYECTO
========================================================= --}}

<section class="pb-16 sm:pb-20 lg:pb-28">

    <div class="kate-container min-w-0">

        <div class="grid min-w-0 grid-cols-1 items-start gap-10 sm:gap-12 lg:grid-cols-[minmax(0,1.25fr)_minmax(0,.75fr)] lg:items-center lg:gap-16 xl:gap-20">

            <div class="min-w-0">

                <span class="block text-[11px] font-extrabold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                    MI HUELLA EN EL PROYECTO
                </span>

                <h2 class="mt-5 max-w-3xl text-[clamp(2.3rem,7vw,3.3rem)] font-extrabold leading-[1.04] tracking-[-.06em] sm:text-[clamp(3.3rem,4.5vw,4.8rem)] sm:leading-[.96]">

                    De imaginar a

                    <span class="text-kate-pink-strong">
                        {{ $esDiseno ? 'diseñar' : 'construir' }}
                    </span>

                </h2>

                <div class="mt-7 max-w-3xl space-y-5 text-left text-sm leading-7 text-kate-gray sm:mt-8 sm:space-y-6 sm:text-base sm:leading-8 lg:text-lg">

                    @foreach ($proyecto['aporte'] as $parrafo)

                        <p>
                            {{ $parrafo }}
                        </p>

                    @endforeach

                </div>

            </div>

            {{-- FICHA DEL PROYECTO --}}
            <div class="min-w-0">

                <div class="group relative overflow-hidden rounded-[24px] border border-kate-border bg-white/70 p-5 shadow-[0_18px_55px_rgba(33,27,32,.05)] transition duration-300 hover:border-kate-pink-strong/35 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)] sm:rounded-[30px] sm:p-9">

                    <div
                        class="pointer-events-none absolute -right-14 -top-14 h-36 w-36 rounded-full bg-kate-pink-soft/45 transition duration-500 group-hover:scale-125"
                        aria-hidden="true"
                    ></div>

                    <div class="relative border-b border-kate-border pb-5">

                        <span class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray">
                            Categoría
                        </span>

                        <p class="mt-2 break-words font-bold text-kate-dark">
                            {{ $proyecto['categoria'] }}
                        </p>

                    </div>

                    <div class="relative border-b border-kate-border py-5">

                        <span class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray">
                            Año
                        </span>

                        <p class="mt-2 font-bold text-kate-dark">
                            {{ $proyecto['anio'] }}
                        </p>

                    </div>

                    <div class="relative border-b border-kate-border py-5">

                        <span class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray">
                            Modalidad
                        </span>

                        <p class="mt-2 break-words font-bold text-kate-dark">
                            {{ $proyecto['modalidad'] }}
                        </p>

                    </div>

                    <div class="relative pt-5">

                        <span class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray">
                            Contexto
                        </span>

                        <p class="mt-2 break-words font-bold text-kate-dark">
                            {{ $proyecto['contexto'] }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    TECNOLOGÍAS Y HERRAMIENTAS
========================================================= --}}

<section class="border-y border-kate-border bg-white/40 py-16 sm:py-20 lg:py-28">

    <div class="kate-container min-w-0">

        <div class="mx-auto max-w-3xl text-center">

            <span class="block text-[11px] font-extrabold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                CON QUÉ TOMÓ FORMA
            </span>

            <h2 class="mt-5 text-[clamp(2.3rem,7vw,3.3rem)] font-extrabold leading-[1.04] tracking-[-.06em] sm:text-[clamp(3.3rem,4.5vw,4.8rem)] sm:leading-[.96]">

                El lenguaje de la

                <span class="text-kate-pink-strong">
                    creación
                </span>

            </h2>

        </div>

        <div class="mx-auto mt-10 grid min-w-0 grid-cols-1 gap-5 sm:mt-14 sm:gap-7 lg:mt-16 {{ !empty($proyecto['tecnologias']) ? 'max-w-6xl md:grid-cols-2' : 'max-w-md' }}">

            {{-- TECNOLOGÍAS --}}
            @if (!empty($proyecto['tecnologias']))

                <div class="group relative min-w-0 overflow-hidden rounded-[24px] border border-kate-pink-strong/15 bg-kate-cream p-5 shadow-[0_16px_45px_rgba(33,27,32,.035)] transition duration-300 hover:border-kate-pink-strong/45 hover:shadow-[0_25px_65px_rgba(244,91,165,.13)] sm:rounded-[32px] sm:p-10">

                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-soft/60 transition duration-500 group-hover:scale-125"
                        aria-hidden="true"
                    ></div>

                    <div class="relative">

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-kate-pink-strong/20 bg-kate-pink-soft text-sm font-extrabold text-kate-pink-deep transition duration-300 group-hover:bg-kate-pink">
                            &lt;/&gt;
                        </div>

                        <span class="mt-7 block text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep">
                            TECNOLOGÍAS
                        </span>

                        <div class="mt-6 flex flex-wrap gap-2 sm:gap-3">

                            @foreach ($proyecto['tecnologias'] as $tecnologia)

                                <span class="max-w-full rounded-full border border-kate-pink-strong/20 bg-kate-pink-soft px-3 py-2 text-xs font-bold text-kate-dark transition duration-300 hover:border-kate-pink-strong/50 hover:bg-kate-pink sm:px-4 sm:text-sm">
                                    {{ $tecnologia }}
                                </span>

                            @endforeach

                        </div>

                    </div>

                </div>

            @endif

            {{-- HERRAMIENTAS --}}
            <div class="group relative min-w-0 overflow-hidden rounded-[24px] border border-kate-pink-strong/15 bg-kate-cream p-5 shadow-[0_16px_45px_rgba(33,27,32,.035)] transition duration-300 hover:border-kate-pink-strong/45 hover:shadow-[0_25px_65px_rgba(244,91,165,.13)] sm:rounded-[32px] sm:p-10">

                <div
                    class="pointer-events-none absolute -bottom-20 -left-16 h-44 w-44 rounded-full border border-kate-pink-strong/15 transition duration-500 group-hover:scale-110"
                    aria-hidden="true"
                ></div>

                <div class="relative {{ empty($proyecto['tecnologias']) ? 'text-center' : '' }}">

                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-kate-pink-strong/20 bg-kate-pink-soft text-lg font-extrabold text-kate-pink-deep transition duration-300 group-hover:bg-kate-pink {{ empty($proyecto['tecnologias']) ? 'mx-auto' : '' }}">
                        ✦
                    </div>

                    <span class="mt-7 block text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep">
                        HERRAMIENTAS
                    </span>

                    <div class="mt-6 flex flex-wrap gap-2 sm:gap-3 {{ empty($proyecto['tecnologias']) ? 'justify-center' : '' }}">

                        @foreach ($proyecto['herramientas'] as $herramienta)

                            <span class="max-w-full rounded-full border border-kate-pink-strong/20 bg-kate-pink-soft px-3 py-2 text-xs font-bold text-kate-dark transition duration-300 hover:border-kate-pink-strong/50 hover:bg-kate-pink sm:px-4 sm:text-sm">
                                {{ $herramienta }}
                            </span>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    GALERÍA DEL PROYECTO
========================================================= --}}

@if (!empty($proyecto['imagenes']))

<section class="py-16 sm:py-20 lg:py-32">

    <div class="kate-container min-w-0">

        <div class="mx-auto max-w-4xl text-center">

            <span class="block text-[11px] font-extrabold uppercase tracking-[.16em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                ENTRE PANTALLAS Y DETALLES
            </span>

            <h2 class="mt-5 text-[clamp(2.3rem,7vw,3.3rem)] font-extrabold leading-[1.04] tracking-[-.06em] sm:text-[clamp(3.3rem,5vw,5rem)] sm:leading-[.96]">

                Fragmentos de lo

                <span class="text-kate-pink-strong">
                    creado
                </span>

            </h2>

        </div>


        {{-- =============================================
            GALERÍA ANCESTRAL HEARTBEAT
        ============================================== --}}

        @if ($slug === 'latido-ancestral')

            <div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 gap-5 sm:mt-14 sm:gap-6 md:grid-cols-2 lg:mt-16">

                @foreach ($proyecto['imagenes'] as $index => $imagen)

                    <div class="group relative min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)] sm:rounded-[30px] sm:p-3 {{ $loop->first ? 'md:col-span-2 md:mx-auto md:w-[calc(50%-0.75rem)]' : '' }}">

                        <div class="flex aspect-[16/10] w-full items-center justify-center overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                            <img
                                src="{{ asset($imagen) }}"
                                alt="Vista {{ $index + 1 }} del proyecto {{ $proyecto['titulo'] }}"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-contain transition-transform duration-700 group-hover:scale-[1.01]"
                            >

                        </div>

                    </div>

                @endforeach

            </div>


        {{-- =============================================
            GALERÍA RASTRO CAFÉ
        ============================================== --}}

        @elseif ($slug === 'rastro-cafe')

            <div class="mx-auto mt-10 max-w-6xl sm:mt-14 lg:mt-16">

                {{-- PRIMERA IMAGEN --}}
                <div class="flex justify-center">

                    <div class="group relative w-full min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 sm:rounded-[30px] sm:p-3 md:w-[40%]">

                        <div class="overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                            <img
                                src="{{ asset($proyecto['imagenes'][0]) }}"
                                alt="Vista 1 del proyecto {{ $proyecto['titulo'] }}"
                                loading="lazy"
                                decoding="async"
                                class="block h-auto w-full transition-transform duration-700 group-hover:scale-[1.01]"
                            >

                        </div>

                    </div>

                </div>

                {{-- IMÁGENES RESTANTES --}}
                <div class="mx-auto mt-5 grid max-w-4xl grid-cols-1 items-start gap-5 sm:mt-6 sm:gap-6 md:grid-cols-2">

                    @foreach (array_slice($proyecto['imagenes'], 1) as $index => $imagen)

                        <div class="group relative min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 sm:rounded-[30px] sm:p-3">

                            <div class="overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                                <img
                                    src="{{ asset($imagen) }}"
                                    alt="Vista {{ $index + 2 }} del proyecto {{ $proyecto['titulo'] }}"
                                    loading="lazy"
                                    decoding="async"
                                    class="block h-auto w-full transition-transform duration-700 group-hover:scale-[1.01]"
                                >

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


        {{-- =============================================
            GALERÍA ENCANTO BELLEZA
        ============================================== --}}

        @elseif ($slug === 'encanto-belleza')

            <div class="mx-auto mt-10 max-w-6xl sm:mt-14 lg:mt-16">

                {{-- PRIMERA IMAGEN --}}
                <div class="flex justify-center">

                    <div class="group relative w-full min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 sm:rounded-[30px] sm:p-3 md:w-[calc(50%-0.75rem)]">

                        <div class="flex aspect-[16/10] items-center justify-center overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                            <img
                                src="{{ asset($proyecto['imagenes'][0]) }}"
                                alt="Vista 1 del proyecto {{ $proyecto['titulo'] }}"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-contain transition-transform duration-700 group-hover:scale-[1.01]"
                            >

                        </div>

                    </div>

                </div>

                {{-- IMÁGENES RESTANTES --}}
                <div class="mt-5 grid grid-cols-1 items-start gap-5 sm:mt-6 sm:gap-6 md:grid-cols-2">

                    @foreach (array_slice($proyecto['imagenes'], 1) as $index => $imagen)

                        <div class="group relative min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 sm:rounded-[30px] sm:p-3">

                            <div class="overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                                <img
                                    src="{{ asset($imagen) }}"
                                    alt="Vista {{ $index + 2 }} del proyecto {{ $proyecto['titulo'] }}"
                                    loading="lazy"
                                    decoding="async"
                                    class="block h-auto w-full transition-transform duration-700 group-hover:scale-[1.01]"
                                >

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


        {{-- =============================================
            GALERÍA CATÁLOGO DIGITAL RASTRO CAFÉ
        ============================================== --}}

        @elseif ($slug === 'catalogo-rastro-cafe')

            <div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 items-start gap-5 sm:mt-14 sm:gap-6 md:grid-cols-2 lg:mt-16">

                @foreach ($proyecto['imagenes'] as $index => $imagen)

                    <div class="group relative min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)] sm:rounded-[30px] sm:p-3 {{ $loop->last ? 'md:col-span-2 md:mx-auto md:w-[calc(50%-0.75rem)]' : '' }}">

                        <div class="flex w-full items-center justify-center overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                            <img
                                src="{{ asset($imagen) }}"
                                alt="Página {{ $index + 2 }} del Catálogo Digital Rastro Café"
                                loading="lazy"
                                decoding="async"
                                class="block h-auto w-full object-contain transition-transform duration-700 group-hover:scale-[1.01]"
                            >

                        </div>

                    </div>

                @endforeach

            </div>


        {{-- =============================================
            GALERÍA GENERAL
        ============================================== --}}

        @else

            <div class="mx-auto mt-10 grid max-w-6xl grid-cols-1 gap-5 sm:mt-14 sm:gap-6 md:grid-cols-2">

                @foreach ($proyecto['imagenes'] as $index => $imagen)

                    <div class="group relative min-w-0 overflow-hidden rounded-[20px] border border-kate-pink-strong/20 bg-kate-pink-light p-2 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:border-kate-pink-strong/40 sm:rounded-[30px] sm:p-3 {{ $loop->first ? 'md:col-span-2 md:mx-auto md:w-[calc(50%-0.75rem)]' : '' }}">

                        <div class="flex aspect-[16/10] items-center justify-center overflow-hidden rounded-[14px] bg-white sm:rounded-[22px]">

                            <img
                                src="{{ asset($imagen) }}"
                                alt="Vista {{ $index + 1 }} del proyecto {{ $proyecto['titulo'] }}"
                                loading="lazy"
                                decoding="async"
                                class="h-full w-full object-contain transition-transform duration-700 group-hover:scale-[1.01]"
                            >

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

</section>

@endif


{{-- =========================================================
    ENLACE DEL PROYECTO
========================================================= --}}

@if (!empty($proyecto['enlace']))

<section class="pb-16 sm:pb-20 lg:pb-28">

    <div class="kate-container min-w-0">

        <div class="flex min-w-0 flex-col items-center justify-between gap-6 rounded-[24px] border border-kate-border bg-white/60 px-5 py-8 text-center shadow-[0_16px_45px_rgba(33,27,32,.035)] transition duration-300 hover:border-kate-pink-strong/30 hover:shadow-[0_22px_55px_rgba(244,91,165,.09)] sm:rounded-[30px] sm:px-10 sm:py-9 lg:flex-row lg:gap-7 lg:text-left">

            <div class="min-w-0">

                <span class="text-[10px] font-extrabold uppercase tracking-[.15em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                    {{ $slug === 'catalogo-rastro-cafe' ? 'DEL DISEÑO A CADA PÁGINA' : ($esDiseno ? 'DEL CONCEPTO AL DISEÑO' : 'DEL CÓDIGO A LA WEB') }}
                </span>

                <h3 class="mt-3 text-xl font-extrabold leading-tight tracking-[-.04em] sm:text-2xl">
                    {{ $slug === 'catalogo-rastro-cafe'
                        ? 'Descubre cada página del catálogo digital'
                        : ($esDiseno
                            ? 'Descubre la propuesta visual y sus detalles'
                            : 'Descubre el resultado de todo el camino recorrido')
                    }}
                </h3>

            </div>

            <a
                href="{{ $proyecto['enlace'] }}"
                target="_blank"
                rel="noopener noreferrer"
                class="group inline-flex min-h-12 w-full shrink-0 items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-6 py-3 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark sm:w-auto sm:px-7 sm:text-base"
            >

                {{ $slug === 'catalogo-rastro-cafe' ? 'Ver catálogo digital' : ($esDiseno ? 'Ver diseño en Figma' : 'Ver proyecto') }}

                <span
                    class="transition-transform duration-300 group-hover:translate-x-1"
                    aria-hidden="true"
                >
                    ↗
                </span>

            </a>

        </div>

    </div>

</section>

@endif


{{-- =========================================================
    CTA FINAL
========================================================= --}}

<section class="pb-16 sm:pb-20 lg:pb-28 {{ empty($proyecto['imagenes']) ? 'pt-8 sm:pt-12' : 'pt-4' }}">

    <div class="kate-container min-w-0">

        <div class="relative isolate overflow-hidden rounded-[24px] border border-kate-pink-strong/45 bg-kate-pink px-5 py-12 text-center text-kate-dark shadow-[0_25px_70px_rgba(244,91,165,.16)] sm:rounded-[32px] sm:px-12 sm:py-16 lg:rounded-[38px] lg:px-20 lg:py-20">

            {{-- DECORACIÓN --}}
            <div
                class="pointer-events-none absolute -right-24 -top-32 -z-10 h-64 w-64 rounded-full bg-kate-pink-light/75 sm:h-80 sm:w-80"
                aria-hidden="true"
            ></div>

            <div
                class="pointer-events-none absolute left-16 top-14 -z-10 hidden h-16 w-16 rounded-full border border-white/80 sm:block"
                aria-hidden="true"
            ></div>

            <div
                class="pointer-events-none absolute -bottom-24 -left-14 -z-10 h-64 w-64 rounded-full border border-white/80"
                aria-hidden="true"
            ></div>

            <div
                class="pointer-events-none absolute bottom-14 right-52 -z-10 hidden h-11 w-11 rounded-full border border-white/80 lg:block"
                aria-hidden="true"
            ></div>

            <div
                class="pointer-events-none absolute bottom-10 right-10 -z-10 h-5 w-5 -rotate-12 rounded-sm bg-kate-pink-strong/40 sm:bottom-16 sm:right-16"
                aria-hidden="true"
            ></div>

            {{-- CONTENIDO --}}
            <div class="relative mx-auto max-w-4xl">

                <span class="text-[10px] font-extrabold uppercase tracking-[.12em] text-kate-dark sm:text-xs sm:tracking-[.22em]">
                    DETRÁS DE CADA PROYECTO
                </span>

                <h2 class="mx-auto mt-5 max-w-3xl text-[clamp(2.2rem,7vw,3.2rem)] font-extrabold leading-[1.05] tracking-[-.06em] sm:text-[clamp(3.2rem,5.5vw,5.5rem)] sm:leading-[.95]">

                    Cada idea tiene

                    <span class="block text-white">
                        algo que contar
                    </span>

                </h2>

                <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-kate-gray sm:mt-7 sm:text-base sm:leading-8 lg:text-lg">
                    Detrás de una idea puede esconderse el comienzo de algo increíble.
                    Cuéntame la tuya y descubramos juntos hasta dónde puede llegar.
                </p>

                <div class="mt-8 sm:mt-9">

                    <a
                        href="{{ route('contacto') }}"
                        class="group inline-flex max-w-full items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-6 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)] sm:px-7 sm:text-base"
                    >

                        Cuéntame tu idea

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
