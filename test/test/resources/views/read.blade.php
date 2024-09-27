<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surah Ayahs with Sequential Audio</title>
    <style>
        h1 {
            text-align: center;
            font-family: 'Amiri Quran', serif;
            color: #fff;
        }

        body {
            direction: rtl;
            background-color: #0a1f44;
            font-family: 'Amiri Quran', serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 500px;
            height: auto;
            background-color: #0a1f44;
            border: 2px solid #c18e04;
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            text-align: center;
            color: #fff;
        }

        .top-decor img,
        .bottom-decor img {
            width: 100%;
        }

        .quran-image {
            text-align: center;
            margin: 20px 0;
        }

        .quran-image img {
            width: 150px;
            border: 5px solid #c18e04;
            border-radius: 10px;
        }

        .arabic-text {
            text-align: center;
            margin: 10px 0;
            color: #fff;
            font-size: 24px;
            font-family: 'Amiri', serif;
        }

        .audio-container {
            margin-top: 10px;
        }

        audio {
            width: 100%;
        }

        p {
            font-family: 'Amiri Quran', serif;
            font-size: 20px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="top-decor">
            <img src="tem.jpg" alt="Decorative border">
        </div>
        <div class="quran-image">
            <img src="https://i.imgur.com/8UiRnHq.png" alt="Quran Book">
        </div>
        <div class="bottom-decor">
            <img src="https://i.imgur.com/ZaGPFfT.png" alt="Decorative border">
        </div>

        <h1>Surah Ayahs</h1>

        @foreach($alldatas as $index => $ayah)
        <div class="arabic-text">
            <p>{{ $ayah['text'] }}</p> <!-- Display the ayah text -->
        </div>
        <div class="audio-container">
            <audio id="audio-{{ $index }}" controls>
                <source src="{{ $ayah['audio'] }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        @endforeach


    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let audios = document.querySelectorAll('audio');

            // Loop through all audio elements and add event listeners
            audios.forEach((audio, index) => {
                audio.addEventListener('ended', function () {
                    // Check if there is a next audio
                    if (audios[index + 1]) {
                        audios[index + 1].play(); // Play the next audio
                    }
                });
            });
        });
    </script>
</body>

</html>
