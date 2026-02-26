// Quando il DOM è completamente caricato, eseguo il codice
document.addEventListener('DOMContentLoaded', function () {

    // Cerco il form nella pagina
    const form = document.querySelector('form');

    // Se il form non esiste, interrompo
    if (form) {

        // Quando l’utente invia il form
        form.addEventListener('submit', function (event) {

            // Recupero i valori dei campi e tolgo gli spazi
            const nome = document.getElementById('nome').value.trim();
            const cognome = document.getElementById('cognome').value.trim();
            const password = document.getElementById('password').value.trim();

            // Controllo lunghezza minima del nome
            if (nome.length < 2) {
                alert('Il nome deve contenere almeno 2 caratteri.');
                event.preventDefault(); // Blocca l’invio
                return;
            }

            // Controllo lunghezza minima del cognome
            if (cognome.length < 2) {
                alert('Il cognome deve contenere almeno 2 caratteri.');
                event.preventDefault();
                return;
            }

            // Controllo lunghezza minima della password
            if (password.length < 6) {
                alert('La password deve contenere almeno 6 caratteri.');
                event.preventDefault();
                return;
            }
        });
    }
});