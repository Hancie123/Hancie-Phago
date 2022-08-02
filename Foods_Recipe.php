
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



.search-container {
  width: 100%;
  display: grid;
  grid-template-columns: 9fr 3fr;
  gap: 1.2em;
}
.search-container input {
  font-size: 1em;
  padding: 0.6em;
  border: none;
  outline: none;
  border-bottom: 2px solid #202030;
}
.search-container button {
  font-size: 1em;
  background-color: #f4c531;
  border: none;
  font-weight: 600;
  border-radius: 0.3em;
}

.details {
  background-color: #f4c531;
  position: relative;
  
  text-align: center;
  padding: 0.6em 0;
}
.details h2 {
  font-size: 1.2em;
  font-weight: 600;
}
.details h4 {
  font-size: 1em;
  font-weight: 400;
}
#show-recipe {
  font-size: 1em;
  
  padding: 0.9em 0.6em;
  background-color: #f4c531;
  border: none;
  top: 1.5em;
  border-radius: 0.3em;
  font-weight: 600;
}

#result img {
  width:20em;
  display: block;
  margin-left: auto;
  margin-right: auto;
  

}

ul {
  font-size: 1em;
  position: relative;
  display: grid;
  grid-template-columns: auto auto;
  gap: 0.8em 1.1em;
  padding: 1.2em 0 0 1.2em;
  color: #303040;
  text-transform: capitalize;
}
h3 {
  text-align: center;
  margin-top: 1.8em;
  color: #202030;
}
@media screen and (max-width: 500px) {
  .container {
    font-size: 14px;
  }
}
</style>

<br>


<div class="w3-container bg-success text-light">
  <h2 class="text-center">FOODS RECIPE</h2>
</div>
<br>
<div class="container">
      <div class="search-container">
        <input
          type="text"
          placeholder="Type A Dish Name Here.."
          id="user-inp"
        />
        <button id="search-btn">Search</button>
      </div>
      <div id="result"></div>
    </div>

<br>
<script>
//Initial References
let result = document.getElementById("result");
let searchBtn = document.getElementById("search-btn");
let url = "https://www.themealdb.com/api/json/v1/1/search.php?s=";

searchBtn.addEventListener("click", () => {
  let userInp = document.getElementById("user-inp").value;
  if (userInp.length == 0) {
    result.innerHTML = `<h3>Input Field Cannot Be Empty</h3>`;
  } else {
    fetch(url + userInp)
      .then((response) => response.json())
      .then((data) => {
        let myMeal = data.meals[0];
        console.log(myMeal);
        console.log(myMeal.strMealThumb);
        console.log(myMeal.strMeal);
        console.log(myMeal.strArea);
        console.log(myMeal.strInstructions);
        let count = 1;
        let ingredients = [];
        for (let i in myMeal) {
          let ingredient = "";
          let measure = "";
          if (i.startsWith("strIngredient") && myMeal[i]) {
            ingredient = myMeal[i];
            measure = myMeal[`strMeasure` + count];
            count += 1;
            ingredients.push(`${measure} ${ingredient}`);
          }
        }
        console.log(ingredients);

        result.innerHTML = `
    <img src=${myMeal.strMealThumb}>
    <div class="details">
        <h2>${myMeal.strMeal}</h2>
        <h4>${myMeal.strArea}</h4>
    </div>
    <div id="ingredient-con"></div>
    <div id="recipe">
        <button id="hide-recipe">X</button>
        <pre id="instructions">${myMeal.strInstructions}</pre>
    </div>
    <button id="show-recipe">View Recipe</button>
    `;
        let ingredientCon = document.getElementById("ingredient-con");
        let parent = document.createElement("ul");
        let recipe = document.getElementById("recipe");
        let hideRecipe = document.getElementById("hide-recipe");
        let showRecipe = document.getElementById("show-recipe");

        ingredients.forEach((i) => {
          let child = document.createElement("li");
          child.innerText = i;
          parent.appendChild(child);
          ingredientCon.appendChild(parent);
        });

        hideRecipe.addEventListener("click", () => {
          recipe.style.display = "none";
        });
        showRecipe.addEventListener("click", () => {
          recipe.style.display = "block";
        });
      })
      .catch(() => {
        result.innerHTML = `<h3>Invalid Input</h3>`;
      });
  }
});
</script>
</body>
</html>