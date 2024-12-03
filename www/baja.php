

<?php 
include "conexion.php";
include "header.php";
?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">

            <div class="card">
                <div class="card-header display-6">
                    Baja de producto
                </div>                
            </div>

            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"> 
                            Productos:
                        </div>
                        <div class="table-responsive">
                        <form class="p-4" method="GET" action="baja.php" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="" class="form-label">ID</label>
                            <input type="text"
                              class="form-control" name="nombre" id="nombre"  required aria-describedby="helpId" placeholder="Introduce el ID">
                           
                          </div>
                        </form> 
                        </div>
                        

                    </div>
                </div>

            <a href="index.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black;"></i> </a>
        </div>  
    </div>
</div>




<?php 
include "footer.php"
?>
