document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (e) {
        if (tag = e.target.closest('.product')) {
            window.location.href = '/product/'+tag.getAttribute('data-id');
        }
        if (tag = e.target.closest('.promotion')) {
            window.location.href = '/promotion/'+tag.getAttribute('data-id');
        }
    });
});