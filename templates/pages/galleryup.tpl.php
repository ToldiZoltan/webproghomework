<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <style type="text/css">
        label { display: block; }
    </style>
</head>

<body>
    <h1>Uploading to the gallery:</h1>
    <?php
    if (isset($messages))
    {
        echo '<ul>';
        foreach($messages as $m)
            echo "<li>$m</li>";
        echo '</ul>';
    }
?>
    <form action="?page=upload" method="post"
                enctype="multipart/form-data">
        <label>First:
            <input type="file" name="first" required>
        </label>
        <label>Second:
            <input type="file" name="second">
        </label>
        <label>Third:
            <input type="file" name="third">
        </label>        
        <input type="submit" name="send">
      </form>    
</body>
</html>
