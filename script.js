var colors = ['#1E90FF', 'red', 'green', 'yellow', 'orange', 'white'];


function changeColor () {
    var color = colors.shift();
    colors.push(color);
    document.body.style.background = color;
}



