<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    {{ $slot }}
    @yield('scriptapp')
    @livewireScripts
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('openAlert', (swal) => {
                Swal.fire({
                    icon: swal[0],
                    title: swal[1],
                    text: swal[2],
                });
            });
        });
    </script>
</body>
</html>
