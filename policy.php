<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
$username = $isLoggedIn ? $_SESSION['username'] : '';
?>

<?php include 'php/header.php'; ?>

<div id="main" class="container my-5">
  <section>
    <h1 style="text-align: left; font-size: 40px; font-weight: bold;">Privacy Policy</h1>
    <hr class="hr-shadow" />

    <div class="dropdown-container">

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">What this Privacy Policy Covers</span>
        </button>
        <div class="dropdown-content">
          This Privacy Policy covers the management and treatment of Robinsons Movieworld to all collected information via its website and other online services offered.
          <br /><br />
          It is not, however, applicable to practices of companies or entities whom Robinsons Movieworld does not employ or manage.
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">Cookie Policy</span>
        </button>
        <div class="dropdown-content">
          1. What are cookies?<br /><br />
          Cookies are small text files...
          <!-- ... rest of Cookie Policy content ... -->
          Legal Notice Update<br />
          We reserve the right to make any changes and corrections to this notice. Please refer to this page from time to time to review these and new additional information.
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">Information Collection and Use</span>
        </button>
        <div class="dropdown-content">
          Robinsons Movieworld collects private and identifiable information...
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">Information Sharing and Disclosure</span>
        </button>
        <div class="dropdown-content">
          Robinsons Land will not sell or rent any of the collected private and identifiable information...
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">Security</span>
        </button>
        <div class="dropdown-content">
          Each transaction has been secured using different excellent and high function security software...
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">Changes to this Privacy Policy</span>
        </button>
        <div class="dropdown-content">
          Robinsons Movieworld may amend this policy from time to time...
          <br /><br />
          Contact Info:<br />
          Data Protection Office – Robinsons Land Corporation<br />
          Address: Level 2, Galleria Corporate Center, EDSA cor. Ortigas Ave., 1100 Quezon City<br />
          Email: dpo@robinsonsland.com<br />
        </div>
      </div>

      <div class="dropdown">
        <button class="dropdown-toggle">
          <span class="arrow">▶</span>
          <span class="title">DISCLAIMER</span>
        </button>
        <div class="dropdown-content">
          www.robinsonsmovieworld.com reserves the right to amend its policies, rules and regulations...
        </div>
      </div>

    </div>
  </section>
</div>

<?php include 'php/footer.php'; ?>