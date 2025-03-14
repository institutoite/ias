<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Inteligencias Artificiales</title>
    <link rel="stylesheet" href="{{ asset('home/css/estyle.css') }}">

    <link rel="stylesheet" href="{{ asset('homeprincipal/css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('homeprincipal/css/contactos.css') }}">
    <link rel="stylesheet" href="{{ asset('homeprincipal/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('homeprincipal/css/ayuda.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <!-- Reemplazamos el texto por una imagen con clase para animación -->
                    <img src="{{ asset('homeprincipal/imagen/logo.png') }}" alt="Logo ITE" class="logo-image pulse-animation">
                </a>
            </div>
                
            <!-- Menú de navegación para escritorio -->
            <nav class="nav-menu">
                <a href="#" class="nav-link">Inicio</a>
                <a href="#" class="nav-link">Cursos</a>
                <a href="#" class="nav-link">Nosotros</a>
                <a href="#" class="nav-link">Contacto</a>
                {{-- @auth
                    <a href="{{ route('home') }}" class="btn btn-primary">Sistema</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endauth --}}
            </nav>
            
            <!-- Botón de menú para móvil -->
            <button class="menu-toggle" id="menuToggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
        
        <!-- Menú móvil -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="#" class="nav-link">Inicio</a>
            <a href="#" class="nav-link">Cursos</a>
            <a href="#" class="nav-link">Nosotros</a>
            <a href="#" class="nav-link">Contacto</a>
        </div>
    </header>

    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-image-container">
                    <div class="contact-image bounce">
                        <img src="/placeholder.svg?height=300&width=300" alt="Foto de contacto" id="contact-photo">
                    </div>
                </div>
                <div class="contact-info">
                    <h2 id="typing-title"></h2>
                    <p id="typing-text"></p>
                    <a href="https://wa.me/59171324941" target="_blank" class="whatsapp-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="whatsapp-icon">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                        <span id="typing-whatsapp"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <main class="container">
        <div class="filters">
            <select id="categoria-select" class="categoria-select">
                <option value="all">Todas las categorías</option>
                <!-- Las opciones de categorías se cargarán con JavaScript -->
            </select>
        </div>

        <div class="search-container">
            <input type="text" id="search-input" placeholder="Buscar IA...">
        </div>

        <div class="ia-grid" id="ia-container">
            <!-- Las tarjetas de IA se generarán con JavaScript -->
        </div>
    </main>

 


    <section class="contact-section" id="contacto">
        <div class="container">
            <div class="section-header">
                <h2>Ponte en <span class="highlight">Contacto</span></h2>
                <p>Estamos aquí para responder tus preguntas y ayudarte en lo que necesites</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Información de Contacto</h3>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="info-content">
                            <h4>Dirección</h4>
                            <p>Villa 1 de mayo calle 16 oeste #9</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div class="info-content">
                            <h4>Teléfono</h4>
                            <p>71039910</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <div class="info-content">
                            <h4>Telefono</h4>
                            <p>71324941</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        </div>
                        <div class="info-content">
                            <h4>Horario de Atención</h4>
                            <p>Lunes a Viernes: 07:30 - 18:30<br>Sábados: 07:30 - 18:30</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://www.facebook.com/ite.educabol" class="social-link" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/ite.educabol" class="social-link" aria-label="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@ite_educabol" class="social-link" aria-label="TikTok">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/><path d="M15 8a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/><path d="M15 2v20"/><path d="M9 16v6"/><path d="M9 10V4"/></svg>
                        </a>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <form id="contactForm" class="contact-form">
                        <div class="form-group">
                            <label for="name">Nombre completo</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </form>
                </div>
            </div>
            
            <div class="map-container fade-in-scroll">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.978518546554!2d-63.1388413!3d-17.8020169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e9948f88a431%3A0x448c1b5adb32a0f0!2site+(central)!5e0!3m2!1ses!2sbo!4v1696938145610!5m2!1ses!2sbo" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Ubicación de ITE">
                </iframe>
            </div>
        </div>
    </section>
    

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <span class="ite-text">ite</span>
                        <p>Instituto de Tecnología Educativa</p>
                    </div>
                    <p class="footer-description">
                        Ofrecemos clases de apoyo escolar, cursos de programación, robótica, ajedrez, 
                        cubo rubik, computación, oratoria, inglés, lectura, escritura y caligrafía.
                    </p>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Enlaces Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="https://ite.com.bo/">Página web</a></li>
                        <li><a href="https://services.ite.com.bo/">Servicios</a></li>
                        <li><a href="https://redes.ite.com.bo">Redes</a></li>
                        <li><a href="#cursos">Cursos</a></li>
                        <li><a href="#eventos">Eventos</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Síguenos</h3>
                    <ul class="footer-social-links">
                        <li>
                            <a href="https://www.facebook.com/ite.educabol" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@ite_educabol" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/><path d="M15 8a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/><path d="M15 2v20"/><path d="M9 16v6"/><path d="M9 10V4"/></svg>
                                TikTok
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ite.educabol/" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send/?phone=59171039910" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                WhatsApp
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3 class="footer-title">Contáctanos</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span>Villa 1 de mayo calle 16 oeste #9, Santa Cruz de la Sierra</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>75553338</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            <span>info@ite.com.bo</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-legal">
                    <a href="#">Política de Privacidad</a>
                    <span class="separator">|</span>
                    <a href="#">Términos y Condiciones</a>
                </div>
                <div class="footer-copyright">
                    <p>&copy; 2024 ITE Todos los derechos reservados.|Desarrollado David Flores </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('home/js/script.js') }}"></script>
    <script src="{{ asset('homeprincipal/js/hero.js') }}"></script>
    <script src="{{ asset('homeprincipal/js/contactos.js') }}"></script>
    <script src="{{ asset('homeprincipal/js/ayuda.js') }}"></script>
    <script async src="https://www.tiktok.com/embed.js"></script>
</body>
</html>


