<?php 
include "conexion.php";
include "header.php";
?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">

            <div class="card">
                <div class="card-header display-6">
                    Actualización de producto
                </div>                
            </div>

            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card">

                      <?php

                        // Consultamos BBDD para obtejer todos los productos 


                      ?>
                        
                        <div class="table-responsive">
                          <form class="p-4" method="POST" action="actualiza2.php" enctype="multipart/form-data">
                            <div class="mb-3">
                              <label for="" class="form-label">Escoge el producto: </label>
                              
                              <select name="id">
                                <?php

                                  // Mostramos todos los productos en un selector
                                  while($registro=mysqli_fetch_row($registros)){
                                    echo "<option value=".$registro[0].">".$registro[1]." - ".$registro[2]."</option>";
                                  }

                                ?>

                              </select>

                              <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Modificar">
                            </div>
                                                          
                            </div>
                          </form> 
                        </div>
                    </div>
                </div>

            <a href="index.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:blue;"></i> </a>
        </div>  
    </div>
</div>




<?php 
include "footer.php"
?>
