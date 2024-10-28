<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tablero de Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("¡Has iniciado sesión correctamente!") }}
                </div>

                <!-- Descripción sobre la asignatura, la universidad y los datos académicos -->
                <div class="p-6 text-gray-900 mt-6">
                    <h3 class="font-bold text-lg">{{ __('Descripción Académica') }}</h3>
                    <p><strong>{{ __('Asignatura:') }}</strong> Implementación de aplicaciones híbridas y multiplataforma</p>
                    <p><strong>{{ __('Universidad:') }}</strong> Universidad Luterana Salvadoreña</p>
                    
                    <h3 class="font-bold text-lg mt-4">{{ __('Datos Académicos') }}</h3>
                    <p><strong>{{ __('Carnet:') }}</strong> GO23433</p>
                    <p><strong>{{ __('Alumno/a:') }}</strong> María Cristina Gómez Ortíz</p>
                    <p><strong>{{ __('Carrera:') }}</strong> Técnico en Desarrollo de Aplicaciones Informáticas</p>
                    <p><strong>{{ __('Convenio:') }}</strong> Técnicos / inglés/psicología 2022/30-16-40-15-5</p>
                    <p><strong>{{ __('Profesión:') }}</strong> Técnico en Desarrollo de Aplicaciones</p>
                    <p><strong>{{ __('Trabaja Actualmente:') }}</strong> Sí</p>
                    <p><strong>{{ __('Correo Personal:') }}</strong> mariatitina12@gmail.com</p>
                    <p><strong>{{ __('DUI:') }}</strong> 06505566-2</p>
                    <p><strong>{{ __('Fecha de Nacimiento:') }}</strong> 2003-05-16</p>
                    <p><strong>{{ __('Edad:') }}</strong> 21 Años</p>
                    <p><strong>{{ __('Plan de Estudio:') }}</strong> 2023-2024</p>
                    <p><strong>{{ __('Departamento:') }}</strong> San Salvador</p>
                    <p><strong>{{ __('Municipio:') }}</strong> San Salvador</p>
                    <p><strong>{{ __('Dirección:') }}</strong> San Salvador, 75 av norte residencial villa valencia</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

