<!DOCTYPE html>
<html>
<head>
    <title>Browse Donators - SAHYOG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Re-using general styles for consistency or link to style.css -->
    <style>
        /* Your general styles for header/nav/footer can go here or be loaded from style.css */
        /* For this file, I'll provide minimal styles for the listings */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header {
            background: linear-gradient(135deg, #4a6fa5 0%, #2c3e50 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            text-align: center;
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        header a {
            color: #ffce5c;
            text-decoration: none;
            font-weight: 500;
        }
        header a:hover {
            text-decoration: underline;
        }
        main {
            padding: 2rem 0;
        }
        h2 {
            text-align: center;
            color: #4a6fa5;
            margin-bottom: 2rem;
            font-size: 2rem;
        }
        .listings {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .donator-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }
        .donator-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .card-header {
            padding: 1.2rem;
            background: linear-gradient(135deg, #4a6fa5 0%, #3a5a84 100%);
            color: white;
        }
        .card-body {
            padding: 1.8rem;
        }
        .card-title {
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
        }
        .card-detail {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #555;
        }
        .card-detail i {
            margin-right: 12px;
            color: #4a6fa5;
            width: 20px;
        }
        .card-category {
            display: inline-block;
            padding: 6px 14px;
            background-color: #e8f4fc;
            color: #4a6fa5;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-right: 8px;
            margin-bottom: 8px;
        }
        footer {
            background: linear-gradient(135deg, #2c3e50 0%, #1a2530 100%);
            color: white;
            padding: 1.5rem 0;
            margin-top: 4rem;
            text-align: center;
        }
        /* Message styling for success/error alerts */
        .message {
            padding: 1rem;
            margin: 1rem auto;
            border-radius: 5px;
            text-align: center;
            max-width: 600px;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="container">
            <h1>🌟 Find Helpers</h1>
            <a href="index.php">← Back to Home</a>
        </div>
    </header>
    
    <main class="container">
        <h2>People Offering Help</h2>
        <div class="listings">
            <?php
            require_once 'connect.php'; // Include your database connection

            // SQL query to select all data from the donator table
            // This SELECT list MUST match your donator table's current columns
            $sql = "SELECT id, name, phone, email, address, category, donation_type FROM donator ORDER BY name ASC"; 
            $result = mysqli_query($conn, $sql);

            // Debugging output (can be removed once confirmed working)
            if (!$result) {
                echo "<div class='message error'>Database Query Error: " . mysqli_error($conn) . "</div>";
            } else {
                echo "<div class='message'>Query executed successfully. Rows found: " . mysqli_num_rows($result) . "</div>";
            }
            // End Debugging output

            if ($result && mysqli_num_rows($result) > 0) {
                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='donator-card'>";
                    echo "<div class='card-header'>";
                    echo "<h3 class='card-title'>" . htmlspecialchars($row["name"]) . " offers " . htmlspecialchars($row["donation_type"]) . "</h3>";
                    echo "</div>";
                    echo "<div class='card-body'>";
                    echo "<p class='card-detail'><i class='fas fa-user'></i>" . htmlspecialchars($row["name"]) . "</p>";
                    echo "<p class='card-detail'><i class='fas fa-map-marker-alt'></i>" . htmlspecialchars($row["address"]) . "</p>";
                    echo "<p class='card-detail'>";
                    echo "<span class='card-category'>" . htmlspecialchars($row["category"]) . "</span>";
                    echo "<span class='card-category'>" . htmlspecialchars($row["donation_type"]) . "</span>";
                    echo "</p>";
                    // Contact info (uncomment if you want it publicly visible)
                    // echo "<p class='card-detail'><i class='fas fa-envelope'></i>" . htmlspecialchars($row["email"]) . "</p>";
                    // echo "<p class='card-detail'><i class='fas fa-phone'></i>" . htmlspecialchars($row["phone"]) . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No donators registered yet. Be the first to offer help!</p>";
            }

            mysqli_close($conn); // Close the database connection
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 SAHYOG - Together We Empower. All rights reserved.</p>
    </footer>
</body>
</html>
