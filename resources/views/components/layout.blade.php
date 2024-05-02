<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="v-100 vh-100 d-flex justify-content-center align-items-center">
        
        @if (Session::has('message'))
            <div class="toast position-absolute top-0 mt-2" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    {{-- <img src="..." class="rounded me-2" alt="..."> --}}
                    <strong class="me-auto">Social Net</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ Session::get('message') }}
                </div>
            </div>

            <script>
                toast = document.querySelector('.toast');
                toast.style.display = 'block';

                document.querySelector('.btn-close').addEventListener('click', () => {
                    toast.style.display = 'none';
                });
                
            </script>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger position-absolute top-0 mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ $slot }}
    </body>
</html>
