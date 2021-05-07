<html>
    <head>
        <style>
            body{
            font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
            }
            .card{
                float:left;
                padding: 15px;
                border-radius: 10px;
                width:30%;
                box-shadow: 5px 10px #888888;
            }
            h1{
            color:#687980;
            }
            .button-logout{
                float: left;
                width: 90%;
                padding: 10px;
                background-color: red;
                color: white;
                text-decoration: none;
                border-radius: 10px;
                text-align: center;
                margin: 5px;
            }
            .button-logout:hover{
                background-color: transparent;
            }
            .button-home{
                float: left;
                width: 90%;
                padding: 10px;
                background-color: #81b214;
                color: white;
                text-decoration: none;
                border-radius: 10px;
                text-align: center;
                margin: 5px;
            }
            .button-home:hover{
                background-color: transparent;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Profile<h1>
            <hr>
            <br>
            <h2>{{session('user')}}</h2>
            <a href='/list' class="button-home">home</a>
            <a href='/logout' class="button-logout">logout</a>
        </div>
    </body>
</html>
