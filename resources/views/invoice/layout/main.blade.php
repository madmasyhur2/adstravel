<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction | Confirmation</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script type="text/javascript"
    src="{{ config('midtrans.snap_url') }}"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body class="overflow-scroll bg-zinc-50">
    @yield('content')
</body>
</html>