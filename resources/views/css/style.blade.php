<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Sonsie+One&display=swap');

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        font-display: swap;
        overflow-x: hidden;
        height: 100vh;
        background-image: url("../images/brick-background.webp");
        background-color: #35363A;

    }

    .icon-facebook p,
    .icon-whatsapp p,
    .icon-youtube p {
        padding-top: 10px;
        color: whitesmoke;
        font-family: 'Sonsie One', cursive;
        font-size: 0.7em;
    }

    /*Start Header*/
    .logos-header {
        display: flex;
        background-image: url("../images/brick-background.webp");
        background-color: #35363A;
        height: 100px;
        align-items: center;
    }

    .logos-header {
        display: flex;
        color: #F0F8F2;
        font-family: 'Sonsie One', cursive;
        justify-content: space-around;
    }

    .container-icons {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        width: 20%;
        gap: 2em;

    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 4;
    }

    /* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
    .sticky+.content {
        padding-top: 60px;
    }

    nav {
        display: flex;
        justify-content: space-around;
        padding: 10px 0;
        position: relative;
        z-index: 1;
        border-bottom: 2px solid;
        border-color: gray;
        background: #fceabb;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #f8b500, #fceabb);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #f8b500, #fceabb);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    nav .home {
        font-family: 'Sonsie One', cursive;
        font-display: swap;
    }

    nav .home a {
        color: #1F4447
    }

    nav .home a:hover {
        color: #3A5F62
    }

    nav ul {
        display: flex;
        justify-content: space-between;
        width: 25%;
        align-items: center;
        font-style: bold;
        transform-origin: 0 -80%;
    }

    nav ul li a {
        font-size: 0.8em;
        color: #26272B;
    }

    nav ul li a:hover {
        color: #94B4B7
    }


    .extra {
        background-image: url('../images/background-black.jpg');
        display: flex;
        justify-content: space-between;
        padding: 5px 20px
    }

    .extra a {
        font-style: italic;
        color: #9FAAB2;
        font-size: 0.8em
    }

    .extra a:hover {
        color: #D3E3EE
    }

    .menu-burger {
        display: none;
        flex-direction: column;
        height: 20px;
        justify-content: space-around;
        position: relative;
    }


    .menu-burger span {
        display: block;
        width: 25px;
        height: 3px;
        background-color: #D3E3EE;
        border-radius: 3px;
        transition: all 0.3s;
    }

    .menu-burger a {
        position: absolute;
        width: 100%;
        height: 22px;
        opacity: 0;
        left: 1px;
        cursor: pointer;
        z-index: 2;
    }

    .menu-burger span:nth-child(2) {
        transform-origin: 0 0;
    }

    .menu-burger span:nth-child(3) {
        transform-origin: 0 0;
    }

    .menu-burger span:nth-child(4) {
        transform-origin: 0 100%;
    }

    .menu-burger a:hover~span:nth-child(2) {
        transform: rotate(34deg)
    }

    .menu-burger a:hover~span:nth-child(3) {
        transform: scale(0)
    }

    .menu-burger a:hover~span:nth-child(4) {
        transform: rotate(-34deg)
    }

    /*Icons*/
    @font-face {
        font-family: 'icomoon';
        src: url('icons/fonts/icomoon.eot?19y9pr');
        src: url('icons/fonts/icomoon.eot?19y9pr#iefix') format('embedded-opentype'), url('icons/fonts/icomoon.ttf?19y9pr') format('truetype'), url('icons/fonts/icomoon.woff?19y9pr') format('woff'), url('icons/fonts/icomoon.svg?19y9pr#icomoon') format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: block;
    }

    [class^="icon-"],
    [class*=" icon-"] {
        /* use !important to prevent issues with browser extensions that change fonts */
        font-family: 'icomoon' !important;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        /* Better Font Rendering =========== */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .icon-facebook:before {
        content: "\e901";
        color: #1877f2;
        font-size: 50px;
        cursor: pointer;
    }

    .icon-whatsapp:before {
        content: "\e902";
        color: #25d366;
        font-size: 50px;
        cursor: pointer;
    }

    .icon-youtube:before {
        content: "\1f318";
        color: #f00;
        font-size: 50px;
        cursor: pointer;
    }

    /*end header*/

    /*start footer*/
    footer {
        background-color: #403E3
    }

    .column-footer {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 2em;
        color: white;
        justify-content: space-between;
        margin: 0 15px
    }

    .column-footer p {
        text-align: start;
        font-family: normal;
    }

    .content-footer {
        color: white;
        background-color: #45464A;
        margin: 20px 10px;
        padding: 5px 10px;
    }

    .content-footer h3 {
        text-align: center;
        font-family: 'Sonsie One', cursive;
        margin-bottom: 10px
    }

    .copyright {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #26272B;
        color: #D8D9D9;
        height: 30px;
    }

    .copyright-content span {
        font-size: 0.8em;
    }

    .copyright-content span a {
        color: #A8BCBE
    }


    /* Tablet responsive*/
    @media screen and (max-width: 768px) {

        nav ul {
            width: 35%
        }

        .logos-header h1 {
            width: 60%
        }

        .logos-header .container-icons {
            width: 30%
        }

        .logos-header {
            justify-content: space-between;
        }
    }

    /* mobile responsive*/
    @media screen and (max-width: 576px) {

        nav {
            background-color: #F5F5F0
        }

        nav ul {
            flex-direction: column;
            position: absolute;
            background-image: url("../images/brick-background.webp");
            background-color: #35363A;
            height: 98.3vh;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            z-index: -1;
            transform: rotate(0.1deg) scaleY(0);
            opacity: 0;
            transition: all 1s;
            top: -0.3px
        }


        nav ul.slider {
            transform: rotate(0);
            opacity: 1;
        }

        nav ul li a {
            font-family: 'Sonsie One', cursive;
            color: aliceblue
        }

        .extra {
            display: none;
        }

        .menu-burger {
            display: flex;
        }

        .menu-burger span {
            background-color: #1F4447;
        }

        .logos-header h1 {
            width: 100vh;
            text-align: center;
        }

        .logos-header {
            height: 27px;
        }

        .logos-header .container-icons {
            display: none;
        }

        .column-footer {
            grid-template-rows: repeat(3, 1fr)
        }
    }

    .container {}
</style>