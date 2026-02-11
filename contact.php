<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Care Bridge Hospital | Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsiveslides.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>

</head>

<body>

  <!-- HEADER -->
  <header class="header">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.html">
          <img src="images/logo.png" alt="Care Bridge logo" width="44" height="44">
          <span>Care Bridge</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- CONTACT -->
  <section class="contact-page">
    <div class="wrap">
      <div class="contact-header">
        <h1>Contact Care Bridge</h1>
        <p>We are here to help. Reach out for appointments, inquiries, or support.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card contact-info">
          <h2>Get In Touch</h2>
          <p>
            We’re here to help and care for you. Feel free to visit us at our hospital or get in touch using the contact details below.
            Our team is always ready to assist you with appointments, medical queries, and support services.
          </p>
          <hr>
          <h2>Hospital Address</h2>
          <p>Care Bridge Hospital, S.V road, <br> Malad West, Mumbai 400095 India</p>
          <hr>
          <div class="contact-meta">
            <h2>Contact Details</h2>
            <p><strong>Phone:</strong> +91 12345 6790</p>
            <p><strong>Phone:</strong> +91 09876 54321</p>
            <p><strong>Email:</strong> carebridge@gmail.com</p>
            <p><strong>Email:</strong> infocarebridge@gmail.com</p>
          </div>
        </div>
        <div class="contact-card contact-form">
          <h2>Send a Message</h2>
          <form id="whatsappForm">
            <label>
              <span>Name</span>
              <input type="text" name="name" placeholder="Your full name">
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="email" placeholder="you@example.com">
            </label>
            <label>
              <span>Mobile</span>
              <input type="tel" name="mobile" placeholder="+00 000 000 000">
            </label>
            <label>
              <span>Message</span>
              <textarea name="message" rows="4" placeholder="How can we help?"></textarea>
            </label>
            <button type="submit" class="btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    &copy; 2026 Care Bridge Hospital
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    (function() {
      var form = document.getElementById('whatsappForm');
      if (!form) return;

      form.addEventListener('submit', function(e) {
        e.preventDefault();

        var name = (form.elements.namedItem('name').value || '').trim();
        var email = (form.elements.namedItem('email').value || '').trim();
        var mobile = (form.elements.namedItem('mobile').value || '').trim();
        var message = (form.elements.namedItem('message').value || '').trim();

        var text = [
          'New Contact Request:',
          'Name: ' + name,
          'Email: ' + email,
          'Mobile: ' + mobile,
          'Message: ' + message
        ].join('\n');

        var phone = '919224463404';
        var url = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(text);
        window.location.href = url;
      });
    })();
  </script>
</body>

</html>