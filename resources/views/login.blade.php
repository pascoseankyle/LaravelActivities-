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
            .card input{
                width: 100%;
                padding:10px;
            }
            .card button{
                width: 100%;
                background-color: #81b214;
                padding:10px;
                border: none;
                color: white;
            }
            h1{
            color:#687980;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Login</h1>
            <hr>
            <br>
            <form action="user" method="POST">
            @csrf
                <label for="usermame">Username</label>
                <input id="username" name="username" type="text" placeholder="username">
                <br>
                <br>
                <label for="usermame">Password</label>
                <input id="password" name="password" type="password" placeholder="password">
                <br>
                <br>
                <button type="submit"><b>login</b></button>
            </form>
        </div>
    </body>
<html>