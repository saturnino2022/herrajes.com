
<?PHP
include('db.php');
   $sliderSentencia = "SELECT * FROM slider LIMIT 3";
   $resultSentencia = mysqli_query($con,$sliderSentencia);
?>
 <?php 

                    //index.php
                    require_once 'conn.php';


                    $query = "
                    SELECT Nombre  FROM producto 
                    ORDER BY Nombre ASC
                    ";

                    $result = $bd->query($query);

                    $data = array();

                    foreach($result as $row)
                    {
                        $data[] = array(
                            'label'     =>  $row['Nombre'],
                            'value'     =>  $row['Nombre']
                       
                        );
                    }

                    ?>
<!doctype html>
<html lang="es">
  <head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/loadingx.css">-->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link href="css/css.css" rel="stylesheet">
      <link rel="stylesheet" href="fontawesome/css/all.css">
      <link rel="stylesheet" type="text/css" href="css/informacionnn.css">
      <link rel="stylesheet" type="text/css" href="css/css33copia.css">
      <link rel="stylesheet" type="text/css" href="css/paginadoRESPONSIVO.css">
      <link rel="stylesheet" type="text/css" href="css/loadx.css">
      <link rel="icon" type="image/png" href="imagenes/editarLog.png">
      <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar2.css">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="library/autocomplete.js"></script>
   
        <style>
        #cuad{
           

        }
      
      h9{
         font-size: 0.99em;

     font-family: 'Bellefair', serif;
      }

      #btnMostrar{
        
           margin-right: 60%;
      }
      .barra {
        background: #C3ADE9;
        color: black;
        padding: 20px;
        height: 200px;
           
    
     
     }
     #cargando{
             top: 30%;
           margin-left: 6%;
     }
     ::placeholder {
  color: black;
  font-size: 0.7em;
}
#foot{
    background: #DEBAFC;
}
#seleccion{
 text-align: center;
}
.containerTarg .contents h6{
   
    font-size: 15px;
  
}
  #vid{
        margin-top: 6px;
        width: 90px;
        height: 23px;
     }
      #gif{
              margin-top: -8px;
             margin-left: -25px;
           
     }
      .dropdown-item{
          max-width: 100%;
          color: black;
          font-size: 12.5px;
     }
      .dropdown-menu{
        background: white;
       width: 100%;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
         
}
    </style>

      <title>Herrajes Andreas</title>
  </head>

  <body>
     <!--
     <div class="contenedor_loader">
        <div class="loader" >
                         
        </div>
    </div>-->

   <div class="lds-ring loader" id="loader">
       <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
  
     <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <div class="container-fluid">
              <nav class="navbar navbar-light ">
                  <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">
                    <img src="imagenes/editarLog.png" alt="" width="90" height="55" class="d-inline-block align-text-top">     
                  </a>
                </div>
              </nav>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" class="text-primary" href="index.php"><h6>Inicio</h6></a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link active" class="link-primary" aria-current="page" href="Mision.php"><h6>Misión</h6></a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" class="link-primary" href="vision.php"><h6>Visión</h6></a>
                   </li>
                  
                </ul>
                <form class="d-flex" role="search">
       
                 
                 <a button class="btn btn-outline-info" href="login.html" type="submit">Login</a>
      </form>
              </div>

          </div>
        
      </nav>

   <nav class="navbar navbar-expand-lg navbar-light " >
  

       <form action="buscar.php" method="post" autocomplete="off" class="col-md-8 col-lg-8 col-11 mx-auto my-auto search-box">   
            <div class="input-group form-container">
               <input type="text" name="search" class="form-control search_input" id="buscador" required="" autofocus="autofocus" placeholder="Encuentra argollas, hebillas, ojillos, etc.">
               <span class="input-group-btn">
                  <button class="btn btn-search"  type="submit" name="submit" id='but_searcch' value='Search'>
                    <img src="img/lup.jpg" width="40">
                  </button>
               </span> 
            </div>
       </form>
    </nav>
    <!-- menu -->
    <br>
    <div class="container">
           <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
               <?php
                   while($rows = mysqli_fetch_array($resultSentencia)){
              echo '<div class="carousel-item '.$rows["activado"].'">';
              echo '<img src="imagenesSlider/'.$rows["imagen"].'" class="d-block w-100" alt="...">';
              echo '</div>';
               }
            ?>
              </div>
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
             </button>
        </div>
    </div>
      

    <!-- fin menu -->

    <!-- contenido imagenes --><br>
    
         <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h6 id="seleccion" > <a  style="text-decoration: none;">
            <strong class="text-dark">"CATÁLOGO HERRAJES ANDREA"</strong>
          </a> TU CATÁLOGO PERFECTO PARA ENCONTRAR LOS PRODUCTOS QUE NECESITAS</h6>
                    </div>
                </div>
            </div>
            
            <!-- Brand List  -->
            <div class="col-md-3" id="cuad">
                <form action="" method="GET">
                    <div class="card shadow mt-4">

                      
                        <div class="card-header">
                            <h7>
                               <h9>Seleciona una o varias categorías</h9>
                                <button type="submit" class="btn btn-primary btn-sm float-end">Buscar</button>

                            </h7>
                        </div>

                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                          <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="submit" class="btn btn-outline-info btn-sm">Mostrar Todo</button>
                          
                          </div>
                         
                         <div class="btn-group me-2" role="group" aria-label="Second group">
                          
                            <img href="#video1" data-title="video 1" type="button" data-bs-toggle="modal" id="vid" src="imagenes/videoclip.png" ><img  src="img/monophy.gif" width="50" id="gif">
                           
                          </div>
                       
                        </div>
                        <div class="modal fade" id="video1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal"  aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><img src="imagenes/logo.png" width="200"></h4>
              </div>
              <div class="modal-body modalVideo">
                <video id="video-1" controls class="embed-responsive-item" width="100%" >
                 <?php
                                    require 'connvideo.php';
                                    
                                    $query = mysqli_query($conn, "SELECT * FROM video ORDER BY video_id ASC") or die(mysqli_error());
                                    while($fetch = mysqli_fetch_array($query)){
                                ?>
                
                     <source src="<?php echo $fetch['location']?>">
                
                  <?php
                                    }
                                ?>

                </video>
              </div>
            </div>
        </div>
    </div>
                        
                        <div class="card-body">
                            <div class="barra">
                                  <?php
                                  $con = mysqli_connect("localhost","root","","db_andrea");

                                $brand_query = "SELECT * FROM categoria ORDER BY Nombre ASC";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['categoria']))
                                        {
                                            $checked = $_GET['categoria'];
                                        }
                                        ?>
                                            <p class="barras">
                                                 <input type="checkbox" name="categoria[]" value="<?= $brandlist['Id_Categoria']; ?>" 
                                                    <?php if(in_array($brandlist['Id_Categoria'], $checked)){ echo "default"; } ?>
                                                 />
                                                 <?= $brandlist['Nombre']; ?> 
                                            </p>

                                        <?php

                                    }
                                }
                                else
                                {
                                    echo "";
                                }

                            ?>
                            </div>
                        </div>
                      
                    </div>
                </form>
                <br>
                   
                   
            </div>
          

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-1" id="gallery2">
                
                    <div class="row"   id="row2">

                       
                        <?php
                            if(isset($_GET['categoria']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['categoria'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM producto WHERE Id_Categoria IN ($rowbrand)";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                 
                              
                                 
                                       <section id="item2" class="col-md-4">
                                           <section id="blogss">
                                                <div class="contenedors">
                                                 <div class="containerTarg">
                                                    <div class="target">   
                                                    </div>
                                                    <div class="image">
                                                      <img src="Img_uploads/<?= $proditems['image']; ?>" class="img-fluid" >
                                                    </div>
                                                    <div class="contents">
                                                       <h6><?= $proditems['Nombre']; ?></h6>    
                                                    </div>
                                                      <div class="contentss">
                                                        <a href="detalle.php?Id_Prod=<?= $proditems['Id_Prod']; ?>">
                                                        <button >Ver Detalles</button>
                                                        </a> 
                                                      </div>
                                                       <div class="empty">
                                                    </div>
                                                 </div>
                                               </div>
                                            </section>  
                                       </section>
                              
                                                 
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM producto";
                                $products_run = mysqli_query($con, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $proditems) :
                                       
                                        ?>
                                           
                                           
                               
                                       <section id="item2" class="col-md-4" >
                                           <section id="blogss" >
                                                <div class="contenedors">
                                                 <div class="containerTarg">
                                                    <div class="target">   
                                                    </div>
                                                    <div class="image">
                                                      <img src="Img_uploads/<?= $proditems['image']; ?>" class="img-fluid" >
                                                    </div>
                                                    <div class="contents">
                                                       <h6><?= $proditems['Nombre']; ?></h6>    
                                                    </div>
                                                      <div class="contentss">
                                                        <a href="detalle.php?Id_Prod=<?= $proditems['Id_Prod']; ?>">
                                                        <button >Ver Detalles</button>
                                                        </a> 
                                                      </div>
                                                       <div class="empty">
                                                    </div>
                                                 </div>
                                               </div>
                                            </section>  
                                       </section> 
                             
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "";
                                }
                            }
                        ?>
                       
                    </div>
                    
                            <div class="pagination">                      
                              <div class="prev"><< Anterior</div>
                              <div class="page">Página <span class="page-num"></span></div>
                              <div class="next">Siguiente >></div>
                            </div>
                      

            </div><!-- fin div producto -->

        </div>
    </div>
          
    <br><br><br><br>


<footer class=" text-black pt-5 pb-4" id="foot" >
 
  <div class="container text-center text-md-left">

    <div class="row text-center text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold text-dark">Empresa</h6>
          <p>
        <a  class="text-purple" style="text-decoration: none;"> Herrajes Andrea</a>
      </p>
        
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold text-dark">Información </h6>
      <p>
        <a href="SobreNosotros.php" class="text-purple" style="text-decoration: none;"> Sobre nosotros</a>
      </p>
      <p>
        <a href="maps.php" class="text-purple" style="text-decoration: none;"> Sucursales</a>
      </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold text-dark" >Atención a clientes</h6>
        <p>
          
          <img src="img/what.png" alt="" width="17" height="17" class="d-inline-block align-text-top">
      <font size=2 class="d-inline-block align-text-top" color="Purple">55-25-48-61-73</font>
         
         </a>
        </p>
         <p>
          
          <img src="img/tel.png" alt="" width="17" height="17" class="d-inline-block align-text-top">
      <font size=2 class="d-inline-block align-text-top" color="Purple">55-55-42-80-63</font>
         
         </a>
        </p>
      </div>
      
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">

      <div class="col-md-7 col-lg-8">
        <p> Copyright ©2022 Todos los derechos reservados por:
          <a  style="text-decoration: none;">
            <strong class="text-dark">HERRAJES ANDREA</strong>
          </a></p>
        
      </div>

      
      
    </div>

  </div>
  
</footer>
 


 <!--<script src="js/loader.js"></script>-->
 <script src="js/ma.js"></script>
     
  <script>
   (function($){
        $(window).on("load",function(){
            $(".barra").mCustomScrollbar({
              theme:"rounded-dark",
               scrollButtons:{ enable: true }
            });
        });
    })(jQuery);
</script>
   <script src="js/scriptGaleriaRESPONSIVO.js"></script>
  <script>
   $(document).ready(function(){
      // Video 1
      $('#video1').on('shown.bs.modal', function (event) {
        $('#video-1')[0].play();
      });
      $('#video1').on('hidden.bs.modal', function (event) {
        $('#video-1')[0].pause();
      });
    });

 
</script>

<script src="js/jquery-3.5.1.js"></script>

   <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
     <script >

var auto_complete = new Autocomplete(document.getElementById('buscador'),
 {
    data:<?php echo json_encode($data); ?>,
    maximumItems:3,
    highlightClass : 'fw-bold'
   
}); 

</script>
   
  </body>
</html>



