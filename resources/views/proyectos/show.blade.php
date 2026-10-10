@extends('layouts.app')

@php

    /*
    |--------------------------------------------------------------------------
    | INFORMACIÓN DE LOS PROYECTOS
    |--------------------------------------------------------------------------
    |
    | Aquí puedes modificar individualmente la información de cada proyecto.
    | El diseño de la página se reutiliza para todos.
    |
    */

    $proyectos = [

        /*
        |--------------------------------------------------------------------------
        | ANCESTRAL HEARTBEAT
        |--------------------------------------------------------------------------
        */

        'latido-ancestral' => [

            'titulo' => 'Ancestral Heartbeat',

            'categoria' => 'Desarrollo Frontend',

            'anio' => '2025',

            'numero' => '01',

            'modalidad' => 'Proyecto grupal',

            'contexto' => 'Riwi',

            'descripcion' => [
                'Ancestral Heartbeat nació con una intención muy especial: llevar al mundo digital
                un pedacito de la riqueza artesanal y cultural de San Jacinto Bolívar.',

                'Su inspiración vive en esas tradiciones que hablan de nuestra tierra, de sus 
                colores, de las manos que crean y de historias que han pasado de generación en 
                generación. El desafío fue llevar todo ese significado a una experiencia de 
                comercio electrónico moderna y cercana, encontrando un punto en el que lo 
                artesanal y lo digital pudieran encontrarse sin que ninguno tuviera que 
                renunciar a su esencia.',

                'Porque detrás de cada pieza hay algo más que un producto: hay una historia, 
                unas manos y un lugar de donde viene.',

                'Por eso, más que construir una tienda virtual, Ancestral Heartbeat fue una 
                manera de abrirle una nueva ventana a la tradición; una forma distinta de 
                descubrirla, recorrerla y reconocerla, demostrando que nuestras raíces también 
                pueden encontrar su lugar entre píxeles, interfaces y nuevas formas de conectar.',
            ],

            'aporte' => [
                'Fui parte de la construcción de la interfaz frontend, convirtiendo ideas y 
                propuestas visuales en componentes y vistas capaces de tomar forma en pantalla 
                y convertirse en una experiencia navegable.',

                'Al ser un proyecto grupal, hubo que aprender a escuchar, organizar tareas, 
                compartir avances y unir diferentes formas de crear. Cada aporte era una 
                pequeña pieza y el verdadero reto estaba en conseguir que, al juntarlas, 
                todas hablaran el mismo lenguaje y llevaran la plataforma hacia una misma 
                dirección.',

                'Ancestral Heartbeat avanzó hasta las fases de pruebas y despliegue dentro del 
                ciclo de vida del desarrollo de software. Acompañé ese recorrido hasta llegar 
                a una versión publicada y ver cómo aquello que alguna vez comenzó como una idea 
                terminó encontrando su propio espacio en la web.',

               
            ],

            'tecnologias' => [
                'React',
                'TypeScript',
                'Next.js',
                'Tailwind CSS',
            ],

            'herramientas' => [
                'Git',
                'GitHub',
                'VS Code',
                'Figma',
                'Canva',
            ],

            'portada' => 'latido-ancestral/latido-ancestral-01.webp',

            'imagenes' => [
                'latido-ancestral/latido-ancestral-02.webp',
                'latido-ancestral/latido-ancestral-03.webp',
                'latido-ancestral/latido-ancestral-04.webp',
            ],

            'enlace' =>'https://ancestral-heartbeat.vercel.app/',
        ],


        /*
        |--------------------------------------------------------------------------
        | PLUS SIZE
        |--------------------------------------------------------------------------
        */

        'plus-size' => [

            'titulo' => 'Tienda Virtual Plus Size',

            'categoria' => 'Desarrollo Frontend',

            'anio' => '2025',

            'numero' => '02',

            'modalidad' => 'Proyecto grupal',

            'contexto' => 'Riwi',

            'descripcion' => [
                'Tienda Virtual Plus Size nació de una pregunta que parecía sencilla, pero 
                escondía una necesidad mucho más profunda: ¿por qué encontrar una prenda que 
                refleje quiénes somos tendría que convertirse en una búsqueda tan difícil?.',

               'La idea surgió pensando en mujeres de tallas grandes que desean vestir con 
               libertad, descubrir nuevas tendencias y encontrar prendas modernas, juveniles 
               y llenas de personalidad. Porque la moda no debería sentirse como un espacio 
               al que hay que intentar encajar, sino como una oportunidad para expresarse y 
               elegir aquello que nos hace sentir auténticas.',

               'Así comenzó a tomar forma una propuesta que buscaba reunir diferentes tiendas, 
               estilos y posibilidades en un mismo lugar. Un espacio donde cada búsqueda pudiera 
               convertirse en un descubrimiento, donde las clientas encontraran prendas que 
               conectaran con su esencia y los proveedores una nueva manera de acercar sus 
               productos a quienes los estaban buscando.',

               'Porque, al final, no se trataba solamente de construir una tienda virtual. 
               Se trataba de imaginar un lugar donde la moda dejara de imponer límites y 
               comenzara a abrir posibilidades, recordándonos que el estilo no se mide en tallas, 
               sino en la libertad de ser quienes somos.',
            ],

            'aporte' => [
                'Fui parte de la construcción de la interfaz frontend, transformando ideas y 
                propuestas en vistas donde productos, tiendas y proveedores pudieran encontrarse 
                dentro de una misma experiencia digital.',

                'Trabajar en equipo también me enseñó que una misma idea puede tomar caminos 
                diferentes cuando se mira desde distintas perspectivas. Entre conversaciones, 
                decisiones compartidas y pequeños desafíos, aprendimos a complementar nuestras 
                fortalezas y a encontrar soluciones juntos, descubriendo que el valor de lo 
                construido no estaba solamente en el resultado, sino también en todo lo que 
                aprendimos durante el camino.',

                'Tienda Virtual Plus Size avanzó hasta la fase de pruebas dentro del ciclo de 
                vida del desarrollo de software. Allí pudimos recorrer, verificar y ajustar lo 
                construido. Aunque no llegó a la etapa de despliegue, quedó la experiencia de 
                haber convertido una necesidad en una idea, una idea en pantallas y esas 
                pantallas en una propuesta que pudimos hacer realidad.',
            ],

            'tecnologias' => [
                'HTML5',
                'CSS3',
                'JavaScript',
            ],

            'herramientas' => [
                'VS Code',
                'Figma',
                'GitHub',
            ],

            'portada' => 'plus-size/plus-size-01.webp',

            'imagenes' => [],

            'enlace' => null,
        ],


        /*
        |--------------------------------------------------------------------------
        | RASTRO CAFÉ
        |--------------------------------------------------------------------------
        */

        'rastro-cafe' => [

            'titulo' => 'Rastro',

            'categoria' => 'Diseño Web UX/UI',

            'anio' => '2026',

            'numero' => '03',

            'modalidad' => 'Proyecto de diseño',

            'contexto' => 'Proyecto personal',

            'descripcion' => [
                'Rastro nació de una esencia que va mucho más allá de una taza de café. 
                Una esencia que guarda memorias, tradiciones y pequeños fragmentos de la 
                historia de San Jacinto Bolívar.',

                'Su identidad vive en esos detalles que hablan de nuestra tierra, de las 
                costumbres que permanecen y de las historias que encuentran nuevas maneras 
                de seguir siendo contadas. Cada rincón conserva algo de ese legado, convirtiendo 
                lo cotidiano en una experiencia que puede sentirse, recorrerse y recordarse.',

                'El desafío fue trasladar esa identidad al mundo digital, encontrando un 
                equilibrio entre la calidez de lo ancestral y la frescura de lo contemporáneo. 
                Una manera de acercar sus espacios, sus sabores y su historia a nuevas miradas, 
                sin dejar atrás aquello que los hace únicos.',

                'Porque Rastro Café no se trataba solamente de mostrar un lugar a través de una 
                pantalla, sino de abrir una ventana a su esencia. De permitir que la tradición 
                encontrara otra forma de permanecer y que, incluso entre píxeles, una historia 
                pudiera seguir dejando rastro.',
            ],

            'aporte' => [
                'Mi aporte comenzó con el desafío de transformar la esencia de Rastro Café en una 
                propuesta visual. A través de la composición, los colores y la organización de 
                cada sección, busqué construir un recorrido capaz de transmitir la identidad del 
                lugar y aquello que lo hace especial.',

                'Cada decisión de diseño fue una oportunidad para acercar dos mundos: la memoria 
                de lo ancestral y las posibilidades de lo digital. Más allá de imaginar pantallas 
                atractivas, el propósito fue conseguir que cada elemento tuviera una intención y 
                que juntos contaran una misma historia.',

                'Así descubrí que diseñar también puede ser una forma de preservar. De tomar 
                aquello que tiene significado, darle un nuevo lenguaje y permitir que su 
                historia siga dejando huella, incluso al otro lado de una pantalla.',
            ],

            'tecnologias' => [],

            'herramientas' => [
                'Figma',
            ],

            'portada' => 'rastro-cafe/rastro-cafe-01.webp',

            'imagenes' => [
                'rastro-cafe/rastro-cafe-02.webp',
                'rastro-cafe/rastro-cafe-03.webp',
                'rastro-cafe/rastro-cafe-04.webp',
            ],

            'enlace' => 'https://www.figma.com/design/xuQWGW9vbR0sq1iflCAR1d/Mockup---Rastro-Caf%C3%A9?node-id=0-1&t=ZkoZ5nwELdwIQeaw-1',
        ],


        /*
        |--------------------------------------------------------------------------
        | ENCANTO BELLEZA
        |--------------------------------------------------------------------------
        */

        'encanto-belleza' => [

            'titulo' => 'Encanto Belleza',

            'categoria' => 'Diseño Web UX/UI',

            'anio' => '2026',

            'numero' => '04',

            'modalidad' => 'Proyecto de diseño',

            'contexto' => 'Proyecto personal',

            'descripcion' => [
                'Encanto Belleza nació de una idea sencilla: hay cosas que comienzan mucho antes 
                de elegir un producto. Comienzan con una mirada, con un color que nos atrae o con 
                ese pequeño detalle que, sin saber muy bien por qué, consigue despertar algo en 
                nosotros.',

                'Su inspiración surgió de una tienda de belleza de San Jacinto, Bolívar, y del 
                deseo de trasladar su esencia a una propuesta visual donde cada tono, cada forma 
                y cada elemento encontraran su lugar. El desafío fue imaginar un espacio que no 
                solo mostrara productos, sino que transmitiera esa sensación especial de descubrir 
                algo que conecta con nuestra personalidad.',

                'Porque la belleza también vive en los pequeños encuentros: en aquello que llama 
                nuestra atención, en lo que elegimos para expresarnos y en los detalles que hacen 
                que una experiencia se sienta nuestra.',

                'Así, Encanto Belleza comenzó a tomar forma como una nueva manera de recorrer ese 
                universo de colores y posibilidades. Una propuesta donde lo visual y lo cotidiano 
                pudieran encontrarse, demostrando que, a veces, el verdadero encanto no está 
                solamente en lo que vemos, sino en lo que nos hace sentir.',
            ],

            'aporte' => [
                'Mi aporte comenzó con la intención de transformar la identidad de Encanto 
                Belleza en una propuesta visual que conservara su esencia. A través de los 
                colores, las composiciones y la organización de cada sección, busqué crear un 
                espacio donde cada detalle tuviera un propósito.',

                'Fui dando forma a las pantallas y a los recorridos, buscando un equilibrio 
                entre la delicadeza de lo estético y la claridad de una experiencia pensada 
                para descubrir, explorar y elegir con facilidad.',

                'Y en ese proceso comprendí que diseñar no siempre significa añadir más, 
                sino aprender a reconocer lo esencial. Encontrar ese pequeño detalle capaz 
                de darle sentido a todo y conseguir que, incluso desde una pantalla, una idea 
                tenga su propio encanto.',
            ],

            'tecnologias' => [],

            'herramientas' => [
                'Figma',
            ],

            'portada' => 'encanto-belleza/encanto-belleza-01.webp',

            'imagenes' => [
                'encanto-belleza/encanto-belleza-02.webp',
                'encanto-belleza/encanto-belleza-03.webp',
                'encanto-belleza/encanto-belleza-04.webp',
            ],

            'enlace' =>'https://www.figma.com/design/i0xCe2y7g7ol49zD3SF5YS/Encanto?node-id=0-1&t=l4JZpyDxjp1wIQaB-1',
        ],

    ];


    /*
    |--------------------------------------------------------------------------
    | PROYECTO ACTUAL
    |--------------------------------------------------------------------------
    */

    $proyecto = $proyectos[$slug] ?? null;

    abort_if(!$proyecto, 404);

