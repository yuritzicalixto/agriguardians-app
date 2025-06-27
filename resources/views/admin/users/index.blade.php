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

    @livewire('user-table')
{{-- End Plantilla tabla --}}

</x-admin-layout>
