<style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    * {
        padding: 0px;
        margin: 0px;
        text-decoration: none;
        box-sizing: border-box;
        list-style: none;
    }

    a {
        color: black;
    }

    body {
        background-color: navajowhite;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    img {
        max-width: 100%;
        display: block;
    }

    .title {
        color: black;
        font-style: italic;
        font-family: 'Pacifico', cursive;
        font-size: 30px;
    }

    .header {
        padding: 20px 20px;
        background-color: chocolate;
        border: 3px solid black;
        text-align: center;
        
    }

    .container {
        padding: 60px;
    }

    .container-bolos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .container-bolos .bolos {
        flex: 1 1 300px;
        padding: 10px;
        border: 1px solid black;
        box-shadow: 2px 5px 10px black;
        border-radius: 5px;
    }

    .container-bolos .bolos .bolo-title {
        background: chocolate;
        padding: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    
    .bolo-title h2 {
        text-align: center;
    }
    
    .bolo-text {
        font-size: .9rem;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 500;
    }

    .container-bolos .bolos img {
        padding-bottom: 10px;
    }

    .sobre h2 {
        padding-bottom: 10px;
    }

    .sobre p {
        padding-bottom: 10px;
        font-weight: 500px;
        font-size: 1rem;
    }

    .formCadastroProduto {
        display: flex;
        flex-direction: column;
    }

</style>