 <!doctype html>
 <html>

 <head>
     <title>UNIX Commands</title>
     <link rel=stylesheet href=commands.css>
    <?php include "../main.php" ?>
    <?php include "../meta.php" ?> <meta name=description content="A website with a wide variety of showcased programming projects, including UNIX commands for Windows.">
     <meta name=keywords content="code, programming, GoProgram, python, code, unix, interactive, coreutils, core util, windows, linux, shell, bash">
     <meta name=viewport content="width=device-width,initial-scale=1">
     <meta name=subject content=programming>
 </head><?php include "../header.php" ?>
 <section class="colour">
 <?php echo image("images/vim.png", "UNIX Commands", "text-darken", array("id" => "top", "text" => "<h1>UNIX Commands</h1>"));  ?>
     
 <div class="section text text-center">
        <p>On Windows, the command line interface is very limited, especially when compared to other operating systems. This makes using it quite difficult, and this is even more challenging as the commands are often different between operating systems. The Coreutils, as well as other commands have been compiled on a Windows machine so that you can run these commands from the command line without using virtual machines or containers. It makes using the command line a lot easier.</p></div>
   <?php 
echo section("Installer","You can run the Windows installer with a few options to customise the software for what you need. Additionally, it will add the program to the PATH environmental variable so that the tools are available from the command line.","images/installer.png");
?>
 </section><?php include "../footer.php" ?></script><?php include "../scripts.php" ?>

 </html>