<!doctype html>
<html>

<head>
    <title>Birthday Reminder</title>
    <link rel=stylesheet href=reminder.css>
    <?php include "../main.php" ?>
    <?php include "../meta.php" ?>
    <meta name=description content="A website with a wide variety of showcased programming projects, including a birthday reminder.">
    <meta name=keywords content="code, programming, GoProgram, python, code, calendar, interactive, birthday reminder">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=subject content=programming>
</head><?php include "../header.php" ?>
<section class="colour">
    <?php echo image("images/reminder.jpg", "Calendar", "text-darken", array("id" => "top", "text" => "<h1>Birthday Reminder</h1>"));   ?>
    <div class='section image'>
        <div class='text'>
            <p>If you would like to use the birthday reminder, you can either download the python source code and run it or download the executable file. This software acts as a calendar, allowing you to add or remove birthdays of friends, family or other. Additionally This is such a useful tool to have running all the time!</p>
        </div>
        <?php echo image("images/birthday-reminder-demo.jpg", "Birthday Reminder Demo", "floor"); ?>
    </div>
    <?php 
    echo section("Source Code","Download the python source files, and run the \"Birthday Reminder.py\" file. This code was written a very long time ago, and then revived, so it is not that clear. Hopefully, the comments will help! Note: the python files already contain the celebrity birthdays; to remove them, delete the files in the \"Months\" folder.","images/birthday-reminder-demo.jpg");
echo section("Installer","You can run the Windows installer with a few options to customise the software for what you need. You can choose whether to include the celebrity birthdays or start from scratch. It no longer requires an interpreter to run and can be used just like any other software.","images/installer.png");
?>
</section><?php include "../footer.php" ?><?php include "../scripts.php" ?>

</html>