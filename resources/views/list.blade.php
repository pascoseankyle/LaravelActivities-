<html>
<head>
    <style>
        body{
            font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
        }
        table{
            width:100%
        }
        th, td {
            border-bottom: 1px solid #ddd;
            padding: 20px;
        }
        a{
            width: 150px;
            padding: 10px;
            background-color:#81b214;
            color:white;
            text-decoration:none;
        }
        a:hover{
            background-color:white;
            color:#81b214;
        }
        .delete{
            width: 150px;
            padding: 10px;
            background-color:#ce1f6a;
            color:white;
            text-decoration:none;
            border:none;
        }
        .delete:hover{
            background-color:white;
            color:#ce1f6a;
        }
        .edit{
            width: 150px;
            padding: 10px;
            background-color:#5b8a72;
            color:white;
            text-decoration:none;
            border:none;
        }
        .edit:hover{
            background-color:white;
            color:#5b8a72;
        }
    </style>
</head>

<body>
<h1>Laravel Posts | Activity 3 </h1>
<hr>
<br>
    <a href="add">Add New Post +</a>
    <table>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <?php $no=1; ?>
        @foreach($posts as $post)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$post['Title']}}</td>
            <td>{{$post['Description']}}</td>
            <td>
            <a href="{{'edit-data/'.$post->id}}" class="edit">Edit</a>
            <a href="{{'delete-data/'.$post->id}}" class="delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>