<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>
    <!-- Login Section -->
    <section class="login-section py-5">
        <div class="container">
            <div class="login-card" data-aos="zoom-in">
                <div class="login-logo">
                    <h2>Welcome Back</h2>
                    <p class="text-muted">Please sign in to access your account</p>
                </div>
               <form id="loginForm" method="post" action="/auth">
    <!-- Display general authentication errors -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger mb-4">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Email Field with Validation Error -->
    <div class="mb-4">
        <label for="loginEmail" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>" 
               id="loginEmail" value="<?= old('email') ?>" required>
        <?php if (isset($validation) && $validation->hasError('email')): ?>
            <div class="invalid-feedback">
                <?= $validation->getError('email') ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Password Field with Validation Error -->
    <div class="mb-4">
        <label for="loginPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>" 
               id="loginPassword" required>
        <?php if (isset($validation) && $validation->hasError('password')): ?>
            <div class="invalid-feedback">
                <?= $validation->getError('password') ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="d-flex justify-content-between mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <a href="#" class="text-decoration-none">Forgot password?</a>
    </div>
    
    <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
    
    <div class="text-center">
        <p class="text-muted">Don't have an account? <a href="#" class="text-decoration-none">Contact us</a></p>
    </div>
</form>
            </div>
        </div>
    </section>

    <!-- Same footer as index.html -->

    <script>
        $(document).ready(function(){
            // Login form submission
            $('#loginForm').submit(function(e){
                e.preventDefault();
                
                // Here you would typically validate and send the login data to your server
                // For demonstration, we'll show a success message
                
                Swal.fire({
                    title: 'Login Successful!',
                    text: 'You are being redirected to your dashboard.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to dashboard
                        window.location.href = "dashboard.html";
                    }
                });
            });
        });
    </script>
<?=$this->endSection()?>