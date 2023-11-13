
<x-app-layout>
    
    <x-slot name="header">
        

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            @method('POST')  <!-- Opcional, puedes usar DELETE en lugar de POST -->
            <button type="submit">Cerrar Sesión</button>
        </form>
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    
                    @auth
                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Eliminar Cuenta
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    
    <x-product-view />
</x-app-layout>
