@php
    $links= [
    [
        'icon' => 'fa-solid fa-gauge',
        'name' => 'Dashboard',
        'route' => route ('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard'),
        'can' => ['access_dashboard']
    ],
    [
        //Usuarios
        'icon' => 'fa-solid fa-box-open',
        'name' => 'Usuarios',
        'route' => route ('admin.usuarios-unity'),
        'active' => request()->routeIs('admin.usuarios-unity'),
        'can' => ['manage_users']
    ],
    [
        //Progreso de Unity Nivel, Tiempo y id del Usuario
        'icon' => 'fa-solid fa-fire-flame-curved',
        'name' => 'Progreso Unity',
        'route' => route ('admin.progreso-unity'),
        'active' => request()->routeIs('admin.progreso-unity'),
        'can' => ['manage_progreso']
    ],
    [
        //Progreso de Unity Nivel, Tiempo y id del Usuario
        'icon' => 'fa-solid fa-box-open',
        'name' => 'Resumen Unity',
        'route' => route ('admin.resumen'),
        'active' => request()->routeIs('admin.resumen'),
        'can' => ['manage_progreso']
    ],
    [
        'icon' => 'fa-solid fa-users',
        'name' => 'Usuarios Totales',
        'route' => route ('admin.users.index'),
        'active' => request()->routeIs('admin.users.*'),
        'can' => ['manage_users']
    ],
    [
        'icon' => 'fa-solid fa-user-tag',
        'name' => 'Roles',
        'route' => route ('admin.roles.index'),
        'active' => request()->routeIs('admin.roles.*'),
        'can' => ['manage_roles']
    ],

];
@endphp


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-[100dvh] pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    :class="{
        'translate-x-0 ease-out': sidebarOpen,
        '-translate-x-full ease-in': !sidebarOpen
    }"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
{{--ITERANDO ENLACES--}}
            @foreach ($links as $link)
                @canany($link['can'] ?? [null])

                    <li>
                        {{--  --}}
                        <a href="{{ $link['route'] }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $link['active'] ? 'bg-gray-100' : ''}}">

                            <span class="inline-flex w-6 h-6 justify-center items-center">
                                <i class=" {{$link['icon']}} text-gray-500"></i>
                            </span>

                            <span class="ms-2">
                                {{$link['name']}}
                            </span>
                        </a>
                    </li>
                @endcanany
            @endforeach
        </ul>
    </div>
</aside>
