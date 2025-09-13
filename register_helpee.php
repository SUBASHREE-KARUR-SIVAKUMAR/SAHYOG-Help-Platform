<?php 
// Set the page title for the common header
$page_title = "SAHYOG - Together We Empower | HELPEE";

// Include the common header file
include 'common_header.php'; 
?>

<style>
    /* Your specific styles for the Helpee page */

    /* Emergency Button Styles */
    .emergency-container {
        display: flex;
        justify-content: center;
        margin: 2rem 0;
    }
    
    .emergency-btn {
        background: linear-gradient(to right, #e74c3c, #c0392b);
        color: white;
        border: none;
        padding: 18px 35px;
        border-radius: 50px;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 6px 15px rgba(231, 76, 60, 0.5);
        transition: all 0.3s;
        animation: pulse 2s infinite;
    }
    
    .emergency-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(231, 76, 60, 0.6);
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    /* Form Section Styles */
    .form-section {
        background-color: white;
        border-radius: 12px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .form-title {
        color: #0b3c78; /* Consistent blue from common header */
        margin-bottom: 1.5rem;
        padding-bottom: 0.8rem;
        border-bottom: 2px solid #f0f0f0;
        font-size: 1.8rem;
        text-align: center;
    }
    
    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }
    
    .form-group {
        margin-bottom: 1.2rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #555;
    }
    
    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #0b3c78; /* Consistent blue */
        box-shadow: 0 0 0 3px rgba(11, 60, 120, 0.2);
    }
    
    select.form-control {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px;
    }
    
    .btn-submit {
        background: linear-gradient(to right, #0b3c78, #123a73); /* Consistent blue */
        color: white;
        border: none;
        padding: 14px 30px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 1rem;
        width: 100%; /* Make submit button full width */
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(11, 60, 120, 0.4);
    }
    
    /* Help Listings Styles */
    .listings {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }
    
    .helpee-card {
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
        position: relative;
    }
    
    .helpee-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }
    
    .card-header {
        padding: 1.2rem;
        background: linear-gradient(135deg, #0b3c78 0%, #123a73 100%); /* Consistent blue */
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
        color: #0b3c78; /* Consistent blue */
        width: 20px;
    }
    
    .card-category {
        display: inline-block;
        padding: 6px 14px;
        background-color: #e8f4fc; /* Light blue background */
        color: #0b3c78; /* Consistent blue text */
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    .card-category.emergency {
        background-color: #ff1744 !important; /* Bright red for emergency */
        color: white !important;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(255, 23, 68, 0.3);
        animation: emergency-glow 2s infinite alternate;
    }

    @keyframes emergency-glow {
        0% { box-shadow: 0 2px 8px rgba(255, 23, 68, 0.3); }
        100% { box-shadow: 0 4px 16px rgba(255, 23, 68, 0.6); }
    }
    
    /* Search Section Styles */
    .search-container {
        margin: 2.5rem 0;
    }
    
    .search-box {
        display: flex;
        max-width: 600px;
        margin: 0 auto;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-radius: 50px;
        overflow: hidden;
    }
    
    .search-input {
        flex: 1;
        padding: 15px 25px;
        border: none;
        font-size: 1.1rem;
    }
    
    .search-input:focus {
        outline: none;
    }
    
    .search-btn {
        background: linear-gradient(to right, #0b3c78, #123a73); /* Consistent blue */
        color: white;
        border: none;
        padding: 0 25px;
        cursor: pointer;
        font-size: 1.2rem;
        transition: all 0.3s;
    }
    
    .search-btn:hover {
        background: linear-gradient(to right, #123a73, #0f172a);
    }
    
    /* Message styling for success/error alerts */
    .message {
        padding: 1rem;
        margin: 1rem auto;
        border-radius: 5px;
        text-align: center;
        max-width: 600px;
    }

    .message.success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .message.error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .listings {
            grid-template-columns: 1fr;
        }
        .emergency-btn {
            padding: 15px 25px;
            font-size: 1.1rem;
        }
    }
</style>

<main class="container">
    <!-- Emergency Button -->
    <div class="emergency-container">
        <button class="emergency-btn">
            <i class="fas fa-exclamation-circle"></i>
            EMERGENCY HELP REQUEST
        </button>
    </div>

    <!-- Help Request Form -->
    <section class="form-section">
        <h2 class="form-title">REQUEST FOR HELP</h2>
        <!-- PHP for success/error messages -->
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'helpee_success') {
            echo "<div class='message success'>Thank you for posting your need! Our team will review it shortly.</div>";
        }
        if (isset($_GET['status']) && $_GET['status'] == 'helpee_error') {
            echo "<div class='message error'>There was an error submitting your need. Please try again.</div>";
        }
        ?>
        <form action="submit_helpee.php" method="POST" id="helpeeForm">
            <div class="form-grid">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="category">Category of Help Needed</label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="Medical">Medical</option>
                        <option value="Education">Education</option>
                        <option value="Food">Food</option>
                        <option value="Housing">Housing</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Elderly Care">Elderly Care</option>
                        <option value="General">General</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="amount_needed">Amount Needed (USD)</label>
                    <input type="number" id="amount_needed" name="amount_needed" class="form-control" placeholder="e.g., 5000" min="0" step="0.01" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Mobile</label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Your mobile number" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Your email address">
                </div>
                
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" class="form-control" rows="3" placeholder="Your complete address" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="querry">Describe your need/query:</label>
                    <textarea id="querry" name="querry" class="form-control" rows="3" placeholder="Please describe what kind of help you need" required></textarea>
                </div>
            </div>
            
            <button type="submit" class="btn-submit">Post Your Need</button>
        </form>
    </section>

    <!-- Search (for Helpees) -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="helpeeSearchInput" class="search-input" placeholder="Type here to search for specific needs">
            <button class="search-btn" id="helpeeSearchBtn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Helpee Listings -->
    <h2 class="form-title">CURRENT HELP REQUESTS</h2>
    <div class="listings" id="helpeeListings">
        <?php
        // PHP to fetch and display helpees
        require_once 'connect.php';

        $sql = "SELECT name, phone, email, address, category, amount_needed, querry FROM helpee ORDER BY name ASC";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='helpee-card'>";
                echo "<div class='card-header'>";
                echo "<h3 class='card-title'>" . htmlspecialchars($row['name']) . " needs help with " . htmlspecialchars($row['category']) . "</h3>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<p class='card-detail'><i class='fas fa-user'></i>" . htmlspecialchars($row['name']) . "</p>";
                echo "<p class='card-detail'><i class='fas fa-map-marker-alt'></i>" . htmlspecialchars($row['address']) . "</p>";
                echo "<p class='card-detail'><i class='fas fa-money-bill-wave'></i>Amount Needed: USD " . number_format($row['amount_needed'], 2) . "</p>";
                echo "<p class='card-detail'>";
                $categoryClass = (strtolower($row['category']) === 'emergency') ? 'card-category emergency' : 'card-category';
                echo "<span class='" . $categoryClass . "'>" . htmlspecialchars($row['category']) . "</span>";
                echo "</p>";
                echo "<p class='card-detail'><i class='fas fa-info-circle'></i>" . htmlspecialchars($row['querry']) . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p style='text-align:center; color:#666;'>No needs posted yet. Be the first to post a need!</p>";
        }

        mysqli_close($conn);
        ?>
    </div>
</main>

<script>
    // Emergency button functionality
    document.querySelector('.emergency-btn').addEventListener('click', function() {
        if(confirm('Are you in immediate danger or need urgent help? We will prioritize your request.')) {
            document.getElementById('category').value = 'Emergency';
            document.getElementById('helpeeForm').scrollIntoView({behavior: 'smooth'});
        }
    });
    
    // Simple client-side search functionality for displayed cards
    document.getElementById('helpeeSearchInput').addEventListener('click', function() {
        const searchTerm = document.getElementById('helpeeSearchInput').value.toLowerCase();
        const cards = document.querySelectorAll('.helpee-card');
        
        cards.forEach(card => {
            const text = card.textContent.toLowerCase();
            if(text.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
    
    // Allow pressing Enter to search
    document.getElementById('helpeeSearchInput').addEventListener('keypress', function(e) {
        if(e.key === 'Enter') {
            document.getElementById('helpeeSearchBtn').click();
        }
    });
</script>

<?php 
// Include the common footer file
include 'common_footer.php'; 
?>
