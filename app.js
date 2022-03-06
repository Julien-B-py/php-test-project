// Store <img> in a variable
const img = document.querySelector("img");

fetch("http://localhost:8000/getRandomImg.php").then(res => {

    // If response successful
    if (res.ok) {
        res.json().then(receivedImgUrl => {
            // set image src attribute to be equal to the img url received from the server
            img.src = receivedImgUrl;
        });
        // If error in request
    } else {
        // Display error image
        img.src = "/no_img.png";
    }

});

// When image is loaded
img.addEventListener("load", event => {
    // Animate image scale from 0 to 1 then call reloadPage.
    gsap.to("img", { scale: 1, duration: 1, ease: Bounce.easeOut, onComplete: () => reloadPage() });

});

// Reload page after 3sec when animation is completed
const reloadPage = () => {

    setTimeout(() => {
        location.reload();
    }, 3000);

};