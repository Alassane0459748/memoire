<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscrivez-vous sur Terra+ pour accéder à nos services exclusifs">
    <title>Localite</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="{{ asset('2.ico') }}">

    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" async>

    <!-- Vite Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<x-layout title="Tableau de bord">
    {{-- Nav-side --}}
    <nav class="fixed top-30 left-0 h-full w-64 bg-emerald-900 text-white p-4 space-y-4">
        <h2 class="text-xl font-bold mb-4">Navigation</h2>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('maire.index') }}" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-emerald-300">
                    <i class="fas fa-tachometer-alt mr-2"></i> Tableau de Bord
                </a>
            </li>
            <li>
                <a href="{{ route('profil') }}" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-yellow-500">
                    <i class="fas fa-user mr-2"></i> Mes Informations
                </a>
            </li>
            <li>
                <a href="{{ route('parcelle') }}" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-yellow-500">
                    <i class="fas fa-tree mr-2"></i> Voir les parcelles
                </a>
            </li>
            <li>
                <a href="{{ route('demande') }}" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-yellow-500">
                    <i class="fas fa-folder-open mr-2"></i> Voir les demandes
                </a>
            </li>
            <li>
                <a href="{{ route('localite') }}" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-yellow-500">
                    <i class="fas fa-map-marker-alt mr-2"></i> Ajouter Localite
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-yellow-500">
                    <i class="fas fa-map mr-2"></i> Creer Lotissement
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center px-4 py-2 rounded transition duration-300 hover:bg-yellow-500">
                    <i class="fas fa-life-ring mr-2"></i> Support
                </a>
            </li>
        </ul>
    </nav>

    <main class="ml-64 flex items-center justify-center min-h-screen px-6 sm:px-10 lg:px-20">
        <div class="w-full max-w-2xl bg-white rounded-lg shadow-md p-8 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Ajouter Localite</h2>

            <!-- Registration Form -->
            <form action='{{ route('index') }}' method="POST" class="flex flex-col"
                aria-label="Formulaire d'inscription" novalidate>
                @csrf

                <!-- Name Section -->
                <div class="mb-4 relative">
                    <div class="w-full sm:w-1/2 px-2 mb-4 relative">
                        <label for="nom" class="block text-gray-700 mb-2">Nom</label>
                        <input type="text" id="prenom" name="prenom" value="{{ old('nom') }}"
                            @class([
                                'border-gray-400',
                                'border',
                                'py-2',
                                'px-4',
                                'rounded-lg',
                                'w-full',
                                'focus:ring',
                                'focus:ring-emerald-300',
                                'transition-colors',
                                'duration-300',
                                'ease-in-out',
                                'pr-10' => $errors->has('prenom'),
                                'border-red-500' => $errors->has('prenom'),
                            ]) required autocomplete="given-name">
                        @if ($errors->has('prenom'))
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </span>
                        @endif
                        @error('prenom')
                            <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>



                <!-- Email Section -->
                <div class="mb-4 relative">
                    <label for="population" class="block text-gray-700 mb-2">Population</label>
                    <input type="pop" id="population" name="population" value="{{ old('population') }}"
                        @class([
                            'border-gray-400',
                            'border',
                            'py-2',
                            'px-4',
                            'rounded-lg',
                            'w-full',
                            'focus:ring',
                            'focus:ring-emerald-300',
                            'transition-colors',
                            'duration-300',
                            'ease-in-out',
                            'pr-10' => $errors->has('email'),
                            'border-red-500' => $errors->has('email'),
                        ]) pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    @if ($errors->has('email'))
                        <span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-exclamation-circle text-red-500"></i>
                        </span>
                    @endif
                    @error('email')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Section -->
                <div class="mb-4 relative">
                    <label for="superficie" class="block text-gray-700 mb-2">superficie</label>
                    <input type="sup" id="superficie" name="superficie" @class([
                        'border-gray-400',
                        'border',
                        'py-2',
                        'px-4',
                        'rounded-lg',
                        'w-full',
                        'focus:ring',
                        'focus:ring-emerald-300',
                        'transition-colors',
                        'duration-300',
                        'ease-in-out',
                        'pr-10' => $errors->has('password'),
                        'border-red-500' => $errors->has('password'),
                    ]) required
                        autocomplete="new-password" minlength="8">
                    @if ($errors->has('password'))
                        <span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <i class="fas fa-exclamation-circle text-red-500"></i>
                        </span>
                    @endif
                    @error('password')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Additional Information Section -->
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full sm:w-1/2 px-2 mb-4 relative">
                        <label for="datecreation" class="block text-gray-700 mb-2">Date de creation</label>
                        <input type="date" id="datecreation" name="datecreation" value="{{ old('datecreation') }}"
                            @class([
                                'border-gray-400',
                                'border',
                                'py-2',
                                'px-4',
                                'rounded-lg',
                                'w-full',
                                'focus:ring',
                                'focus:ring-emerald-300',
                                'transition-colors',
                                'duration-300',
                                'ease-in-out',
                                'pr-10' => $errors->has('profession'),
                                'border-red-500' => $errors->has('profession'),
                            ]) autocomplete="organization-title">
                        @if ($errors->has('profession'))
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </span>
                        @endif
                        @error('profession')
                            <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                      <!-- Additional Information Section -->
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full sm:w-2/2 px-2 mb-4 relative">
                        <label for="datemisajour" class="block text-gray-700 mb-2">Date dernier Mise a jour</label>
                        <input type="date" id="datemisajour" name="datemisajour" value="{{ old('datemisajour') }}"
                            @class([
                                'border-gray-400',
                                'border',
                                'py-2',
                                'px-4',
                                'rounded-lg',
                                'w-full',
                                'focus:ring',
                                'focus:ring-emerald-300',
                                'transition-colors',
                                'duration-300',
                                'ease-in-out',
                                'pr-10' => $errors->has('profession'),
                                'border-red-500' => $errors->has('profession'),
                            ]) autocomplete="organization-title">
                        @if ($errors->has('profession'))
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-exclamation-circle text-red-500"></i>
                            </span>
                        @endif
                        @error('profession')
                            <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class=
                        "bg-emerald-600 text-white hover:bg-emerald-500 font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-105">
                         Créer une Localite
                    </button>
</x-layout>
