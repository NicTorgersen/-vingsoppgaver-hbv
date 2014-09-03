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
    <form method="POST" action="response.php">
        <label>Fornavn:
            <input name="first_name" type="text">
            <div style="clear: both;"></div>
        </label>
        <label>Etternavn:
            <input name="last_name" type="text">
            <div style="clear: both;"></div>
        </label>
        <label>Alder:
            <input name="age" type="number">
            <div style="clear: both;"></div>
        </label>
        <input type="submit">
        <input type="reset">
        <div style="clear: both;"></div>
    </form>
</body>
</html>