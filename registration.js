function validateForm() {
    var fullName = document.getElementById("fullName").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var eventSelection = document.getElementById("eventSelection").value;

    if (fullName == "" || email == "" || address == "" || phoneNumber == "" || eventSelection == "") {
        alert("All fields are required!");
        return false;
    }

    return true;
}