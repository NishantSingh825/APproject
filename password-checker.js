const inputfield = document.querySelector("#password");
const outputfield = document.querySelector(".output");

inputfield.addEventListener("input", function () {
    console.log(inputfield.value);
    let password = inputfield.value;
    if (password.length < 8) {
        outputfield.innerText = "Password is too short!!";
        outputfield.style.color = "red";
    } else {
        // a-z
        //A-Z
        //0-9
        // spacial characters !@#$%^&*()_+{}:"<>?`-=[];\',./~
        if (password.search(/[a-z]/) == -1) {
            outputfield.innerText = "Password is missing lower letter!!";
            outputfield.style.color = "red";
        } else if (password.search(/[A-Z]/) == -1) {
            outputfield.innerText = "Password is missing Upper letter!!";
            outputfield.style.color = "red";
        } else if (password.search(/[0-9]/) == -1) {
            outputfield.innerText = "Password is missing numbers!!";
            outputfield.style.color = "red";
        } else if (password.search(/[0-9]/) == -1) {
            outputfield.innerText = "Password is missing numbers!!";
            outputfield.style.color = "red";
        } else if (password.search(/[!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~"]/) == -1) {
            outputfield.innerText = "Password is missing special character!!";
            outputfield.style.color = "red";
        } else {
            outputfield.innerText = "Password is strong!!";
            outputfield.style.color = "#60e500";
        }


    }
});
