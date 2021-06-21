<?php require "header.php" ?>

<!-- Periode des activites à rechercher -->

<div class="container">
  <div class="row">

   <div class="card m-1 card-w" >
    <div class="card-body">
      <div class="row  text-center">
        <div class="col">
          <h5 >PERIODE DES ACTIVITES</h5>    
        </div>
      </div>
      <form action="" method="get" >
      <div class="row">
          <div class="form-group col "><label>Début</label>
            <input type="date" class="form-control" placeholder="Date de création">
          </div>
      </div>
      <div class="row">
          <div class="form-group col"><label>Fin</label>
            <input type="date" class="form-control" placeholder="Date de modification">
          </div>
      </div>
      <div class="row  text-center">
        <div class="col">
          <h5 >TYPE D'ACTIVITES</h5>    
        </div>
      </div>
      <div class="row my-3" >
        <div class="col-6">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Modifications</label>
          </div>
        </div>
        <div class="col-6">
          <div class="form-check ">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Suppressions</label>
          </div>
        </div>
      </div>
      <h5 class="text-center"> GESTIONNAIRE</h5>    
      <div class="row  text-center">
            <div class="form-group col"> 
              <input type="text" class="form-control text-center" placeholder="Domaine | Nom d'utilisateur"> 
            </div> 
      </div>
      <div class="row  text-center">
        <div class="col my-3">
          <a class="btn btn-primary  btn-lg" href="#">RECHERCHER</a>
        </div>
      </div>
      </form>
    </div>
  </div>  

  <!-- liste de la recherche -->
  <div class="card m-1 card-2w" >
    <div class="card-body">
      <div class="row  text-center">

        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">GESTIONNAIRE</th>
              <th scope="col">ACTION</th>
              <th scope="col">USAGER OU CIMETIERE</th>
              <th scope="col">DATE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Nom / Session</td>
              <td>Suppression</td>
              <td>Rose MADONI</td>
              <td>02/04/2020</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Nom / Session</td>
              <td>Suppression</td>
              <td>Rose MADONI</td>
              <td>02/04/2020</td>
            </tr>
          </tbody>
        </table>
      </div>

        <div class="row  text-center">
          <div class="col mb-3">
            <a class="btn btn-primary  btn-lg" href="#">EXPORTER LES DONNEES</a>
          </div>
        </div>

    </div>    
  </div>




        
 </div>
</div>    


<?php require "footer.php" ?>