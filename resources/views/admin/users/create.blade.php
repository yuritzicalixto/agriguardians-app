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
        'name'=>'Nuevo',
    ]

]">

{{-- Start Plantilla tabla --}}


{{-- End Plantilla tabla --}}

</x-admin-layout>
