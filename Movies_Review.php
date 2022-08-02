
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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"rel="stylesheet"/>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<?php include "Admin_Nav.php"; ?>
</head>
<body>
<style>

.search-container {
  display: grid;
  grid-template-columns: 9fr 3fr;
  gap: 1.2em;
}
.search-container input,
.search-container button {
  font-size: 0.9em;
  outline: none;
  border-radius: 0.3em;
}
.search-container input {
  background-color: transparent;
  border: 1px solid #a0a0a0;
  padding: 0.7em;
  color: black;
}
.search-container input:focus {
  border-color: #ffffff;
}
.search-container button {
  background-color: #ffb92a;
  border: none;
  cursor: pointer;
}
#result {
  color: black;
}
.info {
  position: relative;
  display: grid;
  grid-template-columns: 4fr 8fr;
  align-items: center;
  margin-top: 1.2em;
}
.poster {
  max-width: 100%;
}
h2 {
  text-align: center;
  font-size: 1.5em;
  font-weight: 600;
  letter-spacing: 0.06em;
}
.rating {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.6em;
  margin: 0.6em 0 0.9em 0;
}
.rating img {
  width: 1.2em;
}
.rating h4 {
  display: inline-block;
  font-size: 1.1em;
  font-weight: 500;
}
.details {
  display: flex;
  font-size: 0.95em;
  gap: 1em;
  justify-content: center;
  color: black;
  margin: 0.6em 0;
  font-weight: 300;
}
.genre {
  display: flex;
  justify-content: space-around;
}
.genre div {
  border: 1px solid #a0a0a0;
  font-size: 0.75em;
  padding: 0.4em 1.6em;
  border-radius: 0.4em;
  font-weight: 300;
}
h3 {
  font-weight: 500;
  margin-top: 1.2em;
}
p {
  font-size: 0.9em;
  font-weight: 300;
  line-height: 1.8em;
  text-align: justify;
  color: #a0a0a0;
}
.msg {
  text-align: center;
}
@media screen and (max-width: 600px) {
  .container {
    font-size: 14px;
  }
  .info {
    grid-template-columns: 1fr;
  }
  .poster {
    margin: auto;
    width: auto;
    max-height: 10.8em;
  }
}
</style>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Contact Management System</h2>
</div>
<br>
<div class="container">
      <div class="search-container">
        <input
          type="text"
          placeholder="Enter movie name heree..."
          id="movie-name"
          value="dark knight"
        />
        <button id="search-btn">Search</button>
      </div>
      <div id="result"></div>
    </div>


</div>

<script>
//Initial References
let movieNameRef = document.getElementById("movie-name");
let searchBtn = document.getElementById("search-btn");
let result = document.getElementById("result");

//Function to fetch data from API
let getMovie = () => {
  let movieName = movieNameRef.value;
  let url = `http://www.omdbapi.com/?t=${movieName}&apikey=55781f75`;
  //If input field is empty
  if (movieName.length <= 0) {
    result.innerHTML = `<h3 class="msg">Please Enter A Movie Name</h3>`;
  }
  //If input field is NOT empty
  else {
    fetch(url)
      .then((resp) => resp.json())
      .then((data) => {
        //If movie exists in database
        if (data.Response == "True") {
          result.innerHTML = `
            <div class="info">
                <img src=${data.Poster} class="poster">
                <div>
                    <h2>${data.Title}</h2>
                    <div class="rating">
                        <img src="star-icon.svg">
                        <h4>${data.imdbRating}</h4>
                    </div>
                    <div class="details">
                        <span>${data.Rated}</span>
                        <span>${data.Year}</span>
                        <span>${data.Runtime}</span>
                    </div>
                    <div class="genre">
                        <div>${data.Genre.split(",").join("</div><div>")}</div>
                    </div>
                </div>
            </div>
            <h3>Plot:</h3>
            <p class="text-dark">${data.Plot}</p>
            <h3>Cast:</h3>
            <p class="text-dark">${data.Actors}</p>
            
        `;
        }
        //If movie does NOT exists in database
        else {
          result.innerHTML = `<h3 class='msg'>${data.Error}</h3>`;
        }
      })
      //If error occurs
      .catch(() => {
        result.innerHTML = `<h3 class="msg">Error Occured</h3>`;
      });
  }
};
searchBtn.addEventListener("click", getMovie);
window.addEventListener("load", getMovie);
</script>


</body>
</html>