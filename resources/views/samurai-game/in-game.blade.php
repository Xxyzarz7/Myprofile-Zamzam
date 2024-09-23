<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samurai Game</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        box-sizing: border-box;
        font-family: 'Press Start 2P', cursive;
      }

      body, html {
        display: flex;
        justify-content: center;
        margin-top: 2px;
      }
    </style>
</head>
<body>
    <!-- Game Container -->
    <div style="position: relative; display: inline-block">
        <!-- Health and Timer Section -->
        <div style="position: absolute; display: flex; width: 100%; align-items: center; padding: 20px;">
            <!-- Player Health -->
            <div style="position: relative; width: 100%; display: flex; justify-content: flex-end; border: 4px solid white; border-right: none;">
                <div style="background-color: red; height: 30px; width: 100%;"></div>
                <div id="playerHealth" style="position: absolute; background: #818cf8; top: 0; right: 0; bottom: 0; width: 100%;"></div>
            </div>

            <!-- Timer -->
            <div id="timer" style="background-color: black; width: 100px; height: 50px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; color: white; border: 4px solid white;">
                10
            </div>

            <!-- Enemy Health -->
            <div style="position: relative; width: 100%; border: 4px solid white; border-left: none;">
                <div style="background-color: red; height: 30px;"></div>
                <div id="enemyHealth" style="position: absolute; background: #818cf8; top: 0; right: 0; bottom: 0; left: 0;"></div>
            </div>
        </div>

        <!-- Display Text (e.g. "Draw") -->
        <div id="displayText" style="position: absolute; color: white; align-items: center; justify-content: center; top: 0; right: 0; bottom: 0; left: 0; display: none;">
            Draw
        </div>

        <!-- Game Canvas -->
        <canvas></canvas>
    </div>

    <!-- External Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/samurai-game/utils.js') }}"></script>
    <script src="{{ asset('js/samurai-game/classes.js') }}"></script>
    <script src="{{ asset('js/samurai-game/index.js') }}"></script>
</body>
</html>