<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        .gradient-header {
            background: linear-gradient(to right, #6366f1, #8b5cf6);
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col">
        <header class="gradient-header text-white py-6 shadow-lg">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-3xl font-bold tracking-tight"><?php echo $data['title']; ?></h1>
            </div>
        </header>

        <main class="flex-grow container mx-auto px-4 py-8 md:max-w-4xl">
            <div class="bg-white rounded-xl shadow-md p-6 md:p-10">
                <article class="prose lg:prose-xl">
                    <p class="text-gray-700 leading-relaxed"><?php echo $data['content']; ?></p>
                </article>
            </div>
        </main>

        <footer class="bg-gray-800 text-white py-4 text-center">
            <div class="container mx-auto px-4">
                <p class="text-sm">&copy; <?php echo date('Y'); ?> MVC Projesi | Tüm Hakları Saklıdır</p>
            </div>
        </footer>
    </div>
</body>
</html>