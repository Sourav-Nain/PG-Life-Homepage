document.getElementById("signupBtn").addEventListener("click", async function () {
    const response = await fetch("signup_form.php");
    const data = await response.text();
    document.getElementById("popup").innerHTML = data;
    document.getElementById("overlay").style.display = "flex";
});

const loginBtn = document.querySelector("#loginBtn");
loginBtn.addEventListener("click",async function(e) {
      e.preventDefault();
     console.log("Login clicked");
    const response = await fetch("login_form.php");
    const data = await response.text();
    document.getElementById("popup").innerHTML = data;
    document.getElementById("overlay").style.display="flex";
});

const input = document.getElementById("cityInput");
const btn = document.getElementById("searchBtn");
btn.addEventListener("click", searchCity);
input.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
        searchCity();
    }
});
function searchCity() {
    let city = input.value.trim();
    const validCities = ["Mumbai", "Delhi", "Bengaluru", "Chennai"];
    if (city === "") {
        alert("Please enter a city");
        return;
    }
    if (!validCities.includes(city)) {
        alert("City not found");
        return;
    }
    window.location.href =
        "PG-Life-Property-Listing/index.php?city=" + city;
}