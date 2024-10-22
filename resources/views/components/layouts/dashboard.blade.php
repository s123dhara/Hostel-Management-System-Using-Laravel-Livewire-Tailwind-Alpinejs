<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    @vite('resources/css/app.css')


    @livewireStyles
</head>

<body x-data="{
    theme: localStorage.getItem('theme') || 'light',
    changeTheme() {
        this.theme = this.theme === 'dark' ? 'light' : 'dark';
        localStorage.setItem('theme', this.theme);
        document.documentElement.setAttribute('data-theme', this.theme); 
        console.log(localStorage.getItem('theme'))
    },
    init() {
        this.theme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', this.theme); 
    }
}" x-init="init()">

<div>
    <x-common.admin.navbar />
    <!-- Offcanvas Menu start -->
    <div x-data="{ isSidebarOpen: false }" class="relative flex">


        <!-- Sidebar -->
        <x-common.admin.sidebar />


        <!-- Main content -->
        <main class="p-4 w-full lg:ml-64 overflow-hidden">

           {{ $slot }}

        </main>

    </div>


    <livewire:admin.logout lazy />
</div>

    @livewireScripts
    <script src="https://kit.fontawesome.com/682c28b575.js" crossorigin="anonymous"></script>
</body>

</html>