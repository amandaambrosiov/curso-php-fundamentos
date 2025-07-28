<a href="?page=albuns">Voltar para Álbuns</a>
<h1>Cadastrar Nova Música para Álbum <?= $_GET['album'] ?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group mb-2">
        <input type="file" name="audio" class="form-control" id="">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_GET['album'];

    $path = "albuns/{$album}/musics/";

    if (!is_dir($path)) {
        mkdir($path);
    }

    if (move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'])) {
        header("Location: ?page=musics&album={$album}");
    } else {
        echo 'Falha no Upload!';
    }
}

?>