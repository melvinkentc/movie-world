<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie World</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <!-- jQuery and Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-0o8e1c4a2b7f3d6e4c8f8a2b7f3d6e4c8f8a2b7f3d6e4c8f8a2b7f3d6e4c8" crossorigin="anonymous"></script> -->

  <!-- Custom Scripts -->
  <script src="js/date.js"></script>

</head>
<body>

    <nav>
      <div id="navbarcontainer">
        <img class="logo" src="images/logo.png" alt="Movie World" width="160" height="50" />
        <ul style="text-align: center;" >
          <li><a href="index.html" >HOME</a></li>
          <li><a href="nowshowing.html">NOW SHOWING</a></li>
          <li><a href="advanceticketselling.html">ADVANCE TICKET SELLING</a></li>
          <li><a href="comingsoon.html">COMING SOON</a></li>
          <li><a href="otherproducts.html">OTHER PRODUCTS</a></li>
          <li><a href="bookingandevents.html">BOOKING AND EVENTS</a></li>
          <li><a href="contactus.html">CONTACT US</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">REGISTER</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a></li>
          <li>
            <a href="https://www.facebook.com/melvinkentc" target="_blank" id="facebook">
              <i class="fa fa-facebook-square" style="font-size:24px; padding-right: 1px;"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/melvinkentc" target="_blank" id="twitter">
              <i class="fa fa-twitter-square" style="font-size:24px; padding-right: 1px;"></i>
            </a>
          </li>
        </ul>
        <button class="icon" aria-label="Toggle menu">
          <i class="fa fa-bars"></i>
        </button>
      </div>
    </nav>
   <!-- Date Bar -->
   <p id="current-date" class="date"></p>
    <div id="main">
    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Register</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="php/register.php">
              <div class="mb-3">
                <label class="form-label">Fullname</label>
                <input type="text" name="fullname" class="form-control" placeholder="Fullname" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="php/login.php">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Now Showing -->
   <section>
        <h1 style="text-align: left; font-size: 40px; font-weight: bold;">Terms and Conditions</h1>
    <hr class="hr-shadow" />

  <div class="dropdown-container">

    <!-- Dropdown 1 to 9 -->
    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">I. Introduction</span>
      </button>
      <div class="dropdown-content">This document contains the Terms and Conditions governing your use of this Website, Movieworld Cinema Online Ticketing System (hereto collectively referred to as the "Service"), your purchase of any movie tickets, goods or services from Robinsons Movieworld, and participation in any competition organized by Robinsons Movieworld on the Website.
