document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Vérifiez la réponse JSON

            document.querySelectorAll(".error-message").forEach(element => {
                element.textContent = "";
            });

            if (!data.success) {
                if (data.errors.name) {
                    document.getElementById("nameError").textContent = data.errors.name;
                }
                if (data.errors.email) {
                    document.getElementById("emailError").textContent = data.errors.email;
                }
                if (data.errors.subject) {
                    document.getElementById("subjectError").textContent = data.errors.subject;
                }
                if (data.errors.message) {
                    document.getElementById("messageError").textContent = data.errors.message;
                }
            } else {
                alert(data.message);
                document.getElementById("contactForm").reset();
            }
        })
        .catch(error => console.error('Erreur:', error));
});
