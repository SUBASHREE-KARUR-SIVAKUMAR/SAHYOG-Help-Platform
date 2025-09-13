<?php 
$page_title = "SAHYOG - Together We Empower | DONATOR";
include 'common_header.php'; 
?>

<style>
    /* Form Styles */
    .form-section {
        background-color: white;
        border-radius: 12px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .form-title {
        color: #0b3c78;
        margin-bottom: 1.5rem;
        padding-bottom: 0.8rem;
        border-bottom: 2px solid #f0f0f0;
        font-size: 1.8rem;
        text-align: center;
    }
    
    .hero {
        background: linear-gradient(rgba(11, 60, 120, 0.9), rgba(11, 60, 120, 0.9)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 4rem 2rem;
        border-radius: 12px;
        margin: 2rem 0;
    }
    
    .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }
    
    .hero p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
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
        border-color: #0b3c78;
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
        background: linear-gradient(to right, #0b3c78, #123a73);
        color: white;
        border: none;
        padding: 14px 30px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 1rem;
        width: 100%;
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(11, 60, 120, 0.4);
    }
    
    /* Donation Types */
    .donation-types {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
    }
    
    .type-card {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s;
    }
    
    .type-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .type-icon {
        font-size: 2.5rem;
        color: #0b3c78;
        margin-bottom: 1rem;
    }
    
    .type-card h3 {
        color: #0b3c78;
        margin-bottom: 0.5rem;
    }
    
    /* Donators Listings */
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
        background: linear-gradient(135deg, #0b3c78 0%, #123a73 100%);
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
        color: #0b3c78;
        width: 20px;
    }
    
    .card-category {
        display: inline-block;
        padding: 6px 14px;
        background-color: #e8f4fc;
        color: #0b3c78;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-right: 8px;
        margin-bottom: 8px;
    }
    
    /* Search */
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
        background: linear-gradient(to right, #0b3c78, #123a73);
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
    
    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
        .listings {
            grid-template-columns: 1fr;
        }
        .donation-types {
            grid-template-columns: 1fr;
        }
    }
</style>

<main class="container">
    <!-- Hero Section -->
    <section class="hero">
        <h1>Make a Difference Today</h1>
        <p>Your generosity can change lives. Join our community of donors and help those in need with your contributions.</p>
    </section>

    <!-- Donation Form -->
    <section class="form-section">
        <h2 class="form-title">BECOME A DONATOR</h2>
        <!-- PHP for success/error messages -->
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'donator_success') {
            echo "<div class='message success'>Thank you for your generous offer to help! Our team will contact you soon.</div>";
        }
        if (isset($_GET['status']) && $_GET['status'] == 'donator_error') {
            echo "<div class='message error'>There was an error submitting your offer. Please try again.</div>";
        }
        ?>
        <form action="submit_donator.php" method="POST" id="donatorForm">
            <div class="form-grid">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="category">Category of Help</label>
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
                    <label for="donation_type">Donation Type</label>
                    <select id="donation_type" name="donation_type" class="form-control" required>
                        <option value="">Select Donation Type</option>
                        <option value="Money">Money</option>
                        <option value="Goods">Goods</option>
                        <option value="Services">Services</option>
                        <option value="Volunteer Time">Volunteer Time</option>
                    </select>
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
            </div>
            
            <button type="submit" class="btn-submit">Submit Donation Offer</button>
        </form>
    </section>

    <!-- Donation Types -->
    <h2 class="form-title">WAYS TO HELP</h2>
    <div class="donation-types">
        <div class="type-card">
            <div class="type-icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>
            <h3>Money</h3>
            <p>Financial contributions to support those in need</p>
        </div>
        
        <div class="type-card">
            <div class="type-icon">
                <i class="fas fa-gift"></i>
            </div>
            <h3>Goods</h3>
            <p>Donate essential items like food, clothing, or supplies</p>
        </div>
        
        <div class="type-card">
            <div class="type-icon">
                <i class="fas fa-tools"></i>
            </div>
            <h3>Services</h3>
            <p>Offer your professional skills and expertise</p>
        </div>
        
        <div class="type-card">
            <div class="type-icon">
                <i class="fas fa-hands-helping"></i>
            </div>
            <h3>Volunteer Time</h3>
            <p>Give your time to help those in your community</p>
        </div>
    </div>

    <!-- Search -->
    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchInput" class="search-input" placeholder="Type here to search for donation opportunities">
            <button class="search-btn" id="searchBtn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Donators Listings -->
    <h2 class="form-title">CURRENT DONATORS</h2>
    <div class="listings" id="donatorListings">
        <?php
        // PHP to fetch and display donators
        require_once 'connect.php';

        $sql = "SELECT name, phone, email, address, category, donation_type FROM donator ORDER BY name ASC";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='donator-card'>";
                echo "<div class='card-header'>";
                echo "<h3 class='card-title'>" . htmlspecialchars($row['name']) . " offers " . htmlspecialchars($row['donation_type']) . "</h3>";
                echo "</div>";
                echo "<div class='card-body'>";
                echo "<p class='card-detail'><i class='fas fa-user'></i>" . htmlspecialchars($row['name']) . "</p>";
                echo "<p class='card-detail'><i class='fas fa-map-marker-alt'></i>" . htmlspecialchars($row['address']) . "</p>";
                echo "<p class='card-detail'>";
                echo "<span class='card-category'>" . htmlspecialchars($row['category']) . "</span>";
                echo "<span class='card-category'>" . htmlspecialchars($row['donation_type']) . "</span>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No donators registered yet. Be the first to offer help!</p>";
        }

        mysqli_close($conn);
        ?>
    </div>
</main>

<script>
    // Simple client-side search functionality for displayed cards
    document.getElementById('searchBtn').addEventListener('click', function() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const cards = document.querySelectorAll('.donator-card');
        
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
    document.getElementById('searchInput').addEventListener('keypress', function(e) {
        if(e.key === 'Enter') {
            document.getElementById('searchBtn').click();
        }
    });
</script>

<?php include 'common_footer.php'; ?>
