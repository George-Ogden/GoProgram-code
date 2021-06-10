<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"><link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet"><link rel=stylesheet href=/main.css?v=28><?php
function image($src, $description, $type = "", $data = array())
{
if (strpos($type, "text") !== false) {

$cover = "<div class='cover " . substr($type, 5) . "'><div class='centre caption text-white text-center'>$data[text]</div></div>";
} else {
$cover = "<div class='cover $type'><div class='bottom caption text-white text-center'>$description</div></div>";
}
if ($type == "colour") {
$cover = "<div class='cover $type' style='background:$data[colour]'><div class='bottom text text-white'>$description</div></div>";
} elseif ($type == "none") {
$cover = "";
} elseif ($type == "text-colour") {
$cover = "<div class='cover $type' style='background:$data[colour]'><div class='centre text text-white'>$data[text]</div></div>";
}
if (array_key_exists('id', $data)) {
return "<div class='image' id='$data[id]'><img src='$src' alt='Image Unavailable ($description)'>$cover</div>";
} else {
return "<div class='image'><img src='$src' alt='Image Unavailable ($description)'>$cover</div>";
}
}
function video($url, $id = "")
{
return "<div class='video mx-auto embed-responsive embed-responsive-16by9' id=$id><iframe class=embed-responsive-item src='$url' allow='autoplay encrypted-media' allowfullscreen>Video Unavailable</iframe></div>";
}
function section($title, $description, $image = "", $id = "")
{
if ($id == "") {
$id = strtolower(explode(" ", $title, 1)[0]);
if ($image == "") {
$image = "images/" . strtolower($title) . ".jpg";
}
}
return "<div class='section image' id='$id'><div class='text'><h2 class=pb-5>$title</h2><p class=pb-5>$description</p></div>" . image($image, $title, "floor") . "</div>";
}
function source($git, $code = "")
{
if ($code == "") {
$file = explode("/", $git);
$file = strtolower(end($file));
$extension = explode(".", $file);
$extension = end($extension);
$code = "/scripts/$extension/$file";
}
return "<div class='section icons'><a class='icon' href=$git target=_blank><ion-icon name=logo-github></ion-icon><p>Code on GitHub</p></a><a class=icon href='$code' target=_blank download><ion-icon name=code-download-outline></ion-icon><p>Download Code</p></a></div>";
}
function display($title, $code, $git, $image = "")
{
if ($image == "") {
$image = "images/$title.jpg";
}
$url = "https://youtube.com/embed/$code";
if (strpos($code, "?") == false) {
$url .= "?mute=1";
} else {
$url .= "&mute=1";
}
return "<div id='" . str_replace(" ", "_", (str_replace("= ", "", strtolower($title)))) . "' class='content d-none'><div class='section image'><div class='text'><h2>$title</h2></div>" . image($image, $title, "none") . "</div>" . "<div class='section video mx-auto'>" . video($url) . "</div>" . source($git) . "</div>";
}
function generate($data)
{
$selector = "<div class='selection section'>";
$main = "";
foreach ($data as $piece) {
if (!array_key_exists('image', $piece)) {
$piece["image"] = "images/$piece[title].jpg";
}
$selector .= "<a class='select' href='#" . str_replace(" ", "_", (str_replace("= ", "", strtolower($piece["title"])))) . "'>" . image($piece["image"], $piece["title"], "floor") . "</a>";
$main .= display($piece["title"], $piece["code"], $piece["git"], $piece["image"]);
}
return str_replace_n("selected ", "", str_replace_n("class='", "class='selected ", $selector, 2), 1) . "</div>" . str_replace_n(" d-none", "", $main, 1);
}
function str_replace_n($from, $to, $content, $n)
{
$from = '/' . preg_quote($from, '/') . '/';

return preg_replace($from, $to, $content, $n);
}
function code($data)
{
$selector = "<div class='selection section'><ul class='pagination mb-0'>";
$main = "";
foreach ($data as $piece) {
if (!array_key_exists('file', $piece)) {
$piece["file"] = "";
}
$selector .= "<li class='page-item text-center'><a class=page-link href='#" . str_replace(" ", "_", (str_replace("= ", "", strtolower($piece["title"])))) . "'>$piece[title]</a></li>";
$main .= "<div class='section content code d-none' id=" . str_replace(" ", "_", (str_replace("= ", "", strtolower($piece["title"])))) . "><h2>$piece[title]</h2>" . source($piece["git"], $piece["file"]) . "</div>";
}
return str_replace_n("page-link", "'page-link selected'", $selector, 1) . "</ul></div>" . str_replace_n(" d-none", "", $main, 1);
}
$pos = 1;
function skills(){
return image("/images/logos.jpg", "Hand Drawn Logos", "text-overlay", ["text" => "<h2 class=pad-1>Skills</h2><p>These are the main skills that I am proficient in, in picture format. If you are looking for a skill that is not listed, feel free to contact me.</p>"]);
}
function pph(){
return "<div class='section image' id=pph><div class=text><h2 class=pb-5>PeoplePerHour</h2><p class=pb-5>PeoplePerHour is the platform that I use for my freelancing. They have a wide range of features that make freelancing easier for buyers and freelancers. These include an escrow account, which keeps your money safe until work is complete, a rating system so that you can find the best freelancers and communications features so that we can keep in touch during work. <a href=https://www.goprogram.co.uk/pph>Have a look at my profile to see some of my previous work.</a></p></div>" . image("/about/images/george ogden.jpg","George Ogden","floor") . "</div>";
}
function about(){
return section("George Ogden","I have a vision to make high-quality, automated technology services available to everyone so that the world functions better. I use my experience as a software and web developer to create websites and software that present or demonstrate the power of technology to others through clean, yet beautifully crafted code that solves problems effectively.<br><br>Working as a freelance software and web developer allows me to apply my knowledge and creativity to other people’s ideas and problems. Hence, I can rise to new challenges and learn new skills in each job that enhance my ability as a programmer.","/about/images/george ogden.jpg");
}
?>