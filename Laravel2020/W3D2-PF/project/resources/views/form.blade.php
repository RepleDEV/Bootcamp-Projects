<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Buat Akun Baru!</h1>
    <h2>Sign up form</h2>
    <form method="GET" action="welcome">
        {!! csrf_field() !!}

        <p>First Name:</p>
        <input type="text" name="fname"><br>

        <p>Last Name:</p>
        <input type="text" name="lname"><br>

        <p>Gender:</p>
        <input type="radio" value="male" id="male" name="gender">
        <label for="male">Male</label><br>
        <input type="radio" value="female" id="female" name="gender">
        <label for="female">Female</label><br>
        <input type="radio" value="other" id="other" name="gender">
        <label for="other">Other</label>

        <p>Nationality:</p>
        <select name="nationality" id="nat">
            <option value="in">Indonesian</option>
            <option value="sg">Singaporean</option>
            <option value="ml">Malaysian</option>
            <option value="au">Australian</option>
        </select>

        <p>Language spoken</p>
        <input type="checkbox">
        <label for="id">Bahasa Indonesia</label><br>
        <input type="checkbox">
        <label for="en">English</label><br>
        <input type="checkbox">
        <label for="other">Other</label><br>

        <p>Bio:</p>
        <textarea name="bio" id="input-bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>