<hr><footer>
        <?php function icon($type){
                $lower = strtolower($type);
                echo "<div class='$lower icon'><a href=/$lower target=_blank><span class='tooltip_ top'>$type</span><img alt=$type class=img src=/images/$type.png></a></div>";
        }
        icon("YouTube");
        icon("Patreon");
        icon("GitHub");
        icon("PeoplePerHour");
        icon("LinkedIn");
        icon("email");?>
    
</footer>