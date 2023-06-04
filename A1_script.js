var colors = ['#1E90FF', 'red', 'green', 'yellow', 'orange', 'white'];


function changeColor () {
    var color = colors.shift();
    colors.push(color);
    document.body.style.background = color;
}

function formValid() {
    let inputName = document.forms["contactMeForm"]["name"].value;
    let inputEmail = document.forms["contactMeForm"]["email"].value;
    let inputPhnum = document.forms["contactMeForm"]["phnum"].value;

    if (inputName == "" || inputEmail == "" || inputPhnum == "") {

        document.getElementById("warning").innerHTML = "Ensure all fields are filled"
        return false;
  }

  else {
    document.getElementById("warning").innerHTML = ""
    return true;
  }
}



