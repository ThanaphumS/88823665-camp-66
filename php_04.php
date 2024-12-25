<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-family: "Noto Sans Thai Looped", serif;
            font-weight: 400;
            font-style: normal;
        }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <form method="post" action="">
                <h1>เลขคู่ เลขคี่</h1>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">เริ่มจาก<span style="color: red;font-weight: 700;">*</span></label>
                    <input name="start" type="number" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">จนถึง<span style="color: red;font-weight: 700;">*</span></label>
                    <input name="end" type="number" class="form-control" id="exampleFormControlInput2" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <div class="mb-3">
                <?php if(isset($_REQUEST['start']) && isset($_REQUEST['end'])){?>
                    <?php $startnum = $_REQUEST['start']; ?>
                    <?php $endnum = $_REQUEST['end']; ?>
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