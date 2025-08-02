<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=>'Resumen'
    ]
]">

{{-- Start Plantilla tabla --}}
@livewire('resumen-table')
{{-- @livewire('progreso-table') --}}
{{-- End Plantilla tabla --}}

</x-admin-layout>
