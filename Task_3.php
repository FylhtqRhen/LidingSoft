<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AJAX test</title>
    <meta name="description" content="Article FRUCTCODE.COM. How to send ajax form.">
    <meta name="author" content="fructcode.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="scroll"></div>
<style>
    .scroll {
        width: 1000vh;
        height: 1000vh;
    }
</style>
<script type="text/javascript">

    document.addEventListener('keydown', function(event){
        if (event.repeat === false) {
            let keyCode = getAllowKeyCode();
            if (keyCode) {
                setTimeout(function () {
                    alert(keyCode);
                });
            }
        }
    });

    function getAllowKeyCode() {
        let keyCodes = [];
        keyCodes[37] = 'ArrowLeft';
        keyCodes[38] = 'ArrowUp';
        keyCodes[39] = 'ArrowRight';
        keyCodes[40] = 'ArrowDown';

        return keyCodes[event.keyCode];
    }
</script>
</body>
</html>

