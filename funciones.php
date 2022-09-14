<?PHP
session_start();
//To make da head//
function myhead(){
    $meta1="<meta charset='utf-8'>";
    $meta3="<meta name='keywords' content='HTML5, Adoptar''>";
    $link1="<link href='https://fonts.googleapis.com/css?family=Baloo+Thambi+2|Courgette|Simonetta|Fascinate+Inline|Marck+Script|Permanent+Marker|Special+Elite|Srisakdi|Tangerine&display=swap' rel='stylesheet'>";
    $link2="<link rel='stylesheet' href='copia.css'>";
    $link3="<link rel='icon' href='imagenes/favicon.png'>";
    $scrip="<script src='jsfunct.js'></script>";
    $title="<title>Adoptame</title>";
    echo ($meta1. $meta3. $link1. $link2. $link3. $scrip. $title);
}
//-----------------------------Get pks-----------------------------------------------//
function getpkbovi(){
    $pk = $_POST["pk_bovi"];
    return $pk;
};
function getpkclien(){
    $pk_clien = $_POST["pk_clien"];
    return $pk_clien; 
};
function getpkemplea(){
    $pk_emplea = $_POST["pk_emplea"];
    return $pk_emplea; 
};
function getpkfactu(){
    $pk_factu = $_POST["pk_factu"];
    return $pk_factu; 
}
function getpkprove(){
    $pk_prove = $_POST["pk_prove"];
    return $pk_prove;  
}
//-----------------------------Delete or update?-----------------------------------------------//
function bovideci($conn, &$pk){

    $query="select fecha_naci, genero, estado, peso, descrip_estado, fecha_entrada_rotacion, identi_bovi_madre, identi_rota from bovinos where identi_bovi='$pk'";
    $resubovi= pg_query($conn, $query);


    echo "<img src='imagenes/Bovino.png' width='200' height='200'>";
    echo "<h3 style='font-size: 25px' class='titulo4'>¿Qué desea hacer?</h3>";


    echo "<table class='my-table' align='center'>";
    echo "<tbody>";

    echo "<form action='actualizar.php#boviup' method='post' onsubmit='return valibovi()'>";

    while($row1=pg_fetch_array($resubovi)){

        $fecha_nac_bovi = $row1["0"];
        $genero_bovi = $row1["1"];
        $estado_bovi = $row1["2"];
        $peso_bovi = $row1["3"];
        $descri_bovi = $row1["4"];
        $fecha_rota_bovi = $row1["5"];
        $madre_bovi = $row1["6"];
        $rota_bovi = $row1["7"];

        echo "<tr>";
        echo "<td><p class='titulo6'>Código</p></td>";
        echo "<td><p class='titulo6'>Fecha de nacimiento</p></td>";
        echo "<td><p class='titulo6'>Género</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td >";
        echo "<p class='titulo5'>$pk</p>";
        echo "</td>";

        echo "<td>";
        echo "<input type='date' class='my-input' name='fecha_nac_bov_modi' value='".$fecha_nac_bovi."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='gene_bov_modi' value='".$genero_bovi."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Estado</p></td>";
        echo "<td><p class='titulo6'>Peso</p></td>";
        echo "<td><p class='titulo6'>Descripción del estado</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='estado_bov_modi' value='".$estado_bovi."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='peso_bov_modi' value='".$peso_bovi."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='descrip_bov_modi' value='".$descri_bovi."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Fecha de entrada a rotación</p></td>";
        echo "<td><p class='titulo6'>Madre</p></td>";
        echo "<td><p class='titulo6'>Rotación</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='date' class='my-input' name='fechentr_bov_modi' value='".$fecha_rota_bovi."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='madre_bov_modi' value='".$madre_bovi."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='rota_bov_modi' value='".$rota_bovi."'>";
        echo "</td>";

        echo "</tr>";
    }

    if (isset($_POST["pk_bovi"])){
        $pk_bovi = $_POST["pk_bovi"];
        echo "<input type=hidden name=pk_bovi value='".$pk_bovi."'>";
    }
    echo "<td></td>";
    echo "<td><button type='submit' name='submit' class='boton'>Actualizar</button></td>";

    echo "</form>";
    echo "</tbody>";
    echo "</table>";

    echo "<table class='my-table' align='center'>";
    echo "<tbody>";
    echo "<tr>";    

    echo "<form action='eliminar.php#bovieli' method='post'>";
    if (isset($_POST["pk_bovi"])){
        $pk_bovi = $_POST["pk_bovi"];
        echo "<input type=hidden name=pk_bovi value='".$pk_bovi."'>";
    }
    echo "<td><button type='submit' name='submit' class='boton'>Eliminar</button></td>";
    echo "</form>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'><button class='boton' onclick='closewindow()'>Salir</button></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

}
function cliendeci($conn, &$pkclien){

    $query="select cedula, nombre1, nombre2, apellido1, apellido2, mail from clientes where cliente_id='$pkclien'";
    $resuclien= pg_query($conn, $query);


    echo "<img src='imagenes/cliente.png' width='200' height='200'>";
    echo "<h3 style='font-size: 25px' class='titulo4'>¿Qué desea hacer?</h3>";


    echo "<table class='my-table' align='center'>";
    echo "<tbody>";

    echo "<form action='actualizar.php#clienup' method='post'>";

    while($row1=pg_fetch_array($resuclien)){

        $cedula_clien = $row1["0"];
        $nombre1_clien = $row1["1"];
        $nombre2_clien = $row1["2"];
        $apell1_clien = $row1["3"];
        $apell2_clien = $row1["4"];
        $mail_clien = $row1["5"];

        echo "<tr>";
        echo "<td><p class='titulo6'>Código</p></td>";
        echo "<td><p class='titulo6'>Cédula</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td >";
        echo "<p class='titulo5'>$pkclien</p>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='clien_ced_modi' value='".$cedula_clien."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Primer nombre</p></td>";
        echo "<td><p class='titulo6'>Segundo nombre</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='clien_nom_modi' value='".$nombre1_clien."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='clien_nomm_modi' value='".$nombre2_clien."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Primer apellido</p></td>";
        echo "<td><p class='titulo6'>Segundo apellido</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='clien_ap_modi' value='".$apell1_clien."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='clien_app_modi' value='".$apell2_clien."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td colspan='2'><p class='titulo6'>E-mail</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td colspan='2'>";
        echo "<input type='text' class='my-input' name='clien_mail_modi' value='".$mail_clien."'>";
        echo "</td>";

        echo "</tr>";
    }

    if (isset($_POST["pk_clien"])){
        $pk_clien = $_POST["pk_clien"];
        echo "<input type=hidden name=pk_clien value='".$pk_clien."'>";
    }
    echo "<td colspan='2'><button type='submit' name='submit' class='boton'>Actualizar</button></td>";

    echo "</form>";
    echo "</tbody>";
    echo "</table>";

    echo "<table class='my-table' align='center'>";
    echo "<tbody>";
    echo "<tr>";    

    echo "<form action='eliminar.php#clieneli' method='post'>";
    if (isset($_POST["pk_clien"])){
        $pk_clien = $_POST["pk_clien"];
        echo "<input type=hidden name=pk_clien value='".$pk_clien."'>";
    }
    echo "<td><button type='submit' name='submit' class='boton'>Eliminar</button></td>";
    echo "</form>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'><button class='boton' onclick='closewindow()'>Salir</button></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

}
function empleadeci($conn, &$pkemplea){

    $query="select cedula, puesto, fecha_naci, fecha_contrato, num_contrato, nombre1, nombre2, apellido1, apellido2, e_mail, observaciones, salario, titulo_educativo, 
    licencia_conduccion, cod_eps, codi_ciudad, codi_finca, cod_empl_jefe from empleados where cod_empl='$pkemplea'";
    $resuemplea= pg_query($conn, $query);


    echo "<img src='imagenes/Empleado.png' width='200' height='200'>";
    echo "<h3 style='font-size: 25px' class='titulo4'>¿Qué desea hacer?</h3>";


    echo "<table class='my-table' align='center'>";
    echo "<tbody>";

    echo "<form action='actualizar.php#empleaup' method='post'>";

    while($row1=pg_fetch_array($resuemplea)){

        $cedula_emple = $row1["0"];
        $puesto_emple = $row1["1"];
        $naci_emple = $row1["2"];
        $fecha_contra_emple = $row1["3"];
        $num_contra__emple = $row1["4"];
        $nombre1_emple = $row1["5"];
        $nombre2_emple = $row1["6"];
        $apell1_emple = $row1["7"];
        $apell2_emple = $row1["8"];
        $mail_emple = $row1["9"];
        $obs_emple = $row1["10"];
        $salario_emple = $row1["11"];
        $educa_emple = $row1["12"];
        $licen_emple = $row1["13"];
        $eps_emple = $row1["14"];
        $ciudad_emple = $row1["15"];
        $finca_emple = $row1["16"];
        $jefe_emple = $row1["17"];

        echo "<tr>";
        echo "<td><p class='titulo6'>Código</p></td>";
        echo "<td><p class='titulo6'>Cédula</p></td>";
        echo "<td><p class='titulo6'>Puesto</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td >";
        echo "<p class='titulo5'>$pkemplea</p>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_ced_modi' value='".$cedula_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_puesto_modi' value='".$puesto_emple."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Fecha de nacimiento</p></td>";
        echo "<td><p class='titulo6'>Fecha de contrato</p></td>";
        echo "<td><p class='titulo6'>Numero de contrato</p></td>";

        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='date' class='my-input' name='emplea_naci_modi' value='".$naci_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='date' class='my-input' name='emplea_contra_modi' value='".$fecha_contra_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_ncontra_modi' value='".$num_contra__emple."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Primer nombre</p></td>";
        echo "<td><p class='titulo6'>Segundo nombre</p></td>";
        echo "<td><p class='titulo6'>Primer apellido</p></td>";

        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_nm_modi' value='".$nombre1_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_nmm_modi' value='".$nombre2_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_ap_modi' value='".$apell1_emple."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Segundo apellido</p></td>";
        echo "<td><p class='titulo6'>E-mail</p></td>";
        echo "<td><p class='titulo6'>Observaciones</p></td>";

        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_app_modi' value='".$apell2_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_mail_modi' value='".$mail_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_obs_modi' value='".$obs_emple."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Salario</p></td>";
        echo "<td><p class='titulo6'>Título educativo</p></td>";
        echo "<td><p class='titulo6'>Licencia de conducción</p></td>";

        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_sala_modi' value='".$salario_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_educa_modi' value='".$educa_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_licen_modi' value='".$licen_emple."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Eps</p></td>";
        echo "<td><p class='titulo6'>Ciudad</p></td>";
        echo "<td><p class='titulo6'>Finca</p></td>";

        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_eps_modi' value='".$eps_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_ciudad_modi' value='".$ciudad_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_finca_modi' value='".$finca_emple."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'></p></td>";
        echo "<td><p class='titulo6'>Jefe</p></td>";
        echo "<td><p class='titulo6'></p></td>";

        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='emplea_jefe_modi' value='".$jefe_emple."'>";
        echo "</td>";

        echo "<td>";
        echo "</td>";

        echo "</tr>";

    }

    if (isset($_POST["pk_emplea"])){
        $pk_emplea = $_POST["pk_emplea"];
        echo "<input type=hidden name=pk_emplea value='".$pk_emplea."'>";
    }
    echo "<td colspan='3'><button type='submit' name='submit' class='boton'>Actualizar</button></td>";

    echo "</form>";
    echo "</tbody>";
    echo "</table>";

    echo "<table class='my-table' align='center'>";
    echo "<tbody>";
    echo "<tr>";    

    echo "<form action='eliminar.php#empleaeli' method='post'>";
    if (isset($_POST["pk_emplea"])){
        $pk_emplea = $_POST["pk_emplea"];
        echo "<input type=hidden name=pk_emplea value='".$pk_emplea."'>";
    }
    echo "<td><button type='submit' name='submit' class='boton'>Eliminar</button></td>";
    echo "</form>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'><button class='boton' onclick='closewindow()'>Salir</button></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>"; 
}
function factudeci($conn, &$pkfactu){

    $query="select fecha, peso_cacao, peso_bovino, precio_kilo_cacao, precio_kilo_animal, precio_total_cacao, precio_total_animal from facturas where codi_factura='$pkfactu'";
    $resufactu= pg_query($conn, $query);


    echo "<img src='imagenes/factura.png' width='200' height='200'>";
    echo "<h3 style='font-size: 25px' class='titulo4'>¿Qué desea hacer?</h3>";


    echo "<table class='my-table' align='center'>";
    echo "<tbody>";

    echo "<form action='actualizar.php#factup' method='post'>";

    while($row1=pg_fetch_array($resufactu)){

        $fecha_fact = $row1["0"];
        $pesoca_fact = $row1["1"];
        $pesoan_fact = $row1["2"];
        $prekca_fact = $row1["3"];
        $prekan_fact = $row1["4"];
        $pretca_fact = $row1["5"];
        $pretan_fact = $row1["6"];

        echo "<tr>";
        echo "<td><p class='titulo6'>Código</p></td>";
        echo "<td><p class='titulo6'>Fecha</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td >";
        echo "<p class='titulo5'>$pkfactu</p>";
        echo "</td>";

        echo "<td>";
        echo "<input type='date' class='my-input' name='factu_date_modi' value='".$fecha_fact."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Peso en cacao</p></td>";
        echo "<td><p class='titulo6'>Peso animal</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='factu_pesocaca_modi' value='".$pesoca_fact."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='factu_pesoani_modi' value='".$pesoan_fact."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Precio kilo cacao</p></td>";
        echo "<td><p class='titulo6'>Precio kilo animal</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='factu_pekica_modi' value='".$prekca_fact."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='factu_pekian_modi' value='".$prekan_fact."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Precio cacao total</p></td>";
        echo "<td><p class='titulo6'>Precio animal total</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='factu_petca_modi' value='".$pretca_fact."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='factu_petan_modi' value='".$pretan_fact."'>";
        echo "</td>";

        echo "</tr>";
    }

    if (isset($_POST["pk_factu"])){
        $pk_factu = $_POST["pk_factu"];
        echo "<input type=hidden name=pk_factu value='".$pk_factu."'>";
    }
    echo "<td colspan='2'><button type='submit' name='submit' class='boton'>Actualizar</button></td>";

    echo "</form>";
    echo "</tbody>";
    echo "</table>";

    echo "<table class='my-table' align='center'>";
    echo "<tbody>";
    echo "<tr>";    

    echo "<form action='eliminar.php#factuneli' method='post'>";
    if (isset($_POST["pk_factu"])){
        $pk_factu = $_POST["pk_factu"];
        echo "<input type=hidden name=pk_factu value='".$pk_factu."'>";
    }
    echo "<td><button type='submit' name='submit' class='boton'>Eliminar</button></td>";
    echo "</form>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'><button class='boton' onclick='closewindow()'>Salir</button></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

}
function provedeci($conn, &$pkprove){

    $query="select cedula, observaciones, nombre1, nombre2, apellido1, apellido2, e_mail from proveedores where codi_identi='$pkprove'";
    $resuprove= pg_query($conn, $query);


    echo "<img src='imagenes/Proveedores.png' width='200' height='200'>";
    echo "<h3 style='font-size: 25px' class='titulo4'>¿Qué desea hacer?</h3>";


    echo "<table class='my-table' align='center'>";
    echo "<tbody>";

    echo "<form action='actualizar.php#proveup' method='post'>";

    while($row1=pg_fetch_array($resuprove)){

        $cedu_pro = $row1["0"];
        $obs_pro = $row1["1"];
        $nom1_pro = $row1["2"];
        $nom2_pro = $row1["3"];
        $apell1_pro = $row1["4"];
        $apell2_pro = $row1["5"];
        $mail_pro = $row1["6"];

        echo "<tr>";
        echo "<td><p class='titulo6'>Código</p></td>";
        echo "<td><p class='titulo6'>Cédula</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td >";
        echo "<p class='titulo5'>$pkprove</p>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_ced_modi' value='".$cedu_pro."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Observasiones</p></td>";
        echo "<td><p class='titulo6'>Primer nombre</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_obs_modi' value='".$obs_pro."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_nm_modi' value='".$nom1_pro."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Segundo nombre</p></td>";
        echo "<td><p class='titulo6'>Primer apellido</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_nmm_modi' value='".$nom2_pro."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_ap_modi' value='".$apell1_pro."'>";
        echo "</td>";

        echo "</tr>";

        echo "<tr>";
        echo "<td><p class='titulo6'>Segundo apellido</p></td>";
        echo "<td><p class='titulo6'>E-mail</p></td>";
        echo "</tr>";

        echo "<tr>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_app_modi' value='".$apell2_pro."'>";
        echo "</td>";

        echo "<td>";
        echo "<input type='text' class='my-input' name='prove_mail_modi' value='".$mail_pro."'>";
        echo "</td>";

        echo "</tr>";
    }

    if (isset($_POST["pk_prove"])){
        $pk_prove = $_POST["pk_prove"];
        echo "<input type=hidden name=pk_prove value='".$pk_prove."'>";
    }
    echo "<td colspan='2'><button type='submit' name='submit' class='boton'>Actualizar</button></td>";

    echo "</form>";
    echo "</tbody>";
    echo "</table>";

    echo "<table class='my-table' align='center'>";
    echo "<tbody>";
    echo "<tr>";    

    echo "<form action='eliminar.php#proveli' method='post'>";
    if (isset($_POST["pk_prove"])){
        $pk_prove = $_POST["pk_prove"];
        echo "<input type=hidden name=pk_prove value='".$pk_prove."'>";
    }
    echo "<td><button type='submit' name='submit' class='boton'>Eliminar</button></td>";
    echo "</form>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'><button class='boton' onclick='closewindow()'>Salir</button></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>"; 
}

//To fill perros table//
function perrof($conexion){

    $nombre_perro = ($_POST["nom_perro"]);
    $fecha_perro = ($_POST["fecha_naci"]);
    $genero = ($_POST["genero_perro"]);
    $estado = ($_POST["estado"]);
    $descripcion = ($_POST["descrip"]);
    $peso = ($_POST["peso"]);
  

    $sql2="insert into perros(nombre, fecha, genero, estado, descripcion, peso) 
        values ('$nombre_perro', '$fecha_perro', '$genero', '$estado', '$descripcion', '$peso')";

    $result2 = pg_query($conexion, $sql2);

}

?>


<aside hidden="hiden" id="registroperros">
    
    <?php
    $conexion = pg_connect("host=localhost user=postgres port=5432 dbname=adoptame password=123456");
    perrof($conexion)
    ?>



</aside>