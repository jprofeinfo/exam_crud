<?php 
/* *********************************************************************** */
/* *********************  ******************  **************************** */
/* **************** Listado de productos en la BD ************************ */
/* *********************************************************************** */
include "conexion.php";
include "header.php";
?>

<div class="container my-5">
    <div class="row">
        <div class="col text-center">

            <div class="card">
                <div class="card-header display-6">
                    Listado de productos
                </div>                
            </div>

            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"> 
                            Productos:
                        </div>
                        <?php
                          // Consultamos BBDD



                          // Obtenemos resultado

                        ?>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Identificador 1</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>                             
                              </tr>
                            </thead>
                            <tbody>
                                <!-- HACEMOS LISTADO PARA MOSTRAR TODOS LOS PRODUCTOS -->

                            </tbody>
                            
                          </table>
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
