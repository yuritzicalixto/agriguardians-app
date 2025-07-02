<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=>'Roles',
        'url' => route('admin.roles.index'),
    ],
    [
        'name' => 'Editar',
    ]
]">

{{-- Start Plantilla tabla --}}
    <form action="{{route('admin.roles.update', $role)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="mb-4">
                <x-label class="mb-1">
                    Nombre
                </x-label>
                <x-input name="name" value="{{ old('name', $role->name) }}" class="w-full"/>
            </div>
            {{--Permisos de los Roles--}}
            <div class="mb-4">
                <x-label class="mb-1">
                    Permisos
                </x-label>

                <ul>
                    @foreach ($permissions as $permission)
                        <li>
                            <label>
                                <x-checkbox name="permissions[]" value="{{ $permission->id }}" :checked="in_array($permission-> id, old('permissions', $role->permissions->pluck('id')->toArray()))"/>
                                {{ $permission->name }}
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{--Guardar--}}
            <div class="flex justify-end space-x-2">
                <x-danger-button onclick="confirmDelete()">
                    Eliminar
                </x-danger-button>

                <x-button>
                    Actualizar
                </x-button>
            </div>
        </div>
    </form>
{{-- End Plantilla tabla --}}

{{-- Formulario para hacer que se elimine --}}
    <form action="{{ route('admin.roles.destroy', $role) }}"  method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>

{{-- Otro formulario de Mensaje de Alerta--}}

    @push('js')
        <script>
            function confirmDelete()
            {
                // START Mensaje de alerta
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "¡Si, borralo!",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        //Eliminar Usuario
                        document.getElementById('deleteForm').submit();
                    }
                });
                // END Mensaje de alerta
            }
        </script>
    @endpush
</x-admin-layout>
