<?php
include 'php/header.php'; // header already starts the session and sets $isLoggedIn/$username
?>

<!-- Main Content -->
<div id="main">
    <section>
        <h1 style="text-align: left; font-size: 40px; font-weight: bold;">Frequently Asked Questions</h1>
        <hr class="hr-shadow" />
        <div class="faq-section" style="padding: 40px 20px; max-width: 900px; margin: auto;">
            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>1. What type of credit cards are accepted for online purchase of tickets?</h4>
                <p>Visa and Mastercard cards are accepted.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>2. Can I purchase tickets for somebody?</h4>
                <p>Yes. Simply encode the name of the moviegoer in the box provided. A valid ID, photocopy of the credit card used, voucher print out or SMS, Transaction ID, and Receipt ID shall be requested to be presented upon redemption of cinema ticket.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>3. How do I check if I have successfully purchased my ticket/s?</h4>
                <p>A confirmation voucher with Transaction ID and Receipt ID will be provided after a successful transaction. The same confirmation page (voucher) shall be forwarded when you fill in the email address box.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>4. Do I need to print my voucher?</h4>
                <p>You have the option to either print the voucher for presentation, or simply present the SMS confirmation at the respective cinema porter to claim movie tickets.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>5. Can I refund / cancel online purchase ticket?</h4>
                <p>Movie tickets purchased via the service are strictly non-cancelable and are not available for exchange under any circumstances. Refunds will be provided only if the movie is cancelled/rescheduled, or if the cinema will not be operating on the stated date.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>6. Can I purchase tickets for the following day?</h4>
                <p>Yes. But note that the movie schedule is subject to change without prior notice.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>7. Where can I find the ticket price?</h4>
                <p>Ticket prices can be viewed in the <a href="nowshowing.html">Now Showing</a> section of our website.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>8. What does the MTRCB film classification stand for?</h4>
                <ul style="padding-left: 20px;">
                    <li><strong>GP:</strong> General Patronage – Movie is suitable for all ages</li>
                    <li><strong>PG13:</strong> Parental Guidance – Recommended for children under 12 years</li>
                    <li><strong>R13:</strong> Rated 13 – Only ages 13 and up allowed entry</li>
                    <li><strong>R16:</strong> Rated 16 – Only ages 16 and up allowed entry</li>
                    <li><strong>R18:</strong> Rated 18 – Only ages 18 and up allowed entry</li>
                </ul>
            </div>

            <div class="faq-item" style="margin-bottom: 25px;">
                <h4>9. How do I redeem my movie ticket?</h4>
                <p>To redeem your movie ticket, simply present your voucher print out or SMS confirmation at the respective cinema porter.</p>
            </div>
        </div>
    </section>
</div>

<?php include 'php/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/modals.js"></script>
<script src="js/date.js"></script>
<?php include 'php/login_error_handler.php'; ?>