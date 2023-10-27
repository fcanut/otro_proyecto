<script>
// JavaScript para manejar el evento de clic en las celdas del calendario
const dateCells = document.querySelectorAll('.date-cell a');
dateCells.forEach(cell => {
    cell.addEventListener('click', function(event) {
        // Prevenir el comportamiento predeterminado del enlace para evitar la redirección inmediata
        event.preventDefault();
        // Obtener la URL del enlace y redirigir al usuario
        window.location.href = cell.getAttribute('href');
    })
});
</script>