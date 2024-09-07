<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="{{ url('/') }}">MyWebsite</a>
            </div>
            <ul class="footer-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            <div class="footer-social">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" alt="Facebook"></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/twitter-circled.png" alt="Twitter"></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin-circled.png" alt="LinkedIn"></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} MyWebsite. All Rights Reserved.</p>
        </div>
    </div>

    {{-- Custom CSS for Footer --}}
    <style>
        footer {
            background-color: #343a40;
            padding: 40px 0;
            color: #ffffff;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-logo a {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ffffff;
            text-decoration: none;
        }

        .footer-menu {
            list-style: none;
            display: flex;
            padding: 0;
        }

        .footer-menu li {
            margin-left: 20px;
        }

        .footer-menu a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-menu a:hover {
            color: #17a2b8;
        }

        .footer-social a {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .footer-social a:hover {
            transform: scale(1.2);
        }

        .footer-social img {
            width: 30px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-logo, .footer-menu, .footer-social {
                margin-bottom: 15px;
            }

            .footer-menu {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-menu li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            .footer-social {
                margin-left: 0;
            }
        }
    </style>
</footer>
