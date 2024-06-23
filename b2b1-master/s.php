<!-- search_results.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body>
    <h2>Search Results</h2>

    <?php
    // Check if the search query parameter is set
    if (isset($_GET['q'])) {
        $search_query = $_GET['q'];

        // Perform search logic (replace with your own search logic)
        // Example: search in a database table
        // $search_query should be sanitized before using in real applications to prevent SQL injection
        include "config.php";
        $sel = "SELECT * FROM `product`";
        $q = mysqli_query($con,$sel);
        $results = $q; // Replace with your actual search query logic

        // Display search results
        if (!empty($results)) {
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li>" . $result['title'] . " - " . $result['description'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No results found.";
        }
    } else {
        echo "No search query entered.";
    }
    ?>

</body>
</html>
