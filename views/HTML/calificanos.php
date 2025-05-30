<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificanos | RendiX</title>
   <link rel="stylesheet" href="../CSS/StyleCalifica.css">
    <script src="../JS/VerificarSesion.js"></script>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="../IMAGENES/RENDIXblanco.png" alt="Logo de RendiX">
            </div>
            
            <button class="mobile-nav-toggle" id="navToggle">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 12h18M3 6h18M3 18h18"></path>
                </svg>
            </button>
            
            <nav id="mainNav">
                <div class="search-container">
                    <span class="search-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="M21 21l-4.35-4.35"></path>
                        </svg>
                    </span>
                    <input type="text" class="search-input" placeholder="Buscar Productos, Marcas o Servicios">
                </div>
                
                <ul id="menu">
                <li><a href="HTML/Registro.php" id="sesion-link">Regístrate/Inicia Sesión</a></li>
                <li><a href="../index.php">Productos destacados</a></li>
                <li><a href="contactenos.php">Contáctenos</a></li>
                <li class="dropdown">
                <a href="#">Más opciones</a>
                <ul class="dropdown-content">
                <li><a href="calificanos.php">Califícanos</a></li>
                <li><a href="Pagina de ayuda.php">Ayuda</a></li>
                <li><a href="PQRS.php">PQRS</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <h1 class="page-title">Califica tu experiencia</h1>
            
            <div class="rating-container">
                <div class="success-message" id="successMessage">
                    ¡Gracias por tu valoración! Tu opinión es muy importante para nosotros.
                </div>
                
                <h2 class="form-header">Déjanos saber tu opinión</h2>
                
                <form class="rating-form" id="ratingForm">
                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="product">Producto o servicio</label>
                        <select id="product" name="product" class="form-control" required>
                            <option value="">Selecciona un producto o servicio</option>
                            <option value="alquiler">Servicio de alquiler</option>
                            <option value="entrega">Entrega de productos</option>
                            <option value="atencion">Atención al cliente</option>
                            <option value="sitio">Experiencia del sitio web</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="comment">Tu opinión</label>
                        <textarea id="comment" name="comment" class="form-control" placeholder="Comparte tu experiencia con nosotros" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>¿Cómo calificarías tu experiencia?</label>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" required>
                            <label for="star5">★</label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4">★</label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3">★</label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2">★</label>
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1">★</label>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">Enviar valoración</button>
                </form>
            </div>
            <script>
document.getElementById('ratingForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('../../controlador/CalificacionController.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('ratingForm').reset();
        } else {
            alert('Hubo un problema al enviar tu valoración.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
</script>

            <div class="reviews-section">
                <h2 class="section-title">Opiniones recientes</h2>
                
                <div class="reviews-container">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="user-avatar">M</div>
                            <div class="user-info">
                                <div class="user-name">María González</div>
                                <div class="review-date">15 abril, 2025</div>
                            </div>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <p class="review-text">Excelente servicio de alquiler. Los productos estaban en perfectas condiciones y la entrega fue puntual. ¡Totalmente recomendado!</p>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-header">
                            <div class="user-avatar">J</div>
                            <div class="user-info">
                                <div class="user-name">Juan Pérez</div>
                                <div class="review-date">10 abril, 2025</div>
                            </div>
                        </div>
                        <div class="review-rating">★★★★☆</div>
                        <p class="review-text">Buena experiencia en general. El proceso de alquiler fue sencillo y el personal muy amable. Solo tuve un pequeño retraso en la entrega.</p>
                    </div>
                    
                    <div class="review-card">
                        <div class="review-header">
                            <div class="user-avatar">C</div>
                            <div class="user-info">
                                <div class="user-name">Carolina Martínez</div>
                                <div class="review-date">5 abril, 2025</div>
                            </div>
                        </div>
                        <div class="review-rating">★★★★★</div>
                        <p class="review-text">¡Increíble servicio! La calidad de los productos superó mis expectativas y el proceso de devolución fue muy sencillo.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-section">
                    <img src="../IMAGENES/RENDIXblanco.png" alt="Logo RendiX" class="footer-logo">
                    <p>RendiX es tu plataforma de alquiler de productos premium. Ofrecemos soluciones de alta calidad para tus necesidades temporales.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3V2z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 7.5h.01"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Enlaces rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos destacados</a></li>
                        <li><a href="#">Categorías</a></li>
                        <li><a href="#">Ofertas especiales</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Ayuda</h3>
                    <ul class="footer-links">
                        <li><a href="#">Preguntas frecuentes</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">PQRS</a></li>
                        <li><a href="#">Califícanos</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <div class="contact-info">
                        <p>
                            <span class="contact-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </span>
                            Calle Principal #123, Ciudad
                        </p>
                        <p>
                            <span class="contact-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path>
                                </svg>
                            </span>
                            +57 123 456 7890
                        </p>
                        <p>
                            <span class="contact-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </span>
                            contacto@rendix.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2025 RendiX. Todos los derechos reservados.
            </div>