<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f6f7; /* abu muda */
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #2f2f2f; /* abu gelap */
        }
        .navbar .nav-link {
            color: #ddd !important;
            transition: color 0.3s;
        }
        .navbar .nav-link:hover {
            color: #00bcd4 !important; /* biru turquoise */
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #6c757d, #343a40); /* gradasi abu */
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .btn-custom {
            background-color: #00bcd4;
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #0097a7;
        }

        /* Blog Section */
        .blog-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            background: #ffffff;
        }
        .blog-card:hover {
            transform: translateY(-5px);
        }
        .blog-card img {
            border-radius: 15px 15px 0 0;
        }

        /* Footer */
        footer {
            background-color: #2f2f2f;
            color: #bbb;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">MyBlog</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <h1>Welcome to My Blog</h1>
        <p>Sharing thoughts, stories, and ideas with the world.</p>
        <a href="#blog" class="btn btn-custom mt-3">Explore Blog</a>
    </section>

    <!-- Blog Section -->
<section id="blog" class="container my-5">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card blog-card">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Blog 1">
                <div class="card-body">
                    <h5 class="card-title">Blog Post 1</h5>
                    <p class="card-text">Short description about the blog post goes here.</p>
                    <a href="#" class="btn btn-sm btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card blog-card">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Blog 2">
                <div class="card-body">
                    <h5 class="card-title">Blog Post 2</h5>
                    <p class="card-text">Short description about the blog post goes here.</p>
                    <a href="#" class="btn btn-sm btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card blog-card">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Blog 3">
                <div class="card-body">
                    <h5 class="card-title">Blog Post 3</h5>
                    <p class="card-text">Short description about the blog post goes here.</p>
                    <a href="#" class="btn btn-sm btn-custom">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card blog-card">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Blog 4">
                <div class="card-body">
                    <h5 class="card-title">Blog Post 4</h5>
                    <p class="card-text">Short description about the blog post goes here.</p>
                    <a href="#" class="btn btn-sm btn-custom">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <p>&copy; 2025 BLOG. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
