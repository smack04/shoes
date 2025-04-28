<script>
document.addEventListener('DOMContentLoaded', function() {
    // Create a list of your image names and the tooltip text you want
    const imageTooltips = {
        "Picture1.jpg": "Medieval Era Poulaine Shoes",
        "Picture2.jpg": "Chopine Platform Shoes",
        "Picture3.jpg": "Chopine Shoes Close-up",
        "Picture4.jpg": "Air Jordan 1",
        "Picture5.jpg": "Otzi",
        "Picture6.jpg": "Otzi",
        "Picture7.jpg": "Ancient Egyption Sandals",
        "Picture8.jpg": "Ancient Greek Leather Sandals",
        "Picture9.jpg": "Nail Soled Shoes",
        "Picture10.jpg": "Wooden Lotus Shoes",
        "Picture11.jpg": "Paduka",
        "sneaker_logo.png": "Home - Sneaker Logo"
        // Add more like: "filename.jpg": "Tooltip you want"
    };

    // Go through every image
    const images = document.querySelectorAll('img');
    images.forEach(function(img) {
        let src = img.getAttribute('src');
        let filename = src.substring(src.lastIndexOf('/') + 1);

        // Check if we have a manual tooltip for this file
        if (imageTooltips[filename]) {
            img.setAttribute('title', imageTooltips[filename]);
        }
    });
});
</script>


