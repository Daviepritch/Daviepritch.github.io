<?php
// Define an array of menu items with their respective links
$menuItems = [
    'Home' => 'index.html',
    'About' => 'about.html',
    'Services' => 'services.html',
    'Contact' => 'contact.html',
];

// Get the current page's filename

<!DOCTYPE html>
<html>
<head>
    <title>Navigation Bar Example</title>
    <style>
        /* Add some basic CSS for styling the navigation bar */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
            width: 100%;
        }

        li.navitem {
            float: left;
        }

        li.navitem a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Style for the active page */
        li.navitem a.active {
            background-color: #4CAF50;
        }

        li.navitem a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <ul class="navbar">
        <?php
        // Loop through the menu items and generate navigation links
        foreach ($menuItems as $label => $link) {
            // Check if the current page matches the link
            $isActive = ($currentFileName === $link) ? 'active' : '';

            // Output the navigation item with the appropriate class
            echo '<li class="navitem"><a href="' . $link . '" class="' . $isActive . '">' . $label . '</a></li>';
        }
        ?>
    </ul>
</body>
</html>
