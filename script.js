function validateForm(){
    var name = document.forms["signUpForm"]["names"]
    var mail = document.forms["signUpForm"]["email"]
    var phoneNum = document.forms["signUpForm"]["phoneNo"]
    var address = document.forms["signUpForm"]["address"]
    var pword = document.forms["signUpForm"]["password"]
    var confirmPword = document.forms["signUpForm"]["confirmPassword"]
    var gender = document.forms["signUpForm"]["gender"]
    var maritalStatus = document.forms["signUpForm"]["mStatus"]
    var hobby = document.forms["signUpForm"]["hobby"]
    var stateOfOrigin = document.forms["signUpForm"]["state"]
    

   
    if(name.value == ""){
        alert("Name must be filled out");
         return false;
    }

    if(mail.value == ""){
        alert("enter a valid email address");
        name.focus();
         return false;
    }


    if(phoneNum .value == ""){
        alert("Please input phone Number")
        phoneNum.focus();
        return false;
    }

    if(address.value == ""){
        alert("Please input address")
        address.focus();
        return false;
    }

    // if(pword.value == "" || pword.value.length < 8){
    //     alert("password cannot be empty")
    //     alert ("and must be 8 character long")
    //     pword.focus();
    //     return false;
    // }
    // else if(pword.value.length < 8){
    //     alert("Password must be eigth characters")
    //     pword.focus();
    //     return false;
    // }
    // else{
    //     return true;  
    // }

    if(confirmPword.value != pword.value){
        alert("password mismatch")
        confirmPword.focus();
        return false;
    }

    if(gender.value == ""){
        alert("Please input phone Number")
        gender.focus();
        return false;
    }

    if(maritalStatus.value == ""){
        alert("Please select your marital status")
        maritalStatus.focus();
        return false;
    }

    if(!form.hobby.checked){
        alert("Select at least one hobby")
        form.hobby.focus();
        return false;
    }else{
        // return true;
    }

    
    if(stateOfOrigin == ""){
        alert("Select your state")
        stateOfOrigin.focus();
        return false;
    }
    return true
}

