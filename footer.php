<footer><?php function icon($type)
{
$lower = strtolower($type);
echo "<div  class='$lower icon'><a href=/$lower target=_blank data-toggle=tooltip data-placement=top title=$type><img alt=$type class=img src=/images/$type.png></a></div>";
}
icon("YouTube");
icon("GitHub");
icon("PeoplePerHour");
icon("CodeChef");
icon("LinkedIn"); ?>
</footer>