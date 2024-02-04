<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-12</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label>First name:</label><br>
        <input type="text" name="first_name"><br><br>
        <label>Last name:</label><br>
        <input type="text" name="last_name"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female<br><br>
        <label>Natioanlity:</label><br>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language">Bahasa Indoensia<br>
        <input type="checkbox" name="language">English<br>
        <input type="checkbox" name="language">Other<br><br>
        <label>Bio:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
</body>
</html>