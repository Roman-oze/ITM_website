@if(session('success') || session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: "{{ session('success') ?? session('error') }}",
                icon: "{{ session('success') ? 'success' : 'error' }}",
                position: "center",
                background: "#fff", // Customize background color if needed
                iconColor: "{{ session('success') ? '#28a745' : '#dc3545' }}", // Customize icon color
                showConfirmButton: true, // Optionally add a "Confirm" button
                confirmButtonText: "OK", // Customize button text
                confirmButtonColor: "{{ session('success') ? '#28a745' : '#dc3545' }}", // Button color
                showClass: {
                    popup: 'animate__animated animate__zoomIn' // Advanced show animation
                },
                hideClass: {
                    popup: 'animate__animated animate__zoomOut' // Advanced hide animation
                },
                customClass: {
                    popup: 'swal2-custom-popup', // Add a custom class for further styling
                },
                timer: 2000, // Duration in milliseconds
                timerProgressBar: true, // Add a progress bar for the timer
                backdrop: `rgba(0,0,0,0.4)` // Customize the overlay background
            });
        });
    </script>
@endif
