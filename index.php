<!DOCTYPE html>
<html>

<head>
    <title>Pascal Scanner</title>
    <link rel="stylesheet" href="wp-content/css/prism.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ace-builds@1.4.12/src-noconflict/ace.css" type="text/css" />
    <link rel="stylesheet" href="wp-content/css/css.css?v=<?= time() ?>">
</head>

<body>

    <div class="container">

        <div class="d-flex justify-content-center">
            <h1>Pascal Scanner Output</h1>
        </div>

        <div class="row">

            <div class="col-12">
                <div class="reset">
                    <div id="editor" style="height: 350px; width: 100%;"></div><br>
                </div>

                <div class="isi">
                </div>
            </div>


        </div>

</body>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/ace-builds@1.4.12/src-noconflict/ace.js"></script>
<script src="wp-content/js/js.js?v=<?= time() ?>"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/pascal");
    editor.setOption("showPrintMargin", false)

    var initialCode = ``;

    editor.setValue(initialCode);
</script>

</html>