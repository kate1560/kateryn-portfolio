@extends('layouts.app')

@section('title', 'Kateryn Martínez | Desarrollo Frontend y Diseño Web UX/UI')

@section('content')


{{-- =========================================================
     HERO
========================================================= --}}

<section
    class="relative isolate min-h-[calc(100vh-82px)] overflow-hidden"
>

    {{-- Cuadrícula de fondo --}}
    <div
        class="pointer-events-none absolute inset-0 -z-20 opacity-60"
        style="
            background-image:
                linear-gradient(rgba(217,79,151,.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(217,79,151,.08) 1px, transparent 1px);
            background-size: 70px 70px;
        "
    ></div>

    {{-- Luz rosa izquierda --}}
    <div
        class="pointer-events-none absolute -left-52 top-12 -z-10 h-[500px] w-[500px] rounded-full bg-kate-pink/30 blur-[100px]"
    ></div>

    {{-- Luz rosa derecha --}}
    <div
        class="pointer-events-none absolute -right-40 bottom-[-180px] -z-10 h-[600px] w-[600px] rounded-full bg-kate-pink/40 blur-[110px]"
    ></div>


    <div
        class="kate-container grid min-h-[calc(100vh-82px)] items-center gap-14 py-20 lg:grid-cols-[1.08fr_.92fr]"
    >

        {{-- =====================================================
             CONTENIDO DEL HERO
        ====================================================== --}}

        <div class="relative z-10">

            <div
                class="kate-label mb-8 rounded-full border border-kate-pink bg-kate-pink-light/80 px-4 py-2"
            >
                <span class="text-kate-pink-strong">✣</span>

                Desarrolladora Frontend Junior · Diseñadora Web UX/UI
            </div>


           <h1
                class="max-w-none text-[clamp(4.5rem,5.9vw,9rem)] font-extrabold leading-[.9] tracking-[-.065em]"
            >
                <span class="block">
                    Diseño experiencias
                </span>

                <span class="block">
                    que <span class="text-kate-pink-strong">cobran vida</span>
                </span>
            </h1>


            <div
                class="mt-10 grid max-w-152.5 grid-cols-[3px_1fr] gap-5"
            >
                <span
                    class=" h-20 w-1 rounded-full bg-gradient-to-b from-kate-pink-deep to-kate-pink"
                ></span>

                <p
                    class="text-base leading-7 text-kate-gray md:text-[1.05rem]"
                >
                    Doy vida a las ideas a través del diseño y el código, 
                    transformando cada detalle en parte de una experiencia que no solo funciona, 
                    sino que también deja algo en quien la vive.
                </p>
            </div>


            <a
                href="{{ route('proyectos') }}"
                class="kate-button-dark group mt-8"
            >
                Descubre lo que hago

                <span
                    class="transition-transform duration-300 group-hover:translate-x-1"
                >
                    →
                </span>
            </a>


            {{-- Proceso --}}
            <div
                class="mt-12 flex flex-wrap items-center gap-2.5"
            >
                @foreach (['DISEÑO', 'INTERFAZ', 'CÓDIGO', 'EXPERIENCIA'] as $step)

                    <span
                        class="rounded-full border border-kate-border bg-white/70 px-3.5 py-2 text-[.62rem] font-semibold tracking-[.16em]"
                    >
                        {{ $step }}
                    </span>

                    @if (!$loop->last)
                        <span class="text-kate-pink-deep">
                            →
                        </span>
                    @endif

                @endforeach
            </div>

        </div>


        {{-- =====================================================
             COMPOSICIÓN VISUAL
        ====================================================== --}}

        <div
            class="relative mx-auto hidden h-[590px] w-full max-w-145 lg:block"
            aria-hidden="true"
        >

            {{-- Círculo rosa grande --}}
            <div
                class="absolute right-1 top-16 h-80 w-80 rounded-full bg-kate-pink/55"
            ></div>

            {{-- Círculo rosa inferior --}}
            <div
                class="absolute bottom-8 left-16 h-44 w-44 rounded-full bg-kate-pink-soft"
            ></div>


            {{-- Ventana trasera --}}
            <div
                class="absolute right-0 top-8 h-56 w-80 rotate-3 rounded-[28px] border border-kate-pink/30 bg-white/65 shadow-[0_30px_70px_rgba(122,67,94,.12)] backdrop-blur-xl"
            >
                <div class="flex gap-2 p-5">
                    <span class="h-2.5 w-2.5 rounded-full bg-kate-pink"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-kate-pink/60"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-kate-pink/30"></span>
                </div>

                <div class="px-6">
                    <div class="h-2.5 w-3/4 rounded-full bg-kate-pink-soft"></div>
                    <div class="mt-3 h-2.5 w-1/2 rounded-full bg-kate-border"></div>
                </div>
            </div>


            {{-- Ventana principal --}}
            <div
                class="absolute left-8 top-24 h-96 w-80 rounded-[30px] border border-kate-pink/30 bg-white/90 shadow-[0_35px_80px_rgba(122,67,94,.17)] backdrop-blur-xl"
            >
                <div class="flex gap-2 p-6">
                    <span class="h-2.5 w-2.5 rounded-full bg-kate-pink"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-kate-pink/60"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-kate-pink/30"></span>
                </div>

                <div class="px-7">

                    <div
                        class="mb-9 h-3 w-full rounded-full bg-kate-pink-light"
                    ></div>

                    <div
                        class="mb-4 h-5 w-2/3 rounded-full bg-kate-dark"
                    ></div>

                    <div
                        class="mb-2 h-2.5 w-4/5 rounded-full bg-kate-border"
                    ></div>

                    <div
                        class="h-2.5 w-1/2 rounded-full bg-kate-border"
                    ></div>


                    <div
                        class="mt-10 flex items-center gap-4 rounded-2xl border border-kate-border bg-white p-4"
                    >
                        <div
                            class="h-12 w-12 shrink-0 rounded-full bg-kate-pink"
                        ></div>

                        <div class="w-full">
                            <div
                                class="mb-2 h-2.5 w-2/3 rounded-full bg-kate-dark/70"
                            ></div>

                            <div
                                class="h-2 w-2/5 rounded-full bg-kate-border"
                            ></div>
                        </div>
                    </div>

                </div>
            </div>


            {{-- Tarjeta de código superpuesta --}}
            <div
                class="kate-float absolute right-1 top-52 z-20 w-60 rounded-[24px] bg-kate-dark p-6 font-mono text-xs leading-6 text-white shadow-[0_25px_60px_rgba(33,27,32,.25)]"
            >
                <span class="text-kate-pink">
                    &lt;section
                </span>

                <br>

                &nbsp;&nbsp;class="experiencia"

                <br>

                <span class="text-kate-pink">
                    &gt;
                </span>

                <br><br>

                &nbsp;&nbsp;diseño + código

                <br>

                <span class="text-kate-pink">
                    &lt;/section&gt;
                </span>
            </div>


            {{-- Tarjeta pequeña inferior --}}
            <div
                class="absolute bottom-8 left-44 z-20 w-52 rounded-[22px] border border-kate-border bg-white p-5 shadow-[0_20px_45px_rgba(122,67,94,.14)]"
            >
                <div class="flex items-center gap-3">

                    <div
                        class="grid h-11 w-11 shrink-0 place-items-center rounded-full bg-kate-pink text-sm font-bold"
                    >
                        K
                    </div>

                    <div class="w-full">
                        <div
                            class="h-2.5 w-3/4 rounded-full bg-kate-dark/70"
                        ></div>

                        <div
                            class="mt-2 h-2 w-1/2 rounded-full bg-kate-border"
                        ></div>
                    </div>

                </div>
            </div>


            {{-- UX/UI --}}
            <div
                class="absolute right-12 top-32 z-30 rounded-full bg-kate-pink px-4 py-2 text-xs font-bold shadow-[0_12px_30px_rgba(244,91,165,.25)]"
            >
                ◇ UX/UI
            </div>


            {{-- Frontend --}}
            <div
                class="absolute bottom-18 left-3 z-30 flex items-center gap-2 rounded-full border border-kate-border bg-white px-4 py-2.5 text-[.65rem] font-bold tracking-[.16em] shadow-[0_15px_35px_rgba(122,67,94,.10)]"
            >
                <span
                    class="h-2.5 w-2.5 rounded-full bg-kate-pink-strong"
                ></span>

                FRONTEND
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TICKER
========================================================= --}}

