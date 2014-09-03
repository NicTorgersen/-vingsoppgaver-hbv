<!DOCTYPE html>
<html>
<head>
    <title>Skriv inn fornavn og etternavn</title>
</head>
<body>
    <h1>Skriv inn fornavn og etternavn</h1>
    <form method="POST" action="process.php">
        <label for="fornavn">Fornavn:
        <input id="fornavn" name="first_name" type="text">
        </label>
        <label for="etternavn">Etternavn:
        <input id="etternavn" name="last_name" type="text">
        </label>
        <input type="submit">
        <input type="reset">
    </form>
</body>
</html>