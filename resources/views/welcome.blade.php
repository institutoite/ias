<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Inteligencias Artificiales</title>
    <link rel="stylesheet" href="{{ asset('home/css/estyle.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Inteligencias Artificiales</h1>
            <p>Explora nuestra colección de IAs innovadoras</p>
        </div>
    </header>

    <main class="container">
        <div class="filters">
            <button class="filter-btn active" data-filter="all">Todas</button>
            <button class="filter-btn" data-filter="active">Activas</button>
            <button class="filter-btn" data-filter="inactive">Inactivas</button>
        </div>

        <div class="search-container">
            <input type="text" id="search-input" placeholder="Buscar IA...">
        </div>

        <div class="ia-grid" id="ia-container">
            <!-- Las tarjetas de IA se generarán con JavaScript -->
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Catálogo de Inteligencias Artificiales</p>
        </div>
    </footer>

    <script src="{{ asset('home/js/script.js') }}"></script>
</body>
</html>