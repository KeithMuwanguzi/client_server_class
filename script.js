function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var dob = document.getElementById("dob").value;
    var terms = document.getElementById("terms").checked;

    // Simple validation for non-empty fields
    if (name === "" || email === "" || phone === "" || password === "" || confirmPassword === "" || dob === "" || !terms) {
        alert("All fields are required!");
        return false;
    }

    // Validate email format
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Invalid email address!");
        return false;
    }

    // Validate phone number format
    var phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Invalid phone number!");
        return false;
    }

    // Validate password and confirm password
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }

    // Validate date of birth (assuming MM/DD/YYYY format)
    var dobPattern = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    if (!dobPattern.test(dob)) {
        alert("Invalid date of birth! Please use MM/DD/YYYY format.");
        return false;
    }

    // All validations passed
    return true;
}