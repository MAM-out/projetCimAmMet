<?php require "header.php" ?>

<!-- creation nouvel Utilisateur / gestionnaire -->

<div class="container">
  <div class="row">
  <div class="card m-1 card-w" >
    <div class="card-body">

       <div class="row  text-center">
        <div class="col">
          <h5 >CREATION D'UN NOUVEL UTILISATEUR</h5>    
        </div>
      </div>

      <form action="" method="get" >

        <div class="row " >
          <div class="col text-center">
            <div class="form-group "> 
              <input type="text" class="form-control text-center" placeholder="Domaine | Nom d'utilisateur"> 
            </div> 
            <div class="form-group "> 
              <input type="text" class="form-control text-center" placeholder="Email"> 
            </div> 
            <div class="form-group "> 
              <input type="text" class="form-control text-center" placeholder="Nom"> 
            </div> 
            <div class="row" >
              <div class="col-6">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Super admin</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Admin</label>
                </div>
              </div>
            </div>
            <div class="row" >
              <div class="col-6">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Modifications</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check ">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lecture</label>
                </div>
              </div>
              </div>
            </div>
          </div>     
        </div>

        <div class="row  text-center">
          <div class="col mb-3">
            <a class="btn btn-primary  btn-lg" href="#">CREER</a>
          </div>
        </div>

      </form> 

    </div>  
  </div>
</div>

</div>    


<!-- ACTIONS SUR LES Gestionnaires / utilisateurs -->


<div class="container mt-5">
  <h3 class="text-center">RECHERCHER | MODIFIER UN UTILISATEUR-GESTIONNAIRE</h5>
    <div class="row">

<!-- recherche -->
            <div class="card m-1 card-w " >
              <div class="card-body">
                  <div class="row  text-center">
                    <div class="col">
                      <h5 >RECHERCHER UTILISATEUR</h5>    
                    </div>
                  </div>
                  <form action="" method="get" >
                      
                    <div class="row" >
                      <div class="col text-center">
                        <div class="form-group"> 
                          <input type="text" class="form-control text-center" placeholder="Domaine | Nom d'utilisateur"> 
                        </div> 
                        <div class="form-group"> 
                          <input type="text" class="form-control text-center" placeholder="Nom"> 
                        </div> 
                      </div> 
                    </div> 

                    <div class="row  text-center">
                      <div class="col mb-3">
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
                              <th scope="col">UTILISATEUR</th>
                              <th scope="col">-</th>
                              <th scope="col">-</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Nom / Session</td>
                              <td><div class="row px-2 py-1"><a href="#" class="btn btn-primary btn-block">MODIFIER</a></div></td>
                              <td><div class="row px-2 py-1"><a href="#" class="btn btn-primary btn-block">SUPPRIMER</a></div></td>
                            </tr>
                            <tr>
                              <td>Nom / Session</td>
                              <td><div class="row px-2 py-1"><a href="#" class="btn btn-primary btn-block">MODIFIER</a></div></td>
                              <td><div class="row px-2 py-1"><a href="#" class="btn btn-primary btn-block">SUPPRIMER</a></div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>


                    </div>    
                  </div>
                </div>
    </div>
  </div>





 
<?php require "footer.php" ?>
