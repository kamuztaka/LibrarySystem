function validateform() {
    var studentid = document.myForm.studentid.value;
    var fullname = document.myForm.fullname.value;
    var email = document.myForm.email.value;
    var pass = document.myForm.password.value;
    var conPas = document.myForm.conPass.value;

    if(studentid == null || studentid=="") {
        alert("Student ID can't blank");
        return false;
    }else if(fullname == null || fullname=="") {
        alert("Full Name can't be blank");
        return false;
    }else if(pass.length < 6) {
        alert("Password must be at least 6 characters long");
        return false;
    }else if(pass == conPas) {
        return true;
    }else{
        return false;
    }
}