<section
    class="overflow-hidden border-y border-kate-pink-deep/10 bg-kate-pink"
>
    <div class="kate-marquee flex w-max">

        @for ($i = 0; $i < 2; $i++)

            <div
                class="flex shrink-0 items-center gap-10 whitespace-nowrap px-5 py-4"
                aria-hidden="{{ $i === 1 ? 'true' : 'false' }}"
            >
                @foreach ([
                    'RESPONSIVE',
                    'ACCESIBILIDAD',
                    'DISEÑO DE INTERFACES',
                    'FRONTEND',
                    'UX/UI',
                    'REACT',
                    'FIGMA'
                ] as $item)

                    <span
                        class="text-xs font-bold tracking-[.22em]"
                    >
                        {{ $item }}
                    </span>

                    <span class="text-kate-pink-deep">
                        ◆
                    </span>

                @endforeach
            </div>

        @endfor

    </div>
</section>


{{-- =========================================================
     LO QUE HAGO
========================================================= --}}

<section class="kate-container py-28">

    {{-- Encabezado centrado --}}
    <div class="text-center">

        <div class="kate-label justify-center">
            ENTRE DISEÑO Y CÓDIGO
        </div>

        <h2
            class="mt-3 text-[clamp(3rem,5vw,5rem)] font-extrabold tracking-[-.06em]"
        >
            Mi forma de crear 
        </h2>

    </div>


    <div
        class="mt-14 grid gap-7 lg:grid-cols-2"
    >

        {{-- Frontend --}}
        <article
            class="group relative min-h-82.5 overflow-hidden rounded-[32px] border border-kate-border bg-white/70 p-10 transition-all duration-500 hover:-translate-y-2 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_25px_60px_rgba(217,79,151,.13)]"
        >

            <div
                class="absolute -bottom-24 -right-20 h-56 w-56 rounded-full bg-kate-pink/0 transition-all duration-500 group-hover:bg-kate-pink/50"
            ></div>

            <span
                class="font-mono text-sm text-kate-pink-deep"
            >
                01
            </span>

            <div
                class="mt-8 grid h-14 w-14 place-items-center rounded-full bg-kate-pink font-mono font-bold transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110"
            >
                &lt;/&gt;
            </div>

            <h3
                class="relative z-10 mt-6 text-2xl font-bold"
            >
                Desarrollo Frontend
            </h3>

            <p
                class="relative z-10 mt-4 max-w-md leading-7 text-kate-gray"
            >
                Convierto ideas en código y les doy vida 
                a través de experiencias funcionales.
            </p>

            <div
                class="absolute bottom-10 left-10 right-10 h-px bg-kate-pink"
            ></div>

        </article>


        {{-- UX/UI --}}
        <article
            class="group relative min-h-82.5 overflow-hidden rounded-[32px] border border-kate-border bg-white/70 p-10 transition-all duration-500 hover:-translate-y-2 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_25px_60px_rgba(217,79,151,.13)]"
        >

            <div
                class="absolute -bottom-24 -right-20 h-56 w-56 rounded-full bg-kate-pink/0 transition-all duration-500 group-hover:bg-kate-pink/50"
            ></div>

            <span
                class="font-mono text-sm text-kate-pink-deep"
            >
                02
            </span>

            <div
                class="mt-8 grid h-14 w-14 place-items-center rounded-full bg-kate-pink text-xl transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"
            >
                ✦
            </div>

            <h3
                class="relative z-10 mt-6 text-2xl font-bold"
            >
                Diseño Web UX/UI
            </h3>

            <p
                class="relative z-10 mt-4 max-w-md leading-7 text-kate-gray"
            >
                Doy forma a experiencias donde cada detalle 
                guía, conecta y encuentra su lugar. 
            </p>

            <div
                class="absolute bottom-10 left-10 right-10 h-px bg-kate-pink"
            ></div>

        </article>

    </div>

