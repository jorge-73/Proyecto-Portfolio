function validate() {
    var name, email, message, expression;
    name = document.getElementById('name').value;
    email = document.getElementById('email').value;
    message = document.getElementById('message').value;
    expression = /\w+@\w+\.+[a-z]/;

    if (name === "" || email === "" || message === "") {
        alert('Please complete all fields');
        return false;
    }else if (name.length>100) {
        alert('The name is too long');
        return false;
    }else if (email.length>100) {
        alert('The email is too long');
        return false;
    }else if (!expression.test(email)){
        alert('The email is not valid');
        return false;
    }
}