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
        <meta name="description" content="Adopción de perros">
        <?PHP
        myhead();
        $conexion = pg_connect("host=localhost user=postgres port=5432 dbname=adoptame password=123456");
        ?>
    </head>
    <!--__________________________________________________________________________________________________________________________________________________________________-->
    <body style="background-color: gray">
        <div class="background">

            <!--__________________________________________________________________________________________________________________________________________________________________-->
            <header class="header">
                <div class="amed la-la">
                    <nav class="clientes"></nav>

                    <a href="index.php"><p class="tituloh">Adopción de perros</p></a>

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
                    <p class="titulo3">Adoptar un perro es la mejor forma de darle un hogar a un alma buena como son los animales de compañía para mascotas. En el caso de los perros, el beneficio es mutuo, ya que las personas que adoptan cachorros o perros adultos tendrán compañeros que le dedicarán cada uno de los momentos de sus vidas.</p>
                </section>
                <section class = "mysec">
                    <p class="titulo10">Por favor elige un perro</p>
                    <br>
                    <br>
                    <br>
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>
                                <td>  
                                    <a href="#perinea" id="show-modal">
                                    <img class="photo" src="imagenes/p1.png" />
                                    <p class="titulo9">Perinea</p>
                                    </a>
                                </td> 
                                <td>  
                                    <a href="#cookie" id="show-modal">
                                    <img class="photo" src="imagenes/p2.png"/>
                                    <p class="titulo9">Cookie</p>
                                    </a>
                                </td> 
                                <td>   
                                    <a href="#rosendo" id="show-modal">
                                    <img class="photo" src="imagenes/p3.png"/>
                                    <p class="titulo9">Rosendo</p>
                                    </a>
                                </td>                                 
                                <td>    
                                    <a href="#lilly" id="show-modal">
                                    <img class="photo" src="imagenes/p4.png"/>
                                    <p class="titulo9">Lilly</p>
                                    </a>
                                </td>                          
                            </tr>                        
                        </tbody>                    
                    </table> 
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>                                
                                <td>
                                    <a href="#tulio" id="show-modal">
                                    <img class="photo" src="imagenes/p5.png"/>
                                    <p class="titulo9">Tulio</p>
                                    </a>
                                </td>  
                                <td>     
                                    <a href="#paco" id="show-modal">
                                    <img class="photo" src="imagenes/p6.png"/>
                                    <p class="titulo9">Aristóteles</p>
                                    </a>
                                </td> 
                                <td>       
                                    <a href="#carinosa" id="show-modal">
                                    <img class="photo" src="imagenes/p7.png"/>
                                    <p class="titulo9">Cariñosa</p>
                                    </a>
                                </td> 
                                <td>          
                                    <a href="#gerundio" id="show-modal">
                                    <img class="photo" src="imagenes/p8.png"/>
                                    <p class="titulo9">Gerundio</p>
                                    </a>
                                </td> 
                                
                            </tr>                        
                        </tbody>                    
                    </table>
                    
                </section>
                <section class ="myseca">
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
                <li><a href="perros.php#Registro" id="show-modal"><p class='titulo8'>Registrar animal</p></a></li>
                <li><a href='perros.php#consulperro'><p class='titulo8'>Consultar animal</p></a></li>                
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
                
                
                 <!--Consulta de perros-->
        
        <!--
                
                <!--modal de registro-->
                <aside id="Registro" class="modal">
                <div class="content-modal">
                    <header>
                        <form action="perros.php#registroperros" method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/peroilu.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'>Registro de perros</h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro</td>
                                    <td class='titulo4'>Fecha de nacimiento</td>
                                    <td class='titulo4'>Género</td> 
                                </tr>

                                <tr>
                                    <td><input type='text' class='my-input' name='nom_perro' id='nom_perro' value=''></td>
                                    <td><input type='text' class='my-input' name='fecha_naci' id='fecha_naci' value='' placeholder='aa-mm-dd'></td>
                                    <td>
                                    <div class='selec'>
                                        <select name='genero_perro' id='genero_perro'>
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
                                            <select name='estado' id='estado'>
                                            <option disable selected value>
                                            <option value ='Ok'>En tratamiento</option>
                                            <option value ='Enfermo'>Enfermo</option>                                          
                                            
                                        </select>
                                        </div>
                                    </td>    
                                    <td><input type='text' class='my-input' name='descrip' id='descrip' value=''></td>
                                    <td><input type='text' class='my-input' name='peso' id='peso' value='' placeholder='En kg'></td>
                                </tr>
                                
                                <tr id = "registroperros">
                                    <?                
                                    
                                    $nombre_perro = ($_POST["nom_perro"]);
                                    $fecha_perro = ($_POST["fecha_naci"]);
                                    $genero = ($_POST["genero_perro"]);
                                    $estado = ($_POST["estado"]);
                                    $descripcion = ($_POST["descrip"]);
                                    $peso = ($_POST["peso"]);


                                    $sql2="insert into perros (nombre, fecha, genero, estado, descripcion, peso) 
                                        values ('$nombre_perro', '$fecha_perro', '$genero', '$estado', '$descripcion', '$peso')";

                                    $result2 = pg_query($conexion, $sql2);
                                    ?>
                                
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
 <!--__________________________________________________________________________________________________________________________________________________________________-->     
                
               
                <!--Tulio-->
                <aside id="tulio" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p5.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Tulio</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Perro feliz, contento y alegre</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>20 kg</td>                                     
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
                
                
                 <!--Perinea-->
                <aside id="perinea" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p1.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Perinea</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Una excelente guardián</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>40 kg</td>                                     
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
                
                <!--Cookie-->
                <aside id="cookie" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p2.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Cookie</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Tierna y cariñosa</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>20 kg</td>                                     
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
                
                <!--Rosendo-->
                <aside id="rosendo" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p3.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Rosendo</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Es una estrella en el cielo</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>30 kg</td>                                     
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
                
                <!--Lilly-->
                <aside id="lilly" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p4.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Lilly</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Adorable y juguetona</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>50 kg</td>                                     
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
                
                
                <!--Paco-->
                <aside id="paco" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p6.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Aristóteles</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Es un perro muy pensativo.</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>35 kg</td>                                     
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
                
                <!--Cariñosa-->
                <aside id="carinosa" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p7.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Cariñosa</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Femenino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Te hará la vida más feliz</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>38 kg</td>                                     
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
                
                <!--Gerundio-->
                <aside id="gerundio" class="modal">
                <div class="content-modal">
                    <header>
                        <form method='post'>
                        <table class='my-table' align='center'>
                            <tbody>

                                <tr>
                                    <td rowspan='9'><img src='imagenes/p8.png' width='200' height='200'></td>
                                </tr>

                                <tr>
                                    <td colspan='3'><h3 style='font-size: 25px' class='titulo4'></h3></td>
                                </tr>

                                <tr>
                                    <td class='titulo4'>Nombre del perro:</td>
                                    <td class='titulo9'>Gerundio</td>                                     
                                </tr>

                                

                                <tr>
                                    <td class='titulo4'>Género:</td>  
                                    <td class='titulo9'>Masculino</td>                                     
                                </tr>
                                
                                <tr>
                                    <td class='titulo4'>Descripción:</td>  
                                    <td class='titulo9'>Es muy silencioso. No te despertará</td>                                     
                                </tr>
                                
                                 <tr>
                                    <td class='titulo4'>Peso:</td>  
                                    <td class='titulo9'>8 kg</td>                                     
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
        
         <aside id="consulperro" class="modal">
            <div class="content-modal">
                <header>
                    <table class="my-table" align="center">
                        <tbody>
                            <tr>
                                <td rowspan="8"><img src="imagenes/peroilu.png" width="200" height="200"></td> 
                            </tr>
                            <tr>
                                <td align="center" colspan="9">
                                    <?php
                                    echo "<p class='titulo2'>Registro de perros</p>";

                                    $sqlperro="select id, nombre, fecha, genero, estado, descripcion, peso from perros";
                                    $resbovi= pg_query($conexion, $sqlperro);

                                    echo "<table class='my-table' align='center'>"; 

                                    echo "<tr>";
                                    echo "<td><p class='titulo6'>Código</p></td>";
                                    echo "<td><p class='titulo6'>Nombre</p></td>";
                                    echo "<td><p class='titulo6'>Fecha de nacimiento</p></td>";
                                    echo "<td><p class='titulo6'>Genero</p></td>";
                                    echo "<td><p class='titulo6'>Estado</p></td>";
                                    echo "<td><p class='titulo6'>Descripción</p></td>";
                                    echo "<td><p class='titulo6'>Peso</p></td>";
                                    echo "</tr>";

                                    while($row1=pg_fetch_array($resbovi)){

                                        $codigo = $row1["0"];
                                        $nombre = $row1["1"];
                                        $fecha = $row1["2"];
                                        $genero = $row1["3"];
                                        $estado = $row1["4"];
                                        $descri = $row1["5"];
                                        $peso = $row1["6"];


                                        echo "<tr>";

                                        echo "<td >";
                                        echo "<p class='titulo5'>$codigo</p>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<p class='titulo5'>$nombre</p>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<p class='titulo5'>$fecha</p>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<p class='titulo5'>$genero</p>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<p class='titulo5'>$estado</p>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<p class='titulo5'>$descri</p>";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<p class='titulo5'>$peso</p>";
                                        echo "</td>";



                                        echo "</tr>";
                                    }
                                    pg_free_result($resbovi); 
                                    pg_close($conexion); 
                                    echo "</table>";

                                    echo "<FORM ACTION='perros.php'>";
                                    echo "<button type='submit' name='submit' class='boton'>Regresar</button>"; 
                                    echo "</FORM>";


                                    
                                    ?>
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </header>
            </div>
            <a href="#" class="btn-close-modal"></a>
        </aside>

    </body>
</html>