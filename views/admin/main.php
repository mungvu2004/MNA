<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php 
            if (isset($view)) {
                require_once VIEW_ADMIN . $view . '.php';
            }
        ?>
        </div>
    </div>
</body>
</html>