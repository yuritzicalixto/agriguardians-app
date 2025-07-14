<x-admin-layout :breadcrumbs="[
    [
        'name'=> 'Dashboard',
        'route' => route('admin.dashboard'),
    ],
    [
        'name'=>'Progreso'
    ]
]">

{{-- Start Plantilla tabla --}}

@livewire('progreso-table')
{{-- End Plantilla tabla --}}

</x-admin-layout>
