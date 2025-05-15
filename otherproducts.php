<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<?php include 'php/header.php'; ?>

<!-- Main Content -->
<div id="main">
  <section>
    <h1 class="shadow-title" style="text-align: center;">Other Products</h1>
    <hr class="hr-shadow" />
    <p style="text-align: center;">Explore our wide range of products and merchandise!</p>
    <!-- Add content here -->
  </section>
</div>

<?php include 'php/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/date.js"></script>
<script src="js/myscript.js"></script>
<?php include 'php/login_error_handler.php'; ?>