<nav class="navbar">
  <div class="container-fluid">
    <h1>Biblioteca - Álbuns</h1>
    <a href="?page=new_album" class="btn btn-add">+ Adicionar novo álbum</a>
  </div>
</nav>

<hr>

<div class="row">
    <?php
    $albuns = getAlbuns();

    foreach ($albuns as $album):

        $infoAlbum = explode('/', $album);
        $nameAlbum = $infoAlbum[1];
        // $imgAlbum = $album . '/' . $nameAlbum . '.jpg';
        $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
        <div class="col-3 album">
            <a href="?page=musics&album=<?= $nameAlbum ?>">
                <img src="<?= $imgAlbum ?>" class="img-album" alt="<?= $nameAlbum ?>">
                <h2 class="mt-2 mb-4"><?= $nameAlbum ?></h2>
            </a>
        </div>
    <?php
    endforeach;
    ?>
</div>