
document.getElementById("studentForm").addEventListener("submit", function(event) {

    // Form ki values lena
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let mobile = document.getElementById("mobile").value.trim();

    let gender = document.querySelector('input[name="gender"]:checked');
    let course = document.getElementById("course").value;
    let city = document.getElementById("city").value;

    // Name validation
    if (name === "") {
        event.preventDefault();
        alert("Please enter your name!");
        return;
    }

    // Email validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {
        event.preventDefault();
        alert("Please enter a valid email!");
        return;
    }

    // Mobile validation
    let mobilePattern = /^[0-9]{10}$/;

    if (!mobilePattern.test(mobile)) {
        event.preventDefault();
        alert("Mobile number must be 10 digits!");
        return;
    }

    // Gender validation
    if (!gender) {
        event.preventDefault();
        alert("Please select your gender!");
        return;
    }

    // Course validation
    if (course === "") {
        event.preventDefault();
        alert("Please select your course!");
        return;
    }

    // City validation
    if (city === "") {
        event.preventDefault();
        alert("Please select your city!");
        return;
    }

    alert("Form validation successful!");

});
