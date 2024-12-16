document.querySelectorAll('.toggle').forEach(button => {
    button.addEventListener('click', function() {
        const dialogId = this.getAttribute('data-dialog');
        const dialog = document.getElementById(dialogId);
        dialog.showModal();
    });
});

document.querySelectorAll('.close').forEach(button => {
    button.addEventListener('click', function() {
        const dialog = this.closest('dialog');
        dialog.close();
    });
});