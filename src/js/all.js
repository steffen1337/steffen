//offcanvas
$(function() {

    // Toggle Nav on Click
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });


});
/*========================================
=            CUSTOM FUNCTIONS            =
========================================*/
function toggleNav() {
    if ($('#site-wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#site-wrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('#site-wrapper').addClass('show-nav');
    }

    //$('#site-wrapper').toggleClass('show-nav');
}

//burger
var wrapperMenu = document.querySelector('.wrapper-menu');

wrapperMenu.addEventListener('click', function(){
    wrapperMenu.classList.toggle('open');
})


/*cursor*/
var cursor = {
    delay: 8,
    _x: 0,
    _y: 0,
    endX: (window.innerWidth / 2),
    endY: (window.innerHeight / 2),
    cursorVisible: true,
    cursorEnlarged: false,
    $dot: document.querySelector('.cursor-dot'),
    $outline: document.querySelector('.cursor-dot-outline'),

    init: function() {
        // Set up element sizes
        this.dotSize = this.$dot.offsetWidth;
        this.outlineSize = this.$outline.offsetWidth;

        this.setupEventListeners();
        this.animateDotOutline();
    },

//     updateCursor: function(e) {
//         var self = this;

//         console.log(e)

//         // Show the cursor
//         self.cursorVisible = true;
//         self.toggleCursorVisibility();

//         // Position the dot
//         self.endX = e.pageX;
//         self.endY = e.pageY;
//         self.$dot.style.top = self.endY + 'px';
//         self.$dot.style.left = self.endX + 'px';
//     },

    setupEventListeners: function() {
        var self = this;

        // Anchor hovering
        document.querySelectorAll('a').forEach(function(el) {
            el.addEventListener('mouseover', function() {
                self.cursorEnlarged = true;
                self.toggleCursorSize();
            });
            el.addEventListener('mouseout', function() {
                self.cursorEnlarged = false;
                self.toggleCursorSize();
            });
        });

        // Click events
        document.addEventListener('mousedown', function() {
            self.cursorEnlarged = true;
            self.toggleCursorSize();
        });
        document.addEventListener('mouseup', function() {
            self.cursorEnlarged = false;
            self.toggleCursorSize();
        });


        document.addEventListener('mousemove', function(e) {
            // Show the cursor
            self.cursorVisible = true;
            self.toggleCursorVisibility();

            // Position the dot
            self.endX = e.pageX;
            self.endY = e.pageY;
            self.$dot.style.top = self.endY + 'px';
            self.$dot.style.left = self.endX + 'px';
        });

        // Hide/show cursor
        document.addEventListener('mouseenter', function(e) {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.$dot.style.opacity = 1;
            self.$outline.style.opacity = 1;
        });

        document.addEventListener('mouseleave', function(e) {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.$dot.style.opacity = 0;
            self.$outline.style.opacity = 0;
        });
    },

    animateDotOutline: function() {
        var self = this;

        self._x += (self.endX - self._x) / self.delay;
        self._y += (self.endY - self._y) / self.delay;
        self.$outline.style.top = self._y + 'px';
        self.$outline.style.left = self._x + 'px';

        requestAnimationFrame(this.animateDotOutline.bind(self));
    },

    toggleCursorSize: function() {
        var self = this;

        if (self.cursorEnlarged) {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
        } else {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
        }
    },

    toggleCursorVisibility: function() {
        var self = this;

        if (self.cursorVisible) {
            self.$dot.style.opacity = 1;
            self.$outline.style.opacity = 1;
        } else {
            self.$dot.style.opacity = 0;
            self.$outline.style.opacity = 0;
        }
    }
};

cursor.init();

/*background*/
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
let width = canvas.width = window.innerWidth;
let height = canvas.height = window.innerHeight;

const colours = ['#FF9F55', '#FF8B55', '#FF7E55', '#FF7055'];
const maxParticles = 800;
let particles = [];

// init client x and y values
let cx = width / 2;
let cy = height / 2;

window.addEventListener('mousemove', (e) => {
    cx = e.clientX;
    cy = e.clientY;
});


class Particle {
    constructor(x, y, vx, vy, radius, colour) {
        this.x = x;
        this.y = y;
        this.vx = vx;
        this.vy = vy;
        this.radius = radius;
        this.colour = colour;
    }
    move() {
        // Reset particle if it goes off screen
        if (this.y > height || this.y < 0 || this.x > width || this.x < 0) {
            this.reset();
        }
        // Move particles with respect to velocity vectors
        this.x += this.vx;
        this.y += this.vy;
    }
    reset() {
        this.x = cx;
        this.y = cy;
        this.vx = 2 + Math.random() * - 4;
        this.vy = 2 + Math.random() * - 4;
        this.radius = 1 + Math.random();
    }
    draw(ctx) {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
        ctx.fillStyle = this.colour;
        ctx.fill();
    }
}

function initParticles() {
    for (let i = 0; i < maxParticles; i++) {
        setTimeout(createParticle, 10 * i, i);
    }
}

function createParticle(i) {
    let p = new Particle(
        Math.floor(Math.random() * width), // x
        Math.floor(Math.random() * height), // y
        1.5 + Math.random() * - 3, // vx
        1.5 + Math.random() * - 3, // vy
        1 + Math.random(), // radius
        colours[Math.floor(Math.random() * colours.length)]
    );
    particles.push(p);
}


function loop() {
    ctx.clearRect(0, 0, width, height);
    for (let particle of particles) {
        particle.move();
        particle.draw(ctx);
    }
    requestAnimationFrame(loop);
}

// Start animation
initParticles();
loop();


// Resize canvas - responsive
window.addEventListener('resize', resize);
function resize() {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
}