<header>
    <div class="container">
        <div class="header-content">
            <h1><a href="{{ url('/') }}">MyWebsite</a></h1>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Custom CSS for Header --}}
    <style>
        header {
            background-color: #343a40;
            padding: 20px 0;
            color: #ffffff;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-content h1 a {
            color: #ffffff;
            text-decoration: none;
            font-size: 2rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #17a2b8;
        }
    </style>
</header>
