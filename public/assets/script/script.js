function showModal() {
    document.getElementById('popup-modal').classList.remove('hidden');
}

function hideModal() {
    document.getElementById('popup-modal').classList.add('hidden');
}

document.getElementById('delete-button').addEventListener('click', function() {
    showModal();
});

document.getElementById('close-button').addEventListener('click', function() {
    hideModal();
});