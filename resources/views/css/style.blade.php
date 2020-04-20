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
    }

    /*Start Header*/
    .logos-header {
        display: flex;
        background-color: #1F4447;
        height: 100px;
        align-items: center;
    }

    .logos-header {
        display: flex;
        color: #DDDF02;
        font-family: 'Sonsie One', cursive;
        justify-content: space-around;
    }

    .container-icons {
        display: flex;
        justify-content: space-between;
        width: 20%
    }

    nav {
        display: flex;
        justify-content: space-around;
        padding: 10px 0;
        position: relative;
        z-index: 1;
        border-bottom-width: 2px;
        border-top-width: 0;
        border-right-width: 0;
        border-left-width: 0;
        border-style: solid;
        border-color: gray
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
        width: 30%;
        align-items: center;
        font-style: bold;
        transform-origin: 0 -80%;
    }

    nav ul li a {
        font-size: 0.8em;
        color: #3A5F62
    }

    nav ul li a:hover {
        color: #94B4B7
    }


    .extra {
        background-color: #1E1E1E;
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

    /* Tablet responsive*/
    @media screen and (max-width: 768px) {

        nav ul {
            width: 40%
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
            background-color: #F5F5F0;
            height: 98.3vh;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            z-index: -1;
            transform: rotate(0.1deg) scaleY(0);
            opacity: 0;
            transition: all 1s;
        }


        nav ul.slider {
            transform: rotate(0);
            opacity: 1;
        }

        nav ul li a {
            font-family: 'Sonsie One', cursive;
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
    }

    /*end header*/

    /*start footer*/
    footer {
        background-color: #35363A;
        margin-top: 400px;
    }

    .column-footer {
        display: flex;
        color: white;
        justify-content: space-evenly;
        margin: 0 30px
    }

    .content-footer {
        height: 100px
    }

    .copyright {
        text-align: center;
        background-color: gray;
    }
</style>