@endphp


@section('title', $proyecto['titulo'] . ' | Kateryn Martínez')

@section(
    'description',
    $proyecto['titulo'] . ' — ' . $proyecto['categoria'] .
    ' desarrollado por Kateryn Martínez.'
)


@section('content')


{{-- =========================================================
     HERO DEL PROYECTO
========================================================= --}}

<section class="relative overflow-hidden pb-20 pt-20 sm:pt-24 lg:pb-24 lg:pt-28">

    {{-- Decoración --}}
    <div
        class="pointer-events-none absolute -right-40 top-10 -z-10 h-125 w-125 rounded-full bg-kate-pink/20 blur-3xl"
        aria-hidden="true"
    ></div>


    <div class="kate-container">

        {{-- Volver --}}
        <a
            href="{{ route('proyectos') }}"
            class="group inline-flex items-center gap-2 text-sm font-bold text-kate-gray transition duration-300 hover:text-kate-pink-deep"
        >
            <span
                class="transition-transform duration-300 group-hover:-translate-x-1"
                aria-hidden="true"
            >
                ←
            </span>

            Volver a proyectos
        </a>


        {{-- Contenido --}}
        <div class="relative mx-auto mt-14 max-w-6xl text-center">

            {{-- Categoría + año --}}
            <div class="flex justify-center">

                <div
                    class="inline-flex items-center gap-3 rounded-full border border-kate-pink-strong/25 bg-kate-pink-soft px-5 py-2.5 text-xs font-extrabold uppercase tracking-[.14em] text-kate-pink-deep shadow-[0_8px_25px_rgba(244,91,165,.08)]"
                >
                    <span>
                        {{ $proyecto['categoria'] }}
                    </span>

                    <span
                        class="h-1 w-1 rounded-full bg-kate-pink-strong"
                        aria-hidden="true"
                    ></span>

                    <span>
                        {{ $proyecto['anio'] }}
                    </span>
                </div>

            </div>


            {{-- Título --}}
            <h1
                class="relative mx-auto mt-8 max-w-6xl text-[clamp(3.8rem,8vw,8rem)] font-extrabold leading-[.88] tracking-[-.075em] text-kate-dark"
            >
                {{ $proyecto['titulo'] }}
            </h1>


            {{-- Descripción --}}
            <div
                class="relative mx-auto mt-10 max-w-4xl space-y-7 text-left text-lg leading-9 text-kate-gray"
            >
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

