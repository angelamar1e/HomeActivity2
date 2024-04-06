<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <script src="submit.js"></script>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="row greeting bg-danger p-2 text-white">
                <div class="col-2 d-flex justify-content-center">
                    <img class="w-100 h-100" src="images\logo.png" alt="">
                </div>
                <div class="col p-0 d-flex flex-column justify-content-center">
                    <h1>Welcome</h1>
                    <h4 class="fst-italic">Claim your free coupon now!</h4>
                    <h5 >Just enter your details below.</h5>
                </div>
                    <img class="w-25 position-absolute end-0" src="images\offer.png" alt="">
            </div>
            <div class="row m-3 disclaimer">
                <div class="col-8 mx-5">
                    <p>The coupon will begin downloading upon submission of the requested information.</p>
                </div>
            </div>
            <div class="row m-3 form justify-content-center">
                <form class="col-3 d-flex flex-column justify-content-center" name="info_form" action="" method="post">
                    <div class="row">
                        <div class="col-4 fw-bold text-end"><label for="name">Name: </label></div>
                        <div class="col-8 p-0"><input type="text" name="name" id="name"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4 fw-bold text-end"><label for="number">Phone Number: </label></div>
                        <div class="col-8 p-0 d-flex align-items-center"><input type="text" name="number" id="number"></div>
                    </div>
                    <div class="row justify-content-center">
                        <input type="submit" value="Submit" class="w-25 mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="submit.js"></script>
</body>
</html>