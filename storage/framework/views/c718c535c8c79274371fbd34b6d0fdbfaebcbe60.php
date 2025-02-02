<?php
use App\Models\Product
?>
    <!-- Font Awesome -->
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
/>
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
/>
<!-- MDB -->
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
    rel="stylesheet"
/>

<body>


<?php if($empty==false): ?>

    <section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="<?php echo e(route('check')); ?>" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                        <p class="mb-0">You have <?php echo e($length); ?> items in your cart</p>
                                    </div>
                                    <div>
<!--                                     <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>-->
                                    </div>
                                </div>

    <?php $__currentLoopData = $all_from_rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_from_row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $total_price += $all_from_row[0]["price"];
    ?>

       <div class="card mb-3">
           <div class="card-body">
               <div class="d-flex justify-content-between">
                   <div class="d-flex flex-row align-items-center">
                       <div>
                           <img
                               src="<?php echo e(asset("images/" . $all_from_row[0]["image"])); ?>"
                               class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                       </div>
                       <div class="ms-3">
                           <h5><?php echo e($all_from_row[0]["name"]); ?>

                               <?php echo e($all_from_row[0]["model"]); ?></h5>
                           <p class="small mb-0"></p>
                       </div>
                   </div>
                   <div class="d-flex flex-row align-items-center">
                       <div style="width: 50px;">
                           <h5 class="fw-normal mb-0">1</h5>
                       </div>
                       <div style="width: 80px;">
                           <h5 class="mb-0"><?php echo e($all_from_row[0]["price"]); ?> Kč</h5>
                       </div>
                       <a href="/add_cart/<?php echo e($all_from_row[0]["id"]); ?>" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                   </div>
               </div>
           </div>
       </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>
                                            <!--                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                                                             class="img-fluid rounded-3" style="width: 45px" alt="Avatar">-->
                                        </div>

                                        <p class="small mb-2">Card type</p>
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-visa fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-amex fa-2x me-2"></i></a>
                                        <a href="#!" type="submit" class="text-white"><i
                                                class="fab fa-cc-paypal fa-2x"></i></a>

                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeName" class="form-control form-control-lg"
                                                       siez="17"
                                                       placeholder="Cardholder's Name"/>
                                                <label class="form-label" for="typeName">Cardholder's Name</label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeText" class="form-control form-control-lg"
                                                       siez="17"
                                                       placeholder="1234 5678 9012 3457" minlength="19" maxlength="19"/>
                                                <label class="form-label" for="typeText">Card Number</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="typeExp"
                                                               class="form-control form-control-lg"
                                                               placeholder="MM/YYYY" size="7" id="exp" minlength="7"
                                                               maxlength="7"/>
                                                        <label class="form-label" for="typeExp">Expiration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="password" id="typeText"
                                                               class="form-control form-control-lg"
                                                               placeholder="&#9679;&#9679;&#9679;" size="1"
                                                               minlength="3" maxlength="3"/>
                                                        <label class="form-label" for="typeText">Cvv</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2"><?php echo e($total_price); ?> Kč</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Shipping</p>
                                            <p class="mb-2">250 Kč</p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2">Total(Incl. taxes)</p>
                                            <p class="mb-2"><?php echo e($total_price+250); ?> Kč</p>
                                        </div>

                                        <button type="button" class="btn btn-info btn-block btn-lg" onclick=window.location.href="/payment">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo e($total_price+250); ?> Kč</span>
                                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>


<?php else: ?>
<h1>Shopping Cart is empty</h1>

<?php endif; ?>

</body>


<?php /**PATH /root/PhpstormProjects/laravel-9-template/resources/views/shopping-cart.blade.php ENDPATH**/ ?>