<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
<link rel=stylesheet href=/main.css>
<?php
function image($src,$description,$type="",$data=array()) {
    if (strpos($type, "text") !== false) {

        $cover = "<div class='cover ".substr($type,5)."'><div class='centre caption text-white text-center'>$data[text]</div></div>";
    }
    else {
        $cover = "<div class='cover $type'><div class='bottom caption text-white text-center'>$description</div></div>";
    }
    if ($type == "colour"){
        $cover = "<div class='cover $type' style='background:$data[colour]'><div class='bottom text text-white'>$description</div></div>";
    } elseif ($type == "none"){
        $cover = "";
    } elseif ($type == "text-colour"){
        $cover = "<div class='cover $type' style='background:$data[colour]'><div class='centre text text-white'>$data[text]</div></div>";
    } 
    if (array_key_exists('id', $data)) {
        return "<div class='image' id='$data[id]'><img src='$src' alt='Image Unavailable ($description)'>$cover</div>";
    } else {
        return "<div class='image'><img src='$src' alt='Image Unavailable ($description)'>$cover</div>";
    }
}
function video($url,$id="") {
    return "<div class='video mx-auto embed-responsive embed-responsive-16by9' id=$id><iframe class=embed-responsive-item src='$url' allow='autoplay encrypted-media' allowfullscreen>Video Unavailable</iframe></div>" ;
}
function section($title,$description,$image="",$id=""){
    if ($id == ""){
        $id = strtolower(explode(" ",$title,1)[0]);
        if ($image == ""){
            $image = "images/".strtolower($title).".jpg";
        }
    }
    return "<hr><div class='section image' id=$id><div class='text'><h2>$title</h2><p>$description</p></div>".image($image, $title, "floor")."</div>";
}
function source($git,$code){
    return "<div class='section icons'><a class='icon' href=$git target=_blank><ion-icon name=logo-github></ion-icon><p>Code on GitHub</p></a><a class=icon href='$code' target=_blank download><ion-icon name=code-download-outline></ion-icon><p>Download Code</p></a></div>";
}
function display($title,$code, $git, $image=""){
    if ($image==""){
        $image = "images/$title.jpg";
    }
    return "<hr><div id='".strtolower($title)."'><div class='section image'><div class='text'><h2>$title</h2></div>".image($image, $title, "none")."</div>"."<hr><div class='section video mx-auto'>". video("https://youtube.com/embed/$code?mute=1") ."</div><hr>" .source($git,"pyscripts/" . strtolower($title) . ".py") . "</div>"; 
}
function generate($data){
    $selector = "<div class='selection section'>";
    $main = "";
    foreach ($data as $piece){
        if (! array_key_exists('image', $piece)){
            $piece["image"] = "images/$piece[title].jpg";
        }
        $selector .= image($piece["image"],$piece["title"],"none"); 
        $main .= display($piece["title"],$piece["code"],$piece["git"],$piece["image"]); 
    }
    return $selector . "</div>" . $main;
}