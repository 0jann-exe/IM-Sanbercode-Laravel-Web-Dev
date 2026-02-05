<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <form action="/welcome" method="POST">
        @csrf
        <label>Full name :</label><br>
        <input type="text" name="nama_p" id="" required><br><br>

        <label>Last name :</label><br>
        <input type="text" name="nama_t" id="" required><br><br>

        <label>Gender :</label><br>
        <input type="radio" name="gender" required>Male<br>
        <input type="radio" name="gender" required>Female<br>
        <input type="radio" name="gender" required>Other<br><br>

        <label>Nationality :</label><br>
        <select name="nationality" id="" required>
            <option value="indonesia">indonesia</option>
            <option value="inggris">Inggris</option>
            <option value="jerman">Jerman</option>
            <option value="jepang">Jepang</option>
            <option value="dubai">Dubai</option>
            <option value="arab">Arab</option>
        </select><br><br>

        <label>Language Spoken :</label><br>
        <input type="checkbox" name="language[]">Bahasa Indonesia<br>
        <input type="checkbox" name="language[]">Inggris<br>
        <input type="checkbox" name="language[]">Dutch<br><br>
        <label>Bio :</label><br>
        <textarea name="bio" id="" rows="5" cols="20" required></textarea><br><br>

        <input type="submit" value="kirim">
    </form>
</body>
</html>