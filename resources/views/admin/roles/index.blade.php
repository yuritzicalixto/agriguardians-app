<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=>'Roles',
    ]
]">

{{-- Start Plantilla tabla --}}
    <x-slot name="action">
        <a class="text-blue-500" href="{{ route('admin.roles.create') }}">
            Nuevo
        </a>
    </x-slot>

    @livewire('role-table')
{{-- End Plantilla tabla --}}

</x-admin-layout>
