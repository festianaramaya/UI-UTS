document.getElementById('userForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Retrieve form data
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    // Validasi sederhana untuk memastikan semua field terisi
    if (name === "" || email === "" || message === "") {
        alert("Please fill in all fields.");
        return;
    }

    // Display form data with nice formatting
    document.getElementById('nameDisplay').innerHTML = `<strong>Name:</strong> ${name}`;
    document.getElementById('emailDisplay').innerHTML = `<strong>Email:</strong> ${email}`;
    document.getElementById('messageDisplay').innerHTML = `<strong>Message:</strong> ${message}`;

    // Show the data section with animation
    const formData = document.getElementById('formData');
    formData.style.display = 'block';
    formData.style.opacity = '0';
    setTimeout(() => {
        formData.style.opacity = '1';
        formData.style.transform = 'translateY(0)';
    }, 100);

    // Clear input fields after submission
    document.getElementById('userForm').reset();
});
