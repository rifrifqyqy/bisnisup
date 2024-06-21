// Skrip JavaScript untuk manajemen autentikasi dan informasi pengguna
document.getElementById("loginForm").addEventListener("submit", async function (event) {
  event.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const address = document.getElementById("address").value;
  const contact = document.getElementById("contact").value;
  const email = document.getElementById("email").value;

  try {
    const response = await fetch("http://0.tcp.ap.ngrok.io:15722/user", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        name_user: username,
        password: password,
        address: address,
        contact: contact,
        email: email,
      }),
    });

    const result = await response.json();

    if (!response.ok) {
      throw new Error(result.message || "Login failed");
    }

    // Simpan informasi pengguna ke localStorage
    localStorage.setItem("token", result.token); // Misalnya, menyimpan token

    // Redirect ke halaman utama
    window.location.href = "/"; // Redirect to the homepage
  } catch (error) {
    console.error("Error logging in:", error);
    document.getElementById("message").innerText = error.message || "Login failed. Please try again.";
    document.getElementById("message").style.color = "red";
  }
});
