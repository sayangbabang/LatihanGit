// Mengubah teks heading <h1> setelah halaman dimuat
window.onload = function() {
    document.querySelector("h1").textContent = "Latihan JavaScript Selesai";
};


let name = "Yogha GANTENG" ;
const age = 16;
document.getElementById("output").innerHTML = "Nama : " + name +  " <br> Umur : " + age;

let fruits = ["Apple", "Banana", "Mango"];

let person = { firstName: "John", lastName: "Doe", age: 30 };

let outputDiv = document.getElementById("cuk");

for (let i = 0; i < fruits.length; i++) {
    outputDiv.innerHTML += "Buah: " + fruits[i] + "<br>";
}

outputDiv.innerHTML += "Nama depan: " + person.firstName + "<br>";
outputDiv.innerHTML += "Nama belakang: " + person.lastName + "<br>";

function checkNumber() {
    let userInput = document.getElementById("userInput").value;
    let outputDiv = document.getElementById("if");
    if (userInput > 10) {
        outputDiv.innerHTML = "Nilai lebih besar dari 10.";
    } else if (userInput == 10) {
        outputDiv.innerHTML = "Nilai sama dengan 10.";
    } else {
        outputDiv.innerHTML = "Nilai kurang dari 10.";
    }
}

function displayNumbers() {
    let userInput = document.getElementById("Input").value;
    let outputDiv = document.getElementById("for");
    outputDiv.innerHTML = "";
    for (let i = 0; i <= userInput; i++) {
        outputDiv.innerHTML += i + "<br>";
    }
}

