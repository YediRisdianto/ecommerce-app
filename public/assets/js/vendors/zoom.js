function zoom(e) {
    var zoomElement = e.currentTarget;

    var offsetX = e.offsetX || e.touches[0].pageX;
    var offsetY = e.offsetY || e.touches[0].pageY;

    var xPercent = (offsetX / zoomElement.offsetWidth) * 100;
    var yPercent = (offsetY / zoomElement.offsetHeight) * 100;

    zoomElement.style.backgroundPosition = `${xPercent}% ${yPercent}%`;

    zoomElement.style.backgroundSize = "150%"; 
}
