

document.addEventListener("DOMContentLoaded", function() {
    function getCurrentDate() {
        const today = new Date();
        const year = today.getFullYear();
        let month = (today.getMonth() + 1).toString().padStart(2, '0');
        let day = today.getDate().toString().padStart(2, '0');

        return `${year}-${month}-${day}`;
    }

    const dateInput = document.getElementById('dateInput');
    if (dateInput) {
        dateInput.value = getCurrentDate();
    }
});
