<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>যোগাযোগ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">আমাদের সাইট</div>
        <ul>
            <li><a href="index.html">হোম</a></li>
            <li><a href="about.html">আমাদের সম্পর্কে</a></li>
            <li><a href="services.html">সেবাসমূহ</a></li>
            <li><a href="contact.html">যোগাযোগ</a></li>
        </ul>
    </nav>

    <div class="contact-form-container">
        <h2>যোগাযোগ ফর্ম</h2>
        <form id="contactForm">
            <label for="name">নাম:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">ইমেইল:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">বার্তা:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="submit-btn">পাঠান</button>
        </form>
    </div>

    <footer>
        <p>যোগাযোগ করুন: info@example.com | ফোন: ০১২৩৪৫৬৭৮৯</p>
        <div class="social-links">
            <a href="#">ফেসবুক</a>
            <a href="#">টুইটার</a>
            <a href="#">লিঙ্কডইন</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
