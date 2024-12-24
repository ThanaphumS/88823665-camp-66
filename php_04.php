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
                <h1>เลขคู่ เลขคี่</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">เริ่มจาก</label>
                    <input name="start" type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">จนถึง</label>
                    <input name="end" type="number" class="form-control" id="exampleFormControlInput2">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <div class="mb-3">
                <?php $startnum = $_REQUEST['start']; ?>
                <?php $endnum = $_REQUEST['end']; ?>
                <?php if(isset($startnum) && isset($startnum) && $startnum != NULL && $endnum != NULL){?>
                    <?php
                    for ($i=$startnum; $i <= $endnum; $i++) {
                    ?>
                    <div class="row">
                        <div class="h2 col text-end"> <?php echo $i, " เป็น "; ?></div>
                        <div class="h2 col text-start"> <?php echo $i % 2 == 0 ? "เลขคู่" : "เลขคี่"; ?></div>
                    </div>
                    <?php } ?>
                <?php }?>
            </div>
        </div>
    </body>
</html>