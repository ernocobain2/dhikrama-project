<script>
    const menuBurger = document.querySelector('.menu-burger a');
    const nav = document.querySelector('nav ul');

    menuBurger.addEventListener('click', function() {
        nav.classList.toggle('slider');
    })
</script>