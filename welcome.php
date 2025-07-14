<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
    /* Background Styling */
    html {
        background: 
            linear-gradient(135deg, rgba(30, 144, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 100%),
            linear-gradient(-135deg, rgba(30, 144, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 25%, rgba(0, 191, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 50%, rgba(30, 144, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 75%, rgba(0, 191, 255, 0.6) 100%);
        background-color: #1E90FF; /* Fallback color */
        background-blend-mode: overlay;
        background-size: 200% 200%;
        animation: backgroundAnimation 15s ease infinite;
        min-height: 100vh; /* Ensure full viewport height */
    }
    /* Background Animation for Dynamic Effect */
    @keyframes backgroundAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: flex-start; /* Align items at the top */
        align-items: center;
    }
    .container {
        text-align: center;
        background-color: powderblue;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15), 0 2px 5px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 100%;
        transition: transform 0.2s ease-in-out;
    }
    h1 {
        color: #343a40;
        margin: 5px 0; /* Space between headings */
    }
    h2 {
        color: #380000;
        margin: 5px 0; /* Space between headings */
    }
    .button-container {
        display: flex;
        justify-content: center; /* Center align the buttons */
        align-items: center; /* Center vertically within the button container */
        gap: 20px; /* Space between dropdowns */
        width: 100%; /* Ensure it takes full width */
        max-width: 800px; /* Control the maximum width of the button container */
    }
    /* Dropdown Styling */
    .dropdown {
        position: relative;
        display: inline-block;
        width: 300px; /* Set a fixed width for the buttons */
    }
    button {
        padding: 10px;
        font-size: 24px;
        background-color: steelblue;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        width: 100%; /* Make button take full width of the container */
        margin: 10px 0; /* Space around buttons */
        transition: background-color 0.3s ease, box-shadow 0.2s ease;
    }
    button:hover {
        background-color: #4682b4;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 300px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15), 0 2px 5px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 8px;
        overflow: hidden; /* Prevent overflow */
        margin-top: 0; /* Remove margin above the dropdown */
    }
    /* Style for dropdown buttons (lighter than main button) */
    .dropdown-content button {
        width: 100%;
        background-color: #add8e6; /* Light Steel Blue */
        color: #000; /* Darker text for contrast */
        border: none;
        text-align: left;
        padding: 8px 12px; /* Adjust padding for a more appealing look */
        cursor: pointer;
        font-size: 16px;
        border-radius: 0; /* Remove border radius for button edges to align */
        transition: background-color 0.2s ease;
        margin: 0; /* Remove margins to eliminate gaps */
    }
    /* Remove margins from buttons to eliminate gaps */
    .dropdown-content button:hover {
        background-color: #b0c4de; /* Slightly darker on hover */
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Velammal College of Engineering and Technology</h1>
        <h2>Department of Computer Science and Engineering</h2>
        <h1>CSE Examcell</h1>
    </div>
    <div class="button-container">
        <!-- Dropdown button for Convert QB to QP -->
        <div class="dropdown">
            <button type="button" class="manual" >Convert QB to QP</button>
            <div class="dropdown-content">
                <form action="examqp/main1.html" method="get">
                    <button type="submit">With Part C</button>
                </form>
                <form action="examqp/main2.html" method="get">
                    <button type="submit">Without Part C</button>
                </form>
            </div>
        </div>
        <!-- Dropdown button for Generate Hall Plan -->
        <div class="dropdown">
            <button type="button" >Generate Hall Plan</button>
            <div class="dropdown-content">
                <form action="hall plan generator/index1.html" method="get">
                    <button type="submit">For One Year</button>
                </form>
                <form action="hall plan generator/index2.html" method="get">
                    <button type="submit">For Two Years</button>
                </form>
                <form action="hall plan generator/index3.html" method="get">
                    <button type="submit">For Three Years</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>