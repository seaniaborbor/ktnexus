<?php 
    $userData = session()->get('userData');
    $userProfileImg = $userData['image'];
    $teamName = $userData['name'];
        
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/dashboard_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/dashboard_assets/css/style.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>






    <style>
        /* === Theme Colors === */
:root {
    --primary-color: #6f42c1;  /* Purple */
    --accent-color: #ffcc00;  /* Gold */
}

/* === Bootstrap Color Overrides === */
.btn-primary {
    background-color: var(--primary-color) !important;
    border-color: var(--primary-color) !important;
}
.btn-primary:hover {
    background-color: #5e35b1 !important;
    border-color: #5e35b1 !important;
}

.bg-primary {
    background-color: var(--primary-color) !important;
}
.text-primary {
    color: var(--primary-color) !important;
}
.text-gold {
    color: var(--accent-color) !important;
}

/* === Navbar === */
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link:hover {
    color: white !important;
    font-weight: 600;
}

.navbar-brand h3 {
    color: var(--primary-color);
}

/* === Sidebar Styling === */
.sidebar {
    background-color: #f8f9fa !important;
}
.sidebar .nav-link.active {
    background-color: var(--primary-color) !important;
    color: #fff !important;
}
.sidebar .nav-link:hover {
    background-color: var(--accent-color) !important;
    color: #000 !important;
}
.sidebar .nav-link i {
    color: var(--primary-color);
}

/* === Buttons and Form Inputs === */
.btn-outline-primary {
    color: var(--primary-color);
    border-color: var(--primary-color);
}
.btn-outline-primary:hover {
    background-color: var(--primary-color);
    color: #fff;
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(111, 66, 193, 0.25);
}

/* === Custom Utilities === */
.bg-gold {
    background-color: var(--accent-color) !important;
}
.border-gold {
    border-color: var(--accent-color) !important;
}
.text-gold {
    color: var(--accent-color) !important;
}

.category-card {
    border: 1px solid #6f42c1; /* Purple border */
    background-color: #f8f0ff; /* Light purple */
    color: #4b006e;
    transition: transform 0.2s ease-in-out;
}

.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 10px rgba(111, 66, 193, 0.3); /* Purple shadow */
}

.category-card .card-title {
    color: #6f42c1; /* Bootstrap primary purple */
    font-weight: bold;
}

.category-card .btn-danger {
    background-color: #d4af37; /* Gold */
    border-color: #d4af37;
    color: #4b006e;
    border-radius: 4px; /* No circle */
}

.category-card .btn-danger:hover {
    background-color: #c5a132;
    border-color: #c5a132;
    color: #fff;
}

.text-purple {
    color: #6f42c1;
}
.border-purple {
    border: 1px solid #6f42c1;
}
.btn-primary {
    background-color:rgb(3, 3, 78);
    border-color:rgb(2, 2, 69);
}
.btn-primary:hover {
    background-color: #5a35a0;
    border-color: #5a35a0;
}

 .bg-purple {
        background-color: #6f42c1 !important;
    }

    .text-gold {
        color: #FFD700 !important;
    }

    .form-control{
        border: 1px solidrgb(83, 45, 153) !important;
    }

    .text-purple {
    color: #6f42c1;
}

.border-purple {
    border: 1px solid #6f42c1;
}

.btn-purple {
    background-color: #6f42c1;
    border-color: #6f42c1;
}

.btn-purple:hover {
    background-color: #5a35a1;
    border-color: #5a35a1;
}


/* Message List Styles */
.message-list {
    border-radius: 4px;
    overflow: hidden;
}

.message-item {
    border-bottom: 1px solid #e0e0e0;
    transition: background-color 0.2s;
}

.message-item:last-child {
    border-bottom: none;
}

.message-header {
    padding: 1rem;
    display: flex;
    align-items: center;
    cursor: pointer;
    background-color: #f8f9fa;
    position: relative;
}

.message-header:hover {
    background-color: #e9ecef;
}

.message-sender {
    flex: 0 0 30%;
    min-width: 200px;
    display: flex;
    flex-direction: column;
}

.message-sender span {
    font-size: 0.85rem;
}

.message-subject {
    flex: 1;
    padding: 0 1rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.message-date {
    flex: 0 0 150px;
    text-align: right;
    font-size: 0.85rem;
    color: #6c757d;
}

.message-actions {
    flex: 0 0 50px;
    text-align: center;
}

.message-body {
    background-color: #fff;
    border-top: 1px solid #e0e0e0;
}

.unread .message-header {
    background-color: #e7f1ff;
    font-weight: bold;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .message-header {
        flex-wrap: wrap;
    }
    .message-sender, .message-subject, .message-date {
        flex: 0 0 100%;
        margin-bottom: 0.5rem;
    }
    .message-actions {
        position: absolute;
        right: 1rem;
        top: 1rem;
    }
}
</style>


</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

<?php 

 function mark_active($typeLink, $passLink)
    {
        if($typeLink == $passLink){
            echo "active";
        }
    }

  
?>
 <!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <!-- Logo -->
        <a href="/dashboard" class="navbar-brand mx-4 mb-3">
            <img src="<?= base_url('public_assets/img/logo/logo.png') ?>" alt="Company Logo" class="mb-3 img-fluid" style="">
        </a>

        <!-- User Profile -->
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?= base_url('public_assets/img/team/'.$userProfileImg) ?>" alt="User" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?=$teamName?></h6>
                <span>Team Member</span>
            </div>
        </div>

        <!-- Navigation -->
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link <?= mark_active('dashboaard', $passLink) ?>">
                <i class="fas fa-home me-2"></i> Dashboard
            </a>

            <a href="/dashboard/portfolio" class="nav-item nav-link <?= mark_active('entry', $passLink) ?>">
                <i class="fas fa-briefcase me-2"></i> Portfolio
            </a>

            <a href="/dashboard/team" class="nav-item nav-link <?= mark_active('billing', $passLink) ?>">
                <i class="fas fa-users me-2"></i> Team
            </a>

            <a href="/dashboard/inbox" class="nav-item nav-link <?= mark_active('startus_update', $passLink) ?>">
                <i class="fas fa-envelope me-2"></i> Inbox
            </a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

                    <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?= base_url('public_assets/img/team/'.$userProfileImg)?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?=$teamName?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
         <div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-10 offset-md-1">
           
        </div>
    </div>
</div>



        <?=$this->renderSection('main')?>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="/"><?=base_url()?></a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->



      
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard_assets/lib/chart/chart.min.js"></script>
    <script src="/dashboard_assets/lib/easing/easing.min.js"></script>
    <script src="/dashboard_assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/dashboard_assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/dashboard_assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/dashboard_assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/dashboard_assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/dashboard_assets/js/main.js"></script>
    <script>
  ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
        console.error(error);
    });
</script>
<?php if($passLink == "entry"): ?>





</script>
<?php endif; ?>
</body>

</html>