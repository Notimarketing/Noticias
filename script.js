// Obtener todas las imágenes
const imagenes = document.querySelectorAll('.imagen');

// Función para abrir el modal correspondiente al hacer clic en la imagen
imagenes.forEach(imagen => {
    imagen.addEventListener('click', (e) => {
        // Obtener el id de la imagen clickeada
        const imagenId = e.target.id; // id de la imagen
        console.log("Imagen clickeada:", imagenId);  // Verifica el id de la imagen clickeada
        
        // Crear el id del modal correspondiente (eliminar "imagen" y añadir el número)
        const modalId = "modal" + imagenId.replace('imagen', ''); // Esto debería generar 'modal1', 'modal2', etc.
        console.log("ID del modal:", modalId);  // Verifica el id del modal

        const modal = document.getElementById(modalId); // Obtener el modal correspondiente
        console.log(modal);  // Verifica si se encuentra el modal correspondiente

        if (modal) {
            modal.style.display = 'block'; // Mostrar el modal
        } else {
            console.log("No se encontró el modal con id:", modalId);  // Si no se encuentra el modal
        }
    });
});

// Obtener todos los botones de cerrar (la "x")
const cerrarButtons = document.querySelectorAll('.cerrar');

// Función para cerrar el modal
cerrarButtons.forEach(cerrar => {
    cerrar.addEventListener('click', (e) => {
        const modal = e.target.closest('.modal'); // Encontrar el modal más cercano al botón de cerrar
        modal.style.display = 'none'; // Ocultar el modal
    });
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener('click', (e) => {
    if (e.target.classList.contains('modal')) {
        e.target.style.display = 'none'; // Cerrar el modal si se hace clic fuera del contenido
    }
});


