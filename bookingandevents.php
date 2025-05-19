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
    <h1 style="text-align: left; font-size: 40px; font-weight: bold;">Booking and Events</h1>
    <hr class="hr-shadow" />
        <h2 style="text-align: center;">Book your block screenings, cinema ads, product launches, press conferences, celebration parties, seminars and other corporate events or gatherings at Movieworld cinemas.</h2>
        <p style="text-align: left;">For Movieworld sales or booking inquiries, please email us at <span style="color: blue;">movieworld@gmail.com</span> with the following information:</p>
        <ul style="list-style-type: none; padding-left: 0;">
            <li>1. Your Name.</li>
            <li>2. Your mobile number.</li>
            <li>3. Your email address.</li>
            <li>4. Movieworld branch you are interested in.</li>
            <li>5. Type of event or booking (block screenings, cinema rentals, cinema ads, seminars, corporate events, or reservation inquiries).</li>
        </ul>
    </section>

    <!-- Additional Content for Booking and Events -->
    <!-- You can add more specific sections here, like form elements, booking options, etc. -->

</div>

<!-- Include Modals (if separate file) -->
<?php include 'php/modals.php'; ?> 

<!-- Include Footer -->
<?php include 'php/footer.php'; ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/myscript.js"></script>
<script src="js/date.js"></script>  
<?php include 'php/login_error_handler.php'; ?>