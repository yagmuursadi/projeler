// Tarih sabit
document.getElementById("tarih").innerHTML = "18 Mart 1915";

// Sayfa açıldığında en üstten başlat
window.onload = function() {
    window.scrollTo(0, 0);
};

// Navbar linkleri smooth scroll
document.querySelectorAll('.menu a').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const target = document.getElementById(targetId);
        const navbarHeight = document.querySelector('.navbar').offsetHeight;

        window.scrollTo({
            top: target.offsetTop - navbarHeight,
            behavior: 'smooth'
        });
    });
});