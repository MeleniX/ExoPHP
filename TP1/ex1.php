<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
    <a href="/tp1/ex1.php?message=Hello">Afficher Hello</a>
    <a href="/tp1/ex1.php?size=15">Afficher Hello</a>
    <a href="/tp1/ex1.php?color=red">Afficher Hello</a>
    <div style="font-size: <?php echo $size; ?>px;">Message de taille <?php echo $size; ?>px en rouge</div>
    <?php
    
    
    ?>
</body>
</html>