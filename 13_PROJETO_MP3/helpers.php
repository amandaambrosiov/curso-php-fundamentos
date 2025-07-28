<?php

function getAlbuns()
{
    $albuns = glob('albuns/*');

    return $albuns;
}

function getMusics($album)
{
    $album = trim($album);
    $path = "albuns/$album/musics/*.mp3";

    return glob($path);
}
