<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css')}}" />
        @livewireStyles
    </head>
    <body>
        <div class="wrapper">
            <x-sidebar/>
            <div class="main-panel">
                <x-navbar/>
                <div class="container">
                    <div class="page-inner">
                        {{ $slot }}
                    </div>
                    {{-- <footer class="footer">
                        <div class="container-fluid d-flex justify-content-between">
                            <nav class="pull-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://www.themekita.com">
                                            ThemeKita
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Help </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Licenses </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="copyright">
                                2024, made with <i class="fa fa-heart heart text-danger"></i> by
                                <a href="http://www.themekita.com">ThemeKita</a>
                            </div>
                            <div>
                                Distributed by
                                <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
                            </div>
                        </div>
                    </footer> --}}
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{ asset('assets/js/kaiadmin.min.js')}}"></script>
        @yield('poscript')
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
