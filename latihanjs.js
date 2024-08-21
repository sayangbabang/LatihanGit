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

// Fungsi greet untuk menyapa seseorang
function greet(name) {
    return "Hello, " + name;
}

let Div = document.getElementById("anjay");
Div.innerHTML += greet("John") + "<br>";
Div.innerHTML += greet("Jane") + "<br>";
Div.innerHTML += greet("Doe") + "<br>";

function calculateSquare(number) {
    return number * number;
}

Div.innerHTML += "Kuadrat dari 2: " + calculateSquare(2) + "<br>";
Div.innerHTML += "Kuadrat dari 5: " + calculateSquare(5) + "<br>";
Div.innerHTML += "Kuadrat dari 10: " + calculateSquare(10) + "<br>";

const addNumbers = (a, b) => a + b;
Div.innerHTML += "Penjumlahan 3 + 4: " + addNumbers(3, 4) + "<br>";
Div.innerHTML += "Penjumlahan 10 + 20: " + addNumbers(10, 20) + "<br> ";

"<br><br>"
let students = ["Alice", "Bob", "Charlie"];
students.push("David");

let output = document.getElementById("ntaps");
students.forEach(function(student) {
    output.innerHTML += "Nama Siswa: " + student + "<br>";
});

let car = { brand: "Toyota", model: "Corolla", year: 2020 };
for (let key in car) {
    output.innerHTML += key + ": " + car[key] + "<br>";
}
let cars = [
    { brand: "Honda", model: "Civic", year: 2019 },
    { brand: "Ford", model: "Focus", year: 2018 },
    { brand: "Nissan", model: "Altima", year: 2021 }
];

cars.forEach(function(car) {
    output.innerHTML += "Mobil: " + car.brand + " " + car.model + " (" + car.year + ")<br>";
});



