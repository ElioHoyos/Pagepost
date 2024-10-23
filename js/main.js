document.getElementById('miFormulario').addEventListener('submit', function (e) {
    e.preventDefault(); // Evita el envío normal del formulario

    // Aquí puedes hacer validaciones adicionales si lo deseas

    Swal.fire({
        title: '¿Estás seguro?',
        text: "¿Quieres enviar este formulario?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, enviar',
        cancelButtonText: 'No, cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Si el usuario confirma, envía el formulario
            this.submit();
        }
    });
});

