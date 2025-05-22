@extends('layouts.app')

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    {{-- Navbar --}}
    <nav class="w-full bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-8 py-4 flex items-center justify-between">
            <div class="text-xl font-semibold text-[#00BFCF] hover:text-[#20E0D1] transition-colors duration-300">
                Lukáš Šmach
            </div>

            <div class="space-x-6 hidden md:flex text-gray-700">
                <a href="#projekty" class="hover:text-[#20E0D1] transition-colors duration-300">Projekty</a>
                <a href="#kontakt" class="hover:text-[#20E0D1] transition-colors duration-300">Kontakt</a>
            </div>
        </div>
    </nav>

    {{-- Hero sekce --}}
    <section
        class="text-left px-8 bg-gradient-to-r from-[#00BFCF] to-[#005f73] text-white min-h-screen flex flex-col justify-center items-start opacity-0">
        <h1 class="text-4xl font-bold mb-4 drop-shadow-md">
            Full-stack Web & Desktop & Mobile<br>
            "Aplikace, které dávají smysl"
        </h1>
        <p class="max-w-xl text-base text-white/90 leading-relaxed mb-6">
            Vytvářím aplikace, které lidem skutečně pomáhají. Chci, aby software nejen fungoval, ale i skvěle vypadal a
            snadno se používal.
            Každý projekt beru jako výzvu navrhnout řešení, které sedne konkrétnímu člověku. Poslouchám, ptám se a tvořím s
            jasným cílem.
            Učím se rychle a nebojím se zodpovědnosti. Baví mě týmová práce i samostatný vývoj.
        </p>
    </section>

    {{-- Technologie --}}
    <section class="py-24 px-12 bg-gradient-to-r from-[#e0f7fa] to-[#b2ebf2] text-center text-gray-800 opacity-0">
        <h2 class="text-5xl font-bold text-[#007acc] mb-16">Technologie</h2>
        <div class="swiper tech-swiper max-w-7xl mx-auto select-none">
            <div class="swiper-wrapper">
                @foreach (['c_sharp', 'dotnet', 'java', 'dart', 'flutter', 'php', 'laravel', 'mysql', 'html-5', 'bootstrap', 'tailwind'] as $tech)
                    <div class="swiper-slide flex justify-center items-center rounded-2xl">
                        <div
                            class="w-32 h-32 sm:w-36 sm:h-36 bg-white rounded-2xl flex items-center justify-center hover:scale-110 hover:bg-[#e0fafa] transition-all duration-300 border border-[#00BFCF]/20 shadow-md hover:shadow-xl">
                            <img src="{{ asset('storage/icons/technologie/' . $tech . '.svg') }}" alt="{{ $tech }}"
                                class="w-24 h-24 sm:w-32 sm:h-32 object-contain">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Projekty --}}
    @php
        $projekty = [
            [
                'title' => 'Výuková desktopová aplikace – C#, .NET, Windows Forms',
                'description' =>
                    'Tato desktopová aplikace byla vytvořena jako školní projekt v rámci SOČ ve 2. ročníku SŠ. Je určena pro učitele a slouží k vytváření a správě vlastních výukových aktivit a testů. Zaměřil jsem se na jednoduché ovládání, přehledný design a robustní správu dat. Využil jsem technologii Windows Forms a databázové operace v .NET prostředí. Projekt měl za cíl nahradit papírové testy a učební pomůcky moderní interaktivní formou.',
                'media' => 'https://www.youtube.com/watch?v=E1RQkOIp_go',
                'media_type' => 'video',
                'bg' => 'bg-gradient-to-br from-[#e0f7fa] to-[#b2ebf2]',
                'textColor' => 'text-gray-900',
            ],
            [
                'title' => 'Mobilní aplikace pro správu techniky – Flutter, Laravel',
                'description' =>
                    'Aplikace pro správu zvukové techniky vyvinutá pro kulturní organizátory a technické týmy. Umožňuje evidenci techniky (např. mikrofony, mixážní pulty, kabeláž), sledování jejich stavu (funkční, v opravě), polohy a historie zapůjčení. Vývoj probíhal ve Flutteru pro multiplatformní použití (Android/iOS) a Laravel backend řeší API, autentizaci a správu dat. Součástí je offline režim, synchronizace, QR skenování i jednoduché administrační rozhraní. Projekt vznikl jako kombinace SOČ a maturitní práce ve 4. ročníku a byl obhájen s výborným hodnocením.',
                'media' => 'https://youtu.be/ziU4m45lUqE',
                'media_type' => 'video',
                'bg' => 'bg-gradient-to-br from-[#004d40] to-[#00251a]',
                'textColor' => 'text-white',
            ],
            [
                'title' => 'Web pro stavební firmu – PHP, Laravel, MySQL',
                'description' =>
                    'Komplexní webový systém vytvořený pro malou stavební firmu. Cílem bylo zlepšit firemní prezentaci, digitalizovat evidenci referenčních projektů a zjednodušit komunikaci se zákazníky. Web obsahuje dynamickou galerii realizací, kontaktní formuláře, stránku s nabízenými službami a administrační část pro správu obsahu. Backend je postaven na Laravel frameworku s MySQL databází. Součástí práce byl UX/UI návrh, responzivní design a optimalizace výkonu. Web je aktivně využíván klientem a otevřený dalšímu rozšiřování podle potřeby.',
                'media' => 'https://franver.markman.cz/',
                'media_type' => 'web',
                'bg' => 'bg-gradient-to-br from-[#cceeff] to-[#e0f7ff]',
                'textColor' => 'text-gray-900',
            ],
        ];
    @endphp

    @foreach ($projekty as $index => $projekt)
        <section id="projekt-{{ $index }}"
            class="min-h-screen flex flex-col md:flex-row {{ $index % 2 == 1 ? 'md:flex-row-reverse' : '' }} items-center justify-center px-6 md:px-16 {{ $projekt['bg'] }} {{ $projekt['textColor'] }} transition-opacity duration-700 ease-in-out opacity-0">

            <div class="w-full md:w-1/2 p-6 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">{{ $projekt['title'] }}</h2>
                <p class="text-base leading-relaxed max-w-xl mx-auto md:mx-0 mb-4">
                    {{ $projekt['description'] }}
                </p>
                <a href="{{ $projekt['media'] }}" target="_blank"
                    class="underline font-medium {{ $projekt['textColor'] === 'text-white' ? 'text-[#80DEEA]' : 'text-[#007acc]' }}">
                    {{ $projekt['media_type'] === 'video' ? 'Zobrazit video' : 'Navštívit web' }}
                </a>
            </div>

            <div class="w-full md:w-1/2 p-6 flex justify-center items-center">
                <div
                    class="aspect-video w-full max-w-md bg-black/10 flex items-center justify-center rounded-lg shadow-inner">
                    <a href="{{ $projekt['media'] }}" target="_blank" class="hover:underline text-inherit">
                        {{ $projekt['media_type'] === 'video' ? 'Video ukázka' : 'Náhled webu' }}
                    </a>
                </div>
            </div>
        </section>
    @endforeach

    {{-- Kontakt --}}
    <section id="kontakt"
        class="min-h-screen px-6 bg-gradient-to-br from-[#e0f7ff] to-[#cfeffd] text-center flex flex-col justify-center items-center text-gray-800 opacity-0">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/profile.png') }}" alt="profile"
                class="w-40 h-40 object-cover rounded-full shadow-lg border-4 border-[#00BFCF]">
        </div>

        <div class="flex justify-center space-x-6 text-xl py-2">
            <a href="https://github.com/DaLukCZ" target="_blank" class="text-[#007acc] hover:text-[#00BFCF] transition">
                <x-fab-github class="w-6 h-6" />
            </a>
            <a href="https://www.instagram.com/smach_lukas/" target="_blank"
                class="text-[#007acc] hover:text-[#00BFCF] transition">
                <x-fab-instagram class="w-6 h-6" />
            </a>
            <a href="https://www.facebook.com/profile.php?id=100007926707207" target="_blank"
                class="text-[#007acc] hover:text-[#00BFCF] transition">
                <x-fab-facebook class="w-6 h-6" />
            </a>
            <a href="https://www.discordapp.com/users/553698795704156169" target="_blank"
                class="text-[#007acc] hover:text-[#00BFCF] transition">
                <x-fab-discord class="w-6 h-6" />
            </a>
        </div>

        <p class="text-lg mb-2">Máš projekt nebo dotaz? Ozvi se mi!</p>
        <a href="mailto:lukas.smach@seznam.cz" class="text-[#009FFF] text-lg hover:underline">
            lukas.smach@seznam.cz
        </a>
    </section>

    {{-- Footer --}}
    <footer class="text-center py-6 text-sm text-white bg-gradient-to-r from-[#007acc] to-[#00b5e5]">
        © {{ now()->year }} smach.dev
    </footer>

    {{-- Scroll animation --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll("section");

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animate-fadeIn");
                    }
                });
            }, {
                threshold: 0.1
            });

            sections.forEach(section => {
                section.classList.add("opacity-0");
                observer.observe(section);
            });
        });
    </script>
@endsection
