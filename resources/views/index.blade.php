<x-layout>
    <x-slot:title>
        Accueil — KehniStud
    </x-slot>

    {{-- Hero --}}
    <section class="relative overflow-hidden">
        <div class="mx-auto max-w-4xl py-20 text-center sm:py-28">

            {{-- Badge --}}
            <div
                class="mb-6 inline-flex items-center rounded-full border border-slate-200 bg-white px-3 py-1 text-sm text-slate-600 shadow-sm">
                <span class="mr-2 h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                Gestion académique simplifiée
            </div>

            {{-- Title --}}
            <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-6xl">
                La gestion des étudiants,
                <span class="text-slate-500">
                    simplement.
                </span>
            </h1>

            {{-- Description --}}
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                KehniStud est une application de gestion académique pensée pour
                simplifier l'inscription, le suivi et l'organisation des étudiants
                au sein d'un établissement.
            </p>

            {{-- CTA --}}
            <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                <a href="{{ route('public.student.registration') }}"
                    class="inline-flex h-10 items-center justify-center rounded-md bg-slate-900 px-6 text-sm font-medium text-white shadow transition-colors hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2">
                    Je veux m'inscrire
                </a>

                <a href="#features"
                    class="inline-flex h-10 items-center justify-center rounded-md border border-slate-200 bg-white px-6 text-sm font-medium text-slate-700 shadow-sm transition-colors hover:bg-slate-50">
                    Découvrir KehniStud
                </a>
            </div>
        </div>
    </section>


    {{-- Présentation --}}
    <section class="border-y border-slate-200 bg-white">
        <div class="mx-auto max-w-5xl px-4 py-20 sm:px-6 lg:px-8">

            <div class="grid gap-12 md:grid-cols-2 md:items-center">

                <div>
                    <p class="text-sm font-medium text-slate-500">
                        À propos du projet
                    </p>

                    <h2 class="mt-2 text-3xl font-semibold tracking-tight text-slate-900">
                        Un projet académique pensé comme une vraie application.
                    </h2>
                </div>

                <div class="space-y-4 text-sm leading-7 text-slate-600">
                    <p>
                        KehniStud est un projet développé par
                        <span class="font-medium text-slate-900">Kehni</span>,
                        développeur Fullstack Laravel et étudiant en troisième année
                        à la CNTMAD.
                    </p>

                    <p>
                        L'objectif est de concevoir une application moderne permettant
                        de centraliser la gestion des étudiants, des inscriptions,
                        des années académiques et des filières.
                    </p>

                    <p>
                        Le projet est également l'occasion de mettre en pratique une
                        architecture Laravel propre, une interface moderne et une
                        administration complète avec Filament.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- Features --}}
    <section id="features" class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <p class="text-sm font-medium text-slate-500">
                    Fonctionnalités
                </p>

                <h2 class="mt-2 text-3xl font-semibold tracking-tight text-slate-900">
                    Tout ce qu'il faut pour gérer la vie académique.
                </h2>

                <p class="mt-4 text-sm leading-6 text-slate-600">
                    Une interface simple pour les utilisateurs et une administration
                    complète pour gérer les données académiques.
                </p>
            </div>


            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                {{-- Feature 1 --}}
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-900">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Gestion des étudiants
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Centralisez les informations des étudiants et retrouvez
                        facilement leurs données académiques.
                    </p>
                </div>


                {{-- Feature 2 --}}
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-900">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Années académiques
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Organisez les inscriptions par année académique et gardez
                        une vision claire des différentes périodes.
                    </p>
                </div>


                {{-- Feature 3 --}}
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-900">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 10v6" />
                            <path d="M2 10l10-5 10 5-10 5z" />
                            <path d="M6 12v5c3 3 9 3 12 0v-5" />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Filières
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Définissez les différentes filières et associez simplement
                        chaque étudiant à son parcours académique.
                    </p>
                </div>


                {{-- Feature 4 --}}
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-900">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Suivi des inscriptions
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Suivez simplement l'état des inscriptions et gardez
                        le contrôle sur les dossiers étudiants.
                    </p>
                </div>


                {{-- Feature 5 --}}
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-900">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18" />
                            <path d="M9 21V9" />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Administration
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Une interface d'administration centralisée pour gérer
                        efficacement les données de l'application.
                    </p>
                </div>


                {{-- Feature 6 --}}
                <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 text-slate-900">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20" />
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        </svg>
                    </div>

                    <h3 class="mt-5 font-semibold text-slate-900">
                        Pensé pour évoluer
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Une base conçue pour accueillir progressivement de nouvelles
                        fonctionnalités et besoins académiques.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- CTA final --}}
    <section class="border-t border-slate-200 bg-white">
        <div class="mx-auto max-w-3xl px-4 py-20 text-center sm:px-6 lg:px-8">

            <h2 class="text-3xl font-semibold tracking-tight text-slate-900">
                Prêt à commencer ?
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-sm leading-6 text-slate-600">
                Enregistrez un étudiant en quelques instants grâce au formulaire
                d'inscription de KehniStud.
            </p>

            <div class="mt-8">
                <a href="{{ route('public.student.registration') }}"
                    class="inline-flex h-10 items-center justify-center rounded-md bg-slate-900 px-6 text-sm font-medium text-white shadow transition-colors hover:bg-slate-800">
                    Commencer une inscription
                </a>
            </div>

        </div>
    </section>

</x-layout>
