<!doctype html>
<html lang=en>

<head>
    <title>Installer Options</title>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css> </head> <body>
    <div class=container>
        <h1>Installer Options</h1>
        <form>
            <h2>Application Information</h2>
            <div class=form-group><label>Application name:</label><input class=form-control id=name placeholder="My Program"></div>
            <div class=form-group><label>Application version:</label><input class=form-control id=version placeholder=1.0></div>
            <div class=form-group><label>Application Publisher:</label><input class=form-control id=publisher placeholder="My Company"></div>
            <div class=form-group><label>Application Website:</label><input class=form-control id=website placeholder=example.com></div>
            <h2>Install Location</h2>
            <div class=form-group><label>Destination base folder:</label><select id=location class="custom-select custom-select mb-3">
                    <option value=default selected>Program Files Folder</option>
                    <option value=custom>Custom Location</option><input class=form-control id=base disabled>
                </select></div>
            <div class=form-group><label>Application Folder Name:</label><input class=form-control id=folder placeholder="My Program"></div>
            <div class=form-group><input type=checkbox id=needed><label>Allow user to change the application folder</label></div>
            <div class=form-group><label>Main executable:</label><input class=form-control id=exe placeholder=myProg.exe></div>
            <div class=form-group><label>Setup File Name:</label><input class=form-control id=setup placeholder=setup.exe></div>
            <div class=form-group><input type=checkbox id=icon><label>Include Custom Icon</label></div>
            <div class=form-group><input type=checkbox id=license><label>Include a license</label></div>
            <h2>Install Mode</h2>
            <div class=form-group><input type=checkbox id=users><label>Install for all users</label></div>
            <div class=form-group><input type=checkbox id=old><label>Allow user to choose install mode</label></div>
            <h2>Extras</h2>
            <h3>Shortcuts</h3>
            <div class=form-group><input type=checkbox id=start><label>Allow user to start application after setup</label></div>
            <div class=form-group><input type=checkbox id=start><label>Allow user to start application after setup</label></div>
            <div class=form-group><input type=checkbox id=create><label>Create a shortcut folder in the start menu</label></div>
            <div class=form-group><input type=checkbox id=change><label>Allow user to change start menu folder name</label></div>
            <div class=form-group><input type=checkbox id=disable><label>Allow user to disable start menu folder creation</label></div>
            <div class=form-group><input type=checkbox id=web><label>Create a start menu shortcut to your website in the start menu</label></div>
            <div class=form-group><input type=checkbox id=uninstall><label>Create a start menu shortcut to uninstall the program</label></div>
            <div class=form-group><input type=checkbox id=desktop><label>Allow user to create a desktop shortcut</label></div>
            <div class=form-group><input type=checkbox id=old><label>Allow user to create a quick launch shortcut in older versions of Windows</label></div>
            <h3>Other Options</h3>
            <div class=form-group><input type=checkbox id=startup><label>Run on startup</label></div>
            <div class=form-group><label>Text to Display Beforehand</label><br><textarea id=before class="form-control rounded-0"></textarea></div>
            <div class=form-group><label>Text to Display Afterwards</label><br><textarea id=after class="form-control rounded-0"></textarea></div>
            <div class=form-group><label>Edit Environmental Variables</label><br><textarea id=env class="form-control rounded-0"></textarea></div>
            <div class=form-group><label>Additional Languages</label><br><textarea id=lang class="form-control rounded-0"></textarea></div>
            <div class=form-group><label>Install Options</label><br><textarea id=options class="form-control rounded-0" placeholder="Please, describe different files and options for different install types, files to include and other options."></textarea></div><button id=export class="btn btn-success btn-lg btn-block">Click to export</button>
        </form>
        <div style=height:100px></div>
    </div>
    </body>

</html>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js> </script> <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js> </script> <script src=https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js> </script> <script>
    $("#location").change(() => "default" == $("#location").val() ? $("#base").prop("disabled", !0) : $("#base").prop("disabled", !1)), $("#export").click(function(e) {
        e.preventDefault();
        var o = window.location.origin + window.location.pathname + "?";
        $("input,textarea,select").each((e, a) => o += $(a)[0].id + "=" + encodeURIComponent($(a).val()) + "&"), $("body").after(`<input id=copy value='${o.substr(0,o.length-1)}'></input>`), $("#copy").select(), $("#copy")[0].setSelectionRange(0, 99999), document.execCommand("copy"), $("#copy").remove(), alert("Copied to clipboard!")
    }), $(document).ready(function() {
        var e = Object.fromEntries(new URLSearchParams(location.search));
        for (thing in e) $("#" + thing).val(e[thing]);
        "default" == $("#location").val() ? $("#base").prop("disabled", !0) : $("#base").prop("disabled", !1)
    });
</script>