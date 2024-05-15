<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prueba Fullstack Dev UNBC') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <img src="{{ asset('images/UNBC.png') }}" alt="Descripción de la imagen">
                    <br>                    
                    {{ __("¡¡¡Bienvenido!!!, esta es una prueba para optar al puesto de Dev Fullstack en UNBC.")}}
                    <br>
                    <br>
                    <br>
                    {{ __("Para probar las funcionalidades solicitadas, vaya a la pestaña de 'Admin Panel'.") }}
                    <br>
                    <br>
                    <br>
                    {{ __("También se puede probar las funcionalidades al usuario ingresado en la pestaña 'Profile' desplegándolo en la parte superior derecha.") }}                   
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
