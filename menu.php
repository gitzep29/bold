<section>
    <nav id="main" class="mode_compact">

        <div class="compact">
            <a href="/" class="logo">
                <img src="/assets/img/logo-min.svg">
            </a>
            <div class="burguer">
                <img class="active-menu" src="/assets/icons/Menu.svg">
            </div>
            <div class="socmed">
                <a class="social-icon" href=""><img src="/assets/icons/Facebook.svg"></a>
                <a class="social-icon" href=""><img src="/assets/icons/Instagram.svg"></a>
                <a class="social-icon" href=""><img src="/assets/icons/YouTube.svg"></a>
                <a class="social-icon" href=""><img src="/assets/icons/TikTok.svg"></a>
            </div>
        </div>

        <div class="full">
            <div class="container">
                <div class="row top">
                    <div class="col-3">
                        <a href="/">
                            <img class="logo" src="/assets/img/logo.svg">
                        </a>
                    </div>
                </div>

                <div class="row middle">
                    <div class="col-6 my-auto">
                        <ul class="menu">
                            <li><a href="/">Portafolio</a></li>
                            <li><a href="/">Servicios</a></li>
                            <li><a href="/">Estudio</a></li>
                            <li><a href="/">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="row bottom">
                    <div class="col-3">
                        <ul class="socmed">
                            <li><a href="">Instagram</a></li>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Behance</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <div class="closearea">
		<div class="closecursor">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 90 90" xml:space="preserve">
				<line x1="1" y1="1" x2="89" y2="89"></line>
				<line x1="89" y1="1" x2="1" y2="89"></line>
			</svg>
		</div>
	</div>
    
</section>

<script>

    const menu = document.querySelector('.mode_compact');
    const burguer= document.querySelector('.active-menu');
    const close= document.querySelector('.closearea');
    const closearea=document.querySelector('.closearea');

    close.addEventListener('click', function() {
        menu.classList.remove('mode_full')
        menu.classList.toggle('mode_compact')
        closearea.classList.remove('active')
    });

    burguer.addEventListener('click', function() {
        menu.classList.remove('mode_compact')
        menu.classList.toggle('mode_full')
        closearea.classList.toggle('active')
    });

</script>





