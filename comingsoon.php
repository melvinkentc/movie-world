<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>

<!-- Include Header -->
<?php include 'php/header.php'; ?>

<!-- Main Content -->
<div id="main">
    <section>
        <h1 style="text-align: left; font-size: 40px; font-weight: bold;">Coming Soon</h1>
        <hr class="hr-shadow" />
    </section>
</div>

<!-- Include Modals -->
<?php include 'php/modals.php'; ?>

<!-- Include Footer -->
<?php include 'php/footer.php'; ?>

<!-- Custom Scripts -->
<script src="js/myscript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
