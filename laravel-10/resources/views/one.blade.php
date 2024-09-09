<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-container">
        <h1>স্বাগতম!</h1>
        <p>আমাদের ওয়েবসাইটে আপনাকে স্বাগতম। নিচের ফর্মটি পূরণ করে আমাদের সাথে যোগাযোগ করুন।</p>
        <a href="#contact" class="welcome-btn">যোগাযোগ করুন</a>
    </div>

    <div class="contact-form-container" id="contact">
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


{{-- <!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-container">
        <h1>স্বাগতম!</h1>
        <p>আমাদের ওয়েবসাইটে আপনাকে স্বাগতম। আশা করি আপনার অভিজ্ঞতা সুন্দর হবে।</p>
        <a href="#" class="welcome-btn">শুরু করুন</a>
    </div>
</body>
</html> --}}

