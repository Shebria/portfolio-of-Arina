<?php
include('db.php'); // Include the database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portfolio - Shebria Binthey Hossain Arina</title>
    <!-- Include other meta tags and CSS here -->
</head>
<body>
    <main class="main">
        <section id="projects" class="portfolio section py-5 bg-light">
            <div class="container section-title text-center mb-5">
                <h1>My Projects</h1>
                <p>A showcase of my professional and personal projects in web, app development, and design.</p>
            </div>

            <!-- Filter Projects Section -->
            <ul class="portfolio-filters isotope-filters text-center mb-5">
                <li class="filter-active" data-filter="*">All</li>
                <li data-filter=".filter-web">EEE</li>
                <li data-filter=".filter-app">Graphics</li>
                <li data-filter=".filter-design">Computer Security</li>
                <li data-filter=".filter-dev">Software Development</li>
            </ul>

            <!-- Project Cards Section -->
            <div class="container">
                <div class="row gy-4 isotope-container">
                    <?php
                    // Fetch all projects from the database
                    $query = "SELECT * FROM projects";
                    $result = $conn->query($query);
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-' . strtolower($row['category']) . '">';
                            echo '    <div class="card portfolio-wrap">';
                            echo '        <img src="' . $row['image_url'] . '" alt="' . $row['title'] . '">';
                            echo '        <div class="card-body portfolio-info">';
                            echo '            <h5>' . $row['title'] . '</h5>';
                            echo '            <p>' . $row['description'] . '</p>';
                            echo '            <div class="portfolio-links mt-2">';
                            echo '                <a href="' . $row['image_url'] . '" class="glightbox" title="' . $row['title'] . '"><i class="bi bi-plus"></i></a>';
                            echo '                <a href="portfolio-details.php?id=' . $row['id'] . '" title="Project Details"><i class="bi bi-link"></i></a>';
                            echo '            </div>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No projects found.';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
