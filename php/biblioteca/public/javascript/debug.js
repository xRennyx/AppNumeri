// Quando il DOM (HTML) è completamente caricato, eseguo il codice
document.addEventListener("DOMContentLoaded", () => {

    // Cerco la tabella nella pagina
    const table = document.querySelector("table");

    // Se la tabella non esiste, interrompo l’esecuzione
    if (!table) return;

    // Creo un campo di input per la ricerca
    const input = document.createElement("input");

    // Tipo di input: testo
    input.type = "text";

    // Testo che compare nel campo quando è vuoto
    input.placeholder = "Cerca...";

    // Stile minimo
    input.style.width = "100%";
    input.style.marginBottom = "10px";

    // Inserisco l’input prima della tabella
    table.before(input);

    // Evento: ogni volta che l’utente scrive qualcosa
    input.addEventListener("input", () => {

        // Prendo il valore scritto e lo converto in minuscolo
        const valore = input.value.toLowerCase();

        // Seleziono tutte le righe della tabella
        const righe = table.querySelectorAll("tbody tr");

        // Per ogni riga della tabella
        righe.forEach(riga => {

            // Converto il testo della riga in minuscolo
            const testo = riga.textContent.toLowerCase();

            // Se il testo contiene la parola cercata → mostro la riga
            // Altrimenti la nascondo
            riga.style.display = testo.includes(valore) ? "" : "none";
        });
    });
});