@extends('layouts.app')

@section('title', 'Contacto | Kateryn Martínez')

@section(
    'description',
    'Contacta con Kateryn Martínez, Desarrolladora Frontend Junior y Diseñadora Web UX/UI.'
)

@section('content')

{{-- =========================================================
    CONTACTO
========================================================== --}}

<section class="pb-28 pt-20 lg:pt-24">

    <div class="kate-container">


        {{-- =====================================================
            ENCABEZADO
        ====================================================== --}}

        <div class="mx-auto max-w-4xl text-center">

            <div class="kate-label justify-center">
                CONTACTO
            </div>

            <h1
                class="mt-4 text-[clamp(3.5rem,7vw,7rem)] font-extrabold leading-[.9] tracking-[-.07em]"
            >
                Donde una idea puede

                <span class="text-kate-pink-strong">
                    comenzar a existir
                </span>
            </h1>

            <p
                class="mx-auto mt-7 max-w-2xl text-base leading-8 text-kate-gray sm:text-lg"
            >
                Cuentame que tienes en mente y dejemos 
                que la idea encuentre su forma.
            </p>

        </div>



        {{-- =====================================================
            CONTENIDO PRINCIPAL
        ====================================================== --}}

        <div class="mt-20 grid items-start gap-10 lg:grid-cols-[.85fr_1.15fr] lg:gap-14">


            {{-- =================================================
                INFORMACIÓN DE CONTACTO
            ================================================== --}}

            <div>

                <span
                    class="text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep"
                >
                    CONECTEMOS
                </span>

                <h2
                    class="mt-4 max-w-lg text-4xl font-extrabold leading-[1.05] tracking-[-.05em] sm:text-5xl"
                >
                    A veces, todo comienza
                    <span class="text-kate-pink-strong">con un mensaje</span>
                </h2>

                <p
                    class="mt-6 max-w-lg leading-8 text-kate-gray"
                >
                   Sigamos creando nuevas historias.
                </p>



                {{-- =================================================
                    TARJETAS DE CONTACTO
                ================================================== --}}

                <div class="mt-10 space-y-4">


                    {{-- EMAIL --}}
                    <a
                        href="mailto:kateryn.y.martinez@gmail.com"
                        class="group flex items-center gap-5 rounded-[26px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_18px_45px_rgba(244,91,165,.12)]"
                    >

                        <div
                            class="flex h-14 w-14 shrink-0 items-center justify-center rounded-[18px] bg-kate-pink-light transition duration-300 group-hover:bg-kate-pink"
                        >
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

                            <span
                                class="text-xs font-extrabold uppercase tracking-[.16em] text-kate-pink-deep"
                            >
                                Email
                            </span>

                            <p
                                class="mt-1 truncate font-semibold text-kate-dark"
                            >
                                kateryn.y.martinez@gmail.com
                            </p>

                        </div>


                        <span
                            class="text-xl transition duration-300 group-hover:translate-x-1 group-hover:text-kate-pink-deep"
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
                        class="group flex items-center gap-5 rounded-[26px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_18px_45px_rgba(244,91,165,.12)]"
                    >

                        <div
                            class="flex h-14 w-14 shrink-0 items-center justify-center rounded-[18px] bg-kate-pink-light text-sm font-extrabold transition duration-300 group-hover:bg-kate-pink"
                        >
                            in
                        </div>


                        <div class="min-w-0 flex-1">

                            <span
                                class="text-xs font-extrabold uppercase tracking-[.16em] text-kate-pink-deep"
                            >
                                LinkedIn
                            </span>

                            <p class="mt-1 font-semibold text-kate-dark">
                                katerynmartinez
                            </p>

                        </div>


                        <span
                            class="text-xl transition duration-300 group-hover:translate-x-1 group-hover:text-kate-pink-deep"
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
                        class="group flex items-center gap-5 rounded-[26px] border border-kate-border bg-white p-5 transition duration-300 hover:-translate-y-1 hover:border-kate-pink hover:shadow-[0_18px_45px_rgba(244,91,165,.12)]"
                    >

                        <div
                            class="flex h-14 w-14 shrink-0 items-center justify-center rounded-[18px] bg-kate-pink-light transition duration-300 group-hover:bg-kate-pink"
                        >
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

                            <span
                                class="text-xs font-extrabold uppercase tracking-[.16em] text-kate-pink-deep"
                            >
                                GitHub
                            </span>

                            <p class="mt-1 font-semibold text-kate-dark">
                                kate1560
                            </p>

                        </div>


                        <span
                            class="text-xl transition duration-300 group-hover:translate-x-1 group-hover:text-kate-pink-deep"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>


                </div>

            </div>



            {{-- =================================================
                FORMULARIO
            ================================================== --}}

            <div
                id="formulario-contacto"
                class="relative scroll-mt-28 overflow-hidden rounded-[36px] border border-kate-pink/60 bg-white p-7 shadow-[0_25px_70px_rgba(244,91,165,.10)] sm:p-10 lg:p-12"
            >

                {{-- Decoración --}}
                <div
                    class="absolute -right-20 -top-20 h-56 w-56 rounded-full bg-kate-pink-light"
                    aria-hidden="true"
                ></div>

                <div
                    class="absolute right-14 top-16 h-12 w-12 rounded-full border border-kate-pink"
                    aria-hidden="true"
                ></div>


                <div class="relative">

                    <span
                        class="text-xs font-extrabold uppercase tracking-[.2em] text-kate-pink-deep"
                    >
                        ENVÍAME UN MENSAJE
                    </span>

                    <h2
                        class="mt-4 text-3xl font-extrabold tracking-[-.045em] sm:text-4xl"
                    >
                        Deja que tu idea hable por sí sola
                    </h2>

                    <p class="mt-4 max-w-xl leading-7 text-kate-gray">
                        Cuéntame qué imaginas, qué buscas y qué te gustaría hacer realidad.
                    </p>



                    {{-- =================================================
                        FORMULARIO HACIA WHATSAPP
                    ================================================== --}}

                    <form
                        id="formulario-whatsapp"
                        class="mt-10 space-y-6"
                    >


                        {{-- Nombre --}}
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
                                class="w-full rounded-[18px] border border-kate-border bg-kate-cream px-5 py-4 text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20"
                            >

                        </div>



                        {{-- Correo --}}
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
                                class="w-full rounded-[18px] border border-kate-border bg-kate-cream px-5 py-4 text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20"
                            >

                        </div>



                        {{-- Asunto --}}
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
                                class="w-full rounded-[18px] border border-kate-border bg-kate-cream px-5 py-4 text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20"
                            >

                        </div>



                        {{-- Mensaje --}}
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
                                class="w-full resize-none rounded-[18px] border border-kate-border bg-kate-cream px-5 py-4 text-kate-dark outline-none transition duration-300 placeholder:text-kate-gray/60 focus:border-kate-pink-strong focus:bg-white focus:ring-4 focus:ring-kate-pink/20"
                            ></textarea>

                        </div>



                        {{-- Botón --}}
                        <button
                            type="submit"
                            class="group inline-flex w-full items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-7 py-4 font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)] sm:w-auto"
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

        <div
            class="relative mt-24 overflow-hidden rounded-[38px] border border-kate-pink-strong/40 bg-kate-pink px-7 py-12 text-center shadow-[0_25px_70px_rgba(244,91,165,.14)] sm:px-12 lg:px-20 lg:py-16"
        >

            <div
                class="absolute -left-20 -top-24 h-64 w-64 rounded-full bg-kate-pink-light/70"
                aria-hidden="true"
            ></div>

            <div
                class="absolute -bottom-24 -right-12 h-64 w-64 rounded-full border border-white/70"
                aria-hidden="true"
            ></div>

            <div
                class="absolute right-24 top-12 h-10 w-10 rounded-full border border-white/80"
                aria-hidden="true"
            ></div>


            <div class="relative mx-auto max-w-3xl">

                <span
                    class="text-xs font-extrabold uppercase tracking-[.22em] text-kate-dark"
                >
                    ABIERTA A NUEVOS COMIENZOS
                </span>

                <h2
                    class="mt-5 text-[clamp(2.5rem,5vw,4.8rem)] font-extrabold leading-[.95] tracking-[-.06em]"
                >
                    Hay comienzos que 

                    <span class="block text-white">
                        llegan sin avisar
                    </span>
                </h2>

                <p
                    class="mx-auto mt-6 max-w-xl text-base leading-7 text-kate-gray sm:text-lg"
                >
                    Si estás buscando alguien con ganas de crear,
                    cuéntame qué te gustaría comenzar.
                </p>


                <div class="mt-8">

                    <a
                        href="#formulario-contacto"
                        class="group inline-flex items-center justify-center gap-3 rounded-full border border-kate-dark bg-kate-dark px-7 py-4 font-bold text-white transition duration-300 hover:-translate-y-1 hover:border-kate-pink-strong hover:bg-kate-pink-strong hover:text-kate-dark hover:shadow-[0_18px_45px_rgba(244,91,165,.25)]"
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
========================================================== --}}

<script>
    document
        .getElementById('formulario-whatsapp')
        .addEventListener('submit', function (event) {

            event.preventDefault();

            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const asunto = document.getElementById('asunto').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();

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
                `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(textoWhatsApp)}`;

            window.open(urlWhatsApp, '_blank', 'noopener,noreferrer');
        });
</script>

@endsection