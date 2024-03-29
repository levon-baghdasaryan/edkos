<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Accounting">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Edkos - @yield('title', 'Website')</title>
<link rel="icon" href="{{ asset('assets/img/logo.png') }}"/>
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"--}}
{{--      integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">--}}
{{--<link rel="stylesheet" href="{{ asset('assets/libs/css/bootstrap.min.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('assets/libs/css/font-awesome.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('css/font.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('css/main.css') }}">--}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@yield('extra-styles')
<style>
    :root {
        --invoice-color: {{ $invoiceColor ??  '#8DC63F' }};
    }
</style>