<section class="pb-28">

    <div class="kate-container">

        <div
            class="group relative aspect-[16/8] overflow-hidden rounded-[34px] border border-kate-pink-strong/25 bg-kate-pink-light p-4 shadow-[0_24px_70px_rgba(33,27,32,.08)] transition duration-500 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_30px_80px_rgba(244,91,165,.12)] sm:p-5"
        >

            @if ($proyecto['portada'])

                <div
                    class="flex h-full w-full items-center justify-center overflow-hidden rounded-[25px] border border-kate-pink-strong/15 bg-white"
                >
                    <img
                        src="{{ asset($proyecto['portada']) }}"
                        alt="Vista principal del proyecto {{ $proyecto['titulo'] }}"
                        class="h-full w-full object-contain transition duration-700 group-hover:scale-[1.01]"
                    >
                </div>

            @else

                <div
                    class="absolute inset-4 flex items-center justify-center overflow-hidden rounded-[25px] bg-gradient-to-br from-kate-pink-light via-kate-cream to-kate-pink-soft sm:inset-5"
                >

                    <div
                        class="absolute -left-20 -top-24 h-80 w-80 rounded-full border border-kate-pink-strong/20 transition duration-700 group-hover:scale-110"
                        aria-hidden="true"
                    ></div>

                    <div
                        class="absolute -bottom-32 -right-20 h-96 w-96 rounded-full bg-kate-pink/35 transition duration-700 group-hover:scale-110"
                        aria-hidden="true"
                    ></div>


                    <div class="relative px-8 text-center">

                        <span
                            class="text-xs font-extrabold uppercase tracking-[.22em] text-kate-pink-deep"
                        >
                            IMAGEN DEL PROYECTO
                        </span>

                        <p
                            class="mt-4 text-2xl font-extrabold tracking-[-.04em] text-kate-dark sm:text-4xl"
                        >
                            {{ $proyecto['titulo'] }}
                        </p>

                        <p class="mt-3 text-sm text-kate-gray">
                            Aquí colocaremos la imagen principal.
                        </p>

                    </div>

                </div>

            @endif

        </div>

    </div>

