<!DOCTYPE html>
<html>
<head>
    <title>Skriv inn fornavn, etternavn og alder</title>
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
    <h1>Skriv inn fornavn, etternavn og alder</h1>
    <form method="POST" action="process.php">
        <label>Tall 1:
            <input name="num1" type="number">
            <div style="clear: both;"></div>
        </label>
        <label>Tall 2:
            <input name="num2" type="number">
            <div style="clear: both;"></div>
        </label>
        <input type="submit" value="Fortsett">
        <input type="reset">
        <div style="clear: both;"></div>
    </form>
</body>
</html>