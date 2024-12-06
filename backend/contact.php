<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

<!-- Header Section -->
<header>
    <h1>Appliance Guide</h1>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="appliances.html">Appliances</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- Contact Form Section -->
<section id="contact">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h2>Contact Us</h2>

        <div class="contact-info">
            <h3>Contact Information</h3>
            <p>Email: <a href="mailto:info@homeappliancesawareness.com">info@homeappliancesawareness.com</a></p>
            <p>Phone: +123 456 7890</p>
            <p>Address: 123 Appliance Lane, City, State, ZIP</p>
        </div>
            </div>
            <div class="panel-body">
                <form action="connect.php" method="post">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Home Appliances Awareness. All rights reserved.</p>
</footer>
</body>
</html>
