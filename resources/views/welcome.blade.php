<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="En LEVIG Seguridad Privada brindamos guardias de seguridad certificados en León, Guanajuato, con permisos municipal y estatal. Solicite informes con confianza.">
    <title>@yield('title', 'Levig')</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-lexend min-h-dvh grid-template-rows-[auto_1fr_auto] box-border p-0 m-0">
    <header class="flex flex-col items-center">
        <nav class="z-10 flex flex-row items-center justify-around w-full p-2 bg-secondary-text">
            <a href="" aria-label="Ir a la página de inicio">
                <img src="{{ asset('icons/Levig-horizontal.svg') }}" alt="" class="w-[350px] h-[75px]">
            </a>
            <ul class="flex flex-row gap-4 list-none">
                <li>
                    <a href="" class="text-base text-none text-primary-text">Nosotros</a>
                </li>
                <li>
                    <a href="" class="text-base text-none text-primary-text ">Servicios</a>
                </li>
                <li>
                    <a href="" class="text-base text-none text-primary-text">Clientes</a>
                </li>
                <li>
                    <a href="" class="text-base text-none text-primary-text">Permisos</a>
                </li>
            </ul>
            <button class="p-4 m-4 text-base cursor-pointer rounded-3xl bg-secondary">
                Cotizar
            </button>
        </nav>
    </header>
    <main>
        <section
            class="relative flex flex-col items-center justify-between w-full bg-gradient-to-b from-tertiary to-secondary-text h-[89vh] rounded-t-[45px]">
            <h2 class="w-2/3 p-16 font-bold text-center text-8xl text-secondary-text">
                Tu seguridad es nuestra prioridad
            </h2>
            <p class="w-2/4 text-lg text-center text-secondary-text">
                Seguridad privada profesional para empresas y residencias. Tecnología de punta y personal
                altamente capacitado para tu tranquilidad.
            </p>
            <article class="flex flex-row items-end justify-center w-full gap-4">
                <div class="w-1/6 text-left h-72 rounded-3xl bg-secondary-text">
                    <h2 class="px-8 py-4 text-3xl text-primary-text">Confianza garantizada</h2>
                    <p class="px-8 text-base text-quinary">
                        Desde el 2023 brindando seguridad a clientes corporativos y particulares en todo Leon
                        Guanajuato.
                    </p>
                </div>
                <div class="w-1/6 text-left h-72 rounded-3xl bg-secondary-text">
                    <h2 class="px-8 py-4 text-3xl text-primary-text">Personal certificado</h2>
                    <p class="px-8 text-base text-quinary">
                        Guardias capacitados con formación continua y protocolos internacionales de protección.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/img-01.png') }}" alt="Levig Logo"
                        class="w-[460px] h-[340px] rounded-3xl object-cover">
                </div>
                <div class="w-1/6 text-left h-72 rounded-3xl bg-secondary-text">
                    <h2 class="px-8 py-4 text-3xl text-primary-text">Cumplimiento legal</h2>
                    <p class="px-8 text-base text-quinary">
                        Más de 2 años de experiencia brindando seguridad a clientes corporativos y particulares en todo
                        el país.
                    </p>
                </div>
                <div class="w-1/6 text-left h-72 rounded-3xl bg-secondary-text">
                    <h2 class="px-8 py-4 text-3xl text-primary-text">Tecnología avanzada</h2>
                    <p class="px-8 text-base text-quinary">
                        Sistemas de vigilancia, control de acceso y monitoreo 24/7 con tecnología de última generación.
                    </p>
                </div>
            </article>
        </section>
        <section class="items-center justify-center w-full min-h-screen">
            <h3 class="p-12 m-12 text-5xl text-left text-primary-text">Algunos de nuestros clientes</h3>
            <article class="flex flex-row items-center justify-center w-full px-12">
                <div class="flex flex-col w-1/3 m-4 h-1/3">
                    <img src="{{ asset('images/clientes.webp') }}" alt="Client 1"
                        class="block w-full shadow-2xl h rounded-3xl">
                    <h4 class="px-2 py-4 text-3xl font-medium">Capellania Residencial</h4>
                    <p class="px-2 py-2 text-base">
                        Capellanía Residencial representa el estándar de seguridad y comunidad con acceso controlado
                    </p>
                </div>
                <div class="flex flex-col w-1/3 m-4">
                    <img src="{{ asset('images/clientes-02.jpg') }}" alt="Client 1"
                        class="block w-full shadow-2xl h rounded-3xl">
                    <h4 class="px-2 py-4 text-3xl font-medium">Quinta los Naranjos</h4>
                    <p class="px-2 py-2 text-base">
                        Levig integra tecnología, prevención y respuesta ágil para garantizar la tranquilidad de sus
                        residentes
                    </p>
                </div>
                <div class="flex flex-col w-1/3 m-4">
                    <img src="{{ asset('images/clientes-03.jpg') }}" alt="Client 1"
                        class="block w-full shadow-2xl h rounded-3xl">
                    <h4 class="px-2 py-4 text-3xl font-medium">Residencial Azahares de la India</h4>
                    <p class="px-2 py-2 text-base">
                        Gracias a su acceso controlado, caseta de vigilancia, y zonas comunes seguras.
                    </p>
                </div>
            </article>
        </section>
        <section class="flex flex-col items-center justify-around w-full min-h-screen">
            <div class="w-full px-4">
                <h2 class="p-8 text-5xl text-center text-primary-text">¿Por qué Levig?</h2>
                <picture class="flex flex-row w-full gap-4 py-8">
                    <div class="w-1/2 max-h-[30rem] items-center justify-center flex">
                        <img src="{{ asset('images/equipo-2.jpeg') }}" alt="" class="h-full rounded-3xl">
                    </div>
                    <div class="w-1/2 max-h-[30rem] items-center justify-center flex">
                        <img src="{{ asset('images/equipo.png') }}" alt="" class="h-full rounded-3xl ">
                    </div>
                </picture>
                <article class="flex flex-row justify-center w-full gap-4 py-8">
                    <div
                        class="flex flex-col w-1/4 h-56 px-4 py-4 bg-gradient-to-t from-primary to-secondary-text rounded-3xl">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="p-2 text-xl font-semibold text-primary-text">
                            Atención personalizada y respuesta inmediata
                        </h2>
                        <p class="p-2 text-base text-primary-text">
                            Nuestro equipo administrativo trabaja para ofrecer soluciones rápidas y específicas de cada
                            cliente.
                        </p>
                    </div>
                    <div
                        class="flex flex-col w-1/4 h-56 px-4 py-4 bg-gradient-to-t from-primary to-secondary-text rounded-3xl">
                        <div class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z" />
                            </svg>
                        </div>
                        <h2 class="p-2 text-xl font-semibold text-primary-text">
                            Supervisión constante y patrullaje nocturno
                        </h2>
                        <p class="p-2 text-base text-primary-text">
                            Nuestro equipo operativo trabaja de forma coordinada para ofrecer
                            soluciones específicas de cada cliente.
                        </p>
                    </div>
                    <div
                        class="flex flex-col w-1/4 h-56 px-4 py-4 bg-gradient-to-t from-primary to-secondary-text rounded-3xl">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-100 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="p-2 text-xl font-semibold text-primary-text">
                            Procesos de selección estrictos
                        </h2>
                        <p class="p-2 text-base text-primary-text">
                            Contratamos únicamente personal evaluado mediante pruebas psicométricas y antidoping.
                        </p>
                    </div>
                    <div
                        class="flex flex-col w-1/4 h-56 px-4 py-4 bg-gradient-to-t from-primary to-secondary-text rounded-3xl">
                        <div class="flex items-center justify-center w-12 h-12 bg-yellow-100 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-yellow-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h2 class="p-2 text-xl font-semibold text-primary-text">
                            Servicio respaldado por permisos y garantía por escrito
                        </h2>
                        <p class="p-2 text-base text-primary-text">
                            Contamos con todos los registros y permisos municipales, estatales y federales.
                        </p>
                    </div>
                </article>
            </div>
        </section>
        <section class="flex items-center justify-center w-full min-h-screen">
            <div class="flex flex-row h-3/4">
                <article class="flex flex-col w-1/2">
                    <h2 class="px-20 py-4 text-5xl font-medium text-primary-text">
                        Permiso Oficial de Operación
                    </h2>
                    <p class="px-20 py-4 text-xl text-left text-primary-text">
                        En LEVIG Seguridad Privada contamos con permiso municipal y estatal vigente que nos
                        acredita como una empresa legalmente autorizada para brindar servicios de seguridad privada.
                        Esta certificación garantiza que cada servicio que ofrecemos está respaldado por un estricto
                        cumplimiento normativo y la confianza de estar en manos profesionales.
                    </p>
                    <ul class="flex flex-col items-start justify-center">
                        <li
                            class="flex flex-row items-center justify-center gap-4 px-20 py-2 text-lg font-semibold text-quinary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                            </svg>
                            Permisos oficiales:
                            <br>
                            Municipal SSPPC.2024.II.1830/0 y Estatal 1.20.III.15.24.
                        </li>
                        <li
                            class="flex flex-row items-center justify-center gap-4 px-20 py-2 text-lg font-semibold text-quinary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            </svg>
                            Elementos capacitados:
                            <br>
                            Personal entrenado y bajo un proceso de selección riguroso.
                        </li>
                        <li
                            class="flex flex-row items-center justify-center gap-4 px-20 py-2 text-lg font-semibold text-quinary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-ui-checks" viewBox="0 0 16 16">
                                <path
                                    d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                            </svg>
                            Protocolos garantizados:
                            <br>
                            Supervisión constante, bitácoras y control de novedades.
                        </li>
                        <li
                            class="flex flex-row items-center justify-center gap-4 px-20 py-2 text-lg font-semibold text-quinary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                <path
                                    d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg>
                            Confianza y respaldo legal:
                            <br>
                            Servicios con garantía por escrito y facturación disponible.
                        </li>
                    </ul>
                </article>
                <article class="flex flex-col w-1/2 px-20">
                    <img src="{{ asset('images/permiso.jpg') }}" alt="" class="h-[500px] rounded-3xl">
                </article>
            </div>
        </section>
    </main>
    <footer class="w-full h-auto">
        <div
            class="px-6 py-12 bg-gradient-to-b from-secondary-text to-tertiary rounded-b-[45px] min-h-96 flex items-center justify-center">
            <picture class="w-1/4 ">
                <img src="{{ asset('icons/Levig-vertical.svg') }}" alt="Logo pie pagina" class="mim-h-40 mim-w-40">
            </picture>
            <nav aria-label="Footer Navigation" class="flex justify-around w-3/4">
                <div>
                    <h3 class="mb-3 text-xl font-semibold">Servicios</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Seguridad Privada</a></li>
                        <li><a href="#" class="hover:underline">Análisis de Riesgos</a></li>
                        <li><a href="#" class="hover:underline">Supervisión 24/7</a></li>
                        <li><a href="#" class="hover:underline">Patrullaje Nocturno</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-semibold">Nosotros</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Misión</a></li>
                        <li><a href="#" class="hover:underline">Visión</a></li>
                        <li><a href="#" class="hover:underline">Valores</a></li>
                        <li><a href="#" class="hover:underline">Clientes</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-semibold">Recursos</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Avisos y Reglamentos</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-3 text-xl font-semibold">Contáctanos</h3>
                    <ul class="space-y-2 ">
                        <li>
                            <span>
                                Bahía del Salvador 114 A, Col. Paseo de la Castellana, León, Gto. C.P.
                                37549
                            </span>
                        </li>
                        <li>
                            <span>Oficina: 477 331-19-73</span>
                        </li>
                        <li>
                            <span>WhatsApp: 479 218-65-73 / 477 817-93-57</span>
                        </li>
                        <li>
                            <a href="mailto:levigseguridadprivada@gmail.com" class="hover:underline">
                                levigseguridadprivada@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="flex items-center justify-center w-full bg-secondary-text min-h-20">
            <span class="flex items-center justify-center w-1/4">
                © 2025 Levig Seguridad Privada S.A. de C.V.
            </span>
            <ul class="flex items-center justify-center w-3/4 gap-16">
                <li><a href="#" class="hover:underline">Términos</a></li>
                <li><a href="#" class="hover:underline">Privacidad</a></li>
                <li><a href="#" class="hover:underline">Cookies</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
