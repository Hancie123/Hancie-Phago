
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Images/Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>
    <link rel="stylesheet" href="CSS/fullcalendar.css" />
<link rel="stylesheet" href="CSS/calenderstyle.css" />
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.search-container {
  display: grid;
  grid-template-columns: 9fr 3fr;
  gap: 1em;
  margin-bottom: 1.2em;
}
.search-container input {
  font-size: 1em;
  padding: 0.6em 0.3em;
  border: none;
  outline: none;
  color: #1f194c;
  border-bottom: 1.5px solid #1f194c;
}
.search-container input:focus {
  border-color: #5372f0;
}
.search-container button {
  font-size: 1em;
  border-radius: 2em;
  background-color: #5372f0;
  border: none;
  outline: none;
  color: #ffffff;
  cursor: pointer;
}
#result {
  color: #575a7b;
  line-height: 2em;
}
#result img {
  display: block;
  max-width: 12.5em;
  margin: auto;
}
#result h2 {
  font-size: 1.25em;
  margin: 0.8em 0 1.6em 0;
  text-align: center;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.05em;
  color: #1f194c;
  position: relative;
}
#result h2:before {
  content: "";
  position: absolute;
  width: 15%;
  height: 3px;
  background-color: #5372f0;
  left: 42.5%;
  bottom: -0.3em;
}
#result h3 {
  font-size: 1.1em;
  font-weight: 600;
  margin-bottom: 0.2em;
  color: #1f194c;
}
#result ul {
  margin-bottom: 1em;
  margin-left: 1.8em;
  display: grid;
  grid-template-columns: auto auto;
}
#result li {
  margin-bottom: 0.3em;
}
#result p {
  text-align: justify;
  font-weight: 400;
  font-size: 0.95em;
}
.msg {
  text-align: center;
}
@media screen and (max-width: 600px) {
  .container {
    font-size: 14px;
  }
}
</style>
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2 class="text-center">COCKTAIL DICTIONARY</h2>
</div>
<br>
<div class="container">
      <div class="search-container">
        <input
          type="text"
          placeholder="Type a cocktail name..."
          id="user-inp"
          value="margarita"
        />
        <button id="search-btn">Search</button>
      </div>
      <div id="result"></div>
    </div>

</div>
<br>
<script>
let result = document.getElementById("result");
let searchBtn = document.getElementById("search-btn");
let url = "https://thecocktaildb.com/api/json/v1/1/search.php?s=";
let getInfo = () => {
  let userInp = document.getElementById("user-inp").value;
  if (userInp.length == 0) {
    result.innerHTML = `<h3 class="msg">The input field cannot be empty</h3>`;
  } else {
    fetch(url + userInp)
      .then((response) => response.json())
      .then((data) => {
        document.getElementById("user-inp").value = "";
        console.log(data);
        console.log(data.drinks[0]);
        let myDrink = data.drinks[0];
        console.log(myDrink.strDrink);
        console.log(myDrink.strDrinkThumb);
        console.log(myDrink.strInstructions);
        let count = 1;
        let ingredients = [];
        for (let i in myDrink) {
          let ingredient = "";
          let measure = "";
          if (i.startsWith("strIngredient") && myDrink[i]) {
            ingredient = myDrink[i];
            if (myDrink[`strMeasure` + count]) {
              measure = myDrink[`strMeasure` + count];
            } else {
              measure = "";
            }
            count += 1;
            ingredients.push(`${measure} ${ingredient}`);
          }
        }
        console.log(ingredients);
        result.innerHTML = `
      <img src=${myDrink.strDrinkThumb}>
      <h2>${myDrink.strDrink}</h2>
      <h3>Ingredients:</h3>
      <ul class="ingredients"></ul>
      <h3>Instructions:</h3>
      <p>${myDrink.strInstructions}</p>
      `;
        let ingredientsCon = document.querySelector(".ingredients");
        ingredients.forEach((item) => {
          let listItem = document.createElement("li");
          listItem.innerText = item;
          ingredientsCon.appendChild(listItem);
        });
      })
      .catch(() => {
        result.innerHTML = `<h3 class="msg">Please enter a valid input</h3>`;
      });
  }
};
window.addEventListener("load", getInfo);
searchBtn.addEventListener("click", getInfo);
</script>
</body>
</html>