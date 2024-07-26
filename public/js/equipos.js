function openModal() {
    document.getElementById('createEquipoModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('createEquipoModal').classList.add('hidden');
}

$(document).ready(function() {
    $('#createEquipoForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                // Manejar la respuesta exitosa
                closeModal();
                alert('Equipo agregado exitosamente');
                // Recargar la página o actualizar la lista de equipos
                location.reload();
            },
            error: function(response) {
                // Manejar los errores
                alert('Error al agregar el equipo');
            }
        });
    });
});
