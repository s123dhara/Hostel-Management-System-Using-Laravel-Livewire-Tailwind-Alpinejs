<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
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
}" x-init="init()"
>

   

    {{ $slot }}


    <script src="https://kit.fontawesome.com/682c28b575.js" crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>