</section>


{{-- =========================================================
     INFORMACIÓN DEL PROYECTO
========================================================= --}}

<section class="pb-28">

    <div class="kate-container">

        <div class="grid gap-14 lg:grid-cols-[1.25fr_.75fr] lg:items-center lg:gap-20">

            {{-- Columna izquierda --}}
            <div>

                <span class="kate-label">
                    MI HUELLA EN EL PROYECTO
                </span>

                <h2
                    class="mt-5 max-w-3xl text-[clamp(2.5rem,4.5vw,4.8rem)] font-extrabold leading-[.96] tracking-[-.06em]"
                >
                    De imaginar a 

                    <span class="text-kate-pink-strong">
                        construir
                    </span>
                </h2>


                {{-- Mi aporte: preparado para múltiples párrafos --}}
                <div
                    class="mt-8 max-w-3xl space-y-6 text-left text-base leading-8 text-kate-gray sm:text-lg"
                >
                    @foreach ($proyecto['aporte'] as $parrafo)
                        <p>
                            {{ $parrafo }}
                        </p>
                    @endforeach
                </div>

            </div>


            {{-- Ficha --}}
            <div>

                <div
                    class="group relative overflow-hidden rounded-[30px] border border-kate-border bg-white/70 p-7 shadow-[0_18px_55px_rgba(33,27,32,.05)] transition duration-300 hover:-translate-y-2 hover:border-kate-pink-strong/35 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)] sm:p-9"
                >

                    <div
                        class="absolute -right-14 -top-14 h-36 w-36 rounded-full bg-kate-pink-soft/45 transition duration-500 group-hover:scale-125"
                        aria-hidden="true"
                    ></div>


                    <div class="relative border-b border-kate-border pb-5">

                        <span
                            class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray"
                        >
                            Categoría
                        </span>

                        <p class="mt-2 font-bold text-kate-dark">
                            {{ $proyecto['categoria'] }}
                        </p>

                    </div>


                    <div class="relative border-b border-kate-border py-5">

                        <span
                            class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray"
                        >
                            Año
                        </span>

                        <p class="mt-2 font-bold text-kate-dark">
                            {{ $proyecto['anio'] }}
                        </p>

                    </div>


                    <div class="relative border-b border-kate-border py-5">

                        <span
                            class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray"
                        >
                            Modalidad
                        </span>

                        <p class="mt-2 font-bold text-kate-dark">
                            {{ $proyecto['modalidad'] }}
                        </p>

                    </div>


                    <div class="relative pt-5">

                        <span
                            class="text-xs font-extrabold uppercase tracking-[.18em] text-kate-gray"
                        >
                            Contexto
                        </span>

                        <p class="mt-2 font-bold text-kate-dark">
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

