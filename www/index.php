<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker PHP env</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <h2>It Works....!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
            Ipsam veritatis eveniet qui porro, quia eligendi aspernatur nemo nam quas suscipit dignissimos molestias, <br>
            esse blanditiis veniam? Deleniti quae nihil labore impedit. <br>
        </p>
    </div>
    <div>
        <h2>PHP Info</h2>
        <p>
            <?php echo "<b> PHP Version: </b>" . phpversion();?> <br>
            <?php echo "<b> OS: </b>" . php_uname('s');?> <br>
            <?php echo "<b> Hostname: </b>" . php_uname('n');?> <br>
            <?php echo "<b> Release name: </b>" . php_uname('r');?> <br>
            <?php echo "<b> Version info: </b>" . php_uname('v');?> <br>
            <?php echo "<b> Machine type: </b>" . php_uname('m');?> <br>
        </p>
    </div>
    <script src="js/main.js"></script>
</body>
</html>