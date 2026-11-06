
@extends('layouts.app')

@section('title', 'Contacto | Kateryn Martínez')

@section(
    'description',
    'Contacta con Kateryn Martínez, Desarrolladora Frontend Junior y Diseñadora Web UX/UI.'
)

@section('content')

{{-- =========================================================
    CONTACTO
========================================================= --}}

<section class="pb-16 pt-12 sm:pb-20 sm:pt-16 lg:pb-28 lg:pt-24">

    <div class="kate-container min-w-0">

        {{-- =====================================================
            ENCABEZADO
        ====================================================== --}}

        <div class="mx-auto max-w-4xl text-center">

            {{-- Subtítulo sin recuadro --}}
            <div class="text-[11px] font-extrabold uppercase tracking-[.2em] text-kate-pink-deep sm:text-xs">
                CONTACTO
            </div>

            <h1 class="mx-auto mt-5 max-w-4xl text-[clamp(2.5rem,8vw,4rem)] font-extrabold leading-[1.04] tracking-[-.06em] sm:text-[clamp(4rem,6vw,7rem)] sm:leading-[.95]">

                Donde una idea puede

                <span class="text-kate-pink-strong">
                    comenzar a existir
                </span>

            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-7 text-kate-gray sm:mt-7 sm:text-base sm:leading-8 lg:text-lg">
                Cuéntame qué tienes en mente y dejemos
                que la idea encuentre su forma.
            </p>

        </div>

        {{-- =====================================================
            CONTENIDO PRINCIPAL
        ====================================================== --}}

        <div class="mt-12 grid min-w-0 grid-cols-1 items-start gap-10 sm:mt-16 lg:mt-20 lg:grid-cols-[minmax(0,.85fr)_minmax(0,1.15fr)] lg:gap-12 xl:gap-14">

            {{-- =================================================
                INFORMACIÓN DE CONTACTO
            ================================================== --}}

            <div class="min-w-0">

                <span class="text-[11px] font-extrabold uppercase tracking-[.18em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                    CONECTEMOS
                </span>

                <h2 class="mt-4 max-w-lg text-[clamp(2rem,7vw,2.7rem)] font-extrabold leading-[1.08] tracking-[-.05em] sm:text-5xl">

                    A veces, todo comienza

                    <span class="text-kate-pink-strong">
                        con un mensaje
                    </span>

                </h2>

                <p class="mt-5 max-w-lg text-sm leading-7 text-kate-gray sm:mt-6 sm:text-base sm:leading-8">
                    Sigamos creando nuevas historias.
                </p>

                {{-- =================================================
                    TARJETAS DE CONTACTO
                ================================================== --}}

                <div class="mt-8 space-y-4 sm:mt-10">

                    {{-- EMAIL --}}
                    <a
                        href="mailto:kateryn.y.martinez@gmail.com"
                        class="group flex min-w-0 items-center gap-3 rounded-[22px] border border-kate-border bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_18px_45px_rgba(244,91,165,.12)] sm:gap-5 sm:rounded-[26px] sm:p-5"
                    >

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-[16px] bg-kate-pink-light transition duration-300 group-hover:bg-kate-pink sm:h-14 sm:w-14 sm:rounded-[18px]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                class="h-6 w-6"
                                aria-hidden="true"
                            >
                                <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                <path d="m3 7 9 6 9-6"></path>
                            </svg>

                        </div>

                        <div class="min-w-0 flex-1">

                            <span class="text-[10px] font-extrabold uppercase tracking-[.14em] text-kate-pink-deep sm:text-xs sm:tracking-[.16em]">
                                Email
                            </span>

                            <p class="mt-1 break-all text-xs font-semibold leading-5 text-kate-dark sm:text-sm xl:text-base">
                                kateryn.y.martinez@gmail.com
                            </p>

                        </div>

                        <span
                            class="shrink-0 text-lg transition duration-300 group-hover:translate-x-1 group-hover:text-kate-pink-deep sm:text-xl"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                    {{-- LINKEDIN --}}
                    <a
                        href="https://www.linkedin.com/in/katerynmartinez"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex min-w-0 items-center gap-3 rounded-[22px] border border-kate-border bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_18px_45px_rgba(244,91,165,.12)] sm:gap-5 sm:rounded-[26px] sm:p-5"
                    >

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-[16px] bg-kate-pink-light text-sm font-extrabold transition duration-300 group-hover:bg-kate-pink sm:h-14 sm:w-14 sm:rounded-[18px]">
                            in
                        </div>

                        <div class="min-w-0 flex-1">

                            <span class="text-[10px] font-extrabold uppercase tracking-[.14em] text-kate-pink-deep sm:text-xs sm:tracking-[.16em]">
                                LinkedIn
                            </span>

                            <p class="mt-1 break-words text-sm font-semibold text-kate-dark sm:text-base">
                                katerynmartinez
                            </p>

                        </div>

                        <span
                            class="shrink-0 text-lg transition duration-300 group-hover:translate-x-1 group-hover:text-kate-pink-deep sm:text-xl"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                    {{-- GITHUB --}}
                    <a
                        href="https://github.com/kate1560"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex min-w-0 items-center gap-3 rounded-[22px] border border-kate-border bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_18px_45px_rgba(244,91,165,.12)] sm:gap-5 sm:rounded-[26px] sm:p-5"
                    >

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-[16px] bg-kate-pink-light transition duration-300 group-hover:bg-kate-pink sm:h-14 sm:w-14 sm:rounded-[18px]">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-6 w-6"
                                aria-hidden="true"
                            >
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3.28-.36 6.72-1.61 6.72-7A5.4 5.4 0 0 0 19.3 3.75 5.07 5.07 0 0 0 19.16 0S18.05-.35 15 1.48a13.38 13.38 0 0 0-7 0C4.95-.35 3.84 0 3.84 0a5.07 5.07 0 0 0-.14 3.75A5.4 5.4 0 0 0 2.28 7.5c0 5.38 3.44 6.63 6.72 7A4.8 4.8 0 0 0 8 18v4"></path>
                                <path d="M8 19c-3 .92-3-1.5-4-2"></path>
                            </svg>

                        </div>

                        <div class="min-w-0 flex-1">

                            <span class="text-[10px] font-extrabold uppercase tracking-[.14em] text-kate-pink-deep sm:text-xs sm:tracking-[.16em]">
                                GitHub
                            </span>

                            <p class="mt-1 break-words text-sm font-semibold text-kate-dark sm:text-base">
                                kate1560
                            </p>

                        </div>

                        <span
                            class="shrink-0 text-lg transition duration-300 group-hover:translate-x-1 group-hover:text-kate-pink-deep sm:text-xl"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                </div>

            </div>

            {{-- =================================================
                FORMULARIO DE CONTACTO
            ================================================== --}}

            <div
                id="formulario-contacto"
                class="relative min-w-0 scroll-mt-24 overflow-hidden rounded-[24px] border border-kate-pink/60 bg-white p-5 shadow-[0_25px_70px_rgba(244,91,165,.10)] sm:rounded-[32px] sm:p-8 lg:rounded-[36px] lg:p-9 xl:p-12"
            >

                {{-- Decoraciones --}}
                <div
                    class="pointer-events-none absolute -right-20 -top-20 h-44 w-44 rounded-full bg-kate-pink-light sm:h-56 sm:w-56"
                    aria-hidden="true"
                ></div>

                <div
                    class="pointer-events-none absolute right-10 top-12 hidden h-12 w-12 rounded-full border border-kate-pink sm:block"
                    aria-hidden="true"
                ></div>

                <div class="relative min-w-0">

                    <span class="text-[10px] font-extrabold uppercase tracking-[.15em] text-kate-pink-deep sm:text-xs sm:tracking-[.2em]">
                        ENVÍAME UN MENSAJE
                    </span>

                    <h2 class="mt-4 max-w-xl text-[clamp(1.75rem,6vw,2.3rem)] font-extrabold leading-[1.15] tracking-[-.045em] sm:text-4xl">
                        Deja que tu idea hable por sí sola
                    </h2>

                    <p class="mt-4 max-w-xl text-sm leading-7 text-kate-gray sm:text-base">
                        Cuéntame qué imaginas, qué buscas y qué te gustaría hacer realidad.
                    </p>

                    {{-- =================================================
                        FORMULARIO HACIA WHATSAPP
                    ================================================== --}}

                    <form
                        id="formulario-whatsapp"
                        class="mt-8 space-y-5 sm:mt-10 sm:space-y-6"
                    >

                        {{-- NOMBRE --}}
                        <div>

                            <label
                                for="nombre"
                                class="mb-2 block text-sm font-bold text-kate-dark"
                            >
                                Nombre
                            </label>

                            <input
                                type="text"
                                id="nombre"
                                name="nombre"
                                placeholder="Tu nombre"
                                autocomplete="name"
                                required
                                class="block w-full min-w-0 rounded-[16px] border border-kate-border bg-kate-cream px-4 py-3.5 text-base text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20 sm:rounded-[18px] sm:px-5 sm:py-4"
                            >

                        </div>

                        {{-- CORREO --}}
                        <div>

                            <label
                                for="email"
                                class="mb-2 block text-sm font-bold text-kate-dark"
                            >
                                Correo electrónico
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="correo@ejemplo.com"
                                autocomplete="email"
                                required
                                class="block w-full min-w-0 rounded-[16px] border border-kate-border bg-kate-cream px-4 py-3.5 text-base text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20 sm:rounded-[18px] sm:px-5 sm:py-4"
                            >

                        </div>

                        {{-- ASUNTO --}}
                        <div>

                            <label
                                for="asunto"
                                class="mb-2 block text-sm font-bold text-kate-dark"
                            >
                                Asunto
                            </label>

                            <input
                                type="text"
                                id="asunto"
                                name="asunto"
                                placeholder="¿Sobre qué quieres hablar?"
                                required
                                class="block w-full min-w-0 rounded-[16px] border border-kate-border bg-kate-cream px-4 py-3.5 text-base text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20 sm:rounded-[18px] sm:px-5 sm:py-4"
                            >

                        </div>

                        {{-- MENSAJE --}}
                        <div>

                            <label
                                for="mensaje"
                                class="mb-2 block text-sm font-bold text-kate-dark"
                            >
                                Mensaje
                            </label>

                            <textarea
                                id="mensaje"
                                name="mensaje"
                                rows="6"
                                placeholder="Cuéntame sobre tu proyecto, idea u oportunidad..."
                                required
                                class="block w-full min-w-0 resize-y rounded-[16px] border border-kate-border bg-kate-cream px-4 py-3.5 text-base text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20 sm:rounded-[18px] sm:px-5 sm:py-4"
                            ></textarea>

                        </div>

                        {{-- BOTÓN --}}
                        <button
                            type="submit"
                            class="group inline-flex w-full items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-6 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)] sm:w-auto sm:px-7 sm:text-base"
                        >

                            Enviar mensaje

                            <span
                                class="transition-transform duration-300 group-hover:translate-x-1"
                                aria-hidden="true"
                            >
                                →
                            </span>

                        </button>

                    </form>

                </div>

            </div>

        </div>

        {{-- =====================================================
            CIERRE
        ====================================================== --}}

        <div class="relative isolate mt-16 overflow-hidden rounded-[24px] border border-kate-pink-strong/40 bg-kate-pink px-5 py-12 text-center shadow-[0_25px_70px_rgba(244,91,165,.14)] sm:mt-20 sm:rounded-[32px] sm:px-12 sm:py-14 lg:mt-24 lg:rounded-[38px] lg:px-20 lg:py-16">

            {{-- Decoraciones --}}
            <div
                class="pointer-events-none absolute -left-20 -top-24 -z-10 h-64 w-64 rounded-full bg-kate-pink-light/70"
                aria-hidden="true"
            ></div>

            <div
                class="pointer-events-none absolute -bottom-24 -right-12 -z-10 h-64 w-64 rounded-full border border-white/70"
                aria-hidden="true"
            ></div>

            <div
                class="pointer-events-none absolute right-24 top-12 -z-10 hidden h-10 w-10 rounded-full border border-white/80 sm:block"
                aria-hidden="true"
            ></div>

            <div class="relative mx-auto max-w-3xl">

                <span class="text-[10px] font-extrabold uppercase tracking-[.14em] text-kate-dark sm:text-xs sm:tracking-[.22em]">
                    ABIERTA A NUEVOS COMIENZOS
                </span>

                <h2 class="mx-auto mt-5 max-w-3xl text-[clamp(2.2rem,7vw,3.2rem)] font-extrabold leading-[1.05] tracking-[-.06em] sm:text-[clamp(3.2rem,5vw,4.8rem)] sm:leading-[.98]">

                    Hay comienzos que

                    <span class="block text-white">
                        llegan sin avisar
                    </span>

                </h2>

                <p class="mx-auto mt-6 max-w-xl text-sm leading-7 text-kate-gray sm:text-base sm:leading-8 lg:text-lg">
                    Si estás buscando alguien con ganas de crear,
                    cuéntame qué te gustaría comenzar.
                </p>

                <div class="mt-8">

                    <a
                        href="#formulario-contacto"
                        class="group inline-flex max-w-full items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-6 py-4 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)] sm:px-7 sm:text-base"
                    >

                        Hablemos de ello

                        <span
                            class="transition-transform duration-300 group-hover:-translate-y-1"
                            aria-hidden="true"
                        >
                            ↑
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
    ENVÍO DEL FORMULARIO A WHATSAPP
========================================================= --}}

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const formulario = document.getElementById('formulario-whatsapp');

        if (!formulario) {
            return;
        }

        formulario.addEventListener('submit', function (event) {

            event.preventDefault();

            if (!formulario.reportValidity()) {
                return;
            }

            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const asunto = document.getElementById('asunto').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();

            if (!nombre || !email || !asunto || !mensaje) {
                return;
            }

            const numeroWhatsApp = '573216392181';

            const textoWhatsApp =
`Hola Kateryn 👋

Te contacto desde tu portafolio.

Nombre: ${nombre}
Correo: ${email}
Asunto: ${asunto}

Mensaje:
${mensaje}`;

            const urlWhatsApp =
                'https://wa.me/' +
                numeroWhatsApp +
                '?text=' +
                encodeURIComponent(textoWhatsApp);

            const nuevaVentana = window.open(
                urlWhatsApp,
                '_blank',
                'noopener,noreferrer'
            );

            if (!nuevaVentana) {
                window.location.href = urlWhatsApp;
            }

        });

    });
</script>

@endsection
