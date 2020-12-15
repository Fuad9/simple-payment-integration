<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        body {
            font-family: Fira Code;
            font-size: 1rem;
            background-color: #000;
        }

        * {
            margin: 1em;
            box-sizing: border-box;   
        }

    </style>

</head>
    <body>
        <div class="d-flex justify-content-center text-white">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <form action="./index.php" method="post">
                        <h1 class="text-center font-weight-bold">Checkout Form</h1>
                        
                        <label for="fname">Full Name</label>
                        <input class="form-control" type="text" id="fname" name="name" placeholder="John Doe">

                        <label for="email">Email</label>
                        <input class="form-control" type="text" id="email" name="email" placeholder="johndoe@gmail.com">

                        <input class="form-control" type="hidden" value="<?php echo "OID".rand(100, 1000); ?>" name="orderid">

                        <input class="form-control" type="hidden" value="<?php echo 1; ?>" name="amount">

                        <label for="city">Mobile</label>
                        <input class="form-control" type="text" id="city" name="mobile" placeholder="Mobile Number">

                        <label for="address">Address</label>
                        <input class="form-control" type="text" id="address" name="address" placeholder="12 Stwart Street, Las Vegas">
                
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mt-3 w-75">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>