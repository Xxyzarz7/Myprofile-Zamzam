const canvas = document.querySelector('canvas');
const c = canvas.getContext('2d');

canvas.width = 1024;
canvas.height = 576;

c.fillRect(0, 0, canvas.width, canvas.height);

const gravity = 0.7;

const background = new Sprite({
  position: {
    x: 0,
    y: 0
  },
  imageSrc: '/images/images-samurai-game/background.png'
});

const shop = new Sprite({
  position: {
    x: 600,
    y: 128
  },
  imageSrc: '/images/images-samurai-game/shop.png',
  scale: 2.75,
  framesMax: 6
});

const player = new Fighter({
  position: {
    x: 0,
    y: 0
  },
  velocity: {
    x: 0,
    y: 0
  },
  offset: {
    x: 0,
    y: 0
  },
  imageSrc: '/images/images-samurai-game/samuraiMack/Idle.png',
  framesMax: 8,
  scale: 2.5,
  offset: {
    x: 215,
    y: 157
  },
  sprites: {
    idle: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Idle.png',
      framesMax: 8
    },
    run: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Run.png',
      framesMax: 8
    },
    jump: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Jump.png',
      framesMax: 2
    },
    fall: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Fall.png',
      framesMax: 2
    },
    attack1: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Attack1.png',
      framesMax: 6
    },
    takeHit: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Take Hit - white silhouette.png',
      framesMax: 4
    },
    death: {
      imageSrc: '/images/images-samurai-game/samuraiMack/Death.png',
      framesMax: 6
    }
  },
  attackBox: {
    offset: {
      x: 100,
      y: 50
    },
    width: 160,
    height: 50
  }
});

const enemy = new Fighter({
  position: {
    x: 950,
    y: 100
  },
  velocity: {
    x: 0,
    y: 0
  },
  color: 'blue',
  offset: {
    x: -50,
    y: 0
  },
  imageSrc: '/images/images-samurai-game/kenji/Idle.png',
  framesMax: 4,
  scale: 2.5,
  offset: {
    x: 215,
    y: 167
  },
  sprites: {
    idle: {
      imageSrc: '/images/images-samurai-game/kenji/Idle.png',
      framesMax: 4
    },
    run: {
      imageSrc: '/images/images-samurai-game/kenji/Run.png',
      framesMax: 8
    },
    jump: {
      imageSrc: '/images/images-samurai-game/kenji/Jump.png',
      framesMax: 2
    },
    fall: {
      imageSrc: '/images/images-samurai-game/kenji/Fall.png',
      framesMax: 2
    },
    attack1: {
      imageSrc: '/images/images-samurai-game/kenji/Attack1.png',
      framesMax: 4
    },
    takeHit: {
      imageSrc: '/images/images-samurai-game/kenji/Take hit.png',
      framesMax: 3
    },
    death: {
      imageSrc: '/images/images-samurai-game/kenji/Death.png',
      framesMax: 7
    }
  },
  attackBox: {
    offset: {
      x: -170,
      y: 50
    },
    width: 170,
    height: 50
  }
});

const keys = {
  a: {
    pressed: false
  },
  d: {
    pressed: false
  },
  ArrowRight: {
    pressed: false
  },
  ArrowLeft: {
    pressed: false
  }
};

decreaseTimer();

