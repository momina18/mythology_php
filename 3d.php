
<?php include ('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       /* Style for the grid container */
       #gridContainer {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columns */
            grid-gap: 20px; /* Gap between grid items */
            grid-row-gap: 40px; /* Gap between rows */
        }

        /* Style for each grid item */
        .gridItem {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            height: 400px; /* Fixed height for grid items */
        }

        /* Style for the image inside the grid item */
        .gridItem img {
            padding-top:20px;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio and cover entire container */
        }

        /* Style for the title inside the grid item */
        .gridItem h2 {
            margin-top: 10px;
            text-align: center;
        }

        /* Style for the popup */
        #popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            z-index: 9999;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        /* Style for the close button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Grid container -->
    <div id="gridContainer">
        <!-- Grid items (cards) -->
        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/edc2c0e27c4d4faeacd81ec4ad065b9f?utm_campaign=embed&utm_source=other&heading=-343.59&pitch=-24.35&field-of-view=100&size=medium&display-plan=true', 'https://example.com/link1')">
            <img src="kedarnath.jpg" alt="" height="300px" width="300px">
            <h2>Kedarnath</h2>
        </div>



        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/3d739ba97c2246bb9868b744293d35fd?utm_campaign=embed&utm_source=other&heading=-170.81&pitch=-7.06&field-of-view=75&size=medium&display-plan=true')">
            <img src="kailashparvat.jpg" alt="" height="300px" width="300px">
            <h2>Kailash Parvat</h2>
        </div>


        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/75e54163ce0a4219a9bb6609019e7483?utm_campaign=embed&utm_source=other&heading=-314.53&pitch=-38.03&field-of-view=100&size=medium&display-plan=true')">
            <img src="konark.jpg" alt="" height="300px" width="300px">
            <h2>Konark Mandir</h2>
        </div>
        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/b1c3802cdd77461b98a2e7b5c5f6803f?utm_campaign=embed&utm_source=other&heading=-354.83&pitch=4.4&field-of-view=100&size=medium&display-plan=true')">
            <img src="rammandir.jpg" alt="" height="300px" width="300px">
            <h2>Aayodhya</h2>
        </div>
        <!-- Add more grid items -->
    </div>



    <div id="gridContainer">
        <!-- Grid items (cards) -->
        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/3fba34f1cadc4fe49eb41229db4c9638?utm_campaign=embed&utm_source=other&heading=-64.51&pitch=29.39&field-of-view=75&size=medium&display-plan=true')">
            <img src="dwarka.jpg" alt="" height="300px" width="300px">
            <h2>Dwarka</h2>
        </div>



        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/131c5540451d4b91be1a9d2c29cc7086?utm_campaign=embed&utm_source=other&heading=-555.89&pitch=-45.42&field-of-view=100&size=medium&display-plan=true')">
            <img src="tirupati.jpeg" alt="" height="300px" width="300px">
            <h2>Tirupati Balaji Temple</h2>
        </div>


        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/58f6d5012eec4433bc4bd44df5afb9de?utm_campaign=embed&utm_source=other&heading=-397.75&pitch=54.41&field-of-view=75&size=medium&display-plan=true')">
            <img src="padmanabhaswamy-temple.jpg" alt="" height="300px" width="300px">
            <h2>Padmanath Swamy temple</h2>
        </div>
        <div class="gridItem" onclick="openPopup(this, 'https://momento360.com/e/u/6dc1b187091d48f396e25d8e2e22b863?utm_campaign=embed&utm_source=other&heading=-285.82&pitch=43.16&field-of-view=75&size=medium&display-plan=true')">
            <img src="someshwar.jpg" alt="" height="300px" width="300px">
            <h2>Someshwar</h2>
        </div>
        <!-- Add more grid items -->
    </div>

    <!-- Hidden popup container -->
    <div id="popup" style="display: none;">
        <!-- Close button -->
        <span class="close" onclick="closePopup()">X</span>
        <!-- Iframe for the embedded image -->
        <iframe id="imageFrame" src="" frameborder="0" style="width: 100%; height: 80%;"></iframe>
        <!-- Links section -->
        <div>
           
           
                <a id="link1" href="#" target="_blank"></a>
            
        </div>
    </div>

    <script>
        // Function to open the popup
        function openPopup(element, imageSrc, linkSrc) {
            var popup = document.getElementById('popup');
            var imageFrame = document.getElementById('imageFrame');
            var linkElement = document.getElementById('link1');

            // Set the source of the iframe to the image URL
            imageFrame.src = imageSrc;

            // Set the href attribute of the link
            linkElement.href = linkSrc;

            // Display the popup
            popup.style.display = 'block';
        }

        // Function to close the popup
        function closePopup() {
            var popup = document.getElementById('popup');
            popup.style.display = 'none';
        }
    </script>
</body>
</html>
