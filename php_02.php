<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
    </head>
    <body>
        <div class="container mt-5">
            <?php $myvar = 2; ?>
            <?php $sum; ?>
            <h1>สูตรคูณแม่ <?php echo $myvar; ?></h1>
            <?php
            for ($i=1; $i <= 100; $i++) {
            ?>
            <div class="row">
                <div class="h2 col text-end"> <?php echo $myvar," x ", $i, " = "; ?></div>
                <?php $sum = $myvar * $i; ?>
                <div class="h2 col text-start"> <?php echo $sum; ?></div>
            </div>
            <?php } ?>
        </div>    
    </body>
</html>