<br /> <br />
If you do not agree to these Terms and Conditions, do not use or access the Service. Movieworld Cinema reserves the right to change these Terms and Conditions from time to time and at its sole discretion. Your continued use of the Service following the posting of any changes to the Terms and Conditions constitutes your acceptance of such changes. We strongly recommend that you review the Terms and Conditions whenever you use this Website and prior to your use of Movieworld Cinema Services. You can review the most current version of these Terms and Conditions at any time.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">II. Disclaimer</span>
      </button>
      <div class="dropdown-content">Movieworld Cinema is providing this facility as an alternative mode of purchasing movie ticket(s) and makes no representations or warranties of any kind, express or implied, with respect to this Website or the information, content, products or Services included in this site. In no circumstances shall Robinsons Movieworld or any of its officers or employees be liable for any loss, additional costs or damage as a result of any use of this facility. This Service facility is currently only to be used for the purchase of Robinsons Movieworld movie ticket(s). Robinsons Movieworld does not warrant that the Service will (1) be uninterrupted; (2) be free from inaccuracies, errors, viruses or other harmful components; (3) meet your requirements; or (4) operate in the configuration or with the hardware or software you use. If you are dissatisfied with this Website or any content on the site, or with the Terms and Conditions, your sole and exclusive remedy is to discontinue using Robinsons Movieworld Services. You acknowledge, by your use of Robinsons Movieworld, that your use is at your sole risk. In the event any applicable law does not allow the limitation of liability set forth above or any part of this limitation on liability is found to be invalid or unenforceable for any reason, then the aggregate liability of Robinsons Movieworld under such circumstances for liabilities that otherwise would have been limited and shall not exceed the price you paid for the purchase via the Service.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">III. Registration</span>
      </button>
      <div class="dropdown-content">Robinsons Movieworld Services are available only to, and may only be used by individuals who can form legally binding contracts under the law. Without limiting the foregoing, our Services are not available to children (persons under the age of 18). If you are under the age of 18, you can use Robinsons Movieworld Services only in conjunction with, and under the supervision of your parents or guardians. While registration is not a requirement to avail the Service, an option to register for promo alerts is offered by the site. Personal information such as full name and email address are collected only for this purpose. You are solely responsible for your personal information save that Robinsons Movieworld will use and protect your personal information in accordance with Robinsons Movieworld Privacy Policy. You acknowledge that no data transmission over the internet can be completely secure, and Robinsons Movieworld cannot give an absolute assurance that your personal information you provide to us will be secure at all times. If you object to your personal information being used in this way, please do not use Robinsons Movieworld Services. Employees of Robinsons Movieworld, their relatives and its related bodies corporate are entitled to become members of the Website, but are not entitled to participate in any competitions organized by Robinsons Movieworld on the Website. This limitation includes employees' relatives up to the 2nd degree of consanguinity and affinity. Without limiting other remedies, Robinsons Movieworld may at its sole discretion limit your activity, temporarily or indefinitely block your credit card and refuse to provide Robinsons Movieworld Services to you if: (a) you breach any Terms and Conditions hereof or any terms incorporated by reference; (b) we are unable to verify or authenticate any information provided to us which we deemed is requisite and necessary; (c) we believe that your actions may cause financial loss or legal liability to us; or (d) upon Robinsons Movieworld's sole determination that you have or about to commit an act inimical to our best interest.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">IV. Permitted Use</span>
      </button>
      <div class="dropdown-content">The Service is for your personal and non-commercial use. Unless otherwise agreed to in writing by Robinsons Movieworld, you agree that you will not use the Service or duplicate, download, publish, modify or otherwise distribute or use any material included in the Service for any purpose, except to review the information included in the Service, to subscribe to programs included in the Service, and to purchase movie or other event tickets, or other products offered by Robinsons Movieworld for your personal use. You also agree that you will not link to any page on the Service other than Robinsons Movieworld's home page, without Robinsons Moviewold's prior written consent. Use of the Service or the materials or content contained in the Service for any purpose not set forth in these Terms and Conditions is prohibited and may subject the user to criminal prosecution under Philippine laws.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">V. Copyrights and Proprietary Rights</span>
      </button>
      <div class="dropdown-content">You acknowledge and agree that the copyright and other intellectual property rights in the Services and in all information and materials on this Website ("Website Content") are owned by Robinsons Movieworld, its affiliates, suppliers or licensors unless otherwise expressly indicated. The Website Content is protected by Philippine and international copyright and trademark laws. You agree that you will not do any of the following without Robinsons Movieworld's written permission: a. Use Robinsons Movieworld's trademarks, except for printing out a copy of this Website or as part of a reference to a Robinsons Movieworld product or service; b. reproduce, copy, modify, merge, adapt, translate, re-publish, frame, upload to a third party, post, transmit, broadcast, communicate to the public or otherwise make the Website Content available to the public; c. transmit or display the Website Content on any computer, system or network which permits electronic access by more than one user at a time; d. use, sell, assign, rent, sub-licence or otherwise deal with the Website Content except as permitted by the Terms and Conditions; or e. anything else which would infringe Robinsons Movieworld's rights or the rights of Robinsons Movieworld's content suppliers.
