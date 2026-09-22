<div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8 mx-auto max-w-3xl">
    <div class="mx-auto max-w-3xl">

        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-semibold tracking-tight text-slate-900">
                Inscription étudiant
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Remplissez les informations ci-dessous pour enregistrer votre inscription.
            </p>
        </div>

        {{-- Success --}}
        @if (session('success'))
            <div
                class="mb-6 flex items-start gap-3 rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-700">
                <svg class="mt-0.5 h-5 w-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16Zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.172 7.707 8.879a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l3-3Z"
                        clip-rule="evenodd" />
                </svg>

                <div>
                    <p class="font-medium">Inscription enregistrée</p>
                    <p class="mt-1 text-emerald-600">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        @endif

        {{-- Form --}}
        <form wire:submit="submit" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

            {{-- Informations personnelles --}}
            <div class="border-b border-slate-200 p-6 sm:p-8">
                <div class="mb-6">
                    <h2 class="text-base font-semibold text-slate-900">
                        Informations personnelles
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Renseignez les informations personnelles de l'étudiant.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                    {{-- Prénom --}}
                    <div>
                        <label for="first_name" class="mb-2 block text-sm font-medium text-slate-900">
                            Prénom
                            <span class="text-red-500">*</span>
                        </label>

                        <input wire:model="data.first_name" id="first_name" type="text" autocomplete="given-name"
                            placeholder="Jean"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">

                        @error('data.first_name')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nom --}}
                    <div>
                        <label for="last_name" class="mb-2 block text-sm font-medium text-slate-900">
                            Nom
                            <span class="text-red-500">*</span>
                        </label>

                        <input wire:model="data.last_name" id="last_name" type="text" autocomplete="family-name"
                            placeholder="Dupont"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">

                        @error('data.last_name')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Numéro étudiant --}}
                    <div>
                        <label for="student_number" class="mb-2 block text-sm font-medium text-slate-900">
                            Numéro étudiant
                            <span class="text-red-500">*</span>
                        </label>

                        <input wire:model="data.student_number" id="student_number" type="text"
                            placeholder="ETU-2026-001"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">

                        @error('data.student_number')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-slate-900">
                            Adresse e-mail
                        </label>

                        <input wire:model="data.email" id="email" type="email" autocomplete="email"
                            placeholder="jean.dupont@example.com"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">

                        @error('data.email')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Téléphone --}}
                    <div class="sm:col-span-2">
                        <label for="phone" class="mb-2 block text-sm font-medium text-slate-900">
                            Téléphone
                        </label>

                        <input wire:model="data.phone" id="phone" type="tel" autocomplete="tel"
                            placeholder="+261 34 00 000 00"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">

                        @error('data.phone')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Inscription --}}
            <div class="p-6 sm:p-8">
                <div class="mb-6">
                    <h2 class="text-base font-semibold text-slate-900">
                        Informations d'inscription
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Sélectionnez l'année académique et la filière de l'étudiant.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">

                    {{-- Année académique --}}
                    <div>
                        <label for="academic_year_id" class="mb-2 block text-sm font-medium text-slate-900">
                            Année académique
                            <span class="text-red-500">*</span>
                        </label>

                        <select wire:model="data.academic_year_id" id="academic_year_id"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">
                            <option value="">Sélectionnez une année</option>

                            @foreach ($academicYears as $academicYear)
                                <option value="{{ $academicYear->id }}">
                                    {{ $academicYear->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('data.academic_year_id')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Filière --}}
                    <div>
                        <label for="field_id" class="mb-2 block text-sm font-medium text-slate-900">
                            Filière
                            <span class="text-red-500">*</span>
                        </label>

                        <select wire:model="data.field_id" id="field_id"
                            class="block w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-900 focus:ring-2 focus:ring-slate-900/10">
                            <option value="">Sélectionnez une filière</option>

                            @foreach ($fields as $field)
                                <option value="{{ $field->id }}">
                                    {{ $field->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('data.field_id')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div class="flex items-center justify-end gap-3 border-t border-slate-200 bg-slate-50 px-6 py-4 sm:px-8">

                <button type="submit" wire:loading.attr="disabled"
                    class="inline-flex items-center justify-center rounded-md bg-slate-900 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                    <svg wire:loading wire:target="submit" class="mr-2 h-4 w-4 animate-spin" viewBox="0 0 24 24"
                        fill="none">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4" />
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4Z" />
                    </svg>

                    <span wire:loading.remove wire:target="submit">
                        S'inscrire
                    </span>

                    <span wire:loading wire:target="submit">
                        Enregistrement...
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
