 <!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career 180</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
        body {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50" x-data>
    <livewire:components.navbar />
    <main>
        {{ $slot }}
    </main>
    <livewire:components.footer />
</body>
</html>