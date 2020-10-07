<footer><?php function icon($type)
{
$lower = strtolower($type);
echo "<div  class='$lower icon'><a href=/$lower target=_blank data-toggle=tooltip data-placement=top title=$type><img alt=$type class=img src=/images/$type.png></a></div>";
}
icon("YouTube");
icon("Patreon");
icon("GitHub");
icon("PeoplePerHour");
icon("LinkedIn");
icon("email"); ?></footer>