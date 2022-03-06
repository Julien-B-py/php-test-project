window.addEventListener("load", event => {
    // Store <img> in a variable
    const img = document.querySelector("img");
    // If image is loaded complete is true and naturalHeight is different from zero if image is displayed
    const isLoaded = img.complete && img.naturalHeight !== 0;
    // When image is loaded, animate
    isLoaded && gsap.to("img", { scale: 1, duration: 1, ease: Bounce.easeOut });
});