</section>

{{-- =========================================================
     TRABAJO RECIENTE
========================================================= --}}

<section class="kate-container pb-32 pt-10">

    {{-- Todo centrado y uno debajo del otro --}}
    <div class="mx-auto max-w-3xl text-center">

        <div class="kate-label justify-center">
           IDEAS QUE TOMARON FORMA
        </div>

        <h2
            class="mt-3 text-[clamp(3rem,5vw,5rem)] font-extrabold tracking-[-.06em]"
        >
           Exploraciones
        </h2>

        <p
            class="mx-auto mt-5 max-w-xl leading-7 text-kate-gray"
        >
            Una colección de proyectos donde el diseño y el código
            se encuentran para convertir ideas en experiencias.
        </p>

    </div>


    <div
        class="mt-14 grid gap-8 lg:grid-cols-2"
    >

        {{-- LATIDO ANCESTRAL --}}
        <article
            class="group overflow-hidden rounded-[30px] border border-kate-border bg-white transition-all duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_25px_60px_rgba(217,79,151,.16)]"
        >

            <div
                class="relative h-72 overflow-hidden bg-kate-pink-light"
            >

                <img
                    src="{{ asset('latido-ancestral/latido-ancestral-01.webp') }}"
                    alt="Vista del proyecto Latido Ancestral"
                   class="h-full w-full object-contain transition-transform duration-500 group-hover:scale-[1.03]"
                >

            </div>


            <div class="p-7">

                <h3 class="text-2xl font-bold">
                    Ancestral Heartbeat
                </h3>

                <p
                    class="mt-2 text-xs font-semibold tracking-[.15em] text-kate-gray"
                >
                    DESARROLLO FRONTEND
                </p>

            </div>

        </article>


        {{-- RASTRO CAFÉ --}}
        <article
            class="group overflow-hidden rounded-[30px] border border-kate-border bg-white transition-all duration-500 hover:-translate-y-2 hover:border-kate-pink hover:shadow-[0_25px_60px_rgba(217,79,151,.16)]"
        >

            <div
                class="relative flex h-77 items-center justify-center overflow-hidden bg-[#FFF4F8]"
            >

                <img
                    src="{{ asset('rastro-cafe/rastro-cafe-01.webp') }}"
                    alt="Vista del proyecto Rastro Café"
                    class="h-full w-full object-contain transition-transform duration-500 group-hover:scale-[1.03]"
                >


            </div>


            <div class="p-7">

                <h3 class="text-2xl font-bold">
                    Rastro Café
                </h3>

                <p
                    class="mt-2 text-xs font-semibold tracking-[.15em] text-kate-gray"
                >
                    DISEÑO WEB UX/UI
                </p>

            </div>

        </article>

    </div>


    <div class="mt-12 flex justify-center">

        <a
            href="{{ route('proyectos') }}"
            class="kate-button-dark group"
        >
            Conoce mis creaciones

            <span
                class="transition-transform duration-300 group-hover:translate-x-1"
            >
                →
            </span>
        </a>

    </div>