function animate() {
  window.requestAnimationFrame(animate);
  c.fillStyle = 'black';
    c.fillRect(0, 0, canvas.width, canvas.height);
    background.update();
    shop.update();
    c.fillStyle = 'rgba(255, 255, 255, 0.15)';
    c.fillRect(0, 0, canvas.width, canvas.height);
    player.update();
    enemy.update();

    player.velocity.x = 0;
    enemy.velocity.x = 0;

    // player movement
    if (keys.a.pressed && player.lastKey === 'a') {
      player.velocity.x = -5;
      player.switchSprite('run');
    } else if (keys.d.pressed && player.lastKey === 'd') {
      player.velocity.x = 5;
      player.switchSprite('run');
    } else {
      player.switchSprite('idle');
    }

    // Boundary detection for player
    if (player.position.x + player.velocity.x < 0) {
      player.velocity.x = 0;
      player.position.x = 0;
    } else if (player.position.x + player.velocity.x + player.width > canvas.width) {
      player.velocity.x = 0;
      player.position.x = canvas.width - player.width;
    }

    // jumping
    if (player.velocity.y < 0) {
      player.switchSprite('jump');
    } else if (player.velocity.y > 0) {
      player.switchSprite('fall');
    }

    // Check if player is on the ground to reset isJumping
    if (player.position.y + player.height >= canvas.height) {
      player.velocity.y = 0;
      player.position.y = canvas.height - player.height;
      player.isJumping = false;
    }

    // Enemy movement
    if (keys.ArrowLeft.pressed && enemy.lastKey === 'ArrowLeft') {
      enemy.velocity.x = -5;
      enemy.switchSprite('run');
    } else if (keys.ArrowRight.pressed && enemy.lastKey === 'ArrowRight') {
      enemy.velocity.x = 5;
      enemy.switchSprite('run');
    } else {
      enemy.switchSprite('idle');
    }

    // Boundary detection for enemy
    if (enemy.position.x + enemy.velocity.x < 0) {
      enemy.velocity.x = 0;
      enemy.position.x = 0;
    } else if (enemy.position.x + enemy.velocity.x + enemy.width > canvas.width) {
      enemy.velocity.x = 0;
      enemy.position.x = canvas.width - enemy.width;
    }

    // jumping
    if (enemy.velocity.y < 0) {
      enemy.switchSprite('jump');
    } else if (enemy.velocity.y > 0) {
      enemy.switchSprite('fall');
    }

    // detect for collision & enemy gets hit
    if (
      rectangularCollision({
        rectangle1: player,
        rectangle2: enemy
      }) &&
      player.isAttacking &&
      player.framesCurrent === 4
    ) {
      enemy.takeHit();
      player.isAttacking = false;

      gsap.to('#enemyHealth', {
        width: enemy.health + '%'
      });
    }

    // if player misses
    if (player.isAttacking && player.framesCurrent === 4) {
      player.isAttacking = false;
    }

    // this is where our player gets hit
    if (
      rectangularCollision({
        rectangle1: enemy,
        rectangle2: player
      }) &&
      enemy.isAttacking &&
      enemy.framesCurrent === 2
    ) {
      player.takeHit();
      enemy.isAttacking = false;

      gsap.to('#playerHealth', {
        width: player.health + '%'
      });
    }

    // if player misses
    if (enemy.isAttacking && enemy.framesCurrent === 2) {
      enemy.isAttacking = false;
    }

    // end game based on health
    if (enemy.health <= 0 || player.health <= 0) {
      determineWinner({ player, enemy, timerId });
    }
  }

  animate();

  window.addEventListener('keydown', (event) => {
    if (!player.dead) {
      switch (event.key) {
        case 'd':
          keys.d.pressed = true;
          player.lastKey = 'd';
          break;
        case 'a':
          keys.a.pressed = true;
          player.lastKey = 'a';
          break;
        case 'w':
          player.velocity.y = -20;
          break;
        case 's':
          player.attack();
          break;
      }
    }

    if (!enemy.dead) {
      switch (event.key) {
        case 'ArrowRight':
          keys.ArrowRight.pressed = true;
          enemy.lastKey = 'ArrowRight';
          break;
        case 'ArrowLeft':
          keys.ArrowLeft.pressed = true;
          enemy.lastKey = 'ArrowLeft';
          break;
        case 'ArrowUp':
          enemy.velocity.y = -20;
          break;
        case 'ArrowDown':
          enemy.attack();
          break;
      }
    }
  });

  window.addEventListener('keyup', (event) => {
    switch (event.key) {
      case 'd':
        keys.d.pressed = false;
        break;
      case 'a':
        keys.a.pressed = false;
        break;
      // Add cases for other keys if needed
      case 'ArrowRight':
        keys.ArrowRight.pressed = false;
        break;
      case 'ArrowLeft':
        keys.ArrowLeft.pressed = false;
        break;
      // Add more cases as necessary
    }
  });
