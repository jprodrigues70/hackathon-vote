gtModals = [].slice.call(document.getElementsByClassName("gt-modal")),
modals = [].slice.call(document.querySelectorAll("[data-modal]")),
mirrors = [].slice.call(document.querySelectorAll("[data-mirror]")),
closeModals = [].slice.call(document.getElementsByClassName("modal-close")),
closeModals.forEach(function(a) {
   closeModal(a);
});
function closeModal(a) {
    a.addEventListener("click", function(b) {
        b.stopPropagation();
        a.parentElement.parentElement.removeAttribute("style");
    })
}
mirrors.forEach(function(e) {
    e.addEventListener("input", function(b) {
        document.getElementById(e.dataset.mirror).innerHTML = b.target.value;
    })
});
gtModals.forEach(function(e) {
    e.addEventListener("click", function(b) {
        if (b.target.className == "gt-modal") e.removeAttribute("style");
    });
})
document.addEventListener("keypress", function(e) {
    if (e.keyCode == 27) {
        gtModals.forEach((e) => e.removeAttribute("style"));
    }
})
modals.forEach(function(x) {
    x.addEventListener("click", function(e) {
        var a = document.getElementById(x.dataset.modal);
        a.parentElement.style.display = "block";
    });
});