<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- css style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="./css/all.css" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet" />

    <title>Batari Shop!</title>


</head>

<body>

    <section class="product p-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Your Cart</h3>
                    <p>Pastikan barang anda sudah terbayar lunas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- awal breadcrumb -->
    <div class="container">
        <ol class="breadcrumb bg-transparent pl-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Cart Checkout</li>
        </ol>
    </div>
    <!-- akhir breadcrumb -->

    <!-- awal your items -->
    <section class="checkout">
        <div class="container mb-5">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h5>Your Items</h5>
                    <div class="row your-items pt-3">
                        <div class="col-2">
                            <img src="img/single-product/14.png" class="" alt="">
                        </div>
                        <div class="col-4">
                            <h4>Jeans Pubb</h4>
                            <p>IDR 299.000</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-sm" style="background-color: #eaeaef; color: white;"><i class="fas fa-minus-circle"></i></button>
                            <span class="mx-2">24</span>
                            <button type="button" class="btn btn-sm btn-success" style="color: white;"><i class="fas fa-plus-circle"></i></button>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i class="far fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="row your-items">
                        <div class="col-2">
                            <img src="img/single-product/14.png" class="" alt="">
                        </div>
                        <div class="col-4">
                            <h4>Jeans Pubb</h4>
                            <p>IDR 299.000</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-sm" style="background-color: #eaeaef; color: white;"><i class="fas fa-minus-circle"></i></button>
                            <span class="mx-2">24</span>
                            <button type="button" class="btn btn-sm btn-success" style="color: white;"><i class="fas fa-plus-circle"></i></button>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i class="far fa-times-circle"></i></button>
                        </div>
                    </div>
                    <div class="row mb-5 your-items">
                        <div class="col-2">
                            <img src="img/single-product/14.png" class="" alt="">
                        </div>
                        <div class="col-4">
                            <h4>Jeans Pubb</h4>
                            <p>IDR 299.000</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-sm" style="background-color: #eaeaef; color: white;"><i class="fas fa-minus-circle"></i></button>
                            <span class="mx-2">24</span>
                            <button type="button" class="btn btn-sm btn-success" style="color: white;"><i class="fas fa-plus-circle"></i></button>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i class="far fa-times-circle"></i></button>
                        </div>
                    </div>

                    <h5 style="margin-top: 100px;">Your Address</h5>
                    <div class="row mt-3 mb-5">
                        <div class="col-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Alamat lengkap" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Address II</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Alamat lengkap" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">City</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Jakarta</option>
                                        <option>Cirebon</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Country</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Indonesia</option>
                                        <option>Cirebon</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card rounded-0 checkout-detail">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Informasi Biaya</h5>
                            <div class="row mb-3">
                                <div class="col-6 justify-content-start">
                                    <h4 class="m-0">Jeans Pubb</h4>
                                    <small>2 items</small>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-self-center">
                                    <p class="text-success">IDR 299.000</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 justify-content-start">
                                    <h4 class="m-0">Kaos Oblong</h4>
                                    <small>4 items</small>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-self-center">
                                    <p class="text-success">IDR 299.000</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3 pt-2">
                                <div class="col-6 justify-content-start">
                                    <h4 class="m-0">Courier</h4>
                                    <small>JNE Regular</small>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-self-center">
                                    <p class="text-success">IDR 16.000</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 justify-content-start">
                                    <h4 class="m-0">Tax</h4>
                                    <small>Ppn 10%</small>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-self-center">
                                    <p class="text-success">IDR 25.000</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 justify-content-start">
                                    <h4 class="m-0">Promo</h4>
                                    <small>10% OFF</small>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-self-center">
                                    <p class="text-danger">IDR -19.000</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 justify-content-start">
                                    <h4 class="m-0">Total Harga</h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-self-center">
                                    <p class="text-primary">IDR 2.299.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="button" class="btn btn-block rounded" style="background-color: #eaeaef; color:#adadad;">Cancel</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-block btn-warning text-white rounded" data-toggle="modal" data-target="#checkoutModal">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir checckout -->



    <!-- Modal -->
    <div class="modal fade checkout-modal-success" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="img/logo/success-checkout.png" class="mb-5">
                    <h3>Checkout Berhasil</h3>
                    <p>Anda akan mendapatkan barang anda <br>dalam beberapa hari</p>
                    <a href="index.php" type="button" class="btn mt-3" data-dismiss="modal" style="background-color: #eaeaef; color:#adadad;">Home</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#checkoutModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
</body>

</html>