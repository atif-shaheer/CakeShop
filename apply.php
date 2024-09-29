<?php include('header.php'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Apply Now</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Apply Now</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <!-- <p class="text-primary text-uppercase mb-2">// Apply for shop franchise</p> -->
            <h1 class="text-primary display-6 mb-4">Apply for shop franchise</h1>
        </div>
        <div class="row g-0 justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <!-- <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form>
    <div class="row g-3">
        <!-- Full Name Field -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="fullName" placeholder="Full Name" required>
                <label for="fullName">Full Name</label>
            </div>
        </div>

        <!-- Phone Number Field -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number" required>
                <label for="phoneNumber">Phone Number</label>
            </div>
        </div>

        <!-- Email Field -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
        </div>

        <!-- Investment Type Dropdown -->
        <div class="col-md-6">
            <div class="form-floating">
                <select class="form-control" id="investmentType" name="investmentType" required>
                    <option value="">Select Investment Type</option>
                    <option value="franchise">Mio Amore Franchise</option>
                    <option value="distributorship">Mio Amore Distributorship</option>
                    <option value="dealership">Mio Amore Dealership</option>
                </select>
                <label for="investmentType">Investment Type</label>
            </div>
        </div>

        <!-- Investment Range Dropdown -->
        <div class="col-md-12">
            <div class="form-floating">
                <select class="form-control" id="investmentRange" name="investmentRange" required>
                    <option value="">Select Investment Range</option>
                    <option value="5-10">5 lakh - 10 lakh</option>
                    <option value="15-20">15 lakh - 20 lakh</option>
                    <option value="25-30">25 lakh - 30 lakh</option>
                </select>
                <label for="investmentRange">Investment Range</label>
            </div>
        </div>

        <!-- Full Address Field -->
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" id="fullAddress" placeholder="Full Address" style="height: 100px" required></textarea>
                <label for="fullAddress">Full Address</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center">
            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
        </div>
    </div>
</form>


            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php include('footer.php'); ?>