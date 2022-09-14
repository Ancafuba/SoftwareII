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
        <meta name="description" content="Adoptame">
        <?PHP
        myhead();    
        ?>
    </head>
    <!--__________________________________________________________________________________________________________________________________________________________________-->
    <body style="background: url(imagenes/backg.jpg) no-repeat center;">
        <div>

            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <header class="header">
                <div class="amed la-la">
                    <nav class="clientes"></nav>

                    <a href="index.php"><p class="titulo" style="color: black">Adoptame</p></a>

                    <nav class="clientes">
                        <ul>
                            <?php
                            if(empty($_SESSION["nombre"])){
                                echo "<li><a href='#ingreso' id='show-modal'><p class='titulo3' style='color: black'>Ingreso</p></a></li>";
                            }else{
                                echo "<li><a href='#salida' id='show-modal'><p class='titulo3' style='color: black'>Salida</p></a></li>";
                            }
                            ?>                      
                        </ul>
                    </nav>
                </div>
            </header>
            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <main>
                <!--__________________________________________________________________________________________________________________________________________________________________-->
                <section class="myseca">
                    <p class="titulo3">Estamos comprometidos con el correcto manejo de nuestros productos y con debida atención a nuestros clientes.</p>
                </section>
                <section class="mysec">
                    <table class="my-table">
                        <tbody>
                            <tr>
                                <td>  
                                    <img class="photo" src="imagenes/funda.jpg" />
                                    <p class="titulo9">¿QUE ES UN ALBERGUE?</p>
                                </td>
                                <td>
                                    <p class="titulo9">Los albergues son la salvación de los animales que han sido abandonados o maltratados, se han perdido o, lamentablemente, sus dueños no pueden seguir atendiendo. Gracias a estos centros sin ánimo de lucro estos animales aspiran a tener una segunda oportunidad. Por lo tanto, la mayor prestación que ofrecen los albergues es el de la acogida temporal, un concepto muy amplio en el que se incluyen: cuidados veterinarios, ejercicio físico, afecto, educación, alimentación, limpieza... Y que es complementado por acciones de tipo administrativo (cuestiones legales del centro, gestión de adopciones, coordinación del voluntariado, búsqueda de financiación…), organización de actividades y eventos de promoción y concienciación y, por supuesto, de formación (formar voluntarios y reciclaje de personal).</p>
                                </td>
                            </tr>
                        </tbody>                    
                    </table> 
                    <table class="my-table">
                        <tbody>
                            <tr>
                                <td>  
                                    <img class="photo" src="imagenes/funda2.jpg" />
                                    <p class="titulo9">lAS FUNDACIONES IMPORTAN</p>
                                </td>
                                <td>
                                    <p class="titulo9">Es importante vincularse con las fundaciones porque así se logra ayudar a más animales en estado de calle. Podemos cambiarles la vida”. Juan Pablo Olmos Coordinador de Participación Ciudadana “Toda mejora para la calidad de vida para los animales es una mejora para la calidad de vida de las personas. Hay que generar cultura”.</p>
                                </td>
                            </tr>
                        </tbody>                    
                    </table> 
                </section>
                <section class="myseca">
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>
                                <td>  
                                    <p class="titulo9">Si desea comunicarse con nosotros, puede hacerlo por:</p>
                                </td> 
                            </tr>                              
                        </tbody>                    
                    </table>
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>
                                <td>  
                                    <p class="titulo1"><b style="color: white">Direccion</b>: Vereda San Pobe, vía Panamericana</p>
                                </td> 
                                <td>
                                    <p class="titulo1"><b style="color: white">Correo</b>: adoptame@contacto.com</p>
                                </td>
                                <td>
                                    <p class="titulo1"><b style="color: white">Teléfonos</b>: 321 4655 123 - 123 4561 231</p>
                                </td>
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
                <!--__________________________Menú retractil, para los diferentes usuarios_________________________________________________________________________________________________________-->
                <?PHP
                if($_SESSION["usuario"]=='0'){
                    echo "<aside class='puntos'>";
                    echo "<div>";
                    echo "<input type='checkbox' id='dots' name='puntos' onclick='checkInput(this)'>";
                    echo "<label id='icon' for='dots'><img src='imagenes/puntos-menu.png' width='7%' height='7%'></label>";
                    echo "</div>";
                    echo "</aside>";
                    echo "<aside class='asid' id='nono'>";
                    echo "<div>";
                    echo "<ul class='navi'>";
                    echo "<li><a href=''><p class='titulo2'>Bovinos</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#bovinos'><p class='titulo8'>Llenar</p></a></li>";
                    echo "<li><a href='formulario3.php#bovinossql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "<li><a href=''onclick='onLoad=elimodibovi()'><p class='titulo8'>Modificar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=''><p class='titulo2'>Clientes</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#clientes'><p class='titulo8'>Llenar</p></a></li>";
                    echo "<li><a href='formulario3.php#clientessql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "<li><a href=''onclick='onLoad=elimodiclien()'><p class='titulo8'>Modificar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=''><p class='titulo2'>Empleados</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#empleados'><p class='titulo8'>Llenar</p></a></li>";
                    echo "<li><a href='formulario3.php#empleadossql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "<li><a href=''onclick='onLoad=elimodiemplea()'><p class='titulo8'>Modificar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=''><p class='titulo2'>Facturas</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#facturas'><p class='titulo8'>Llenar</p></a></li>";
                    echo "<li><a href='formulario3.php#facturassql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "<li><a href=''onclick='onLoad=elimodifactu()'><p class='titulo8'>Modificar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=''><p class='titulo2'>Proveedores</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#proveedores'><p class='titulo8'>Llenar</p></a></li>";
                    echo "<li><a href='formulario3.php#proveedoressql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "<li><a href=''onclick='onLoad=elimodiprove()'><p class='titulo8'>Modificar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</div>";
                    echo "</aside>";

                }else if($_SESSION["usuario"]=='1'){
                    echo "<aside class='puntos'>";
                    echo "<div>";
                    echo "<input type='checkbox' id='dots' name='puntos' onclick='checkInput(this)'>";
                    echo "<label id='icon' for='dots'><img src='imagenes/puntos-menu.png' width='7%' height='7%'></label>";
                    echo "</div>";
                    echo "</aside>";
                    echo "<aside class='asid' id='nono'>";
                    echo "<div>";
                    echo "<ul class='navi'>";
                    echo "<li><a href=''><p class='titulo2'>Bovinos</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#bovinos'><p class='titulo8'>Llenar</p></a></li>";
                    echo "<li><a href='formulario3.php#bovinossql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li><a href=''><p class='titulo2'>Empleados</p></a>";
                    echo "<ul>";
                    echo "<li><a href='formulario3.php#admiemplesql'><p class='titulo8'>Consultar</p></a></li>";
                    echo "</ul>";
                    echo "</li>";                
                    echo "</ul>";
                    echo "</div>";
                    echo "</aside>"; 
                }
                ?>
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
        </div>

    </body>
</html>