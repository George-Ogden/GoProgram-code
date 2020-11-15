 <!doctype html>
 <html>
 <head>
     <title>UNIX Commands</title>
     <?php include "../main.php" ?>
     <?php include "../meta.php" ?>
     <meta name=description content="Install the UNIX CoreUtils for use on Windows machines. This enables better use of the command line without the use of WSL.">
     <meta name=keywords content="unix commands on windows">
     <meta name=viewport content="width=device-width,initial-scale=1">
     <meta name=subject content="UNIX commands">
 </head><?php include "../header.php" ?>
 <section class="colour">
     <?php echo image("images/vim.jpg", "UNIX Commands", "text-darken", ["id" => "top", "text" => "<h1>UNIX Commands</h1>"]);  ?>
     <div class="section text text-center">
         <p>On Windows, the command line interface is very limited, especially when compared to other operating systems. This makes using it quite difficult, and this is even more challenging as the commands are often different between operating systems. The Coreutils, as well as other commands have been compiled on a Windows machine so that you can run these commands from the command line without using virtual machines or containers. It makes using the command line a lot easier.</p>
     </div>
     <?php
        echo section("Installer", "You can <a href=/scripts/exe/unix-commands-setup.exe download>run the Windows installer</a> with a few options to customise the software for what you need. Additionally, it will add the program to the PATH environmental variable so that the tools are available from the command line.", "images/installer.jpg");
        ?>
 <?php include "../footer.php" ?></section><?php include "../scripts.php" ?>
 </html>