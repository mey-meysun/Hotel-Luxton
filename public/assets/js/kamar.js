document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".toggle-btn").forEach(button => {
        button.addEventListener("click", () => {
            const amenitiesList = button.nextElementSibling;

            // Toggle class "active" untuk animasi expand/collapse
            amenitiesList.classList.toggle("active");

            // Ubah teks tombol
            button.innerHTML = amenitiesList.classList.contains("active")
                ? "AMENITIES ▲"
                : "AMENITIES ▼";
        });
    });
<<<<<<< HEAD
});
=======
});
>>>>>>> 6d1d93d289aa7286b47f04e60a3abe3b9a2407b2
