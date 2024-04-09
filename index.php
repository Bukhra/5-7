<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php require 'contact.php' ?>
</head>
<body>
    
</body>
</html>



<div class="topics-container">
          <h2>Topics</h2>
          <div class="topic-cards">
            
            <?php

          foreach ($cards as $card) {
            echo ' <div class="topic-card">
            <div class="topic-img">
              <img src=" ' . ($card['img']) . ' " alt="1" />
            </div>
            <h3> ' . ($card['name']) . '</h3>
            <button>View More</button>
          </div>  ' ;
          } 

            ?>
            <!-- <div class="topic-card">
              <div class="topic-img">
                <img src="./assets/lingerie-underwear.svg" alt="1" />
              </div>
              <h3>Lingerie</h3>
              <button>View More</button>
            </div>
            <div class="topic-card">
              <div class="topic-img">
                <img src="./assets/dress.svg" alt="2" />
              </div>
              <h3>Spring</h3>
              <button>View More</button>
            </div>
            <div class="topic-card">
              <div class="topic-img">
                <img src="./assets/chakra.svg" alt="3" />
              </div>
              <h3>Yoga</h3>
              <button>View More</button>
            </div>
            <div class="topic-card">
              <div class="topic-img">
                <img src="./assets/lipstick.svg" alt="4" />
              </div>
              <h3>Glow</h3>
              <button>View More</button>
            </div>
            <div class="topic-card">
              <div class="topic-img">
                <img src="./assets/dress-wedding-dress.svg" alt="5" />
              </div>
              <h3>Ensembles</h3>
              <button>View More</button>
            </div>
            <div class="topic-card">
              <div class="topic-img">
                <img src="./assets/mask-theater.svg" alt="6" />
              </div>
              <h3>Skin Care</h3>
              <button>View More</button>
            </div> -->
          </div>
        </div>