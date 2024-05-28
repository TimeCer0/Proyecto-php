document.addEventListener('DOMContentLoaded', () => {
    const carouselItems = document.querySelectorAll('.carousel-item');
    carouselItems[0].classList.add('opaque');

    searchButton.addEventListener('click', () => {
        const query = searchInput.value;
        if (query) {
            alert('Buscando: ' + query);
            // Aquí puedes añadir la lógica para buscar los libros
        }
    });

    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            searchButton.click();
        }
    });
});

