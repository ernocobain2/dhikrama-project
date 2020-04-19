<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Sonsie+One&display=swap');

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }

    nav .logos {
        font-family: 'Sonsie One', cursive;
        font-display: swap;

    }

    nav .logos a {
        color: #FFFFFF
    }

    body {
        font-family: 'Montserrat', sans-serif;
        font-display: swap;
        overflow-x: hidden;
    }

    nav {
        display: flex;
        background-color: #333333;
        justify-content: space-around;
        padding: 10px 0;
        position: relative;
        z-index: 1;
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
        color: #DDDF02
    }

    nav ul li a:hover {
        color: #FFDF02
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

    /* mobile */
    @media screen and (max-width: 768px) {

        nav ul {
            width: 40%
        }
    }

    @media screen and (max-width: 576px) {
        nav ul {
            flex-direction: column;
            position: absolute;
            background-color: #333333;
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

        .extra {
            display: none;
        }

        .menu-burger {
            display: flex
        }
    }
</style>