<?php 
$page_title = "SAHYOG - Together We Empower | Home";
$additional_css = '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />';
include 'common_header.php'; 
?>

<style>
    .hero {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(rgba(11, 60, 120, 0.85), rgba(11, 60, 120, 0.85));
        color: white;
        margin: 2rem auto;
        border-radius: 12px;
        max-width: 1000px;
        box-shadow: 10px 10px 30px rgba(7, 6, 6, 0.15);
    }
    
    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        text-shadow: 8px 12px 5px rgba(5, 3, 3, 0.788);
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
    }
    
    .hero p {
        font-size: 1.3rem;
        max-width: 800px;
        margin: 0 auto 2.5rem;
        color: #ecf0f1;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
    }
    
    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 2rem;
    }
    
    .cta-btn {
        padding: 1rem 2.5rem;
        font-size: 1.1rem;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        font-family: 'Montserrat', sans-serif;
    }
    
    .help-btn {
        background-color: #e74c3c;
        color: white;
        box-shadow: 0 4px 10px rgba(231, 76, 60, 0.3);
    }
    
    .help-btn:hover {
        background-color: #c0392b;
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(231, 76, 60, 0.4);
    }
    
    .provide-btn {
        background-color: #2ecc71;
        color: white;
        box-shadow: 0 4px 10px rgba(46, 204, 113, 0.3);
    }
    
    .provide-btn:hover {
        background-color: #27ae60;
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(46, 204, 113, 0.4);
    }
    
    .features {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        padding: 4rem 2rem;
        gap: 2.5rem;
        background-color: #a9c7ef;
        border-radius: 12px;
        margin: 2rem auto;
        max-width: 1000px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .feature-card {
        background: linear-gradient(145deg, #f8f9fa, #e9ecef);
        border-radius: 12px;
        padding: 2rem;
        width: 300px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
    }
    
    .feature-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #0b3c78;
    }
    
    .feature-card h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #2c3e50;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }
    
    .feature-card p {
        color: #7f8c8d;
        line-height: 1.6;
        font-family: 'Poppins', sans-serif;
    }
    
    .map-section {
        padding: 3rem 2rem;
        margin: 2rem auto;
        max-width: 1000px;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .map-section h2 {
        text-align: center;
        margin-bottom: 2rem;
        color: #0b3c78;
        font-family: 'Montserrat', sans-serif;
        font-size: 2.2rem;
    }
    
    .map-container {
        height: 500px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    #map {
        height: 100%;
        width: 100%;
    }
    
    .map-controls {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }
    
    .map-btn {
        padding: 0.6rem 1.2rem;
        background-color: #0b3c78;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .map-btn:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
    }
    
    .map-btn.active {
        background-color: #2c3e50;
    }
    
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
        .features {
            flex-direction: column;
            align-items: center;
        }
        .map-container {
            height: 400px;
        }
    }
</style>

<div class="container">
    <section class="hero">
        <h1>TOGETHER WE EMPOWER</h1>
        <p>For our country ... For our people...</p>
        <p>Join us to make a difference. Whether you need help or want to provide help, SAHYOG is here to act as a bridge for the people in need.</p>
        
        <div class="cta-buttons">
            <a href="register_helpee.php" class="cta-btn help-btn">GET HELP</a>
            <a href="register_donator.php" class="cta-btn provide-btn">PROVIDE HELP</a>
        </div>
    </section>

    <section class="map-section">
        <h2>Find Help Centers Across India</h2>

        <div class="map-controls">
            <button class="map-btn active" data-filter="all">All Centers</button>
            <button class="map-btn" data-filter="ngo">NGOs</button>
            <button class="map-btn" data-filter="foodbank">Food Banks</button>
            <button class="map-btn" data-filter="donationcenter">Donation Centers</button>
            <button class="map-btn" data-filter="oldagehome">Old Age Homes</button>
        </div>

        <div class="map-container">
            <div id="map"></div>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <div class="feature-icon">🤝</div>
            <h3>Connect</h3>
            <p>Connect with people who can help or those who need your support in your country and locality.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">💝</div>
            <h3>Donate</h3>
            <p>Make a difference by not only donating MONEY but also FOOD, SHELTER and SKILLS.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">⭐</div>
            <h3>Review</h3>
            <p>Share your experiences and help others find the right support network.</p>
        </div>
    </section>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Initialize the map
    const map = L.map('map').setView([20.5937, 78.9629], 5);
    map.invalidateSize();

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Define custom icons for different types of locations
    const icons = {
        ngo: L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        }),
        foodbank: L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        }),
        donationcenter: L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        }),
        oldagehome: L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-violet.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        })
    };

    // PHP CODE TO FETCH MAP DATA
    <?php
    require_once 'connect.php';
    
    $map_locations = [];
    $sql_map = "SELECT name, type, address, latitude, longitude FROM map";
    $result_map = mysqli_query($conn, $sql_map);

    if ($result_map && mysqli_num_rows($result_map) > 0) {
        while ($row_map = mysqli_fetch_assoc($result_map)) {
            $js_type = strtolower(str_replace(' ', '', $row_map['type']));
            
            if (is_numeric($row_map['latitude']) && is_numeric($row_map['longitude'])) {
                $map_locations[] = [
                    'type' => $js_type,
                    'name' => htmlspecialchars($row_map['name']),
                    'lat' => (float) $row_map['latitude'],
                    'lng' => (float) $row_map['longitude'],
                    'address' => htmlspecialchars($row_map['address'])
                ];
            }
        }
    }
    mysqli_close($conn);
    ?>

    const locations = <?php echo json_encode($map_locations); ?>;

    // Add markers to the map
    const markers = [];
    locations.forEach(location => {
        const markerOptions = icons[location.type] ? { icon: icons[location.type] } : {};

        const marker = L.marker([location.lat, location.lng], markerOptions)
            .addTo(map)
            .bindPopup(`
                <strong>${location.name}</strong><br>
                Type: ${location.type.toUpperCase()}<br>
                Address: ${location.address}
            `);

        marker.type = location.type;
        markers.push(marker);
    });

    // Filter functionality
    const filterButtons = document.querySelectorAll('.map-btn');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            markers.forEach(marker => {
                if (filter === 'all' || marker.type === filter) {
                    map.addLayer(marker);
                } else {
                    map.removeLayer(marker);
                }
            });
        });
    });
</script>

<?php include 'common_footer.php'; ?>
