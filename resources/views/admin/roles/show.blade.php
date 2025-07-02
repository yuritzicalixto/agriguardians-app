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
        'name' => $role-> name,
    ]
]">

{{-- Start Plantilla tabla --}}

{{-- End Plantilla tabla --}}

</x-admin-layout>
