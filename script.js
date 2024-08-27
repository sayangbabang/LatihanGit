function validateForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    const errorMessage = document.getElementById('error-message');

            // Regex untuk validasi email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            // Cek apakah semua field sudah diisi
    if (name === "" || email === "" || message === "") {
    errorMessage.textContent = "Semua field harus diisi.";
    errorMessage.style.display = "block";
    return false;
    }

            // Cek apakah email sesuai format
    if (!emailPattern.test(email)) {
        errorMessage.textContent = "Email tidak valid.";
        errorMessage.style.display = "block";
        return false;
        }

            // Jika semua validasi lolos, sembunyikan pesan error dan izinkan submit
        errorMessage.style.display = "none";
        return true;
        }