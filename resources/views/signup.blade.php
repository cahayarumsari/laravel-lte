<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #000;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="welcome.html" method="post">
        <label for="fname">First name :</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        
        <label for="lname">Last name :</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label>Gender</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>
        
        <label for="nationality">Nationality</label><br>
        <select id="nationality" name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
        </select><br><br>
        
        <label>Language Spoken</label><br>
        <input type="checkbox" id="bahasa" name="language" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language" value="Other">
        <label for="other">Other</label><br><br>
        
        <label for="bio">Bio</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>