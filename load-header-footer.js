document.addEventListener('DOMContentLoaded', function() {
  console.log("La función loading se ejecutó");

  // Cargar header y footer antes de ocultar la animación de carga
  Promise.all([
    loadComponent('header', 'header.html'),
    loadComponent('footer', 'footer.html')
  ]).then(function() {
    // Una vez que ambos se han cargado, ocultamos la animación de carga
    setTimeout(function() {
        document.getElementById("loadingWrap").style.display = "none";
    }, 200); // Puedes ajustarlo si lo deseas
  });
});

function loadComponent(elementId, filePath) {
    return fetch(filePath)
      .then(response => {
        if (!response.ok) {
          throw new Error('Error al cargar ' + filePath);
        }
        return response.text();
      })
      .then(data => {
        document.getElementById(elementId).innerHTML = data;
      })
      .catch(error => {
        console.error('Error:', error);
      });
}
