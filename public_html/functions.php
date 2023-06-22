<?php 

$dir = 'sculptures-ceramiques';

if(!is_dir($dir)) return false;

$files = scandir($dir);

$images = array();

$output = '';

$i = 0;

foreach ($files as $file) {
    $path = $dir . '/' . $file;
    if(!is_file($path)) continue;
    $exif = exif_read_data($path);
    $desc = isset($exif['ImageDescription']) ? $exif['ImageDescription'] : '';
    if (is_file($path)) {
        $images[] = $file;
        $i++;
        $output .= '<img src="'.$dir.'/'.$file.'" alt="'.$desc.'" data-image="'.$file.'" class="image-bubble-next" style="animation-delay:'.$i.'00ms">';
    }
}

?>