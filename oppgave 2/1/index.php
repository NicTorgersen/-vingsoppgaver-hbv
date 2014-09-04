<!DOCTYPE html>
<html>
<head>
    <title>Skriv inn 3 ganger 3</title>
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
        input[type=number] {
            width: 30px;
            margin: 2px;
        }
    </style>
</head>
<body>
    <h1>Skriv inn 3 ganger 3</h1>
    <form method="POST" action="process.php">
        <label for="num1">Tall 1:
            <input name="num1" type="number">
            <div style="clear: both;"></div>
        </label>
        <input type="submit">
        <div style="clear: both;"></div>
    </form>
</body>
</html>