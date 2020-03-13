document.getElementById("guestbook").onsubmit = validate;


function validate() {
    //create a flag variable
    let valid = true;

    //clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //check the first name
    let first = document.getElementById("firstName").value;

    if(first == "") {

        let errFirst = document.getElementById("errfname");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    //last name
    let last = document.getElementById("lastName").value;

    if(last == "") {

        let errLast = document.getElementById("errlname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    //how we met
    let met = document.getElementById("meet").value;

    if(met == "none") {

        let errMet = document.getElementById("errmeet");
        errMet.style.visibility = "visible";
        valid = false;
    }

    // check the email
    let email = document.getElementById("eMail").value;

    if (email == "" || !(email.includes("@")) || !(email.includes("."))) {

        let errEmail = document.getElementById("errmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

  /**  //linkedin
    let link = document.getElementById("linkedIn").value;

    if(link != "" || !(link.includes("http")) || !(link.includes(".com"))) {
        let errlink = document.getElementById("errLink");
        errlink.style.visibility = "visible";
        valid = false;
    }
**/
    return valid;
}



