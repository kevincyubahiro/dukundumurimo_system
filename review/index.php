<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    body{
        background-image: url('https://i.gifer.com/J4o.gif');
    }
    nav{
        width: 100%;   
    }
    a{
        margin-left: -2px;
        padding: 30px;
       text-decoration:"none";
        color: beige;
    }
    ul{
        display: flex;
    }
    li{
        list-style-type: none;
    }
img{
    padding:90px;
}

   </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ms-auto">
                <li><a href=""class=' btn btn-success m-2 btn-hover-info'>home</a></li>
                <li><a href="insert.php"class=' btn btn-success m-2'>manager</a></li>
             <li><a href="../food/insert.php"class=' btn btn-success m-2'>food</a></li>
                <li><a href="insert_import.php"class=' btn btn-success m-2'>import</a></li>
                <li><a href="insert_export.php"class=' btn btn-success m-2'>export</a></li>
                <li><a href=""class=' btn btn-success m-2'>report</a></li>
                <li><a href="login.php" class=' btn btn-danger m-2'>logout</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>