<section class="border-y border-kate-border bg-white/40 py-28">

    <div class="kate-container">

        {{-- Encabezado --}}
        <div class="mx-auto max-w-3xl text-center">

            <span class="kate-label">
                CON QUÉ TOMÓ FORMA
            </span>

            <h2
                class="mt-5 text-[clamp(2.5rem,4.5vw,4.8rem)] font-extrabold leading-[.96] tracking-[-.06em]"
            >
                El lenguaje de la

                <span class="text-kate-pink-strong">
                    creación
                </span>
            </h2>

        </div>


        {{-- Tarjetas --}}
        <div
            class="mx-auto mt-16 grid gap-7 {{ !empty($proyecto['tecnologias']) ? 'max-w-6xl md:grid-cols-2' : 'max-w-md grid-cols-1' }}"
        >

            {{-- Tecnologías --}}
            @if (!empty($proyecto['tecnologias']))

                <div
                    class="group relative min-h-72 overflow-hidden rounded-[32px] border border-kate-pink-strong/15 bg-kate-cream p-8 shadow-[0_16px_45px_rgba(33,27,32,.035)] transition duration-300 hover:-translate-y-2 hover:border-kate-pink-strong/45 hover:shadow-[0_25px_65px_rgba(244,91,165,.13)] sm:p-10"
                >

                    <div
                        class="absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-soft/60 transition duration-500 group-hover:scale-125"
                        aria-hidden="true"
                    ></div>

                    <div
                        class="absolute bottom-8 right-9 h-4 w-4 rotate-12 rounded-sm bg-kate-pink-strong/25"
                        aria-hidden="true"
                    ></div>


                    <div class="relative">

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-2xl border border-kate-pink-strong/20 bg-kate-pink-soft text-sm font-extrabold text-kate-pink-deep transition duration-300 group-hover:bg-kate-pink"
                            aria-hidden="true"
                        >
                            &lt;/&gt;
                        </div>


                        <span
                            class="mt-7 block text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep"
                        >
                            TECNOLOGÍAS
                        </span>


                        <div class="mt-6 flex flex-wrap gap-3">

                            @foreach ($proyecto['tecnologias'] as $tecnologia)

                                <span
                                    class="rounded-full border border-kate-pink-strong/20 bg-kate-pink-soft px-4 py-2 text-sm font-bold text-kate-dark transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/50 hover:bg-kate-pink hover:shadow-[0_8px_20px_rgba(244,91,165,.12)]"
                                >
                                    {{ $tecnologia }}
                                </span>

                            @endforeach

                        </div>

                    </div>

                </div>

            @endif


            {{-- Herramientas --}}
            <div
                class="group relative {{ empty($proyecto['tecnologias']) ? 'min-h-0 text-center' : 'min-h-72' }} overflow-hidden rounded-[32px] border border-kate-pink-strong/15 bg-kate-cream p-8 shadow-[0_16px_45px_rgba(33,27,32,.035)] transition duration-300 hover:-translate-y-2 hover:border-kate-pink-strong/45 hover:shadow-[0_25px_65px_rgba(244,91,165,.13)] sm:p-10"
            >

                <div
                    class="absolute -bottom-20 -left-16 h-44 w-44 rounded-full border border-kate-pink-strong/15 transition duration-500 group-hover:scale-110"
                    aria-hidden="true"
                ></div>

                <div
                    class="absolute right-8 top-8 h-8 w-8 rounded-full border border-kate-pink-strong/20"
                    aria-hidden="true"
                ></div>


                <div class="relative">

                    <div
                        class="{{ empty($proyecto['tecnologias']) ? 'mx-auto' : '' }} flex h-12 w-12 items-center justify-center rounded-2xl border border-kate-pink-strong/20 bg-kate-pink-soft text-lg font-extrabold text-kate-pink-deep transition duration-300 group-hover:bg-kate-pink"
                        aria-hidden="true"
                    >
                        ✦
                    </div>


                    <span
                        class="mt-7 block text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep"
                    >
                        HERRAMIENTAS
                    </span>


                    <div
                        class="mt-6 flex flex-wrap gap-3 {{ empty($proyecto['tecnologias']) ? 'justify-center' : '' }}"
                    >

                        @foreach ($proyecto['herramientas'] as $herramienta)

                            <span
                                class="rounded-full border border-kate-pink-strong/20 bg-kate-pink-soft px-4 py-2 text-sm font-bold text-kate-dark transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/50 hover:bg-kate-pink hover:shadow-[0_8px_20px_rgba(244,91,165,.12)]"
                            >
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
     GALERÍA
