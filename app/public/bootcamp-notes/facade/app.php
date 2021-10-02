<?php

class SpotifyDownloader
{
    protected $spotify;
    protected $ffmpeg;

    public function __construct(string $spotifyKey)
    {
        $this->spotify = new SpotifyAPI($spotifyKey);
        $this->ffmpeg = new FFMpeg();
    }

    public function downloadVideo(string $playlist): void
    {
        // ...
    }
}
