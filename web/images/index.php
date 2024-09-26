<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
</head>
<body>
    <form action="" method="post">
        <select name="vards" id="vards">
        <option value=" "> </option>
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
    </select>
        <br>
        <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</p>

    <input type="radio" name="info" id="info">
        <label for="info">Jā</label>
        <input type="radio" name="info" id="info">
        <label for="info">Nē</label>
        <button type="submit">iesniegts</button>
    </form>
    
    <h3>Jau Reģistrējušies</h3>
    <?php
    $registrejusies = [
        Vards => 'Jānis Bērziņš', 
        E-pasts => 'janis@berzins.com ',
        Līmenis => ' Intermediate'];




    ?>



    <br>
    <br>
    
    <div>
    <a href="blog.php">Blogs</a>
    </div>
    
    
    <script src="app.js"></script>
    
    
    
 


</body>
</html>