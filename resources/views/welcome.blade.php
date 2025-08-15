<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Levig</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-lexend min-h-dvh grid-template-rows-[auto_1fr_auto] box-border p-0 m-0">
    <header class="flex flex-col items-center ">
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
            class="relative flex flex-col items-center justify-between w-full bg-gradient-to-b from-tertiary to-secondary-text rounded-t-3xl h-[89vh]">
            <h2 class="w-2/3 p-16 font-bold text-center text-8xl text-secondary-text">
                Protección integral siempre cerca de ti
            </h2>
            <p class="w-2/4 text-lg text-center text-secondary-text">
                Seguridad privada profesional para empresas y residencias. Tecnología de punta y personal
                altamente capacitado para tu tranquilidad.
            </p>
            <article class="flex flex-row items-end justify-center w-full gap-4">
                <div class="w-1/6 text-left h-72 rounded-3xl bg-secondary-text">
                    <h2 class="px-8 py-4 text-3xl text-primary-text">Confianza garantizada</h2>
                    <p class="px-8 text-base text-quinary">
                        Desde el 2023 brindando seguridad a clientes corporativos y particulares en todo Leon Guanajuato.
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
        <section class="items-center justify-center w-full min-h-screen ">
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
        <section class="flex flex-col items-center justify-around w-full max-h-screen">
            <div class="w-full px-4">
                <h2 class="p-8 text-5xl text-center text-primary-text">¿Por qué Levig?</h2>
                <picture class="flex flex-row w-full gap-4 py-8">
                    <div class="w-1/2 max-h-[30rem] items-center justify-center flex">
                        <img src="{{ asset('icons/Levig-vertical.svg') }}" alt=""
                            class="h-full rounded-3xl">
                    </div>
                    <div class="w-1/2 max-h-[30rem] items-center justify-center flex">
                        <img src="{{ asset('images/equipo.png') }}" alt=""
                            class="h-full rounded-3xl ">
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
    </main>
    <footer></footer>
</body>

</html>
