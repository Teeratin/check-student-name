const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

$(document).ready(function () {
    $('#example').DataTable();
});

const selectElement = document.querySelector(".input-nonenumber");
selectElement.addEventListener("input", (event) => {
    const result = document.querySelector(".result");
    event.target.value = event.target.value.replace(/[0-9]/g, "");
    result.textContent = event.target.value;
});
