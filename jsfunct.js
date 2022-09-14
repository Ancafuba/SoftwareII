function valibovi(){

    var cod_bovi = document.getElementById('cod_bovi').value;
    var fecha_nacibovi = document.getElementById('fecha_nacibovi').value;
    var genero_bovi = document.getElementById('genero_bovi').value;
    var estado_bovi = document.getElementById('estado_bovi').value;
    var descrip_bovi = document.getElementById('descrip_bovi').value;
    var peso_bovi = document.getElementById('peso_bovi').value;
    var rota_bovi = document.getElementById('fk_rota').value;
    var fecha_rota_bovi = document.getElementById('fecha_rota_bovi').value;
    var madre_bovi = document.getElementById('fk_madre').value;

    var vericodi = /^(\d{2})_(\d{2})$/;
    var verifecha = /^(\d{4})(\-0[1-9]|-1[0-2])(\-0[1-9]|-1[1-9]|-2[0-9]|-3[0-1])$/;
    var veripeso = /^(?=.{2,4}$)(\d+)$/;


    if(cod_bovi == ""){
        alert("No ha escrito un código");
        return false;
    }else if(!vericodi.test(cod_bovi)){
        alert("El código debe obedecer la siguiente forma: Número otorgado por la finca_Número de finca");    
        return false; 

    }else if(fecha_nacibovi == ""){
        alert("Falta especificar la fecha de nacimiento del animal");
        return false;
    }else if(!verifecha.test(fecha_nacibovi)){
        alert("La fecha de nacimiento debe obedecer el formato aa-mm-dd") ;   
        return false;  

    }else if(genero_bovi == ""){
        alert("Falta especificar el género");
        return false;

    }else if(estado_bovi == ""){
        alert("Falta especificar el estado del animal");
        return false;

    }else if(descrip_bovi == ""){
        alert("Falta describir el estado del animal");
        return false;

    }else if(peso_bovi == ""){
        alert("Falta el peso del animal");
        return false;
    }else if(!veripeso.test(peso_bovi)){
        alert("El peso no es válido. Ha de obedecer el rango 01-9999");
        return false;

    }else if(rota_bovi == ""){
        alert("Falta especificar la rotación actual del animal");
        return false;

    }else if(fecha_rota_bovi == ""){
        alert("Falta especificar la fecha de entreda a la rotación");
        return false;
    }else if(!verifecha.test(fecha_rota_bovi)){
        alert("La fecha de entrada a la rotación ha de obedecer el formato aa-mm-dd");
        return false;

    }else if(madre_bovi == ""){
        alert("Falta especificar el código de la madre del animal");
        return false;  
    }
}
function valiclien(){

    var codi_clien = document.getElementById('codi_clien').value;
    var cedu_clien = document.getElementById('cedu_clien').value;
    var pri_nomb_clien = document.getElementById('pri_nomb_clien').value;
    var pri_apell_clien = document.getElementById('pri_apell_clien').value;
    var mail_clien = document.getElementById('mail_clien').value;
    var contra_clien = document.getElementById('contra_clien').value;

    var verinum = /^(\d+)$/;
    var veriword = /^(\D+)$/;
    var vericorreo = /^(\w+)@(\w+)\.([a-z]{2,4})$/;

    if(codi_clien==""){
        alert("No ha escrito un código");
        return false;
    }else if(!verinum.test(codi_clien)){
        alert("El código solo puede ser numérico");
        return false;

    }else if(cedu_clien==""){
        alert("No ha escrito una cédula");
        return false;
    }else if(!verinum.test(cedu_clien)){
        alert("La cédula solo puede ser numérica");
        return false;

    }else if(pri_nomb_clien==""){
        alert("No ha escrito un primer nombre");
        return false;
    }else if(!veriword.test(pri_nomb_clien)){
        alert("El primer nombre solo puede contener letras");
        return false;

    }else if(pri_apell_clien==""){
        alert("No ha escrito un primer apellido");
        return false;
    }else if(!veriword.test(pri_apell_clien)){
        alert("El primer apellido solo puede contener letras");
        return false;

    }else if(mail_clien==""){
        alert("No ha escrito una dirección de correo electrónico");
        return false;
    }else if(!vericorreo.test(mail_clien)){
        alert("No ha escrito una dirección de correo válida");
        return false;

    }else if(contra_clien==""){
        alert("No ha definido una contraseña");
        return false;
    }
}
function valiemple(){

    var codi_empl = document.getElementById('codi_empl').value;
    var cedu_empl = document.getElementById('cedu_empl').value;
    var pues_empl = document.getElementById('pues_empl').value;
    var fecha_naci_empl = document.getElementById('fecha_naci_empl').value;
    var fecha_contra_empl = document.getElementById('fecha_contra_empl').value;
    var num_contra_empl = document.getElementById('num_contra_empl').value;
    var pnom_empl = document.getElementById('pnom_empl').value;
    var papel_empl = document.getElementById('papel_empl').value;
    var mail_empl = document.getElementById('mail_empl').value;
    var salar_empl = document.getElementById('salar_empl').value;
    var tieduca_empl = document.getElementById('tieduca_empl').value;
    var licen_condu_empl = document.getElementById('licen_condu_empl').value;
    var fk_emple_eps = document.getElementById('fk_emple_eps').value;
    var fk_emple_ciudad = document.getElementById('fk_emple_ciudad').value;
    var fk_emple_finca = document.getElementById('fk_emple_finca').value;
    var fk_emple_jefe = document.getElementById('fk_emple_jefe').value;

    var verinum = /^(\d+)$/;
    var veriword = /^(\D+)$/;
    var vericorreo = /^(\w+)@(\w+)\.([a-z]{2,4})$/;
    var verifecha = /^(\d{4})(\-0[1-9]|-1[0-2])(\-0[1-9]|-1[1-9]|-2[0-9]|-3[0-1])$/;

    if(codi_empl==""){
        alert("No ha escrito un código");
        return false;
    }else if(!verinum.test(codi_empl)){
        alert("El código solo puede ser numérico");
        return false;

    }else if(cedu_empl==""){
        alert("No ha escrito una cédula");
        return false;
    }else if(!verinum.test(cedu_empl)){
        alert("La cédula solo puede ser numérica");
        return false;

    }else if(pues_empl==""){
        alert("No ha agregado un puesto para el empleado");
        return false;

    }else if(fecha_naci_empl==""){
        alert("No ha escrito una fecha de nacimiento");
        return false;
    }else if(!verifecha.test(fecha_naci_empl)){
        alert("La fecha de nacimiento debe obedecer el formato aa-mm-dd");
        return false;

    }else if(fecha_contra_empl==""){
        alert("No ha escrito una fecha de contrato");
        return false;
    }else if(!verifecha.test(fecha_contra_empl)){
        alert("La fecha de contrato debe obedecer el formato aa-mm-dd");
        return false;

    }else if(num_contra_empl==""){
        alert("No ha escrito un número de contrato");
        return false;

    }else if(pnom_empl==""){
        alert("No ha escrito un primer nombre");
        return false;
    }else if(!veriword.test(pnom_empl)){
        alert("El primer nombre solo puede contener letras");
        return false;

    }else if(papel_empl==""){
        alert("No ha escrito un primer apellido");
        return false;
    }else if(!veriword.test(papel_empl)){
        alert("El primer apellido solo puede contener letras");
        return false;

    }else if(mail_empl==""){
        alert("No ha escrito una dirección de correo electrónico");
        return false;
    }else if(!vericorreo.test(mail_empl)){
        alert("La dirección de correo no es válida");
        return false;

    }else if(salar_empl==""){
        alert("No ha definido el salario del empleado");
        return false;
    }else if(!verinum.test(salar_empl)){
        alert("El salario solo puede ser numérico");
        return false;

    }else if(tieduca_empl==""){
        alert("No ha definido el título educativo del empleado");
        return false;

    }else if(licen_condu_empl==""){
        alert("No ha definido la licencia de conducción del empleado");
        return false;

    }else if(fk_emple_eps==""){
        alert("No ha definido la eps del empleado");
        return false;

    }else if(fk_emple_ciudad==""){
        alert("No ha definido la ciudad en la que vive el empleado");
        return false;

    }else if(fk_emple_finca==""){
        alert("No ha definido la finca en que trabaja el empleado");
        return false; 
    }
}
function valifactu(){

    var codi_fact = document.getElementById('codi_fact').value;
    var fecha_fact = document.getElementById('fecha_fact').value;
    var cacao_fact = document.getElementById('cacao_fact').value;
    var bovino = document.getElementById('bovino').value;
    var pcacao_fact = document.getElementById('pcacao_fact').value;
    var pbovino = document.getElementById('pbovino').value;
    var ptcacao_fact = document.getElementById('ptcacao_fact').value;
    var ptbovino = document.getElementById('ptbovino').value;

    var verinum = /^(\d+)$/;
    var verifecha = /^(\d{4})(\-0[1-9]|-1[0-2])(\-0[1-9]|-1[1-9]|-2[0-9]|-3[0-1])$/;

    if(codi_fact==""){
        alert("No ha establecido el código de la factura");
        return false;
    }else if(!verinum.test(codi_fact)){
        alert("El código solo puede ser numérico");
        return false;

    }else if(fecha_fact==""){
        alert("No ha establecido la fecha de la factura");
        return false;
    }else if(!verifecha.test(fecha_fact)){
        alert("La fecha debe obedecer el formato aa-mm-dd");
        return false;

    }else if(cacao_fact==""){
        alert("No ha escrito una cantidad en el peso en cacao (Si no se factura cacao, dejar su peso como 0)");
        return false;
    }else if(!verinum.test(cacao_fact)){
        alert("El peso del cacao debe ser numérico");
        return false;

    }else if(bovino==""){
        alert("No ha escrito una cantidad en el peso bovino (Si no se facturan bovinos, dejar su peso como 0)");
        return false;
    }else if(!verinum.test(bovino)){
        alert("El peso bovino debe ser numérico");
        return false;

    }else if(pcacao_fact==""){
        alert("No ha escrito el precio por kilo en cacao (Si no se factura cacao, dejar su precio como 0)");
        return false;
    }else if(!verinum.test(pcacao_fact)){
        alert("El precio por kilo de cacao ha de ser numérico");
        return false;

    }else if(pbovino==""){
        alert("No ha escrito el precio por kilo bovino (Si no se facturan bovinos, dejar su precio como 0)");
        return false;
    }else if(!verinum.test(pbovino)){
        alert("El precio por kilo bovino ha de ser numérico");
        return false;

    }else if(ptcacao_fact==""){
        alert("No ha escrito el precio total en cacao (Si no se factura cacao, dejar su precio como 0)");
        return false;
    }else if(!verinum.test(ptcacao_fact)){
        alert("El precio total en cacao ha de ser numérico");
        return false;

    }else if(ptbovino==""){
        alert("No ha escrito el precio total en bovinos (Si no se facturan bovinos, dejar su precio como 0)");
        return false;
    }else if(!verinum.test(ptbovino)){
        alert("El precio total en bovinos ha de ser numérico");
        return false;
    }

}
function valiprove(){

    var codi_prov = document.getElementById('codi_prov').value;
    var cedu_prov = document.getElementById('cedu_prov').value;
    var pnom_prov = document.getElementById('pnom_prov').value;
    var papel_prov = document.getElementById('papel_prov').value;
    var mail_prov = document.getElementById('mail_prov').value;

    var verinum = /^(\d+)$/;
    var veriword = /^(\D+)$/;
    var vericorreo = /^(\w+)@(\w+)\.([a-z]{2,4})$/;

    if(codi_prov==""){
        alert("No ha establecido un código de proveedor");
        return false;
    }else if (!verinum.test(codi_prov)){
        alert("El código de proveedor ha de ser numérico");
        return false;

    }else if(cedu_prov==""){
        alert("No ha escrito la cédula del proveedor");
        return false;
    }else if(!verinum.test(cedu_prov)){
        alert("La cédula ha de ser numérica");
        return false;

    }else if(pnom_prov==""){
        alert("No ha escrito el primer nombre del proveedor");
        return false;
    }else if(!veriword.test(pnom_prov)){
        alert("El nombre del proveedor solo puede contener letras");
        return false;

    }else if(papel_prov==""){
        alert("No ha escrito el primer apellido del proveedor");
        return false;
    }else if(!veriword.test(papel_prov)){
        alert("El apellido del proveedor solo puede contener letras");
        return false;

    }else if(mail_prov==""){
        alert("No ha escrito la dirección de correo electrónico del proveedor");
        return false;
    }else if(!vericorreo.test(mail_prov)){
        alert("La dirección de correo no es válida");
        return false;
    }
}

