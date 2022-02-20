<!DOCTYPE html>

<head>
    <title>Person Registry</title>
</head>
<body>
<header class="header">
    <h1 class="title">Person Registry</h1>
</header>

<form action="app/addPerson.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="number" name="personal_code" placeholder="Personal code">
    <br>
    <button type="submit" name="submit">Add person</button>
</form>

</body>