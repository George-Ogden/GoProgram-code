<link rel=stylesheet href=main.css>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
function image($src,$description,$type="none",$data=array()) {
    $cover = "<div class='cover $type'><div class='bottom text text-white'>$description</div></div>";
    if ($type == "colour"){
        $cover = "<div class='cover $type' style='background:$data[colour]'><div class='bottom text text-white'>$description</div></div>";
    } elseif ($type == "none"){
        $cover = "";
    } elseif ($type == "colour-text"){
        $cover = "<div class='cover $type' style='background:$data[colour]'><div class='centre text text-white'>$data[text]</div></div>";
    } elseif ($type == "text"){
        $cover = "<div class='cover'><div class='centre text text-white'>$data[text]</div></div>";
    }elseif ($type == "darken-text"){
        $cover = "<div class='cover darken'><div class='centre text text-white'>$data[text]</div></div>";
    }
    if (array_key_exists('id', $data)) {
        echo "<div class='image' id='$data[id]'><img src=$src alt='Image Unavailable ($description)'>$cover</div>";
    } else {
        echo "<div class='image'><img src=$src alt='Image Unavailable ($description)'>$cover</div>";
    }
}


?>