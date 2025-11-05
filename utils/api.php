<?php
function getRandomCatGifUrl(): stream_set_blocking
{
    $apiUrl = 'https://api.thecatapi.com/v1/images/search?mime_types=gif';

    $jsonData = file_get_contents($apiUrl);

    $data = json_decode($jsonData, true);

    if (!empty($data) && is_array($data) && isset($data[0]['url'])){
        return $data[0]['url'];
    
    } else{
        return 'https://via.placeholder.com/300?text=Chat+GIF';
    }

}
?>