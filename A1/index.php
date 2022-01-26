
<!-- Linking to the header file -->
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

       <!-- Dummy text generated by VScode  -->
       <p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatibus neque, ipsa voluptate sed blanditiis similique harum doloribus ad non explicabo rem quos vel aperiam esse placeat? Molestiae, quo a?</p>
       
       <!-- Linking to the info page -->
       <p >Here is a link to the <a href="info.php">information page</a>.</p>

       <p  >Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptatibus neque, ipsa voluptate sed blanditiis similique harum doloribus ad non explicabo rem quos vel aperiam esse placeat? Molestiae, quo a?</p>
      
      </div>
      
      <div class="col-sm-6 intro col-md-6  col-lg-4">

      <div class="card">
        <div class="card-body my-form">
          <h5 class="card-title">User Login</h5>
          <div class="form-floating mb-3">

            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">

          <!-- form taken from bootstrap instead card text -->
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <!-- Button taken from bootstrap -->
          <div class="container-fluid">

          <button type="submit" class="btn btn-primary text-left  ms-auto" >Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- repeated the same idea of using the card in the form  -->

  <section class="integrity container-fluid mb-4">
    <div class="card">
      <div class="row g-0">
        <h5 class="card-header my-card-header">Academic Intergrity</h5>
        <div class="col-7 col-sm-8">
          <div class="card-body section-body">
            
          <!-- Reading pledge file and printing it, I understood this part from Zybook section 2.6 -->
          <?php
          
          $filename = "files/integrity.txt";
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

      <div class="col-5 col-sm-4">
        <img src="img\33633397660_c3b01ae16f_b.jpg" class="img-fluid w-100" alt="card-horizontal-image">
      </div>
    </div>
  </div>

</section>

  <!-- repeated the same idea of using the card in the form  -->

  <section class="pledge container-fluid mb-4">

    <div class="card">
      <div class="row g-0">
        <h5 class="card-header">Pledge</h5>
  
        <div class="col-7 col-sm-8">
        
        <div class="card-body">
            
        <!-- Reading pledge file and printing it, I understood this part from Zybook section 2.6 -->
             <?php
               $filename = "files/pledge.txt";
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
  
        <div class="col-5 col-sm-4">
          <img src="img/30093049035_9576fd17a6_b.jpg" class="img-fluid w-100" alt="card-horizontal-image">
        </div>
      </div>
    </div>
  
  </section>

  
  </div>

   </div>
  </main>

  <!-- Linking to the footer file -->
    <?php
      require_once "includes/footer.php";
    ?>