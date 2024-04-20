document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("claimForm");
    form.addEventListener("submit", claimRobux);

    function claimRobux(event) {
        event.preventDefault();
        const username = document.getElementById("username").value;
        const robuxAmount = document.getElementById("robuxAmount").value;

        if (username === "" || robuxAmount === "") {
            alert("Please fill out all fields.");
            return;
        }

        const claimMessage = "Hello, " + username + "! Your claim for " + robuxAmount + " robux has been received. You will receive it within 1 day.";
        document.getElementById("claimMessage").innerText = claimMessage;

        const popupMessage = "Congratulations, " + username + "! You will receive " + robuxAmount + " robux after 1 day!";
        alert(popupMessage);
        
        setTimeout(function() {
            window.location.href = "about.php";
        }, 5000); 
    }
});