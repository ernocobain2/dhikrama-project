<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Menerima Jasa Pembangunan Rumah Huni">
    @yield('css')
    <title>Dhikrama Web</title>
</head>

<body>
    <header>
        <div class="extra">
            <div class="tlp">
                <a href="tel:0000000">08571999999</a>
            </div>
            <div class="place">
                <a href="http://">JL.Bend Jago RT 04/03 Serdang</a>
            </div>
        </div>
        <div class="logos-header">
            <h1>dikrama Web</h1>
            <div class="container-icons">
                <span class="icon-whatsapp"></span>
                <a href="https://web.facebook.com/dikramagroup/?_rdc=1&_rdr" class="icon-facebook"></a>
                <span class="icon-youtube"></span>
            </div>
        </div>
        <div id="navbar">
            <nav>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
                <div class="home">
                    <h2><a href="/">Home</a></h2>
                </div>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Services</a></li>
                </ul>

                <div class="menu-burger">
                    <a href="#"><img src="images/favicon.ico" alt="toggle"></a>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
        @include('pages.layout.footer')
        @include('css.style')
    </footer>
    @include('js.menu')
    @yield('js')
</body>

</html>