@extends('layouts.app')

@section('title', 'Habilidades | Kateryn Martínez')

@section(
    'description',
    'Habilidades técnicas y personales de Kateryn Martínez en desarrollo frontend, diseño web UX/UI y herramientas digitales.'
)

@section('content')


    {{-- =========================================================
        ÁREA TÉCNICA
    ========================================================== --}}
    <section class="pb-28 pt-20">

        <div class="kate-container">

            {{-- Encabezado --}}
            <div class="mx-auto mb-14 max-w-4xl text-center">

                <div class="kate-label justify-center">
                    ÁREA TÉCNICA
                </div>

                <h1
                    class="mt-4 text-[clamp(2.8rem,5vw,4.8rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                >
                   Las herramientas 
                    <span class="text-kate-pink-strong">
                        detrás de lo que creo
                    </span>
                </h1>

                <p
                    class="mx-auto mt-6 max-w-2xl text-base leading-8 text-kate-gray sm:text-lg"
                >
                    Cada idea necesita algo que la haga posible. Aquí se encuentran las tecnologías, 
                    herramientas y conocimientos que me ayudan a llevar una idea desde sus primeros 
                    trazos hasta convertirse en una experiencia digital.
                </p>

            </div>


            {{-- =====================================================
                TARJETAS TÉCNICAS
            ====================================================== --}}
            <div class="grid gap-6 lg:grid-cols-2">


                {{-- FRONTEND --}}
                <article
                    class="group relative overflow-hidden rounded-[32px] border border-kate-border bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:p-10"
                >

                    <div
                        class="absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                        aria-hidden="true"
                    ></div>

                    <div class="relative">

                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-[20px] bg-kate-pink text-2xl font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong"
                        >
                            &lt;/&gt;
                        </div>

                        <div class="mt-8">

                            <span
                                class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                            >
                                DESARROLLO
                            </span>

                            <h3
                                class="mt-2 text-3xl font-extrabold tracking-[-.04em]"
                            >
                                Frontend
                            </h3>

                            <p class="mt-4 max-w-lg leading-7 text-kate-gray">
                                Tecnologías que utilizo para transformar diseños 
                                en interfaces web funcionales, responsivas y llenas de vida.
                            </p>

                        </div>


                        <div class="mt-8 flex flex-wrap gap-3">

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                HTML5
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                CSS3
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                JavaScript
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                TypeScript
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                React
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Next.js
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Tailwind CSS · Básico
                            </span>

                        </div>

                    </div>

                </article>


                {{-- DISEÑO WEB UX/UI --}}
                <article
                    class="group relative overflow-hidden rounded-[32px] border border-kate-border bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:p-10"
                >

                    <div
                        class="absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                        aria-hidden="true"
                    ></div>

                    <div class="relative">

                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-[20px] bg-kate-pink text-xl font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong"
                        >
                            UI
                        </div>

                        <div class="mt-8">

                            <span
                                class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                            >
                                DISEÑO
                            </span>

                            <h3
                                class="mt-2 text-3xl font-extrabold tracking-[-.04em]"
                            >
                                Diseño Web UX/UI
                            </h3>

                            <p class="mt-4 max-w-lg leading-7 text-kate-gray">
                               Herramientas y conocimientos que me permiten cuidar lo visual, 
                               crear interfaces claras y pensar en cómo se siente cada experiencia al recorrerla.

                            </p>

                        </div>


                        <div class="mt-8 flex flex-wrap gap-3">

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Figma
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Canva
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Wireframes
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Prototipado
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Diseño responsive
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Jerarquía visual
                            </span>

                        </div>

                    </div>

                </article>


                {{-- BACKEND Y DATOS --}}
                <article
                    class="group relative overflow-hidden rounded-[32px] border border-kate-border bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:p-10"
                >

                    <div
                        class="absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                        aria-hidden="true"
                    ></div>

                    <div class="relative">

                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-[20px] bg-kate-pink text-xl font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong"
                        >
                            { }
                        </div>

                        <div class="mt-8">

                            <span
                                class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                            >
                                CONOCIMIENTOS
                            </span>

                            <h3
                                class="mt-2 text-3xl font-extrabold tracking-[-.04em]"
                            >
                                Backend & Datos
                            </h3>

                            <p class="mt-4 max-w-lg leading-7 text-kate-gray">
                                Conocimientos que me ayudan a entender lo que ocurre detrás 
                                de una interfaz y cómo cada parte de una aplicación se conecta 
                                para funcionar.
                            </p>

                        </div>


                        <div class="mt-8 flex flex-wrap gap-3">

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                PHP · Básico
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Laravel · Básico
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Laravel Jetstream · Básico
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                SQL · Básico
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                SQLite · Básico
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Python · Básico
                            </span>

                        </div>

                    </div>

                </article>


                {{-- HERRAMIENTAS --}}
                <article
                    class="group relative overflow-hidden rounded-[32px] border border-kate-border bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light/35 hover:shadow-[0_25px_70px_rgba(244,91,165,.13)] sm:p-10"
                >

                    <div
                        class="absolute -right-16 -top-16 h-44 w-44 rounded-full bg-kate-pink-light transition duration-500 group-hover:bg-kate-pink-soft"
                        aria-hidden="true"
                    ></div>

                    <div class="relative">

                        <div
                            class="flex h-16 w-16 items-center justify-center rounded-[20px] bg-kate-pink text-xl font-extrabold text-kate-dark transition duration-300 group-hover:bg-kate-pink-strong"
                        >
                            +
                        </div>

                        <div class="mt-8">

                            <span
                                class="text-xs font-bold uppercase tracking-[.18em] text-kate-pink-deep"
                            >
                                FLUJO DE TRABAJO
                            </span>

                            <h3
                                class="mt-2 text-3xl font-extrabold tracking-[-.04em]"
                            >
                                Herramientas
                            </h3>

                            <p class="mt-4 max-w-lg leading-7 text-kate-gray">
                                Recursos que me acompañan durante el proceso: desde crear 
                                y organizar hasta probar, mejorar y dar forma a cada proyecto.
                            </p>

                        </div>


                        <div class="mt-8 flex flex-wrap gap-3">

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                Git
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                GitHub
                            </span>

                            <span class="rounded-full border border-kate-pink/60 bg-kate-pink-light px-4 py-2 text-sm font-semibold text-kate-dark">
                                VS Code
                            </span>

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- =========================================================
        HABILIDADES PERSONALES
    ========================================================== --}}
    <section class="border-y border-kate-pink/20 bg-white/55 py-24 lg:py-28">

        <div class="kate-container">

            <div class="mx-auto max-w-3xl text-center">

                <div class="kate-label justify-center">
                    HABILIDADES PERSONALES
                </div>

                <h2
                    class="mt-4 text-[clamp(3rem,5vw,5rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                >
                    Más allá
                    <span class="text-kate-pink-strong">
                        del código
                    </span>
                </h2>

                <p
                    class="mx-auto mt-6 max-w-2xl text-base leading-8 text-kate-gray sm:text-lg"
                >
                    Crear no es solo saber cómo hacerlo. También es tener curiosidad para aprender, 
                    paciencia para resolver, atención para cuidar los detalles y disposición para crecer 
                    con cada reto.
                </p>

            </div>


            <div class="mx-auto mt-14 grid max-w-5xl gap-4 sm:grid-cols-2">

                <div
                    class="group flex items-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        ✦
                    </span>

                    <span class="font-bold">
                        Creatividad
                    </span>
                </div>


                <div
                    class="group flex items-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        ↗
                    </span>

                    <span class="font-bold">
                        Comunicación efectiva
                    </span>
                </div>


                <div
                    class="group flex items-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        +
                    </span>

                    <span class="font-bold">
                        Trabajo en equipo
                    </span>
                </div>


                <div
                    class="group flex items-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        ↻
                    </span>

                    <span class="font-bold">
                        Adaptabilidad
                    </span>
                </div>


                <div
                    class="group flex items-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        ✓
                    </span>

                    <span class="font-bold">
                        Organización
                    </span>
                </div>


                <div
                    class="group flex items-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        ◇
                    </span>

                    <span class="font-bold">
                        Atención al detalle
                    </span>
                </div>

            </div>


            {{-- RESPONSABILIDAD CENTRADA --}}
            <div class="mx-auto mt-4 max-w-[490px]">

                <div
                    class="group flex items-center justify-center gap-4 rounded-[24px] border border-kate-border bg-white p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:bg-kate-pink-light hover:shadow-[0_16px_40px_rgba(244,91,165,.10)]"
                >
                    <span
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-kate-pink font-bold transition duration-300 group-hover:bg-kate-pink-strong"
                    >
                        ●
                    </span>

                    <span class="font-bold">
                        Responsabilidad
                    </span>
                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CTA / PROYECTOS
    ========================================================== --}}
    <section class="py-24">

        <div class="kate-container">

            <div
                class="relative isolate overflow-hidden rounded-[38px] border border-kate-pink-strong/30 bg-kate-pink px-7 py-16 text-center text-kate-dark shadow-[0_25px_70px_rgba(244,91,165,.16)] sm:px-12 lg:px-20 lg:py-20"
            >

                {{-- Círculo superior izquierdo --}}
                <div
                    class="absolute -left-20 -top-28 -z-10 h-72 w-72 rounded-full border border-white/80 bg-white/5"
                    aria-hidden="true"
                ></div>


                {{-- Cuadrado rosa --}}
                <div
                    class="absolute left-16 top-14 -z-10 h-5 w-5 rotate-12 rounded-sm bg-kate-pink-strong/35"
                    aria-hidden="true"
                ></div>


                {{-- Círculo grande inferior derecho --}}
                <div
                    class="absolute -bottom-28 -right-16 -z-10 h-80 w-80 rounded-full bg-kate-pink-light/70"
                    aria-hidden="true"
                ></div>


                <div class="relative mx-auto max-w-4xl">

                    <span
                        class="text-xs font-extrabold uppercase tracking-[.2em] text-kate-dark"
                    >
                        DEL CONOCIMIENTO A LA PRÁCTICA
                    </span>


                    <h2
                        class="mt-5 text-[clamp(2.8rem,5vw,5rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                    >
                        Ahora mira cómo lo

                        <span class="text-white">
                            llevo a proyectos
                        </span>
                    </h2>


                    <p
                        class="mx-auto mt-6 max-w-xl leading-7 text-kate-gray"
                    >
                        Todo lo que aprendo encuentra su lugar cuando una idea empieza 
                        a tomar forma. Aquí puedes conocer algunos de los proyectos diseño, código 
                        y creatividad dejaron de ser herramientas para convertirse en algo que podía existir.
                    </p>


                    <div class="mt-9">

                        <a
                            href="{{ route('proyectos') }}"
                            class="group inline-flex items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-7 py-4 font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)]"
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