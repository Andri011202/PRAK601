<?php
$imageURL = "https://i.postimg.cc/GhhSfVsK/foto3x4.jpg";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        body{        
            position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

        }

        .card{
            width: 850px;
            border: none;
            border-radius: 10px;
            
            background-color: #fff;
        }

        h4 {
            font-size: 100px;
        }
    </Style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4 d-flex justify-content-center">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <div class="image">
                <img src="<?= base_url('images/' . $foto1) ?>" class="rounded" width="155" >
                </div>
                <div class="ml-6 w-100">       
                   <h1 class="mb-0 mt-0 ms-4"><?= $data; ?></h4>
                   <span class="mb-0 mt-0 ms-4"><?= $nim; ?></span>
                   <div class="button mt-2 d-flex flex-row align-items-center">
                    <button onclick="location.href='/home/biodata'" href="/home/biodata" class="ms-4 btn btn-sm btn-primary w-100 ml-2">BIODATA</button>          
                   </div>
                </div>           
                </div>         
            </div>       
         </div>
</body>
</html>