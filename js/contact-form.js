function sendEmail(){
    Email.send({
        Host : ".gmail.com",
        Username : "@gmail.com",
        Password : "password",
        To : "@gmail.com",
        From : document.getElementById("email").value,
        Subject : "Contact Form Enquiry",
        Body : "Name: " + + document.getElementById("name").value
            + "<br> Email: " + document.getElementById("email").value
            + "<br> Phone no: " + document.getElementById("phone").value
            + "<br> Message: " + document.getElementById("message").value
    }).then(
        message => alert("Message Send Succesfully")
    );
}