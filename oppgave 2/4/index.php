<!DOCTYPE html>
<html>
<head>
    <title>Er du student?</title>
    <style type="text/css">
        label {
            display: block;
        }
        form {
            border: 1px solid #000;
            padding: 10px;
            width: 40%;
        }
        input {
            float: right;
        }
        input[type=text] {
            width: 30px;
            margin: 2px;
            padding: 5px 10px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Er du gift og/eller har du barn?</h1>
    <form method="POST" action="process.php">
        <label style="font-size: 26px;" for="married">Gift - <strong>j / n</strong>:
            <input id="married" name="married" type="text">
            <div style="clear: both;"></div>
        </label>
        <label style="font-size: 26px;" for="kids">Barn - <strong>j / n</strong>:
            <input id="kids" name="kids" type="text">
            <div style="clear: both;"></div>
        </label>
        <input type="submit">
        <input type="reset">
        <div style="clear: both;"></div>
    </form>
</body>
</html>