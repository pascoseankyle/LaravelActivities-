<html>
<head>
    <style>
        body{
            font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
        }
        h1{
            color:#687980;
        }
        input{
            outline:none;
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
        img{
            width:100%;
            height:100%;
        }
        .div-img{
            padding:10px;
            background-color:#2b2e4a;
            width:400px;
            height:380px;
        }
    </style>
</head>
<body>
<h1>Edit a Post</h1>
<hr>
<br>
<form action="/edit" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="Title">Title: </label>
    <input type="text" name="Title" value="{{$data['Title']}}">
    <br>
    <br>
    <label for="Title">Description: </label>
    <input type="text" name="Description" value="{{$data['Description']}}">
    <br>
    <br>
    <div class="div-img">
     @if ($data->img)
        <img src="{{ asset('/storage/img/'.$data->img) }} ">
        @else
            <h3 style="color:white">No image available<h3>
    @endif
    </div>
    <br>
    <br>
    <a href="../list"><i class="fas fa-arrow-circle-left"></i>&nbsp Back</a>
    <button type="submit"><i class="fas fa-save"></i>&nbsp Update</button>
</form>
</body>
<script src="https://kit.fontawesome.com/c4442c2032.js" crossorigin="anonymous"></script>
</html>