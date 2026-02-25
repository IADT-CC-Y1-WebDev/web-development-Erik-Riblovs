<?php
require_once 'php/lib/config.php';
require_once 'php/lib/session.php';
require_once 'php/lib/utils.php';

startSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'php/inc/head_content.php'; ?>
    <link rel="stylesheet" href="css/style.css">
    <title>Book Library | Home</title>
</head>
<body>
    <div class="container">
        <div class="width-12">
            <?php require 'php/inc/flash_message.php'; ?>
        </div>

        <header class="width-12 hero-section">
            <h1>The Book Library</h1>
            
            <div class="cta-wrapper">
                <a href="book_list.php" class="button btn-large">Browse Books</a>
            </div>
        </header>


        <section class="width-12 info-section">
            <div class="info-content">
                <h3>Features:</h3>
                <ul class="feature-list">
                    <li><strong>Catalog:</strong> Add new books with titles, authors, and ISBNs.</li>
                    <li><strong>Visuals:</strong> Upload and manage high-quality book covers.</li>
                    <li><strong>Details:</strong> Track publishers and available media formats.</li>
                    <li><strong>Management:</strong> View, edit, or remove entries at any time.</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>