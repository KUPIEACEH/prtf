<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            transition: background 1s ease-in-out;
        }
        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            max-width: 800px;
            width: 100%;
        }
        .profile-pic-container {
            position: relative;
            display: inline-block;
        }
        .profile-pic {
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.7);
            width: 200px;
            height: 200px;
            object-fit: cover;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.8), 0 0 30px rgba(0, 255, 255, 0.5); /* Neon glow */
            animation: neon-blink 2s infinite; /* Neon blinking effect */
        }
        @keyframes neon-blink {
            0%, 100% {
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.8), 0 0 30px rgba(0, 255, 255, 0.5);
            }
            50% {
                box-shadow: 0 0 50px rgba(0, 255, 255, 1), 0 0 60px rgba(0, 255, 255, 0.9);
            }
        }
        .neon-effect {
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.8);
            font-size: 32px;
            font-weight: bold;
            margin-top: 20px;
        }
        .show-work-btn {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            transition: 0.3s;
        }
        .show-work-btn:hover {
            background-color: rgba(0, 255, 255, 0.8);
        }
        .work-experience {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            margin-top: 20px;
            text-align: left;
            transition: max-height 0.5s ease-out, opacity 0.5s ease-out;
        }
        .work-experience.open {
            opacity: 1;
            max-height: 1000px;
            transition: max-height 0.5s ease-in, opacity 0.5s ease-in;
        }
        .icons {
            margin-top: 20px;
        }
        .icons a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
            font-size: 24px;
        }
        /* Responsive design for mobile */
        @media (max-width: 768px) {
            .profile-pic {
                width: 150px;
                height: 150px;
            }
            .show-work-btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
        @media (max-width: 480px) {
            .profile-pic {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-pic-container">
            <!-- Profile Picture with Neon Border and Blinking Effect -->
            <img src="https://i.ibb.co.com/xsBdqbc/default-profile.png" alt="Profile Picture" class="profile-pic">
        </div>
        
        <h1 class="neon-effect">Dhawy Musyari</h1>

        <!-- Always Visible Description -->
        <div id="description" class="description">
            <h2>About Dhawy Musyari</h2>
            <p>Dhawy has showcased significant growth in electrical engineering, beginning with an educational foundation that solidified his technical proficiency. His practical experience at PT Arun Gas and PT Sumberdaya Sewatama exhibits a robust grounding in industrial practices and a knack for managing intricate systems.</p>
            
            <!-- Button to show work experience -->
            <button id="toggle-btn" class="show-work-btn" onclick="toggleWorkExperience()">Show Work Experience</button>
        </div>

        <!-- Hidden work experience -->
        <div id="work-experience" class="work-experience">
            <h2>Work Experience</h2>
            <ul>
                <li><strong>PT Perta Arun Gas, Lhokseumawe, Aceh (Dec 2017 - Feb 2018)</strong>
                    <p>Responsible for replacing compressor safety valves and relieving pressure from OLTC. Analyzed excitation current changes on 21 MVA generators.</p>
                </li>
                <li><strong>PT Sumberdaya Sewatama, Aceh (Sept 2022 - Nov 2022)</strong>
                    <p>Installed 3-phase motors and assembled luminescent lamps. Conducted grounding cable checks, ensuring system compliance with safety standards.</p>
                </li>
            </ul>
        </div>

        <div class="icons">
            <a href="https://www.instagram.com/espesaboh" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/dhawymusyari/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/KUPIEACEH" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://dhamus.osean.id/" target="_blank"><i class="fa fa-globe"></i></a>
            <a href="https://www.tiktok.com/@espesaboeh" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>

    <script>
        // Array of GIF URLs for background
        const gifs = [
            'https://i.ibb.co.com/XXNP5LK/NTuPG.gif',
            'https://i.ibb.co.com/YRbGY6g/AQn7.gif',
            'https://i.ibb.co.com/gFTXz1R/282d7d14a8b622dbff8cc0c43a5539fa.gif'
        ];

        let currentGifIndex = 0;

        // Function to change background
        function changeBackground() {
            document.body.style.backgroundImage = `url(${gifs[currentGifIndex]})`;
            currentGifIndex = (currentGifIndex + 1) % gifs.length;
        }

        // Change background every 5 seconds (5000 milliseconds)
        setInterval(changeBackground, 5000);

        function toggleWorkExperience() {
            var workExp = document.getElementById('work-experience');
            var toggleBtn = document.getElementById('toggle-btn');
            
            if (workExp.classList.contains('open')) {
                // If open, hide and change button text
                workExp.classList.remove('open');
                toggleBtn.innerText = 'Show Work Experience';
            } else {
                // If hidden, show and change button text, scroll to it
                workExp.classList.add('open');
                toggleBtn.innerText = 'Close Work Experience';
                workExp.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>
