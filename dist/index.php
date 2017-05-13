<?php include 'includes/header.php' ?>

  <div class="site-container">


    <div class="package-wrapper" id="vue-app">
        <div class="single-package" v-for="package in packages" >
          <h2>{{package.name}}</h2>
          <p class="price"><span>£</span>{{package.package}}</p>
          <p>{{package.desc}}</p>
        </div>
    </div>



  </div> <!-- end of container -->
<?php include 'includes/footer.php' ?>
