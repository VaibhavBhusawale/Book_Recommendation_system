<!DOCTYPE html>
<html lang = en>
<head>
    <meta charset="UTF-8">
    <title>Book Reccommender System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style ="background-color:black">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Book Recommender</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/recommend">Recommend <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<style>
    .text-White{
    color:White
</style>


<div class ='container'>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-White" style ="font-size:40px">Recommend Books</h1>
            <form action="/recommend_books" method="POST">

                <input name="user_input" type="text" class ='form-control'><br>
                <input type="submit" class ='btn btn-lg btn-warning'><br>
            </form>

        </div>
        {% if data %}
        {% for i in data %}
        <div class = "col-md-2" style="margin-top:30px">
            <div class="card-body">
                <img class ='card-img-top' src ="{{i[2]}}">
                <p class="text-white">{{i[0]}}</p>
                <p class="text-white">{{i[1]}}</p>
            </div>
        </div>
        {% endfor %}
        {% endif %}

<style>
    body {
      background-image: url('https://images2.alphacoders.com/261/thumb-1920-26102.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
</style>

    </div>
</div>

</body>
</html>