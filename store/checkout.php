
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Checkout - Zimarex | Ecommerce Webstore</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- <link rel="stylesheet" href="../assets/css/styles.css" /> -->
    <link rel="stylesheet" href="../assets/css/checkout.css" />

        <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .addShadow{ 
            box-shadow: 0 5px 15px rgb(0 0 0 / 30%);
        }

        .itm{
            font-size: 1.6rem;
            font-weight: 500;
        }

        .qty{
            font-size: .75em;
        }

        .pri{
            font-size: 0.8em;
        }

        .container {
            max-width: 104rem;
            margin: 0 auto;
        }

        img, svg {
            vertical-align: baseline;
        }

        .col-12, .col-sm-6{
            margin-bottom : 20px;
        }

        .btn-primary{
            padding: 10px;
            font-weight: 600;
            font-size: 1em;
        }

        .bg-primary, .btn-primary  {
            background-color: #ba0303!important;
        }

        .text-primary{
            color : #ba0303 !important;
        }

        .form-control::placeholder {
            /* font-size: 2em; */
        }

        .form-control, .form-select{
            font-size: .85em;
        }

        .pad{
            padding: 13px 10px;
        }

        .form-check-label{
            font-size: .88em;
        }
    </style>
    
    <!-- Custom styles for this template -->

  </head>
  <body class="bg-light">
    
        <?php require_once('../libs/nav.php') ?>

<div class="container" style="margin-bottom: 80px ">
  <main>
    <div class="text-center" style="margin: 120px auto; margin-bottom: 50px ">
        
      <h2>Checkout</h2>
      <br>
      <hr>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <a href="./cart.php" style="border: 1px solid #ba0303; padding: 6px 15px; border-radius: 30px;">
          <span class="text-primary">Return to cart</span>
        </a>
        <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          
          <li class=" pad list-group-item d-flex justify-content-between insert-cart" >
            <span> <b>Total (NGN)</b></span>
            <strong class="last_price">0</strong>
          </li>
        </ul>

        <!-- <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form> -->
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"> <b>First name</b> </label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label"><b>Last name</b></label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
        
            <!-- <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div> -->

            <div class="col-7">
              <label for="email" class="form-label"> <b>Email</b> <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-5">
              <label for="phone number" class="form-label"> <b>Phone number</b> <span class="text-muted"></span></label>
              <input type="number" class="form-control" id="phone-num" placeholder="0XXXXXXXXXX" required>
              <div class="invalid-feedback">
                Please enter a valid number for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label"> <b>Address</b></label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label"> <b>Address 2</b> <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label"> <b>Country</b></label>
              <select class="form-select" id="country" required>
                <option value="" disabled selected>Choose...</option>
                <option>Nigeria</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6">
              <label for="state" class="form-label"> <b>State</b></label>
              <select class="form-select" id="state" required>
                <option value="" disabled selected>Choose...</option>
                <option>Rivers</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="terms" required>
            <label class="form-check-label" for="save-info">I agree to the terms and conditions</label>
          </div>

          <hr class="my-4" style="opacity: 0.09">

          <!-- 
                <h4 class="mb-3">Payment</h4>

                `<div class="my-3">
                    <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                    </div>

                    <div class="col-md-6">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                    </div>
                </div>

                <hr class`="my-4"> 
            -->

          <button class="w-100 btn btn-primary btn-lg" type="submit" style="border: none;">Continue</button>
        </form>
      </div>
    </div>
  </main>

</div>
    <?php require_once('../libs/footer.php') ?>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script> 
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
    <script src="../assets/js/products.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="../assets/js/checkout.js"></script>
  </body>
</html>
