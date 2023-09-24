<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <main class="main">
        <section class="container-messages">

          <div class="alert">no hay ningun mensaje 😢</div>
        </section>
        <section class="container-input-message">
            <div class="container-input">
                <input class="input-message" type="text" placeholder="Escribe un mensaje...">
            </div>
            <button class="button-send-message" type="submit"><i class='bx bx-send'></i></button>
        </section>
    </main>
    <!-- <script src="/socket.io/socket.io.js"></script> -->
    <script src="https://cdn.socket.io/4.5.4/socket.io.min.js"></script>
    <script src="./index.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            padding: 10px 20%;
        }

        .main {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .container-messages {
            width: 100%;
            height: 90%;
            position: relative;
        }

        .container-input-message {
            width: 100%;
            height: 56px;
            display: flex;

        }

        .container-input {
            width: 100%;
            height: 100%;
            border-radius: 50px;
            border: solid 2px rgb(92, 92, 92);
            padding: 10px 20px;
        }

        .container-input:hover{
            border: solid 2px black;
        }

        .container-input input{
            width: 100%;
            height: 100%;
            font-size: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            border: none;
            outline: none;
        }

        .button-send-message{
            width: 56px;
            font-size: 40px;
            border: none;
            background-color: transparent;
            color: rgb(92, 92, 92);
        }

        .button-send-message:hover{
            color: black;
        }

        .alert{
            width: max-content;
            height: max-content;
            padding: 5px 10px;
            visibility: hidden;
            background-color: rgb(228, 120, 120);
            position: absolute;
            border-radius: 5px;
            font-size: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .emisor{
                width: 100%;
                height: 40px;
                display: flex;
                justify-content: end;
                align-items: center;
                padding: 5px 20px;
                list-style: none;
                background-color: rgb(80, 153, 80);
                margin: 10px 0;
                border-radius: 5px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 20px;
                font-weight: 600;
            }

            .receptor{
                width: 100%;
                height: 40px;
                display: flex;
                justify-content: start;
                align-items: center;
                padding: 5px 20px;
                list-style: none;
                background-color: rgb(130, 130, 247);
                margin: 10px 0;
                border-radius: 5px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 20px;
                font-weight: 600;
            }
    </style>
</body>

</html>