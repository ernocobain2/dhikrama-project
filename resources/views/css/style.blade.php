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
    }

    nav {
        display: flex;
        background-color: #333333;
        justify-content: space-around;
        padding: 10px 0;
    }

    nav ul {
        display: flex;
        justify-content: space-between;
        width: 30%;
        align-items: center;
        font-style: bold;
    }

    nav ul li a {
        font-size: 0.8em;
        color: #DDDF02
    }

    nav ul li a:hover {
        color: #FFDF02
    }

    /* mobile */
    @media screen and (max-width: 768px) {
        nav ul {
            width: 50%
        }
    }

    @media screen and (max-width: 576px) {
        nav ul {
            display: none;
        }
    }
</style>