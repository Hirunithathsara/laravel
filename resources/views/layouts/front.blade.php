<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="style.css">
    <a href="{{route('register') }}" class="signup-btn">Sign Up</a>
    

    <style>
        /* General Styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Helvetica Neue', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

* {
    box-sizing: border-box;
}

/* Hero Section */
.hero {
    background: #3498db;
    color: #fff;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 20px;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

.hero p {
    font-size: 1.5rem;
    margin-bottom: 30px;
}

.hero a {
    display: inline-block;
    background: #e74c3c;
    color: #fff;
    padding: 15px 30px;
    text-decoration: none;
    font-size: 1.2rem;
    border-radius: 5px;
    transition: background 0.3s ease-in-out;
}

.hero a:hover {
    background: #c0392b;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 2.5rem;
    }
    
    .hero p {
        font-size: 1.2rem;
    }
}

@media (max-width: 480px) {
    .hero h1 {
        font-size: 2rem;
    }
    
    .hero p {
        font-size: 1rem;
    }

    .hero a {
        padding: 10px 20px;
        font-size: 1rem;
    }
}
 /* Container for positioning */
.button-container {
    display: flex;
    justify-content: flex-start; /* Aligns content to the left */
    padding: 20px; /* Adjust padding as needed */
}

.signup-btn {
    float: right;
    padding: 15px 30px;
    font-size: 1rem;
    color: #fff;
    background-color: black;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin: 20px; /* Adjust margin to control spacing */
}
.signup-btn:hover {
    background-color: #2980b9;
    transform: translateY(-2px);
    box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.15);
}

.signup-btn:active {
    background-color: #1c598a;
    transform: translateY(0);
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.1);
}


    </style>
   
</head>
<body>
    <section class="hero">
        <div>
            <h1>Welcome to Our Website!</h1>
            <p>We are glad to have you here. Explore our services and products.</p>
            <a href="#learn-more">Learn More</a>
        </div>
    </section>
</body>
</html>