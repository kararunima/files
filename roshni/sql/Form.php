<!DOCTYPE html>
<html>

<head>
    <title>Form </title>
</head>

<body>
    <h2>Registration form</h2>
    <form action="insertion.php"  method="POST">
        <p>
            <label> id:</label>

            <input type="text" name="id">
        </p>


        <p> <label>name :</label>

            <input type="text" name="name">
        </p>

        <p> <label> email :</label>

            <input type="email" name="email">
        </p>
        <p> <label> password :</label>

            <input type="password" name="pass">
        </p>

        <input type="submit"  name="submit" value="sign-up">

    </form>
</body>

</html>
