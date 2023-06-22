<?php 
include("function.php");
?>

<!doctype html>
<html lang="en">
  <head>
  <?php
    get_head();//Memanggil halaman head yang ada didalam file function.php
  ?>
  </head>
  <body>

  <div class="container">
    
    <?php 
      get_Navbar();
    ?>

    

    <br>

    <figure>
      <blockquote class="blockquote">
        <p>" THE ESSENCE OF THE CLAIM TO PROFESSIONAL STATUS AND PROFESSIONAL PRIVILEGE IS THAT MEMBERS OF THE PROFESSION HOLD THEMSELVES TO HIGHER STANDARDS THAN OTHER PEOPLE...A LAWYER...IS SUPPOSED TO BE ETHICAL, EVEN WHEN HE (OR SHE) COULD MAKE MORE MONEY BY BEING UNETHICAL...WHAT MAKES THE LAWYER PROFESSIONAL IS HIS INSISTENCE THAT IN THE LEGAL REALM HE SETS THE PARAMETER OF WHAT HE WILL AND WILL NOT DO."</p>
        <p>Sol Linowitz</p>
      </blockquote>
      <!-- <figcaption class="blockquote-footer">
        
      </figcaption> -->
    </figure>

    <div class="container">
      <div class="row">
        <div class="footer text-end">
          <hr class="solid">
            <p>@Wijaya Partners</p>
        </div>
      </div>
    </div>

  </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

  <?php 
  get_whatsapp();
  ?>

  </body>
</html>