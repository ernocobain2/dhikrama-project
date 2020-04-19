<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta description="description" content="Menerima Jasa Pembangunan Rumah Huni">
    <title>Document</title>
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
        <nav>
            <div class="logos">
                <h1><a href="/">Dhikrama Web</a></h1>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
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
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('pages.layout.footer')
        @include('css.style')
    </footer>
    @include('js.menu')
</body>

</html>