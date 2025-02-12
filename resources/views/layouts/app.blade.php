<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список задач</title>
    {{-- Быстрая подключение Tailwind для прототипа --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 via-green-50 to-yellow-50 min-h-screen flex items-center justify-center py-16">
<div class="w-full max-w-3xl mx-auto px-4">
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-800 px-6 py-3 rounded-md mb-8 drop-shadow">
            {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>
</body>
</html>
