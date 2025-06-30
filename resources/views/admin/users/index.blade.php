<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=>'Usuarios Totales'
    ]
]">

{{-- Start Plantilla tabla --}}
    <x-slot name="action">
        <a class="text-blue-500" href="{{ route('admin.users.create') }}">
            Nuevo
        </a>
    </x-slot>

    @livewire('user-table')
{{-- End Plantilla tabla --}}

</x-admin-layout>
