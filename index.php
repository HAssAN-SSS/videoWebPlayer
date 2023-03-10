<?php 
    ini_set('display_errors', 'On');

    include 'index.html';
    $videosPaths = glob('./18 Day 17 - Movie App/*.mp4');
    $dataFile = fopen('data.json','w');
    foreach ($videosPaths as $videoPath) {
        $videoObj = [
            'name' => substr($videoPath , 0 ,-4 ),
            'path' => $videoPath,
        ];
        $videosListObj [] = $videoObj;
    };
    fwrite($dataFile,json_encode($videosListObj));
    fclose($dataFile);
    


        
        
        
?>