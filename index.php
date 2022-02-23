<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Person Registry</title>
</head>
<body>
<div class="header">
    <div class="title">
        <h1>Person Registry</h1>
    </div>
</div>
<div class="form">
    <form action="app/addPerson.php" method="post">
        <input type="text" class="input" name="name" placeholder="Name">
        <input type="text" class="input" name="surname" placeholder="Surname">
        <input type="number" class="input" name="personal_code" placeholder="Personal code">
        <br>
        <button type="submit" class="button" name="submit">Add person</button>
    </form>
</div>
</body>