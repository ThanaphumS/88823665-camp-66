<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
    </head>
    <body>
        <div class="container mt-5">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">กรอกแม่สูตรคูณที่ต้องการ</label>
                    <input name="number" type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <div class="mb-3">
                <?php $myvar = $_REQUEST['number']; ?>
                <h1>สูตรคูณแม่ <?php echo isset($myvar) ? $myvar : ""; ?></h1>
                <?php if(isset($myvar) && $myvar != NULL){?>
                <?php
                    for ($i=1; $i <= 12; $i++) {
                ?>
                <div class="row">
                    <?php $sum; ?>
                    <div class="h2 col text-end"> <?php echo $myvar," x ", $i, " = "; ?></div>
                    <?php $sum = $myvar * $i; ?>
                    <div class="h2 col text-start"> <?php echo $sum; ?></div>
                </div>
                <?php } ?>
                <?php }?>
            </div>
        </div>
    </body>
</html>