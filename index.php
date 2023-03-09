<?php 
    // include 'home.html';
    $dir = './';
    $listDir = scandir($dir);
    // echo $listDir ;
    // var_dump($listDir)
    $pattern = '/[0-9]*[a-z]*.mp4/';
    $dataContant = file_get_contents('./data.json');
    $data = json_decode($dataContant);
    $videoList = [];
    foreach ( $listDir as $video ) {

        if (preg_match($pattern,$video)) {
            $videoList[] = $video;
            // echo $videoList;
            // var_dump($data);
        };
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <title>learn||platform</title>
</head>
<body>
    <?php  
        echo "<script>
        let lesVideos =  ".$videoList ."
        </script>"
    ?>
    <!-- ==============================================javScript======================================== -->
    <script>
        // alert(lesVideos)
        export lesVideos
    </script>
    <!-- ================================================================================================ -->
    <div class="root">
        <div class="curr-video">
            <div class="video-toPlay" width="780" height="460">
                
                <video width="780" height="460" controls preload="metadata" poster="001 Welcome.mp4" playsinline autoplay muted loop
                autopictureinpicture="flase"
                >
                    <source src='<?php echo $videoList[1] ?> 'type="video/mp4" />
                    lopa dopa
                </video>
            </div>
            <div class="video-toPlay-data">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet molestias perspiciatis officiis quis expedita, fugiat eos blanditiis tempore corrupti eveniet autem, cum tenetur itaque unde neque delectus, aliquid voluptas enim?
            </div>
        </div>
        
        <div class="video-list">
          
                <div class="vidios_toWatch">

                    <video width="222" height="160"  preload="metadata" poster="001 Welcome.mp4" playsinline autoplay muted loop 
                    autopictureinpicture="flase"
                    >
                        <source src='<?php echo $videoList[0] ?> 'type="video/mp4" />
                        lopa dopa
                    </video>
                    <div class="vidios_toWatch_data">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed modi delectus magnam distinctio aspernatur earum dolor dignissimos tempore labore facilis eaque placeat, enim accusantium veritatis numquam consequuntur minima esse deleniti.</div>
                </div>
                

                
    
    
           
        </div>
    </div>
</body>
</html>