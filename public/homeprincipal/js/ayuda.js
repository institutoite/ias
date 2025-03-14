// Función para efecto de escritura
function typeWriter(element, text, speed, callback) {
    let i = 0;
    element.innerHTML = '';
    element.classList.add('typing');
    
    function typing() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, speed);
        } else {
            element.classList.remove('typing');
            if (callback) callback();
        }
    }
    
    typing();
}

// Inicializar animaciones cuando el DOM esté cargado
document.addEventListener('DOMContentLoaded', function() {
    // Reemplaza esta ruta con la ruta a tu fotografía real
    const contactPhoto = document.getElementById('contact-photo');
    if (contactPhoto) {
        contactPhoto.src = '/storage/ias/perfil.png';
        
        // Manejo de errores en caso de que la imagen no se cargue
        contactPhoto.onerror = function() {
            this.src = '/placeholder.svg?height=300&width=300';
        };
    }
    
    // Elementos para el efecto de escritura
    const typingTitle = document.getElementById('typing-title');
    const typingText = document.getElementById('typing-text');
    const typingWhatsapp = document.getElementById('typing-whatsapp');
    
    // Textos a escribir
    const titleText = '¿Necesitas apoyo académico?';
    const paragraphText = 'Estamos aquí para ayudarte. No dudes en contactarnos para obtener más información sobre nuestros servicios.';
    const whatsappText = 'Escríbenos al WhatsApp: 71324941';
    
    // Iniciar secuencia de escritura
    if (typingTitle && typingText && typingWhatsapp) {
        // Primero escribe el título
        typeWriter(typingTitle, titleText, 100, function() {
            // Luego escribe el párrafo
            typeWriter(typingText, paragraphText, 50, function() {
                // Finalmente escribe el texto del botón de WhatsApp
                typeWriter(typingWhatsapp, whatsappText, 50);
            });
        });
    }
});