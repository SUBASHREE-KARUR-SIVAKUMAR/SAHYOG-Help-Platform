<!DOCTYPE html>
<html>
<head>
    <title>Browse Needs - HelpHub</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h1>👀 Browse Needs</h1>
        <a href="index.html">← Back to Home</a>
    </header>
    
    <main>
        <h2>People Seeking Help</h2>
        <div class="data-list">
            <?php
            require_once 'connect.php'; // Include your database connection

            // SQL query to select all data from the helpee table
            $sql = "SELECT id, name, phone, email, address, category, amount_needed, querry FROM helpee ORDER BY created_at DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='data-item'>";
                    echo "<h3>" . htmlspecialchars($row["name"]) . " needs help with " . htmlspecialchars($row["category"]) . "</h3>";
                    echo "<p><strong>Description:</strong> " . htmlspecialchars($row["querry"]) . "</p>";
                    echo "<p><strong>Amount Needed:</strong> USD " . number_format($row["amount_needed"], 2) . "</p>";
                    echo "<p><strong>Contact:</strong> " . htmlspecialchars($row["email"]) . " | " . htmlspecialchars($row["phone"]) . "</p>";
                    echo "<p><strong>Location:</strong> " . htmlspecialchars($row["address"]) . "</p>";
                    // You could add a 'Offer Help' button here that links to a donation/connection page
                    // echo "<a href='offer_help.php?helpee_id=" . $row["id"] . "' class='button'>Offer Help</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>No needs posted yet. Be the first to help!</p>";
            }

            mysqli_close($conn); // Close the database connection
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 HelpHub. All rights reserved.</p>
    </footer>
</body>
</html>
