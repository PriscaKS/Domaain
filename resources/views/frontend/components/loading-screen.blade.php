<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
        
    <title>Loading...</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #258bc9;
        }

        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .loading-image {
            width: 110px;
            height: 110px;
            opacity: 0;
            transform: scale(0.8);
            animation: fadeIn 0.8s ease-in-out forwards;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .loading-spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin-top: 20px; /* Space between image and spinner */
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>
</head>
<body class="ubuntu-light">
    <div class="loading-container">
        <img src="/assets/images/DPP-1-removebg-preview (2).png" alt="Loading Icon" class="loading-image">
        <div class="loading-spinner"></div>
    </div>

    <script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const redirectUrl = urlParams.get('redirect');
            
            if (redirectUrl) {
                console.log("Redirecting to: " + redirectUrl);
                setTimeout(function() {
                    window.location.href = redirectUrl;
                }, 3000);
            } else {
                console.log("No redirect URL provided");
            }
        };
    </script>
</body>

</html>
