<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_POST['name'];
    $path = "albuns/{$album}";

    if (!is_dir($path)) {
        mkdir($path);
    }

    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);

    $extension = $fileInfo[1];
    $nameImage = $_POST['name'] . '.' . $extension;

    if (move_uploaded_file($file['tmp_name'], $path.'/'.$nameImage)) {
        header('Location: ?page=albuns');
    } else {
        echo 'Falha no Upload!';
    }
}
?>

<a href="?page=albuns"><i class="fa-solid fa-arrow-left voltar"></i></a>
<h1>Cadastrar Novo Álbum</h1>

<form class="form" action="#" method="post" enctype="multipart/form-data">
    <div class="form-group mb-2">
        <label for="" class="mb-2 fw-bold">Nome do álbum:</label>
        <input type="text" name="name" id="" placeholder="Nome do Álbum " class="form-control">
    </div>
    <div class="form-group mb-2">
        <label for="" class="mb-2 fw-bold">Imagem do álbum:</label>
        <input type="file" name="image" class="form-control" id="">
    </div>
    <button type="submit" class="btn btn btn-add">Cadastrar</button>
</form>