========================================================= --}}

@if (!empty($proyecto['imagenes']))

<section class="py-32">

    <div class="kate-container">

        {{-- Encabezado --}}
        <div class="mx-auto max-w-4xl text-center">

            <span class="kate-label">
               ENTRE PANTALLAS Y DETALLES
            </span>


            <h2
                class="mt-5 text-[clamp(2.7rem,5vw,5rem)] font-extrabold leading-[.94] tracking-[-.06em]"
            >
                Fragmentos de lo

                <span class="text-kate-pink-strong">
                    creado
                </span>
            </h2>

        </div>


        {{-- =====================================================
             GALERÍA ANCESTRAL HEARTBEAT
        ====================================================== --}}

        @if ($slug === 'latido-ancestral')

            <div class="mx-auto mt-16 grid max-w-6xl grid-cols-1 gap-6 md:grid-cols-2">

                @foreach ($proyecto['imagenes'] as $index => $imagen)

                    <div
                        class="{{ $loop->first ? 'md:col-span-2 md:mx-auto md:w-[calc(50%-0.75rem)]' : '' }} group relative aspect-[16/10] w-full overflow-hidden rounded-[30px] border border-kate-pink-strong/20 bg-kate-pink-light p-3 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)]"
                    >

                        <div
                            class="flex h-full w-full items-center justify-center overflow-hidden rounded-[22px] bg-white"
                        >
                            <img
                                src="{{ asset($imagen) }}"
                                alt="Vista {{ $index + 1 }} del proyecto {{ $proyecto['titulo'] }}"
                                class="h-full w-full object-contain transition duration-700 group-hover:scale-[1.01]"
                            >
                        </div>

                    </div>

                @endforeach

            </div>


        {{-- =====================================================
             GALERÍA RASTRO CAFÉ
        ====================================================== --}}

        @elseif ($slug === 'rastro-cafe')

            <div class="mx-auto mt-16 max-w-6xl">

                {{-- Imagen superior --}}
                <div class="flex justify-center">

                    <div
                        class="group relative w-full overflow-hidden rounded-[30px] border border-kate-pink-strong/20 bg-kate-pink-light p-3 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)] md:w-[calc(40%-0.75rem)]"
                    >

                        <div
                            class="overflow-hidden rounded-[22px] bg-white"
                        >
                            <img
                                src="{{ asset($proyecto['imagenes'][0]) }}"
                                alt="Vista 1 del proyecto {{ $proyecto['titulo'] }}"
                                class="block h-auto w-full transition duration-700 group-hover:scale-[1.01]"
                            >
                        </div>

                    </div>

                </div>


                {{-- Imágenes inferiores --}}
                <div class="mx-auto mt-6 grid max-w-4xl grid-cols-1 gap-6 md:grid-cols-2">

                    @foreach (array_slice($proyecto['imagenes'], 1) as $index => $imagen)

                        <div
                            class="group relative w-full self-start overflow-hidden rounded-[30px] border border-kate-pink-strong/20 bg-kate-pink-light p-3 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)]"
                        >

                            <div
                                class="overflow-hidden rounded-[22px] bg-white"
                            >
                                <img
                                    src="{{ asset($imagen) }}"
                                    alt="Vista {{ $index + 2 }} del proyecto {{ $proyecto['titulo'] }}"
                                    class="block h-auto w-full transition duration-700 group-hover:scale-[1.01]"
                                >
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


        {{-- =====================================================
             GALERÍA ENCANTO BELLEZA
        ====================================================== --}}

        @elseif ($slug === 'encanto-belleza')

            <div class="mx-auto mt-16 max-w-6xl">

                {{-- Primera imagen: se conserva como estaba --}}
                <div class="flex justify-center">

                    <div
                        class="group relative aspect-[16/10] w-full overflow-hidden rounded-[30px] border border-kate-pink-strong/20 bg-kate-pink-light p-3 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)] md:w-[calc(50%-0.75rem)]"
                    >

                        <div
                            class="flex h-full w-full items-center justify-center overflow-hidden rounded-[22px] bg-white"
                        >
                            <img
                                src="{{ asset($proyecto['imagenes'][0]) }}"
                                alt="Vista 1 del proyecto {{ $proyecto['titulo'] }}"
                                class="h-full w-full object-contain transition duration-700 group-hover:scale-[1.01]"
                            >
                        </div>

                    </div>

                </div>


                {{-- Imágenes 2 y 3: tarjeta adaptada a la imagen --}}
                <div class="mt-6 grid grid-cols-1 items-start gap-6 md:grid-cols-2">

                    @foreach (array_slice($proyecto['imagenes'], 1) as $index => $imagen)

                        <div
                            class="group relative w-full overflow-hidden rounded-[30px] border border-kate-pink-strong/20 bg-kate-pink-light p-3 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)]"
                        >

                            <div
                                class="overflow-hidden rounded-[22px] bg-white"
                            >
                                <img
                                    src="{{ asset($imagen) }}"
                                    alt="Vista {{ $index + 2 }} del proyecto {{ $proyecto['titulo'] }}"
                                    class="block h-auto w-full transition duration-700 group-hover:scale-[1.01]"
                                >
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>


        {{-- =====================================================
             GALERÍA GENERAL
        ====================================================== --}}

        @else

            <div class="mx-auto mt-16 grid max-w-6xl grid-cols-1 gap-6 md:grid-cols-2">

                @foreach ($proyecto['imagenes'] as $index => $imagen)

                    <div
                        class="{{ $loop->first ? 'md:col-span-2 md:mx-auto md:w-[calc(50%-0.75rem)]' : '' }} group relative aspect-[16/10] w-full overflow-hidden rounded-[30px] border border-kate-pink-strong/20 bg-kate-pink-light p-3 shadow-[0_18px_55px_rgba(33,27,32,.06)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/40 hover:shadow-[0_25px_65px_rgba(244,91,165,.11)]"
                    >

                        <div
                            class="flex h-full w-full items-center justify-center overflow-hidden rounded-[22px] bg-white"
                        >
                            <img
                                src="{{ asset($imagen) }}"
                                alt="Vista {{ $index + 1 }} del proyecto {{ $proyecto['titulo'] }}"
                                class="h-full w-full object-contain transition duration-700 group-hover:scale-[1.01]"
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

