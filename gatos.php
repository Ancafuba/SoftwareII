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
        <meta name="description" content="Adopción de gatos">
        <?PHP
        myhead();    
        ?>
    </head>
    <!--__________________________________________________________________________________________________________________________________________________________________-->
    <body style="background-color: gray">
        <div class="background">

            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <header class="header">
                <div class="amed la-la">
                    <nav class="clientes"></nav>

                    <a href="index.php"><p class="tituloh">Adopción de gatos</p></a>

                    <nav class="clientes">
                        <ul>
                            <?php
                            if(empty($_SESSION["nombre"])){
                                echo "<li><a href='#ingreso' id='show-modal'><p class='titulo3h'>Ingreso</p></a></li>";
                            }else{
                                echo "<li><a href='#salida' id='show-modal'><p class='titulo3'>Salida</p></a></li>";
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
                    <p class="titulo3">Adoptar un gato es una acción solidaria La adopción de felinos es sin duda una de las mejores formas de implicarse en los movimientos animalistas de protección de los animales. Realizando una adopción estás tomando parte activa del cambio por la vida de estos seres peludos tan adorables.</p>
                </section>
                <section class="mysec">
                    <p class="titulo10">Por favor elige un gato</p>
                    <br>
                    <br>
                    <br>
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>
                                <td>  
                                    <a href="#roberto" id="show-modal">
                                    <img class="photo" src="imagenes/c1.png" />
                                    <p class="titulo9">Roberto</p>
                                    </a>
                                </td> 
                                <td>  
                                    <a href="#mishi" id="show-modal">
                                    <img class="photo" src="imagenes/c2.png"/>
                                    <p class="titulo9">Mishi</p>
                                    </a>
                                </td> 
                                <td>   
                                    <a href="#gritonsito" id="show-modal">
                                    <img class="photo" src="imagenes/c3.png"/>
                                    <p class="titulo9">Gritonsito</p>
                                    </a>
                                </td>                                 
                                <td>    
                                    <a href="#tamarindo" id="show-modal">
                                    <img class="photo" src="imagenes/c4.png"/>
                                    <p class="titulo9">Tamarindo</p>
                                    </a>
                                </td>                          
                            </tr>                        
                        </tbody>                    
                    </table> 
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>                                
                                <td>
                                    <a href="#juanita" id="show-modal">
                                    <img class="photo" src="imagenes/c5.png"/>
                                    <p class="titulo9">Juanita</p>
                                    </a>
                                </td>  
                                <td>     
                                    <a href="#hermosa" id="show-modal">
                                    <img class="photo" src="imagenes/c6.png"/>
                                    <p class="titulo9">Hermosa</p>
                                    </a>
                                </td> 
                                <td>       
                                    <a href="#liza" id="show-modal">
                                    <img class="photo" src="imagenes/c7.png"/>
                                    <p class="titulo9">Liza</p>
                                    </a>
                                </td> 
                                <td>          
                                    <a href="#gatuela" id="show-modal">
                                    <img class="photo" src="imagenes/c8.png"/>
                                    <p class="titulo9">Gatuela</p>
                                    </a>
                                </td> 
                                
                            </tr>                        
                        </tbody>                    
                    </table>
                    
                </section>
                <section class="myseca">
                    <p class="pie">Adoptame®<a href="nosotros.php" style="color: #D85327"><b>Mas información</b></a></p>
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
            
                <aside class='puntos'>;
                    <div>;
                        <input type='checkbox' id='dots' name='puntos' onclick='checkInput(this)'>
                        <label id='icon' for='dots'><img src='imagenes/puntos-menu.png' width='7%' height='7%'></label>
                    </div>
                </aside>
                <aside class='asid' id='nono'>
                    <div>
                    <ul class='navi'>
                    <li><a href=''><p class='titulo2h'>Opciones</p></a>
                    <ul>
                    <li><a href="#Registro" id="show-modal"><p class='titulo8'>Registrar animal</p></a></li>
                    <li><a href='formulario3.php#bovinossql'><p class='titulo8'>Consultar animal</p></a></li>                
                    </ul>
                    </li>   

                    <li><a href=''><p class='titulo2h'>Donaciones</p></a>
                    <ul>
                    <li><a href="#donacion" id="show-modal"><p class='titulo8'>Realizar donación</p></a></li>
                    </ul>
                    </li> 

                    </ul>
                    </div>
                </aside>
                
                <!--modal de registro-->
                <aside id="Registro" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/Gatoilu.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'>Registro de gatos</h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato</td>
                                    <td class='titulo4'>Fecha de nacimiento</td>
                                    <td class='titulo4'>Género</td> 
                                </tr>

                                <tr>
                                    <td><input type='text' class='my-input' name='nombre' id='cod_gato' value=''></td>
                                    <td><input type='text' class='my-input' name='fecha_naci' id='fecha_naci' value='' placeholder='aa-mm-dd'></td>
                                    <td>
                                    <div class='selec'>
                                        <select name='genero_gato' id='genero_gato'>
                                        <option disable selected value>
                                        <option value ='Masculino'>Masculino</option>
                                        <option value ='Femenino'>Femenino</option>
                                        </select>
                                    </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Estado</td>  
                                    <td class='titulo4'>Descripción del estado</td>    
                                    <td class='titulo4'>Peso</td> 
                                </tr>

                                <tr>
                                    <td>
                                        <div class='selec'>
                                            <select name='estado_bovi' id='estado_bovi'>
                                            <option disable selected value>
                                            <option value ='Ok'>En tratamiento</option>
                                            <option value ='Enfermo'>Enfermo</option>                                          
                                            
                                        </select>
                                        </div>
                                    </td>    
                                    <td><input type='text' class='my-input' name='descrip_bovi' id='descrip_bovi' value=''></td>
                                    <td><input type='text' class='my-input' name='peso_bovi' id='peso_bovi' value='' placeholder='En kg'></td>
                                </tr>

                                

                      

                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Aceptar</button></td>
                        <td><button type='reset' name='submit' class='boton'>Borrar</button></td>
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                
                
                
                <!--modal de donaciones-->
                <aside id="donacion" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/money.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'>Realizar donación</h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Cantidad a donar</td>
                                     
                                </tr>

                                <tr>
                                    <td><input type='text' class='my-input' name='nombre' id='cod_gato' value='' placeholder="$$"></td>
                                    <td>
                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Donar a nombre de</td>  
                                </tr>

                                <tr>
                                    
                                    <td><input type='text' class='my-input' name='descrip_bovi' id='descrip_bovi' value=''></td>
                                </tr>                              

                      

                                <tr>
                                    <td colspan='2'><button type='submit' name='submit' class='boton'><a href="#gracias" id="show-modal">Aceptar</a></button></td>
                                </tr>

                            </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                  <!--modal de gracias-->
                <aside id="gracias" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/pulgar.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'>GRACIAS!</h3></td>
                                </tr>                               

                               

                            </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
 <!--__________________________________________________________________________________________________________________________________________________________________-->     
                
               
                <!--Roberto-->
                <aside id="roberto" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c1.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Roberto</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Alocado pero caserito</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>2 kg</td>                                     
                                </tr>  
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                
                 <!--Mishi-->
                <aside id="mishi" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c2.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Mishi</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Una bolita de amor</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>4 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                <!--Gritonsito-->
                <aside id="gritonsito" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c3.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Gritonsito</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Cuando llegas a casa te recibo con sus lindo maullidos</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>3 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                <!--Tamarindo-->
                <aside id="tamarindo" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c4.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Tamarindo</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Le dará sabor a tus días</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>5 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                <!--Juanita-->
                <aside id="juanita" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c5.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Juanita</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Traviesa pero juiciosa</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>4.5 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                
                <!--Hermosa-->
                <aside id="hermosa" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c5.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Hermosa</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>La gata más linda de todas</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>4.5 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                <!--Liza-->
                <aside id="liza" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c7.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Liza</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Baila al son que le toquen</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>3.5 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
                
                <!--Gatuela-->
                <aside id="gatuela" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/c8.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del gato:</td>
                                    <td class='titulo9'>Gatuela</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Una gata de hogar</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>5 kg</td>                                     
                                </tr>  
                                
                              
                        <tr>
                        <td colspan='2'><button type='submit' name='submit' class='boton'>Adoptar</button></td>                        
                        </tr>

                                </tbody>
                            </table>
                        </form>
 

                    </header>
                </div>

                <a href="#" class="btn-close-modal"></a>
            </aside>
 <!--__________________________________________________________________________________________________________________________________________________________________-->     
                
                
                
                
                
                
                
                
              
  
                
                
                
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