<br /> <br />
You may view this Website using a web "browser" so long as you do not change the form of copyright and other proprietary notices. If you are interested in a piece of content solely for your own personal and non commercial use, you may save a single copy, print one or download one.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">VI. Purchase Policy</span>
      </button>
      <div class="dropdown-content">Movie tickets purchased via the Services are strictly non-cancelable and are not available for exchange under whatever circumstances. Refunds will be provided only when the movie itself has been canceled/re-scheduled, or if the cinema(s) concerned will not be operating at the date stated in the purchased movie ticket for any reason whatsoever. Refunds will be coursed thru the respective medium by which the Purchaser bought the tickets (credit card). A non-refundable PHP 20.00 (Philippine Peso) convenience fee will be charged to your credit card for every ticket purchased via the Services. Movie tickets purchased via the Services will be available for collection at the relevant cinema porter. The Purchaser must bring along the following: a. Voucher produced via website, which contains the Transaction ID and Receipt ID used to retrieve transaction information for purchase verification and ticket printing confirmation. See Website FAQ page for more information on voucher redemption. b. Movie tickets are made available subject to the classification of the relevant film given by the Movie and Television Review and Classification Board (MTRCB). Robinsons Movieworld has a legal obligation to refuse admission to any person, who in the opinion of its Theater Manager, is under the minimum age required for R-13 and R-18 classified films. Proof of age may be required in certain instances. Tickets purchased online are redeemable only until the screening time and duration of the movie for which the ticket was purchased. Once screening time has lapsed, ticket will be considered unredeemable from either the ticket booth or cinema porter. You represent and warrant that (a) any credit information you supply is true and complete; (b) charges incurred by you will be honored by your credit card company; and (c) you will pay the charges incurred by you at the posted prices, including any applicable taxes. In the event that voucher holder is not the card holder, the former shall be requested to present the following upon claiming of ticket: a. Voucher print out or SMS b. Photocopy of the credit card used for the transaction c. Valid ID d. Transaction ID and Receipt ID In order for your transaction to be deemed successful, you should receive an option to print your confirmation page from Robinsons Movieworld at the end of the online ticketing transaction process, receive an SMS copy of your transaction details as well as Transaction ID and Receipt ID for ticket redemption, and receive a copy of your voucher in the email which you supplied when registering for the Service. In the event that voucher nor SMS confirmation has not been received within five (5) minutes from the time purchase was confirmed, user may contact Robinsons Movieworld's Service Hotline number (02)397-1888 for assistance. All payments are subject to the terms and conditions of each bank and Robinsons Movieworld has no authority over any payments made through the bank payment gateway. Robinsons Movieworld does not retain your payment details or any other significant information such as your credit card number, passwords, pin number etc. Details of your credit card may be securely held by the bank which processes your transaction.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">VII. Reservation</span>
      </button>
      <div class="dropdown-content">We reserve the right to modify or discontinue, temporarily or permanently, this Site or any part of this Site with or without notice. You agree that we shall not be liable to you or any third party for any modification, suspension or discontinuance of the Site and / or any Services under this agreement, for any reason. We do not guarantee continuous, uninterrupted or secure access to our service, and operation of our Site which may be interfered with by environmental factors outside of our control. In addition, the Site could be unavailable during certain periods of time while it is being updated and modified. During this time, the Site will be temporarily unavailable. We shall not be made liable for any discomfort or prejudice which you have suffered as a result of these circumstances..</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">VIII. Third Party Links and Advertising</span>
      </button>
      <div class="dropdown-content">Robinsons Movieworld provides hyperlinks to third party sites ("Linked Sites") for convenience only, and the inclusion of the hyperlink does not imply any endorsement of the Linked Site by Robinsons Movieworld or its affiliates. In addition, the inclusion of third party advertising on this Website (whether with or without hyperlinks) is not an endorsement or recommendation of the third party advertiser by Robinsons Movieworld or its affiliates. You acknowledge and agree that Linked Sites are not under the control of Robinsons Movieworld and that Robinsons Movieworld is not liable or responsible for: a. any act, omission or negligence of any person who administers or owns any Linked Site; b. the copyright compliance, legality or decency of any Linked Site; c. the accuracy or reliability of any information provided by any Linked Site; d. any goods or services provided by any person who administers or owns any Linked Site; or e. the performance of any obligations owing to by any person who administers or owns any Linked Site. f. the contents of the site including if it is discovered by the user as annoying, scandalous, or contrary to his values and beliefs.</div>
    </div>

    <div class="dropdown">
      <button onclick="toggleDropdown(this)">
        <span class="arrow">▶</span>
        <span class="title">IX. Governing Law</span>
      </button>
      <div class="dropdown-content">These Terms and Conditions shall be construed in accordance with and shall be governed by the laws in force in the Philippines.</div>
    </div>

  </div>
<script>
  function toggleDropdown(clickedButton) {
    const allButtons = document.querySelectorAll(".dropdown button");
    const allContents = document.querySelectorAll(".dropdown-content");

    allButtons.forEach(button => {
      if (button !== clickedButton) {
        button.classList.remove("active");
        const arrow = button.querySelector(".arrow");
        if (arrow) arrow.textContent = "▶";
      }
    });

    allContents.forEach(content => {
      if (content !== clickedButton.nextElementSibling) {
        content.style.maxHeight = null;
        content.classList.remove("open");
      }
    });

    const isActive = clickedButton.classList.toggle("active");
    const arrow = clickedButton.querySelector(".arrow");
    const content = clickedButton.nextElementSibling;

    if (isActive) {
      content.classList.add("open");
      content.style.maxHeight = content.scrollHeight + "px";
      if (arrow) arrow.textContent = "▼";
    } else {
      content.classList.remove("open");
      content.style.maxHeight = null;
      if (arrow) arrow.textContent = "▶";
    }
  }
</script>
   </section>
  </div>

  <script src="js/myscript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<footer>
  <div class="footer">
    <p>
      Movie World &copy; 2025<br />

      <!-- Inserted footer nav here -->
      <div class="footer-nav">
        <a href="index.html">Home</a>
        <a href="nowshowing.html">Now Showing</a>
        <a href="advanceticketselling.html">Advance Ticket Selling</a>
        <a href="comingsoon.html">Coming Soon</a>
        <a href="termsandcondition.html">Terms and Conditions</a>
        <a href="FAQs.html">FAQs</a>
        <a href="policy.html">Privacy and Policy</a>
      </div>
      <br />

      Trademark and Copyright Notice:
      &reg; and &copy; Movie World and its related entities. All rights reserved.<br />
      Use of this Website assumes acceptance of Terms of Use and Privacy Policy.
    </p>
  </div>
</footer>
</body>
</html>