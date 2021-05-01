
// AGREGAR VEHICULO
function agragarveiculo(Vendedorv,modelo,motor,dis){
  cadena="Vendedorv="+Vendedorv+
         "&modelo="+modelo+
         "&motor="+motor+
         "&dis="+dis;

         $.ajax({
         type:"POST",
         url:"AgregarVehiculo.php",
         data:cadena,
         succes:function(a){
           if(a==1){
         alertify.seccess("Agregado");

         }else{
           alertify.error("No");
         }
         }
         });
}
// FINALIZA VEHICULO
// ELIMINAR VEHICULO
function preguntarv(id){

  alertify.confirm('Eliminar Datos', '¿Estas seguro?', function(){ eliminarv(id) }
                  , function(){ alertify.error('Se cancelo')});
}

function eliminarv(id){
cadena="id="+id;
$.ajax({
type:"POST",
url:"Eliminarvehi.php",
data:cadena,
success:function(r){
if(r==1){
  alertify.success("Eliminado con exito");
} else {
  alertify.error("fallo");
}
}
})
}
// FINALIZA ELIMINAR VEHICULO
// ACTUALIZA VEHICULO
function Agregaform(datosv){

a=datosv.split('||');

$('#idvehi').val(a[0]);
$('#VendedorvA').val(a[1]);
$('#modeloA').val(a[2]);
$('#motorA').val(a[3]);


}

function actualizarVehiculo(){

idvehi=$('#idvehi').val();
VendedorvA=$('#VendedorvA').val();
modeloA=$('#modeloA').val();
motorA=$('#motorA').val();


  caden="idvehi="+idvehi+
        "&VendedorvA="+VendedorvA+
         "&modeloA="+modeloA+
         "&motorA="+motorA;

        $.ajax({
          type:"POST",
          url: "Actualizarvehiculo.php",
          data:caden,
          success:function(d){
            if (d==1) {
              $('#TVehiculos').load('Vehiculos.php');
              alertify.success("Actualizado con exito");
            }else {
              alertify.error("Error");
            }
          }
        });
}
// FINALIZA ACUTALIZA VEHICULO
// AGREGAR VENDEDORES
function agregarvendedor(Municipiov,Coloniav,rfc,nombre,apellidom,apellidop,telefono,direccion){
  cadena="Municipiov="+Municipiov+
         "&Coloniav="+Coloniav+
         "&rfc="+rfc+
         "&nombre="+nombre+
         "&apellidom="+apellidom+
         "&apellidop="+apellidop+
         "&direccion="+direccion+
         "&telefono="+telefono;

         $.ajax({
         type:"POST",
         url:"Agregarvendedor.php",
         data:cadena,
         succes:function(a){
           if(a==1){
         alertify.seccess("Agregado");

         }else{
           alertify.error("No");
         }
         }
         });
}
// FINALIZA VENDEDORES
// ELIMINAR VENDEDORES
function preguntarvendedor(cv){

  alertify.confirm('Eliminar Datos', '¿Estas seguro?', function(){ eliminarve(cv) }
                  , function(){ alertify.error('Se cancelo')});
}

function eliminarve(cv){
cadena="cv="+cv;
$.ajax({
type:"POST",
url:"eliminarVEN.php",
data:cadena,
success:function(r){
if(r==1){
alertify.success("Eliminado con exito");
} else {
  alertify.error("fallo");
}
}
});
}

// FINALIZA ELIMINAR VENDEDORES
//ACTUALIZAR VENDEDORES









//FINALIZA ACTUALIZAAR VENDEDORES

// AGREGAR CLIENTES
function agregarcliente(municipioc,coloniac,noml,cliente,apellido1,apellido2,telefono1,direccion1){
  cadena="municipioc="+municipioc+
         "&coloniac="+coloniac+
         "&noml="+noml+
         "&cliente="+cliente+
         "&apellido2="+apellido2+
         "&apellido1="+apellido1+
         "&direccion1="+direccion1+
         "&telefono1="+telefono1;

         $.ajax({
         type:"POST",
         url:"Agregarclientes.php",
         data:cadena,
         succes:function(a){
           if(a==1){
         alertify.success("registrado con exito");

         }else{
        alertify.error("Error....");
         }
         }
         });
}
// FINALIZA CLIENTES
// ELIMINAR CLIENTE
function preguntarclinte(cve){

  alertify.confirm('Eliminar Datos', '¿Estas seguro?', function(){ eliminarC(cve) }
                  , function(){ alertify.error('Se cancelo')});
}

function eliminarC(cve){
cadena="cve="+cve;
$.ajax({
type:"POST",
url:"eliminarclie.php",
data:cadena,
success:function(r){
if(r==1){
alertify.success("Eliminado con exito");
} else {
  alertify.error("fallo");
}
}
});
}
// // FINALIZA ELIMINAR CLIENTE
//ACTUALIZAR CLIENTES
//FINALIZA ACTUALIZAR CLIENTES


// AGREGA PRODUCTOS

function agregarproducto(sucursalc,marcac,img,producto,precio,cantidad){
  cadena="sucursalc="+sucursalc+
         "&marcac="+marcac+
         "&img="+img+
         "&producto="+producto+
         "&precio="+precio+
         "&cantidad="+cantidad;

         $.ajax({
         type:"POST",
         url:"Agregarproducto.php",
         data:cadena,
         contentType:false,
         processData:false,
         succes:function(a){
           if(a==1){
         alert("Agregado");

         }else{
           alert("No");
         }
         }
         });
}


// FINALIZA PRODUCTOS

// AGREGAR SUCURSALES
function agregarsucursal(sucursales,direccions){
  cadena="sucursales="+sucursales+
         "&direccions="+direccions;

         $.ajax({
         type:"POST",
         url:"AgregarSucursal.php",
         data:cadena,

         succes:function(a){
           if(a==1){
         alertify.seccess("Agregado");

         }else{
           alertify.error("No");
         }
         }
         });
}
// FINALIZA SUCURSALES
// ELIMINAR SUCURSALES

function preguntarSUCURSAL(cve){

  alertify.confirm('Eliminar Datos', '¿Estas seguro?', function(){ eliminarS(cve) }
                  , function(){ alertify.error('Se cancelo')});
}
function eliminarS(cve){
cadena="cve="+cve;
$.ajax({
type:"POST",
url:"Eliminarsucur.php",
data:cadena,
success:function(r){
if(r==1){
alertify.success("Eliminado con exito");
} else {
  alertify.error("fallo");
}
}
});
}
// FINALIZA ELIMINAR SUCURALES
// ACTUALIZAR Sucursales
//FINALIZA ACTUALIZAR SUCURSALES
