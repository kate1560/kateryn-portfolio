@extends('layouts.app')

@section('title', 'Sobre mí | Kateryn Martínez')

@section(
    'description',
    'Conoce más sobre Kateryn Martínez, Desarrolladora Frontend Junior y Diseñadora Web UX/UI en Barranquilla, Colombia.'
)

@section('content')

    {{-- =========================================================
        QUIÉN SOY
    ========================================================== --}}
    <section class="relative isolate overflow-hidden pb-24 pt-14 lg:pb-28 lg:pt-20">

        {{-- Decoraciones suaves --}}
        <div
            class="pointer-events-none absolute -left-40 top-10 -z-10 h-105 w-105 rounded-full bg-kate-pink-soft/55 blur-3xl"
            aria-hidden="true"
        ></div>

        <div
            class="pointer-events-none absolute -right-44 bottom-0 -z-10 h-125 w-125 rounded-full bg-kate-pink-light/80 blur-3xl"
            aria-hidden="true"
        ></div>

        <div class="kate-container">

            <div
                class="grid items-center gap-14 lg:grid-cols-[.88fr_1.12fr] lg:gap-20"
            >

                {{-- =====================================================
                    FOTO
                ====================================================== --}}
                <div class="relative mx-auto w-full max-w-lg lg:-translate-y-50">

                    {{-- Marco rosa --}}
                    <div
                        class="absolute -left-5 -top-5 h-full w-full rounded-[34px] bg-kate-pink"
                        aria-hidden="true"
                    ></div>

                    {{-- Contenedor --}}
                    <div
                        class="relative overflow-hidden rounded-[34px] border border-kate-border bg-white shadow-[0_30px_80px_rgba(33,27,32,.10)]"
                    >

                        <div class="aspect-[4/5] overflow-hidden lg:h-[820px] lg:aspect-auto">
                            <img
                                src="{{ asset('perfil/kateryn-martinez.webp') }}"
                                alt="Kateryn Martínez"
                                class="h-full w-full object-cover object-top"
                            >
                        </div>

                    </div>

                    {{-- Ubicación --}}
                    <div
                        class="absolute -bottom-5 -right-3 rounded-2xl border border-kate-pink/40 bg-white px-5 py-4 shadow-[0_18px_45px_rgba(33,27,32,.10)] sm:right-5"
                    >

                        <p
                            class="text-xs font-bold uppercase tracking-[.15em] text-kate-gray"
                        >
                            Ubicación
                        </p>

                        <p class="mt-1 font-bold text-kate-dark">
                            Barranquilla, Colombia
                        </p>

                    </div>

                </div>


                {{-- =====================================================
                    INFORMACIÓN
                ====================================================== --}}
                <div>

                    <div class="kate-label">
                        Detrás de lo que creo
                    </div>

                    <h1
                        class="mt-4 max-w-3xl text-[clamp(3.1rem,5.3vw,5.4rem)] font-extrabold leading-[.92] tracking-[-.065em]"
                    >
                        <span class="block">
                            Hola, soy
                        </span>

                        <span class=" mt-4 block whitespace-nowrap text-kate-pink-strong">
                            Kateryn Martinez
                        </span>
                    </h1>

                    <div
                        class="mt-8 max-w-2xl space-y-5 text-base leading-8 text-kate-gray sm:text-lg"
                    >

                        <p>
                            Todo comenzó con mi amor por el arte y el diseño, con esa necesidad de crear, 
                            imaginar y darle forma a aquello que antes solo existía en mi mente. Dejé la tierra 
                            que me vio crecer para perseguir un sueño que, al principio, ni siquiera sabía que tenía. 
                            Lo fui descubriendo paso a paso, entre cambios, aprendizajes y nuevas formas de mirar lo 
                            que podía crear. Cuando finalmente entendí que este era el camino que quería, 
                            tuve algo claro: <strong> nada iba a detenerme.</strong>
                        </p>

                        <p>
                           Hoy soy <strong>Desarrolladora de Software Junior con enfoque Frontend</strong> y 
                            actualmente estudio <strong>Desarrollo Multimedia y Web.</strong> En el camino también 
                            encontré en el <strong>diseño UX/UI</strong> una forma muy mía de crear: tomar una idea 
                            que nace en mi cabeza y convertirla, poco a poco, en algo que otros puedan 
                            ver y experimentar.
                        </p>

                        <p>
                            Me gusta empezar desde lo más pequeño: una idea, un boceto, un detalle que imagino diferente. 
                            Pensar cómo se verá, cómo se sentirá al recorrerlo y encontrar la manera de llevarlo a la realidad 
                            a través del código. Para mí, diseñar y desarrollar son dos partes de la misma historia: 
                            una le da forma a la idea y la otra consigue que cobre vida.
                        </p>

                        <p>
                            Cada proyecto es una oportunidad para aprender algo que todavía no sé, probar algo que nunca he 
                            hecho y descubrir hasta dónde puedo llevar una idea. En cada uno dejo tiempo, curiosidad y 
                            un pequeño pedacito de mí.
                        </p>

                        <p>
                           Aquel sueño que un día no sabía que tenía dejó de ser solo una posibilidad. Hoy lo estoy construyendo 
                           paso a paso, entre diseños, código, aprendizajes y muchas ideas que todavía esperan convertirse en algo real.
                        </p>

                        <p>
                            <strong>Y apenas estoy comenzando.</strong>
                        </p>

                    </div>


                    {{-- DISPONIBILIDAD --}}
                    <div
                        class="mx-auto mt-9 w-full max-w-2xl rounded-[26px] border border-kate-pink/40 bg-kate-pink-light/70 p-6 lg:-translate-x-1/2"
                    >

                        <div class="flex items-center justify-center gap-4">

                            <span class="relative flex h-3 w-3">

                                <span
                                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-kate-pink-strong opacity-50"
                                ></span>

                                <span
                                    class="relative inline-flex h-3 w-3 rounded-full bg-kate-pink-strong"
                                ></span>

                            </span>

                            <div>

                                <p class="font-bold text-kate-dark">
                                    Disponible para oportunidades
                                </p>

                                <p class="mt-1 text-sm text-kate-gray">
                                    Frontend Junior · Diseño Web UX/UI
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- CV --}}
                    <div class="mt-8 flex justify-center lg:-translate-x-1/2"">

                        <a
                            href="{{ asset('documents/Hoja-de-vida-Kate.M.R.pdf') }}"
                            download="Hoja-de-Vida-Kateryn-Martinez.pdf"
                            class="kate-button-dark"
                        >
                            Descargar CV
                            <span aria-hidden="true">↓</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        FORMACIÓN
    ========================================================== --}}
    <section
        class="border-y border-kate-pink/20 bg-white/55 py-24 lg:py-28"
    >

        <div class="kate-container">

            {{-- Encabezado --}}
            <div class="mx-auto max-w-3xl text-center">

                <div class="kate-label justify-center">
                    MI RECORRIDO
                </div>

                <h2
                    class="mt-4 text-[clamp(3rem,5vw,5rem)] font-extrabold tracking-[-.06em]"
                >
                    Formación
                </h2>

                <p
                    class="mx-auto mt-5 max-w-xl leading-7 text-kate-gray"
                >
                   Un camino que comenzó en mi tierra y que, paso a paso, me ha llevado a descubrir 
                   nuevas formas de crear, aprender y construir.
                </p>

            </div>


            {{-- TIMELINE --}}
            <div class="mx-auto mt-16 max-w-4xl">


                {{-- 1. BACHILLERATO --}}
                <article
                    class="group relative border-l-2 border-kate-pink pb-12 pl-9 sm:pl-12"
                >

                    <span
                        class="absolute -left-3 top-0 flex h-6 w-6 items-center justify-center rounded-full border-4 border-kate-cream bg-kate-pink"
                    ></span>

                    <div
                        class="rounded-[28px] border border-kate-border bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_22px_60px_rgba(244,91,165,.12)] sm:p-8"
                    >

                        <div
                            class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between"
                        >

                            <div>

                                <h3
                                    class="text-2xl font-extrabold tracking-[-.03em] text-kate-dark"
                                >
                                    Bachiller Académico
                                </h3>

                                <p
                                    class="mt-2 font-semibold text-kate-pink-deep"
                                >
                                    Institución Educativa Pío XII
                                </p>

                            </div>

                            <span
                                class="shrink-0 text-sm font-semibold text-kate-gray"
                            >
                                2024
                            </span>

                        </div>

                        <p
                            class="mt-5 max-w-2xl leading-7 text-kate-gray"
                        >
                            Formación académica realizada en San Jacinto Bolívar.
                        </p>

                    </div>

                </article>


                {{-- 2. RIWI --}}
                <article
                    class="group relative border-l-2 border-kate-pink pb-12 pl-9 sm:pl-12"
                >

                    <span
                        class="absolute -left-3 top-0 flex h-6 w-6 items-center justify-center rounded-full border-4 border-kate-cream bg-kate-pink-strong"
                    ></span>

                    <div
                        class="rounded-[28px] border border-kate-border bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_22px_60px_rgba(244,91,165,.12)] sm:p-8"
                    >

                        <div
                            class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between"
                        >

                            <div>

                                <h3
                                    class="text-2xl font-extrabold tracking-[-.03em] text-kate-dark"
                                >
                                    Desarrollo de Software
                                </h3>

                                <p
                                    class="mt-2 font-semibold text-kate-pink-deep"
                                >
                                    Riwi · Barranquilla
                                </p>

                            </div>

                            <span
                                class="shrink-0 text-sm font-semibold text-kate-gray"
                            >
                                2025
                            </span>

                        </div>

                        <p
                            class="mt-5 max-w-2xl leading-7 text-kate-gray"
                        >
                            Formación intensiva en desarrollo de software mediante
                            rutas de aprendizaje y proyectos prácticos desarrollados
                            bajo requerimientos, tiempos de entrega y presentaciones.
                        </p>

                    </div>

                </article>


                {{-- 3. SENA --}}
                <article
                    class="group relative border-l-2 border-transparent pl-9 sm:pl-12"
                >

                    <span
                        class="absolute -left-3 top-0 flex h-6 w-6 items-center justify-center rounded-full border-4 border-kate-cream bg-kate-pink-strong"
                    ></span>

                    <div
                        class="rounded-[28px] border border-kate-border bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_22px_60px_rgba(244,91,165,.12)] sm:p-8"
                    >

                        <div
                            class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between"
                        >

                            <div>

                                <span
                                    class="inline-flex rounded-full bg-kate-pink-light px-3 py-1 text-xs font-bold uppercase tracking-[.15em] text-kate-pink-deep"
                                >
                                    Actualmente
                                </span>

                                <h3
                                    class="mt-4 text-2xl font-extrabold tracking-[-.03em] text-kate-dark"
                                >
                                    Tecnólogo en Desarrollo Multimedia y Web
                                </h3>

                                <p
                                    class="mt-2 font-semibold text-kate-pink-deep"
                                >
                                    SENA
                                </p>

                            </div>

                            <span
                                class="shrink-0 text-sm font-semibold text-kate-gray"
                            >
                                2026 — Actualidad
                            </span>

                        </div>

                        <p
                            class="mt-5 max-w-2xl leading-7 text-kate-gray"
                        >
                            Formación orientada al desarrollo de soluciones
                            multimedia y web, integrando aspectos técnicos,
                            visuales y de experiencia digital.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- =========================================================
        IDIOMAS
    ========================================================== --}}
    <section class="relative overflow-hidden py-24 lg:py-28">

        <div
            class="pointer-events-none absolute left-1/2 top-1/2 -z-10 h-105 w-105 -translate-x-1/2 -translate-y-1/2 rounded-full bg-kate-pink-soft/60 blur-3xl"
            aria-hidden="true"
        ></div>

        <div class="kate-container">

            {{-- Encabezado --}}
            <div class="mx-auto max-w-3xl text-center">

                <div class="kate-label justify-center">
                    COMUNICACIÓN
                </div>

                <h2
                    class="mt-4 text-[clamp(3rem,5vw,5rem)] font-extrabold tracking-[-.06em]"
                >
                    Idiomas
                </h2>

            </div>


            <div
                class="mx-auto mt-14 grid max-w-4xl gap-6 md:grid-cols-2"
            >

                {{-- ESPAÑOL --}}
                <article
                    class="group rounded-[30px] border border-kate-border bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_22px_60px_rgba(244,91,165,.12)]"
                >

                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-kate-pink text-xl font-extrabold text-kate-dark"
                    >
                        ES
                    </div>

                    <div
                        class="mt-7 flex items-end justify-between gap-4"
                    >

                        <div>

                            <h3 class="text-2xl font-extrabold">
                                Español
                            </h3>

                            <p class="mt-2 text-kate-gray">
                                Idioma nativo
                            </p>

                        </div>

                        <span
                            class="rounded-full bg-kate-pink-light px-4 py-2 text-xs font-bold uppercase tracking-[.12em] text-kate-pink-deep"
                        >
                            Nativo
                        </span>

                    </div>

                </article>


                {{-- INGLÉS --}}
                <article
                    class="group rounded-[30px] border border-kate-border bg-white p-8 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_22px_60px_rgba(244,91,165,.12)]"
                >

                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-kate-pink text-xl font-extrabold text-kate-dark"
                    >
                        EN
                    </div>

                    <div
                        class="mt-7 flex items-end justify-between gap-4"
                    >

                        <div>

                            <h3 class="text-2xl font-extrabold">
                                Inglés
                            </h3>

                            <p class="mt-2 text-kate-gray">
                                Nivel básico
                            </p>

                        </div>

                        <span
                            class="rounded-full bg-kate-pink-light px-4 py-2 text-xs font-bold uppercase tracking-[.12em] text-kate-pink-deep"
                        >
                            A1
                        </span>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- =========================================================
        CIERRE / SIGUIENTE PÁGINA
    ========================================================== --}}
    <section class="pb-28">

        <div class="kate-container">

            <div
                class="relative overflow-hidden rounded-[38px] border border-kate-pink/35 bg-kate-pink px-7 py-14 text-center text-kate-dark shadow-[0_25px_70px_rgba(244,91,165,.10)] sm:px-12 lg:px-20 lg:py-20"
            >

                {{-- Resplandor central --}}
                <div
                    class="pointer-events-none absolute left-1/2 top-1/2 h-130 w-130 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/25 blur-3xl"
                    aria-hidden="true"
                ></div>

                {{-- Círculo superior derecho --}}
                <div
                    class="absolute -right-16 -top-24 h-72 w-72 rounded-full border border-white/60 bg-kate-pink-light/70"
                    aria-hidden="true"
                ></div>

                {{-- Círculo inferior izquierdo --}}
                <div
                    class="absolute -bottom-28 -left-16 h-80 w-80 rounded-full bg-kate-pink-light/70"
                    aria-hidden="true"
                ></div>

                {{-- Detalle pequeño --}}
                <div
                    class="absolute left-16 top-14 h-5 w-5 rotate-12 rounded-sm bg-kate-pink-strong/25"
                    aria-hidden="true"
                ></div>


                <div class="relative mx-auto max-w-3xl">

                    <span
                        class="text-xs font-extrabold uppercase tracking-[.2em] text-kate-dark"
                    >
                        SIGAMOS EXPLORANDO
                    </span>

                    <h2
                        class="mt-5 text-[clamp(2.7rem,5vw,5rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                    >
                        Las herramientas 
                        <span class="text-white">
                          detrás de mis ideas
                        </span>
                    </h2>

                    <p
                        class="mx-auto mt-6 max-w-xl leading-7 text-kate-gray"
                    >
                        Entre diseño y código estas son las herramientas 
                        que me acompañan para transformar lo que imagino en algo real.
                    </p>


                    <div class="mt-9">

                        <a
                            href="{{ route('habilidades') }}"
                            class="inline-flex items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-7 py-4 font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)]"
                        >
                           Descubre cómo creo
                            <span aria-hidden="true">
                                →
                            </span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection