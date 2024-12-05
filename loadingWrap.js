document.addEventListener('DOMContentLoaded', function() {
  console.log("La función loading se ejecutó");
  setTimeout(function() {
      document.getElementById("loadingWrap").style.display = "none";
  }, 2000); // Ocultar después de 2 segundos
});
