

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Adding bootstrap's cdn to be able to use bootstrap's styling -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Adding my stylesheet (main.css) after bootstrap's stylesheet, so that after bootstrap's styles
     are applied to the html, my styles are applied after that (my styles get the upper hand)
    This was very nicely explained in this link here: https://www.youtube.com/watch?v=jXt7yYvCYhc -->
  <link href="css/main.css" rel="stylesheet" >



<title>Assignmnet 1, CSCI 2170</title>
</head>

<body>
  
  <!-- <p class="placeholder-glow">
    <span class="placeholder col-12"></span>
  </p> -->

  <header class="pg-header">
    <!-- Logo image with the logo pic -->
   
<!-- The navigation bar, which has the logo picture and the navigation links, taken from bootstrap, with small adjustements -->
     <nav class="navbar nav-style">
         <div class="container-fluid">
            <div class="navbar-header">
              <img src="img/logoPic.jfif" class="logo" alt="Vector logo circuit board tree" >
            </div>

            <!-- Navigation links -->
            <div class="nav" >
                 <a class="nav-link " aria-current="index.php" href="#">Home</a>
                 <a class="nav-link" href="info.php">Information Page</a>
                 <a class="nav-link" href="mailto:mn707104@dal.ca" >Email me</a>
            </div>
         </div>
     </nav>

         <div class="row">
         <!-- Homepage picture --> 
           <img src="img/grad-image.jpg"  class="grad-img" alt="img-thumbnail" > 
        </div> 
 </header>
