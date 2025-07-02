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
            <div class="flex justify-end">
                <x-button>
                    Actualizar
                </x-button>
            </div>
        </div>
    </form>
{{-- End Plantilla tabla --}}

</x-admin-layout>
