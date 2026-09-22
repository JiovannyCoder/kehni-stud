<nav class="border-b border-slate-200 bg-white sticky top-0">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            class="flex items-center gap-2"
        >
            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-slate-900 text-sm font-bold text-white">
                K
            </div>

            <span class="text-lg font-semibold tracking-tight text-slate-900">
                KehniStud
            </span>
        </a>

        {{-- Navigation --}}
        <div class="flex items-center gap-6">

            {{-- Accueil --}}
            <a
                href="{{ route('home') }}"
                class="text-sm font-medium text-slate-600 transition-colors hover:text-slate-900"
            >
                Accueil
            </a>

            {{-- CTA --}}
            <a
                href="{{ route('public.student.registration') }}"
                class="inline-flex items-center justify-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white shadow-sm transition-colors hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2"
            >
                Inscription Étudiant
            </a>

        </div>
    </div>
</nav>