function valipkbovi(){
    var pk_bovi = document.getElementById('pk_bovi').value;
    if (pk_bovi==""){
        alert("No ha elegido un código bovino");
        return false;
    }

}
function valipkclien(){
    var pk_clien = document.getElementById('pk_clien').value;
    if (pk_clien==""){
        alert("No ha elegido un código de cliente");
        return false;
    }
}
function valipkemplea(){
    var pk_emplea = document.getElementById('pk_emplea').value;
    if (pk_emplea==""){
        alert("No ha elegido un código de empleado");
        return false;
    }
}
function valipkfactu(){
    var pk_factu = document.getElementById('pk_factu').value;
    if (pk_factu==""){
        alert("No ha elegido un código de factura");
        return false;
    }

}
function valipkprove(){
    var pk_prove = document.getElementById('pk_prove').value;
    if (pk_prove==""){
        alert("No ha elegido un código de factura");
        return false;
    }

}


function checkInput(cbox) {
   
        if (cbox.checked) {
            document.getElementById('nono').style.visibility='visible';
        }
        else{
            document.getElementById('nono').style.visibility='hidden';
        } 
   
}


function elimodibovi(){
    window.open("eliminar_modificar.php#bovi","window","fullscreen, menubar=no")
}
function elimodiclien(){
    window.open("eliminar_modificar.php#clien","window","fullscreen, menubar=no")
}
function elimodiemplea(){
    window.open("eliminar_modificar.php#emplea","window","fullscreen, menubar=no")
}
function elimodifactu(){
    window.open("eliminar_modificar.php#factu","window","fullscreen, menubar=no")
}
function elimodiprove(){
    window.open("eliminar_modificar.php#prove","window","fullscreen, menubar=no")
}
function closewindow(){
    alert("Adiós");
    window.close();
}



