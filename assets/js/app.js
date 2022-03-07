// Store <img> in a variable
const img = document.querySelector("img");

// Fetch random image then display it in the img element
const getImg = async () => {

    await fetch("http://localhost:8000/api/getRandomImg.php").then((res) => {

        // If response successful
        if (res.ok) {

            res.json().then((receivedData) => {

                // Array destructuring
                const [imgUrl, imgIndex, totalImages] = receivedData;
                // set image src attribute to be equal to the img url received from the server
                img.src = imgUrl;
                // edit image numbering after a small delay so the change is not visible
                setTimeout(() => {
                    document.querySelector(".numbering").textContent = `${imgIndex} / ${totalImages}`;
                }, 400);

            });

        // If error in request
        } else {
            // Display error image
            img.src = "./assets/images/no_img.png";
            // Clear image numbering 
            document.querySelector(".numbering").textContent = "";
        }
    });

};

// When image is loaded
img.addEventListener("load", (event) => {

    // Create a timeline for the animation
    // When animation is done, load another image
    var tl = gsap.timeline({ onComplete: () => reloadImg() });

    // Animate image scale from 0 to 1, then image numbering
    tl.fromTo(".image-container", { scale: 0 }, {
        scale: 1,
        duration: 1,
        ease: Bounce.easeOut,
    }).fromTo(".numbering", { autoAlpha: 0 }, { autoAlpha: 1 });

});

// Load a new image 3sec after animation is completed
const reloadImg = () => {

    setTimeout(() => {
        getImg();
    }, 3000);

};

// Run 
getImg();