<section class="pb-28">

    <div class="kate-container">

        <div
            class="flex flex-col items-center justify-between gap-7 rounded-[30px] border border-kate-border bg-white/60 px-7 py-9 text-center shadow-[0_16px_45px_rgba(33,27,32,.035)] transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong/30 hover:shadow-[0_22px_55px_rgba(244,91,165,.09)] sm:px-10 lg:flex-row lg:text-left"
        >

            <div>

                <span
                    class="text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep"
                >
                    DEL CÓDIGO A LA WEB
                </span>

                <h3
                    class="mt-2 text-2xl font-extrabold tracking-[-.04em]"
                >
                    Descubre el resultado de todo el camino recorrido
                </h3>

            </div>


            <a
                href="{{ $proyecto['enlace'] }}"
                target="_blank"
                rel="noopener noreferrer"
                class="kate-button-dark group shrink-0"
            >
                Ver proyecto

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

<section class="{{ empty($proyecto['imagenes']) ? 'pt-32' : 'pt-4' }} pb-28">

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


            {{-- Cuadrado decorativo --}}
            <div
                class="absolute bottom-16 right-16 h-5 w-5 -rotate-12 rounded-sm bg-kate-pink-strong/40"
                aria-hidden="true"
            ></div>


            <div class="relative mx-auto max-w-4xl">

                <span
                    class="text-xs font-extrabold uppercase tracking-[.22em] text-kate-dark"
                >
                    DETRÁS DE CADA PROYECTO
                </span>


                <h2
                    class="mt-5 text-[clamp(2.8rem,5.5vw,5.5rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                >
                    Cada idea tiene

                    <span class="block text-white">
                        algo que contar
                    </span>
                </h2>


                <p
                    class="mx-auto mt-7 max-w-xl text-base leading-7 text-kate-gray sm:text-lg"
                >
                   Detrás de una idea puede esconderse el comienzo de algo increíble.<br> 
                   Cuéntame la tuya y descubramos juntos hasta dónde puede llegar.
                </p>


                <div class="mt-9">

                    <a
                        href="{{ route('contacto') }}"
                        class="group inline-flex items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-7 py-4 font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)]"
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