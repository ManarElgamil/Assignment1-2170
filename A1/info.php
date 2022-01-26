
<?php
    require_once "includes/header.php";
 ?>

  
 <main class="container-fluid">
   <!-- Using the mb-4 class, to space contents with margins from bootstrap -->
   <!-- Using the card class (copy pasted from card horizontal from bootstrap's cheat sheet, to be able to 
   display the integirty and pledge section, the same way it is represented in the wireframes.) -->
   <div class="row my-background">

    <!-- Using mx-auto to make the main centered, from bootstrap -->
    <div class="col-sm-8 mx-auto background pt-5">

    
   
   <div class="container-fluid"></div>

   <div class="row mb-4 px-4" >
    <div class="col-lg-8 intro col-md-6  col-sm-6">

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi mollitia minima quis animi hic ut labore, eveniet dolor, magnam libero, a quas odit ratione maiores molestiae? Ullam unde libero facilis?</p>
     
  <h5>These are the citations used for Assignment 1</h5>



          <!-- Reading citations file and printing it, I understood this part from Zybook section 2.6 -->
          <?php
          
          $filename = "files/citations.txt";
          $myfile = fopen($filename, "r");
      
          if (!$myfile){
            die("Unable to open $filename");
          }

          $contents = fread($myfile, filesize($filename));

          //we need to find a way to add card-text as a class name, but we will figure this out later, from zybook
          //for now we will focus on the other important features that we need to implement.
          echo "<p>$contents</p>";
          fclose($myfile);
        ?>


         </div>
         </div>
         </div>
         </div>
         </div>
  </main>

  <?php
    require_once "includes/footer.php";
 ?>
