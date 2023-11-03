
// Function to handle the intersection of elements
function handleIntersection(entries, observer) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("animated");
            // Stop observing the element after the animation has been triggered
            observer.unobserve(entry.target);
        }
    });
}

// Set up the Intersection Observer
const observer = new IntersectionObserver(handleIntersection, {
    root: null, // viewport
    rootMargin: "0px", // no margin
    threshold: 0.4, // 20% visibility required to trigger the animation
});

// Observe the elements with the "animate" class
const animatedElements = document.querySelectorAll(".animate");
animatedElements.forEach((element) => {
    observer.observe(element);
});