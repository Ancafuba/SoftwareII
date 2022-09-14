<?PHP
error_reporting(0);
session_start();
include("funciones.php");
?>
<!--__________________________________________________________________________________________________________________________________________________________________-->
<!DOCTYPE html>
<html lang="es">
    <!--__________________________________________________________________________________________________________________________________________________________________-->
    <head>
        <meta name="description" content="Adopción de animales">
        <?PHP
        myhead();    
        ?>
    </head>
    <!--__________________________________________________________________________________________________________________________________________________________________-->
    <body style="background-color: black">
        <!--__________________________________________________________________________________________________________________________________________________________________-->

        <header class="header">
            <div class="amed la-la">
                <nav class="clientes"></nav>

                <a href="#"><p class="tituloh">Adóptame</p></a>

                <nav class="clientes">
                    <ul>
                        <?php
                        if(empty($_SESSION["nombre"])){
                            echo "<li><a href='#ingreso' id='show-modal'><p class='titulo3h'>Ingreso</p></a></li>";
                        }else{
                            echo "<li><a href='#salida' id='show-modal'><p class='titulo3h'>Salida</p></a></li>";
                        }
                        ?>                      
                    </ul>
                </nav>
            </div>
        </header>
        <!--__________________________________________________________________________________________________________________________________________________________________-->
        <main>
            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <p class="titulo3h">A continuación encontrará dos categorias referentes a los animales que puede adoptar. <br/>Por   favor, cliquee sobre cualquiera para conocerlos.</p>
            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <section>
                <!--Esto es una tabla-->
                <table class="my-table" align="center" >
                    <thead>
                        <tr>
                            <th colspan="2"><p class="titulo3h">Por favor, elija una opción:</p></th><br/>
                        </tr>
                    </thead>
                    <tbody>                        

                        <map name="mapB">
                            <area target="" alt="" title="" href="" coords="102,245,98,269,97,284,93,288,89,303,93,315,93,327,95,342,100,355,104,365,109,375,114,384,120,393,130,399,132,407,143,414,148,424,151,433,160,445,169,444,176,448,187,449,200,452,206,448,206,433,206,417,206,400,201,390,203,382,203,376,203,360,207,347,209,336,211,327,218,317,222,305,225,297,228,289,236,276,239,270,244,263,250,254,253,247,268,236,262,236,258,241,273,231,279,223,288,216,294,214,301,209,322,198,313,201,305,204,331,194,337,187,343,185,351,180,358,179,376,172,386,172,393,170,371,175,402,165,405,160,410,156,414,144,414,138,419,126,422,120,429,107,431,101,437,93,442,84,446,76,452,66,462,62,476,56,493,50,484,50,468,56,498,43,506,41,516,41,522,43,528,41,534,40,545,40,552,45,560,45,580,45,574,45,567,44,588,40,594,38,602,35,609,35,617,35,629,34,639,34,647,32,654,31,664,28,675,25,685,23,699,22,715,18,730,15,737,15,752,12,760,6,745,12,768,6,776,6,790,7,801,12,817,12,829,18,842,18,808,7,825,15,849,28,860,31,849,21,866,32,873,35,877,41,883,44,890,50,899,56,907,57,912,63,920,68,936,82,945,85,928,75,950,93,956,98,964,106,971,110,977,116,980,123,985,128,987,134,994,147,997,154,997,169,994,181,992,191,985,205,986,198,981,212,977,222,975,231,969,241,965,248,961,256,954,267,951,275,944,286,943,292,932,308,937,300,958,261,927,314,926,323,921,329,916,336,907,347,901,355,888,363,883,362,861,355,853,344,847,344,841,349,839,357,833,368,831,373,830,382,827,393,828,406,830,412,871,416,852,411,862,412,844,412,878,412,838,412,888,410,895,411,906,415,929,416,940,416,950,416,964,416,973,419,982,421,1000,437,1008,442,1016,450,1021,454,1021,469,1020,477,1020,483,1020,493,1019,499,1015,510,1008,513,997,520,991,521,972,521,960,540,958,545,954,552,939,564,932,565,918,568,911,568,900,568,874,565,887,567,894,565,862,567,858,564,850,569,840,568,828,572,816,572,803,570,797,570,785,568,773,570,753,570,746,570,735,569,727,569,718,569,707,569,689,569,678,569,673,568,660,564,651,562,639,565,626,569,613,567,602,567,585,569,573,567,947,559,961,531,967,526,981,520,993,428,923,411,873,361,869,355,746,226,562,566,549,567,531,567,517,567,497,566,482,566,467,567,456,565,437,564,428,564,413,564,402,565,391,565,371,565,358,568,337,564,315,563,297,557,275,549,254,555,228,559,236,560,214,566,190,561,167,553,154,548,142,544,130,541,119,536,106,528,93,520,80,510,70,497,64,489,57,481,50,470,46,463,42,456,37,444,31,434,26,420,21,402,17,383,17,368,17,354,18,341,18,323,19,308,22,295,29,278,40,260,49,253,57,243,69,237,80,232,95,235" shape="poly">
                        </map>
                            
                        
                        
                        <map name="mapC">
                            <area target="" alt="" title="" href="" coords="220,169,231,179,240,188,251,199,263,209,272,222,285,236,292,240,301,240,316,237,333,234,344,232,360,230,378,231,393,233,406,235,419,238,428,242,442,232,451,225,459,213,469,205,480,197,488,190,500,183,509,175,520,177,519,188,522,197,522,210,523,219,523,233,523,241,523,252,523,262,523,271,523,280,523,299,521,316,521,331,521,345,519,364,519,382,520,391,529,396,542,396,559,396,576,400,592,404,601,411,598,419,579,416,564,412,545,412,530,412,522,415,520,427,528,426,547,426,561,432,567,439,564,446,549,448,532,446,512,445,509,450,521,453,532,459,548,465,546,476,536,476,517,466,497,466,489,481,482,492,473,503,456,520,433,533,414,537,383,549,359,552,337,549,313,540,302,538,290,534,276,529,263,517,258,507,246,500,242,495,233,487,225,471,216,465,206,467,194,470,184,474,177,469,188,458,208,455,204,441,191,441,179,442,164,448,157,439,170,432,193,426,208,426,200,409,179,406,154,410,134,416,125,405,148,401,172,398,199,397,205,385,204,357,204,320,205,297,200,244,202,194,209,174" shape="poly">
                        </map>
                        <tr>
                            <!--Bovinos-->
                            <td><a href="perros.php"><img src="imagenes/perodifu.png" alt="Perro" onmouseout="this.src='imagenes/perodifu.png'" 
                                                            onmouseover="this.src='imagenes/peroilu.png'" width="50%" height="50%" usemap="#mapB"/></a></td>
                            <!--Cacao-->
                            <td><a href="gatos.php"><img src="imagenes/gat.png" alt="Gato" onmouseout="this.src='imagenes/gat.png'" 
                                                          onmouseover="this.src='imagenes/gatoo.png'" width="60%" height="60%" usemap="#mapC"/></a></td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <!--modal de Ingreso-->
            <aside id="ingreso" class="modal">
                <div class="content-modal">
                    <header>
                        <form action="validacion.php" method="post">
                            <table class="my-table" align="center">
                                <tbody>
                                    <tr>
                                        <td rowspan="7"><img src="imagenes/usuario.png" width="150" height="150"></td> 
                                    </tr>

                                    <tr>
                                        <td><h3 style="font-size: 25px" class="titulo4">Ingresar</h3></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <?php 
                                            if (isset($_GET["errorusuario"])=="si")
                                            {
                                            ?> 
                                            <b>Datos incorrectos</b> 
                                            <?php
                                            }
                                            else
                                            {
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left" class="titulo4">Usuario</td>
                                    </tr>

                                    <tr>
                                        <td><input type="text" class="my-input" name="user_name" value=""></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left" class="titulo4">Contraseña</td>
                                    </tr>

                                    <tr>
                                        <td><input type="password" class="my-input" name="user_pass" value=""></td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"><button type="submit" name="submit" class="boton">Aceptar</button></td>
                                    </tr>
                                </tbody> 
                            </table>
                        </form>
                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
            <!--modal de Dueño-->
            <aside id="dueno" class="modal">
                <div class="content-modal">
                    <header>
                        <form action="index.php" method="post">
                            <table class="my-table" align="center">
                                <tbody>
                                    <tr>
                                        <td rowspan="7"><img src="imagenes/usuario.png" width="150" height="150"></td> 
                                    </tr>

                                    <tr>
                                        <?PHP
                                        echo "<td><h3 style='font-size: 25px' class='titulo4'>Bienvenido, ".$_SESSION["nombre"]."</h3></td>";
                                        ?>
                                    </tr>                                   

                                    <tr>
                                        <td colspan="4"><button type="submit" name="submit" class="boton">Aceptar</button></td>
                                    </tr>
                                </tbody> 
                            </table>
                        </form>
                    </header>
                </div>
            </aside>
            <!--modal de Administrador-->
            <aside id="admin" class="modal">
                <div class="content-modal">
                    <header>
                        <form action="index.php" method="post">
                            <table class="my-table" align="center">
                                <tbody>
                                    <tr>
                                        <td rowspan="7"><img src="imagenes/usuario.png" width="150" height="150"></td> 
                                    </tr>

                                    <tr>
                                        <?PHP
                                        echo "<td><h3 style='font-size: 25px' class='titulo4'>Bienvenido, ".$_SESSION["nombre"]."</h3></td>";
                                        ?>
                                    </tr>                                   

                                    <tr>
                                        <td colspan="4"><button type="submit" name="submit" class="boton">Aceptar</button></td>
                                    </tr>
                                </tbody> 
                            </table>
                        </form>
                    </header>
                </div>
            </aside>
            <!--modal de Clientes-->
            <aside id="cliente" class="modal">
                <div class="content-modal">
                    <header>
                        <form action="index.php" method="post">
                            <table class="my-table" align="center">
                                <tbody>
                                    <tr>
                                        <td rowspan="7"><img src="imagenes/usuario.png" width="150" height="150"></td> 
                                    </tr>

                                    <tr>
                                        <?PHP
                                        echo "<td><h3 style='font-size: 25px' class='titulo4'>Bienvenido, ".$_SESSION["nombre"]."</h3></td>";
                                        ?>
                                    </tr>                                   

                                    <tr>
                                        <td colspan="4"><button type="submit" name="submit" class="boton">Aceptar</button></td>
                                    </tr>
                                </tbody> 
                            </table>
                        </form>
                    </header>
                </div>
            </aside>
            <!--modal de Salida-->
            <aside id="salida" class="modal">
                <div class="content-modal">
                    <header>
                        <form action="salir.php#chao" method="post">
                            <table class="my-table" align="center">
                                <tbody>
                                    <tr>
                                        <?PHP
                                        echo "<td><h3 style='font-size: 25px' class='titulo4'>".$_SESSION["nombre"].", Si desea cerrar su sesión, por favor presione el botón</h3></td>";
                                        ?>
                                    </tr>                                 

                                    <tr>
                                        <td ><img src="imagenes/fav.png" width="150" height="150"></td>
                                    </tr>                                                          

                                    <tr>
                                        <td colspan="2"><button type="submit" name="submit" class="boton">Salir</button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </form>
                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
            
            
            
        </main>   
        <!--__________________________________________________________________________________________________________________________________________________________________-->
        <?php 
        if(isset($_SESSION["nombre"])){
            $tiempo = $_SESSION["tiempo"];
            $inicio= $_SESSION["inicio"];

            if((time()-$inicio) > $tiempo){
                unset($_SESSION["tiempo"]);
                unset($_SESSION["inicio"]);
                unset($_SESSION["cedula"]);
                unset($_SESSION["nombre"]);
                unset($_SESSION["usuario"]);
                echo "<script>window.top.location='salir.php#cad'</script>";
                exit();
            }
        }     
        ?>
        <!--footer(fixed)-->
        <div class="footer">
            <p class="pie2">Adoptame®<a href="nosotros.php" style="color: wheat"><b>Mas información</b></a></p>
        </div>
    </body>
</html>