
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <style>
        body{        
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        img {
            max-width: 100%;
            height: 300px;
        }
        .buttons {
            display: flex;
            justify-content: space-around;
            top: 20px;
            left: 20px;
        }

        .buttons button {
            width: 150px;
            height: 50px;
            background-color: white;
            margin: 20px;
            color: #568fa6;
            position: relative;
            overflow: hidden;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 500;
            text-transform: uppercase;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 3px;
        }

        .buttons button:before,
        .buttons button:after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #44d8a4;
            transition: all 0.3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button:before {
            right: 0;
            top: 0;
            transition: all 0.5s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button:after {
            left: 0;
            bottom: 0;
        }

        .buttons button span {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            margin: 0;
            padding: 0;
            z-index: 1;
        }

        .buttons button span:before,
        .buttons button span:after {
            content: "";
            position: absolute;
            width: 2px;
            height: 0;
            background-color: #44d8a4;
            transition: all 0.3s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button span:before {
            right: 0;
            top: 0;
            transition: all 0.5s cubic-bezier(0.35, 0.1, 0.25, 1);
        }

        .buttons button span:after {
            left: 0;
            bottom: 0;
        }

        .buttons button p {
            padding: 0;
            margin: 0;
            transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .buttons button p:before,
        .buttons button p:after {
            position: absolute;
            width: 100%;
            transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
            z-index: 1;
            left: 0;
        }

        .buttons button p:before {
            content: attr(data-title);
            top: 50%;
            transform: translateY(-50%);
        }

        .buttons button p:after {
            content: attr(data-text);
            top: 150%;
            color: #44d8a4;
        }

        .buttons button:hover:before,
        .buttons button:hover:after {
            width: 100%;
        }

        .buttons button:hover span {
            z-index: 1;
        }

        .buttons button:hover span:before,
        .buttons button:hover span:after {
            height: 100%;
        }

        .buttons button:hover p:before {
            top: -50%;
            transform: rotate(5deg);
        }

        .buttons button:hover p:after {
            top: 50%;
            transform: translateY(-50%);
        }

        .buttons button.start {
            background-color: #44d8a4;
            box-shadow: 0px 5px 10px -10px rgba(0, 0, 0, 0.2);
            transition: all 0.2s ease;
        }

        .buttons button.start p:before {
            top: -50%;
            transform: rotate(5deg);
        }

        .buttons button.start p:after {
            color: white;
            transition: all 0s ease;
            content: attr(data-start);
            top: 50%;
            transform: translateY(-50%);
            animation: start 0.3s ease;
            animation-fill-mode: forwards;
        }

        @keyframes start {
            from {
                top: -50%;
            }
        }

        .buttons button.start:hover:before,
        .buttons button.start:hover:after {
            display: none;
        }

        .buttons button.start:hover span {
            display: none;
        }

        .buttons button:active {
            outline: none;
            border: none;
        }

        .buttons button:focus {
            outline: 0;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card text-dark bg-light mb-3 mx-auto" style="max-width: 700px;">
        <div class="row g-0 p-2">
            <div class="col-md-4">
                <img src="<?= base_url('images/' . $foto1) ?>"  alt="Gambar" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">

                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Lengkap </td>
                            <td>
                                <p>: <?= $data ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>NIM </td>
                            <td>
                            <p>: <?= $nim ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Asal Prodi </td>
                            <td>
                            <p>: <?= $asal_prodi ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Hobi </td>
                            <td>
                            <p>: <?= $hoby ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Skill </td>
                            <td>
                            <p>: <?= $skills ?></p>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <form action="/home/index">
        <div class="buttons">
            <button class="btn" type="submit">
                <span></span>
                <p data-start="good " data-text="Ke Beranda?" data-title="Kembali"></p>
            </button>
        </div>
    </form>
</body>

</html>