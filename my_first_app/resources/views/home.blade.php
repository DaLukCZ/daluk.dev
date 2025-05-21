@extends('layouts.app')

@section('content')
    <nav class="bg-blue-600 text-white py-4 px-6 flex justify-between items-center shadow-md fixed w-full z-10 top-0">
        <div class="text-2xl font-bold text-white"></div>
        <ul class="flex space-x-6 text-sm items-center">
            <li><a href="#technologie" class="hover:text-cyan-300">Technologie</a></li>
            <li><a href="#projekty" class="hover:text-cyan-300">Projekty</a></li>
            <li><a href="#kontakt" class="hover:text-cyan-300">Kontakt</a></li>
        </ul>
    </nav>

    <div class="pt-24"></div>

    <section class="text-center py-20 px-4">
        {{-- Jméno --}}
        <div class="text-cyan-500 text-4xl font-bold mb-6 flex items-center justify-center space-x-3">
            <span>Lukáš Šmach</span>
        </div>

        {{-- Fotka a text --}}
        <div class="flex flex-col items-center space-y-4 mb-6">
            <img src="{{ asset('storage\profile.png') }}" alt="profile"
                class="w-48 h-48 object-cover rounded-full shadow-lg border-4 border-[#5A7D94]">

            <p class="max-w-xl text-base text-slate-700 dark:text-gray-300 leading-relaxed text-center">
                Zaměřuji se na vývoj webových, mobilních a desktopových aplikací. Důraz kladu na funkčnost, použitelnost,
                vizuální kvalitu a čistotu kódu. Navrhuji databáze i uživatelská rozhraní. Zajímá mě profesionální vývojový
                proces –
                Git, code review, testování, týmová spolupráce a efektivní workflow. Vyhledávám projekty, které mají smysl,
                a
                prostředí, kde mohu růst a přispívat kvalitním řešením.
            </p>

        </div>

        {{-- Sociální sítě --}}
        <div class="flex justify-center space-x-6 text-xl">
            <a href="https://github.com/DaLukCZ" target="_blank" class="text-blue-100 hover:text-cyan-300 transition">
                <x-fab-github class="w-6 h-6" />
            </a>
            <a href="https://www.instagram.com/smach_lukas/" target="_blank"
                class="text-blue-100 hover:text-cyan-300 transition">
                <x-fab-instagram class="w-6 h-6" />
            </a>
            <a href="https://www.facebook.com/profile.php?id=100007926707207" target="_blank"
                class="text-blue-100 hover:text-cyan-300 transition">
                <x-fab-facebook class="w-6 h-6" />
            </a>
            <a href="https://www.discordapp.com/users/553698795704156169" target="_blank"
                class="text-blue-100 hover:text-cyan-300 transition">
                <x-fab-discord class="w-6 h-6" />
            </a>
        </div>

    </section>


    <section id="technologie" class="py-16 px-6 bg-white dark:bg-slate-800 text-center">
        <h2 class="text-3xl font-bold text-cyan-500 mb-6">Technologie</h2>
        <div class="flex flex-wrap justify-center gap-4 text-slate-700 dark:text-gray-300">
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">C#</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">.NET</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">Dart</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">Flutter</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">PHP</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">Laravel</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">MySQL</span>
            <span class="bg-blue-100 dark:bg-slate-700 px-4 py-2 rounded">Git</span>
        </div>
    </section>

    <section id="projekty" class="py-16 px-6 bg-slate-100 dark:bg-slate-900 text-center">
        <h2 class="text-3xl font-bold text-cyan-500 mb-6">Vytvořené projekty</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-slate-800 p-4 rounded shadow hover:scale-105 transition">
                <h3 class="text-xl font-semibold mb-2">Projekt 1</h3>
                <p class="text-slate-600 dark:text-gray-400 text-sm">Popis projektu bude dynamický (z adminu).</p>
            </div>
            <div class="bg-white dark:bg-slate-800 p-4 rounded shadow hover:scale-105 transition">
                <h3 class="text-xl font-semibold mb-2">Projekt 2</h3>
                <p class="text-slate-600 dark:text-gray-400 text-sm">Popis projektu bude dynamický (z adminu).</p>
            </div>
        </div>
    </section>

    <section id="kontakt" class="py-16 px-6 bg-white dark:bg-slate-800 text-center">
        <h2 class="text-3xl font-bold text-cyan-500 mb-6">Kontaktuj mě</h2>
        <p class="mb-4 text-slate-700 dark:text-gray-300">Máš projekt nebo dotaz? Ozvi se mi!</p>
        <a href="mailto:lukas@example.com" class="bg-cyan-500 text-white px-6 py-3 rounded hover:bg-cyan-600 transition">
            Napsat e-mail
        </a>
    </section>

    <footer class="text-center py-6 text-sm text-slate-600 dark:text-gray-400 bg-white dark:bg-slate-900">
        © {{ now()->year }} smach.dev
    </footer>
@endsection
