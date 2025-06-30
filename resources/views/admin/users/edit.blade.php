<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=>'Usuarios Totales',
        'url'=> route('admin.users.index'),
    ],
    [
        'name'=>'Editar',
    ]

]">

{{-- Start Plantilla tabla --}}
    <div class="card">
        <form action="{{ route ('admin.users.update', $user)}}" method="POST">
            {{--Debe mandar el tocken csrf--}}
            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"/>
            {{--Nombre--}}
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre
                </x-label>
                <x-input name="name" value="{{ old('name', $user->name) }}" required class="w-full"/>
            </div>
            {{--Email--}}
            <div class="mb-4">
                <x-label class="mb-1">
                    Correo Electrónico
                </x-label>
                <x-input type="email" name="email" value="{{ old('email', $user->email) }}" required class="w-full"/>
            </div>
            {{--Password--}}
            <div class="mb-4">
                <x-label class="mb-1">
                    Contraseña
                </x-label>
                <x-input type="password" name="password"   class="w-full"/>
            </div>
            {{--Password--}}
            <div class="mb-4">
                <x-label class="mb-1">
                    Confirmar Contraseña
                </x-label>
                <x-input type="password" name="password_confirmation"   class="w-full"/>
            </div>

            {{--Enviar datos del formulario--}}
            <div class="flex justify-end">
                <x-button>
                    Actualizar
                </x-button>
            </div>
        </form>
    </div>

{{-- End Plantilla tabla --}}

</x-admin-layout>
