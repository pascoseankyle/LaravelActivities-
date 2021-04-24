<html>
<head>
    <style>
        body{
            font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
        }
        input{
            width: 30%;
            padding:10px;
            border-top:none;
            border-left:none;
            border-right:none;
        }
        button{
            width: 150px;
            padding: 10px;
            background-color:#81b214;
            color:white;
            border:none
        }
        button:hover{
            background-color:white;
            color:#81b214;
        }
        a{
            width: 150px;
            padding: 10px;
            background-color:lightgray;
            color:black;
            text-decoration:none;
        }
        a:hover{
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
<h1>Add a Post</h1>
<hr>
<br>
<form action="add" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="text" name="Title" placeholder="Title">
    <br>
    <br>
    <input type="text" name="Description" placeholder="Description">
    <br>
    <br>
    <label for="img">Add a photo</label>
    <input type="file" name="img" id="img" @error('img') is-invalid @enderror value="{{ old('img') }}"  autocomplete="img">
    <br>
    <br>
    <a href="list">back</a>
    <button type="submit">Add</button>
</form>
</body>
</html>