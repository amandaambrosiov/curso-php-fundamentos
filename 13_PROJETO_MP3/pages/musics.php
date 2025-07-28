<a href="?page=albuns"><i class="fa-solid fa-arrow-left voltar"></i></a>
<nav class="navbar">
    <div class="container-fluid">
        <h1>Músicas do Álbum <?= $_GET['album'] ?></h1>
        <a href="?page=new_music&album=<?= $_GET['album'] ?>" class="btn btn-add">+ Cadastrar Nova Música</a>
    </div>
</nav>

<hr>

<?php
$album = $_GET['album'];
$musics = getMusics($album);

foreach ($musics as $music):
?>

    <div class="audio container-fluid px-0 mb-4">
        <h5 class="text-white"><?= basename($music) ?></h5>
        <audio src="<?= $music ?>" controls class="audio-player w-100"></audio>
    </div>

<?php
endforeach;
?>