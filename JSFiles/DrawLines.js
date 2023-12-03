document.addEventListener("DOMContentLoaded", function() {
    // Get the canvas element and its context
    var canvas = document.getElementById("line");
    var context = canvas.getContext("2d");

    // Set line properties
    context.strokeStyle = "blue";
    context.lineWidth = 3;

    // Initialize line coordinates
    var startX = 50;
    var startY = 50;
    var endX = 350;
    var endY = 350;

    // Animation loop
    function animate() {
        context.clearRect(0, 0, canvas.width, canvas.height); // Clear the canvas
        context.beginPath();
        context.moveTo(startX, startY);
        context.lineTo(endX, endY);
        context.stroke();

        endX += 2; 
        endY += 2;

        if (endX <= canvas.width && endY <= canvas.height) {
            requestAnimationFrame(animate); // Request the next frame
        }
    }

    animate(); // Start the animation loop
});