</section>

{{-- ========================================================= 
     CTA 
========================================================= --}} 
 
<section class="py-24"> 
 
    <div class="kate-container"> 
 
        <div 
            class="relative isolate overflow-hidden rounded-[38px] border border-kate-pink-strong/20 bg-kate-pink px-7 py-16 text-center text-kate-dark shadow-[0_28px_80px_rgba(244,91,165,.16)] sm:px-12 lg:px-20 lg:py-24" 
        > 
 
            {{-- Resplandor central muy sutil --}} 
            <div 
                class="pointer-events-none absolute left-1/2 top-1/2 -z-10 h-130 w-130 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/10 blur-3xl" 
                aria-hidden="true" 
            ></div> 
 
 
            {{-- Círculo superior izquierdo --}} 
            <div 
                class="absolute -left-28 -top-36 -z-10 h-80 w-80 rounded-full border border-white/70 bg-white/5" 
                aria-hidden="true" 
            ></div> 
 
 
            {{-- Círculo inferior derecho --}} 
            <div 
                class="absolute -bottom-32 -right-20 -z-10 h-80 w-80 rounded-full bg-kate-pink-light/45" 
                aria-hidden="true" 
            ></div> 
 
 
            {{-- Círculo pequeño superior derecho --}} 
            <div 
                class="absolute right-20 top-14 -z-10 h-16 w-16 rounded-full border border-white/45" 
                aria-hidden="true" 
            ></div> 
 
 
            {{-- Círculo pequeño inferior izquierdo --}} 
            <div 
                class="absolute bottom-14 left-16 -z-10 h-12 w-12 rounded-full border border-white/70 bg-white/10" 
                aria-hidden="true" 
            ></div> 
 
 
            {{-- Cuadrado decorativo --}} 
            <div 
                class="absolute left-16 top-14 -z-10 h-5 w-5 rotate-12 rounded-sm bg-kate-pink-strong/35" 
                aria-hidden="true" 
            ></div> 
 
 
            {{-- Contenido --}} 
            <div class="relative mx-auto max-w-5xl"> 
 
                <div 
                    class="text-xs font-extrabold uppercase tracking-[.22em] text-kate-dark" 
                > 
                    UN POQUITO SOBRE MÍ
                </div> 
 
 
                <h2 
                    class="mx-auto mt-5 max-w-5xl text-[clamp(3rem,6vw,6rem)] font-extrabold leading-[.96] tracking-[-.065em]" 
                > 
                    Más que 
 
                    <span class="block text-white"> 
                        Código y Pantallas
                    </span> 
                </h2> 
 
 
                <p 
                    class="mx-auto mt-7 max-w-xl text-base leading-7 text-kate-dark/65 sm:text-lg" 
                > 
                    Descubre mi camino, lo que me inspira y 
                    la historia detras de lo que creo.
                </p> 
 
 
                <a 
                    href="{{ route('sobre-mi') }}" 
                    class="kate-button-dark group mt-9" 
                > 
                    Conoce mi historia
 
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
 
</section>

@endsection