//var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
//var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);


/*
 var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    
    if (w<700){
        alert ('el tamano es menor a 700');
    }
      
*/



var casa = true;
function mostrarImagen(e){
    
        
        
        document.getElementById('overmouseImgContenedor').style.display='block';
        if(e===1){
            document.getElementById("overmouseImgImagen").style.backgroundImage= "url(img/backgreen.jpg)";
        }
        else if(e===2){
            document.getElementById("overmouseImgImagen").style.backgroundImage= "url(img/backblue.jpg)";
        }
        else if(e===3){
            document.getElementById("overmouseImgImagen").style.backgroundImage= "url(img/backyellow.jpg)";
        }
        else if(e===4){
            document.getElementById("overmouseImgImagen").style.backgroundImage= "url(img/backred.jpg)";
        }  

       

       
}


function cerrar(){
    document.getElementById('overmouseImgContenedor').style.display='none';
}













//PRECIO
var precio = 100;
document.getElementById("precioCustomize").value = precio;
var precioPorcentajes = parseInt(document.getElementById("precioCustomize").value);
document.getElementById("precio").innerHTML = precioPorcentajes;
document.getElementById("precio2").innerHTML = precioPorcentajes;
document.getElementById("precio3").innerHTML = precioPorcentajes;


//SUMA PORCENTAJE QUE VALIDA QUE NO SUPERE EL 100%
var sumaPorcentaje = 100;

//FUNCIONES DE PROCENTAJES
var varlorCleaning = 25;
document.getElementById("valorCleaning").innerHTML = varlorCleaning;
document.getElementById("sendCleaning").value = varlorCleaning;

var varlorCooking = 25;
document.getElementById("valorCooking").innerHTML = varlorCooking;
document.getElementById("sendCooking").value = varlorCooking;


var varlorResting = 25;
document.getElementById("valorResting").innerHTML = varlorResting;
document.getElementById("sendResting").value = varlorResting;

var valorProductivity = 25;
document.getElementById("valorProductivity").innerHTML = valorProductivity;
document.getElementById("sendProductivity").value = valorProductivity;



//Incrementar barra de procentaje en
var five = 5;


function sumarCleaning(){
    if((varlorCleaning< 100)&&(sumaPorcentaje < 100)){
        varlorCleaning = varlorCleaning + five;
        
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) + five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Sumar Porcentaje
        sumaPorcentaje = sumaPorcentaje + five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
        
    }
    document.getElementById("barraCleaning").style.width = varlorCleaning+'%';
    document.getElementById("valorCleaning").innerHTML = varlorCleaning;
    document.getElementById("sendCleaning").value = varlorCleaning;
    
    
}

function restarCleaning(){
    if( varlorCleaning> 0){
        varlorCleaning = varlorCleaning - five;
        
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) - five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Restar Porcentaje
        sumaPorcentaje = sumaPorcentaje - five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraCleaning").style.width = varlorCleaning+'%';
    document.getElementById("valorCleaning").innerHTML = varlorCleaning;
    document.getElementById("sendCleaning").value = varlorCleaning;
}





function sumarCooking(){
    if(( varlorCooking< 100)&&(sumaPorcentaje < 100)){
        varlorCooking = varlorCooking + five;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) + five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Sumar Porcentaje
        sumaPorcentaje = sumaPorcentaje + five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraCooking").style.width = varlorCooking+'%';
    document.getElementById("valorCooking").innerHTML = varlorCooking;
    document.getElementById("sendCooking").value = varlorCooking;
}

function restarCooking(){
    if( varlorCooking> 0){
        varlorCooking = varlorCooking - five;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) - five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Restar Porcentaje
        sumaPorcentaje = sumaPorcentaje - five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraCooking").style.width = varlorCooking+'%';
    document.getElementById("valorCooking").innerHTML = varlorCooking;
    document.getElementById("sendCooking").value = varlorCooking;
}




function sumarResting(){
    if(( varlorResting< 100)&&(sumaPorcentaje < 100)){
        varlorResting = varlorResting + five;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) + five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Sumar Porcentaje
        sumaPorcentaje = sumaPorcentaje + five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraResting").style.width = varlorResting+'%';
    document.getElementById("valorResting").innerHTML = varlorResting;
    document.getElementById("sendResting").value = varlorResting;
}

function restarResting(){
    if( varlorResting> 0){
        varlorResting = varlorResting - five;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) - five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Restar Porcentaje
        sumaPorcentaje = sumaPorcentaje - five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraResting").style.width = varlorResting+'%';
    document.getElementById("valorResting").innerHTML = varlorResting;
    document.getElementById("sendResting").value = varlorResting;
}




function sumarProductivity(){
    if((valorProductivity< 100)&&(sumaPorcentaje < 100)){
        valorProductivity = valorProductivity + five;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) + five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Sumar Porcentaje
        sumaPorcentaje = sumaPorcentaje + five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraProductivity").style.width = valorProductivity+'%';
    document.getElementById("valorProductivity").innerHTML = valorProductivity;
    document.getElementById("sendProductivity").value = valorProductivity;
}

function restarProductivity(){
    if( valorProductivity> 0){
        valorProductivity = valorProductivity - five;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value) - five; 
        document.getElementById("precioCustomize").value = precioCustomize;
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin = parseInt(document.getElementById("precioskin").value);
        var precioBano = parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
 
        
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

        //Restar Porcentaje
        sumaPorcentaje = sumaPorcentaje - five;
        document.getElementById("sumaPorcentaje").innerHTML = precioPorcentajes;
        //alert (sumaPorcentaje);
    }
    document.getElementById("barraProductivity").style.width = valorProductivity+'%';
    document.getElementById("valorProductivity").innerHTML = valorProductivity;
    document.getElementById("sendProductivity").value = valorProductivity;
}


/*
var valorTotal = varlorCleaning + varlorCooking;
document.getElementById("valorTotal").innerHTML = valorTotal;
*/








































//BOTONES PRINCIPALES LOCATION CUSTOMIZE ARCHITECTURAL
function location_btn(){
    document.getElementById("location").style.backgroundColor= "#a3c039";
    document.getElementById("location").style.color= "black";
    document.getElementById("customize").style.backgroundColor= "#cccccc";
    document.getElementById("customize").style.color= "gray";
    document.getElementById("architectural").style.backgroundColor= "#cccccc";
    document.getElementById("architectural").style.color= "gray";
   

    document.getElementById("caja-location").style.display= "block";
    document.getElementById("idhomesectionstwo").style.display= "none";
    document.getElementById("caja-architectural").style.display= "none";
}



function customize_btn(){
    document.getElementById("location").style.backgroundColor= "#cccccc";
    document.getElementById("location").style.color= "gray";
    document.getElementById("customize").style.backgroundColor= "#a3c039";
    document.getElementById("customize").style.color= "black";
    document.getElementById("architectural").style.backgroundColor= "#cccccc";
    document.getElementById("architectural").style.color= "gray";

    document.getElementById("caja-location").style.display= "none";
    document.getElementById("idhomesectionstwo").style.display= "block";
    document.getElementById("caja-architectural").style.display= "none";
}



function architectural_btn(){
    document.getElementById("location").style.backgroundColor= "#cccccc";
    document.getElementById("location").style.color= "gray";
    document.getElementById("customize").style.backgroundColor= "#cccccc";
    document.getElementById("customize").style.color= "gray";
    document.getElementById("architectural").style.backgroundColor= "#a3c039";
    document.getElementById("architectural").style.color= "black";

    document.getElementById("caja-location").style.display= "none";
    document.getElementById("idhomesectionstwo").style.display= "none";
    document.getElementById("caja-architectural").style.display= "block";
}














































//FUNCIONES DE LA PRIMERA SECCION DE IMAGENES DE FONDO
function cleaning(){
    //document.getElementById("idhomesections").style.backgroundColor= "blue";

    document.getElementById("cleaning-img").style.backgroundImage= "url(img/051_clean_icon_active.png)";
    document.getElementById("cooking-img").style.backgroundImage= "url(img/051_cook_icon_inactive.png)";
    document.getElementById("resting-img").style.backgroundImage= "url(img/051_rest_icon_inactive.png)";
    document.getElementById("productivity-img").style.backgroundImage= "url(img/051_productivity_icon_inactive.png)";

    document.getElementById("valorCleaningbox").style.display= "block";
    document.getElementById("valorCookingbox").style.display= "none";
    document.getElementById("valorRestingbox").style.display= "none";
    document.getElementById("valorProductivitybox").style.display= "none";

    document.getElementById("textoCleaning").style.display= "block";
    document.getElementById("textoCooking").style.display= "none";
    document.getElementById("textoResting").style.display= "none";
    document.getElementById("textoProductivity").style.display= "none";

    document.getElementById("barraCleaning").style.backgroundColor= "#00bad2";
    document.getElementById("barraCooking").style.backgroundColor= "#cccccc";
    document.getElementById("barraResting").style.backgroundColor= "#cccccc";
    document.getElementById("barraProductivity").style.backgroundColor= "#cccccc";

    document.getElementById("separador").style.backgroundColor= "#00bad2";

    document.getElementById("imgIdHomeSection").style.backgroundImage= "url(img/backblue.jpg)";
    document.getElementById("caja-botones-imagenes").style.backgroundImage= "url(img/backblue.jpg)";
    
}


function cooking(){
    //document.getElementById("idhomesections").style.backgroundColor= "green";

    document.getElementById("cleaning-img").style.backgroundImage= "url(img/051_clean_icon_inactive.png)";
    document.getElementById("cooking-img").style.backgroundImage= "url(img/051_cook_icon_active.png)";
    document.getElementById("resting-img").style.backgroundImage= "url(img/051_rest_icon_inactive.png)";
    document.getElementById("productivity-img").style.backgroundImage= "url(img/051_productivity_icon_inactive.png)";

    document.getElementById("valorCleaningbox").style.display= "none";
    document.getElementById("valorCookingbox").style.display= "block";
    document.getElementById("valorRestingbox").style.display= "none";
    document.getElementById("valorProductivitybox").style.display= "none";

    document.getElementById("textoCleaning").style.display= "none";
    document.getElementById("textoCooking").style.display= "block";
    document.getElementById("textoResting").style.display= "none";
    document.getElementById("textoProductivity").style.display= "none";

    document.getElementById("barraCleaning").style.backgroundColor= "#cccccc";
    document.getElementById("barraCooking").style.backgroundColor= "#d3aa37";
    document.getElementById("barraResting").style.backgroundColor= "#cccccc";
    document.getElementById("barraProductivity").style.backgroundColor= "#cccccc";

    document.getElementById("separador").style.backgroundColor= "#d3aa37";

    document.getElementById("imgIdHomeSection").style.backgroundImage= "url(img/backyellow.jpg)";
    document.getElementById("caja-botones-imagenes").style.backgroundImage= "url(img/backyellow.jpg)";

}

function resting(){
    //document.getElementById("idhomesections").style.backgroundColor= "purple";

    document.getElementById("cleaning-img").style.backgroundImage= "url(img/051_clean_icon_inactive.png)";
    document.getElementById("cooking-img").style.backgroundImage= "url(img/051_cook_icon_inactive.png)";
    document.getElementById("resting-img").style.backgroundImage= "url(img/051_rest_icon_active.png)";
    document.getElementById("productivity-img").style.backgroundImage= "url(img/051_productivity_icon_inactive.png)";

    document.getElementById("valorCleaningbox").style.display= "none";
    document.getElementById("valorCookingbox").style.display= "none";
    document.getElementById("valorRestingbox").style.display= "block";
    document.getElementById("valorProductivitybox").style.display= "none";

    document.getElementById("textoCleaning").style.display= "none";
    document.getElementById("textoCooking").style.display= "none";
    document.getElementById("textoResting").style.display= "block";
    document.getElementById("textoProductivity").style.display= "none";

    document.getElementById("barraCleaning").style.backgroundColor= "#cccccc";
    document.getElementById("barraCooking").style.backgroundColor= "#cccccc";
    document.getElementById("barraResting").style.backgroundColor= "#48c35d";
    document.getElementById("barraProductivity").style.backgroundColor= "#cccccc";

    document.getElementById("separador").style.backgroundColor= "#48c35d";

    document.getElementById("imgIdHomeSection").style.backgroundImage= "url(img/backgreen.jpg)";
    document.getElementById("caja-botones-imagenes").style.backgroundImage= "url(img/backgreen.jpg)";
    
    
}

function productivity(){
    //document.getElementById("idhomesections").style.backgroundColor= "brown";

    document.getElementById("cleaning-img").style.backgroundImage= "url(img/051_clean_icon_inactive.png)";
    document.getElementById("cooking-img").style.backgroundImage= "url(img/051_cook_icon_inactive.png)";
    document.getElementById("resting-img").style.backgroundImage= "url(img/051_rest_icon_inactive.png)";
    document.getElementById("productivity-img").style.backgroundImage= "url(img/051_productivity_icon_active.png)";

    document.getElementById("valorCleaningbox").style.display= "none";
    document.getElementById("valorCookingbox").style.display= "none";
    document.getElementById("valorRestingbox").style.display= "none";
    document.getElementById("valorProductivitybox").style.display= "block";

    document.getElementById("textoCleaning").style.display= "none";
    document.getElementById("textoCooking").style.display= "none";
    document.getElementById("textoResting").style.display= "none";
    document.getElementById("textoProductivity").style.display= "block";

    document.getElementById("barraCleaning").style.backgroundColor= "#cccccc";
    document.getElementById("barraCooking").style.backgroundColor= "#cccccc";
    document.getElementById("barraResting").style.backgroundColor= "#cccccc";
    document.getElementById("barraProductivity").style.backgroundColor= "#bf4b4b";

    document.getElementById("separador").style.backgroundColor= "#bf4b4b";

    document.getElementById("imgIdHomeSection").style.backgroundImage= "url(img/backred.jpg)";
    document.getElementById("caja-botones-imagenes").style.backgroundImage= "url(img/backred.jpg)";
}


































function backyard(){
    document.getElementById("idhomesectionstwoImg").style.backgroundImage= "url(img/ski.png)";
    document.getElementById("backyard").style.backgroundColor= "#a3c039";
    document.getElementById("backyard").style.color= "black";
    document.getElementById("poolhouse").style.backgroundColor= "#cccccc";
    document.getElementById("poolhouse").style.color= "gray";    
    document.getElementById("farmhouse").style.backgroundColor= "#cccccc";
    document.getElementById("farmhouse").style.color= "gray"; 

    document.getElementById("exterioreSend").value= "Backyard";

    document.getElementById("textoBackyard").style.display= "block";
    document.getElementById("textoPool").style.display= "none";
    document.getElementById("textoFarm").style.display= "none";

    //PRECIO
    var precioBackyard = 20;
    document.getElementById("preciolocation").value = precioBackyard;

    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);

    var precioSkin = parseInt(document.getElementById("precioskin").value);
    var precioBano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioLocation;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;   
    document.getElementById("preciosend").value = precioTotal;
    
}


function poolhouse(){
    document.getElementById("idhomesectionstwoImg").style.backgroundImage= "url(img/0712_pool.jpg)";
    document.getElementById("backyard").style.backgroundColor= "#cccccc";
    document.getElementById("backyard").style.color= "gray";
    document.getElementById("poolhouse").style.backgroundColor= "#a3c039";
    document.getElementById("poolhouse").style.color= "black";   
    document.getElementById("farmhouse").style.backgroundColor= "#cccccc";
    document.getElementById("farmhouse").style.color= "gray";
    
    document.getElementById("exterioreSend").value= "Poolhouse";

    document.getElementById("textoBackyard").style.display= "none";
    document.getElementById("textoPool").style.display= "block";
    document.getElementById("textoFarm").style.display= "none";

    //PRECIO
    var precioPoolhouse = 30;
    document.getElementById("preciolocation").value = precioPoolhouse;

    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    
    var precioSkin = parseInt(document.getElementById("precioskin").value);
    var precioBano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool +precioConectvity + precioTree + precioLocation;
    document.getElementById("preciolocation").value = precioPoolhouse;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;
    document.getElementById("preciosend").value = precioTotal;
}



function farmhouse(){
    document.getElementById("idhomesectionstwoImg").style.backgroundImage= "url(img/skn.png)";
    document.getElementById("backyard").style.backgroundColor= "#cccccc";
    document.getElementById("backyard").style.color= "gray";
    document.getElementById("poolhouse").style.backgroundColor= "#cccccc";  
    document.getElementById("poolhouse").style.color= "gray";    
    document.getElementById("farmhouse").style.backgroundColor= "#a3c039";
    document.getElementById("farmhouse").style.color= "black";
    
    

    document.getElementById("exterioreSend").value= "Farmhouse";

    document.getElementById("textoBackyard").style.display= "none";
    document.getElementById("textoPool").style.display= "none";
    document.getElementById("textoFarm").style.display= "block";

    //PRECIO
    var precioFarmhouse = 40;
    document.getElementById("preciolocation").value = precioFarmhouse;

    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    
    var precioSkin = parseInt(document.getElementById("precioskin").value);
    var precioBano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioSkin + precioBano + precioJacuzzi + precioPool +precioConectvity + precioTree + precioLocation;
    document.getElementById("preciolocation").value = precioFarmhouse;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal; 
    document.getElementById("preciosend").value = precioTotal;
}




































//FUNCIONES DE LA TERCERA SECCION STYLE
function skin(){
    document.getElementById("skin").style.backgroundColor= "#a3c039";
    document.getElementById("skin").style.color= "black";  
    document.getElementById("relax").style.backgroundColor= "#cccccc";
    document.getElementById("relax").style.color= "gray";
    document.getElementById("conectivity").style.backgroundColor= "#cccccc";
    document.getElementById("conectivity").style.color= "gray";
    document.getElementById("pluggins").style.backgroundColor= "#cccccc";
    document.getElementById("pluggins").style.color= "gray";

    document.getElementById("texto-skin").style.display= "block";
    document.getElementById("texto-relax").style.display= "none";
    document.getElementById("texto-conectivity").style.display= "none";
    document.getElementById("texto-pluggins").style.display= "none";

}


function relax(){
    document.getElementById("skin").style.backgroundColor= "#cccccc";
    document.getElementById("skin").style.color= "gray";
    document.getElementById("relax").style.backgroundColor= "#a3c039";
    document.getElementById("relax").style.color= "black";
    document.getElementById("conectivity").style.backgroundColor= "#cccccc";
    document.getElementById("conectivity").style.color= "gray";
    document.getElementById("pluggins").style.backgroundColor= "#cccccc";
    document.getElementById("pluggins").style.color= "gray";

    document.getElementById("texto-skin").style.display= "none";
    document.getElementById("texto-relax").style.display= "block";
    document.getElementById("texto-conectivity").style.display= "none";
    document.getElementById("texto-pluggins").style.display= "none";
    
}


function conectivity(){
    document.getElementById("skin").style.backgroundColor= "#cccccc";
    document.getElementById("skin").style.color= "gray";
    document.getElementById("relax").style.backgroundColor= "#cccccc";
    document.getElementById("relax").style.color= "gray";
    document.getElementById("conectivity").style.backgroundColor= "#a3c039";
    document.getElementById("conectivity").style.color= "black";
    document.getElementById("pluggins").style.backgroundColor= "#cccccc";
    document.getElementById("pluggins").style.color= "gray";

    document.getElementById("texto-skin").style.display= "none";
    document.getElementById("texto-relax").style.display= "none";
    document.getElementById("texto-conectivity").style.display= "block";
    document.getElementById("texto-pluggins").style.display= "none";
    
}




function pluggins(){
    document.getElementById("skin").style.backgroundColor= "#cccccc";
    document.getElementById("skin").style.color= "gray";
    document.getElementById("relax").style.backgroundColor= "#cccccc";
    document.getElementById("relax").style.color= "gray";
    document.getElementById("conectivity").style.backgroundColor= "#cccccc";
    document.getElementById("conectivity").style.color= "gray";
    document.getElementById("pluggins").style.backgroundColor= "#a3c039";
    document.getElementById("pluggins").style.color= "black";

    document.getElementById("texto-skin").style.display= "none";
    document.getElementById("texto-relax").style.display= "none";
    document.getElementById("texto-conectivity").style.display= "none";
    document.getElementById("texto-pluggins").style.display= "block";
    
}

























//FUNCIONES OPTIONS 
function aligator(){
    document.getElementById("aligator").style.backgroundColor= "#a3c039";
    document.getElementById("steel").style.backgroundColor= "#cccccc";
    document.getElementById("wood").style.backgroundColor= "#cccccc";
    document.getElementById("cement").style.backgroundColor= "#cccccc";

    document.getElementById("skinSend").value= "Aligator";

    document.getElementById("aligatorSkin").style.display= "block";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    //PRECIO
    var precioAligator = 1;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var preciobano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + preciobano + precioJacuzzi + precioPool+precioConectvity+ precioTree+ precioAligator;
    document.getElementById("precioskin").value = precioAligator;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;
    document.getElementById("preciosend").value = precioTotal;


}

function steel(){
    document.getElementById("aligator").style.backgroundColor= "#cccccc";
    document.getElementById("steel").style.backgroundColor= "#a3c039";
    document.getElementById("wood").style.backgroundColor= "#cccccc";
    document.getElementById("cement").style.backgroundColor= "#cccccc";

    document.getElementById("skinSend").value= "Steel";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "block";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";
    
    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    ///PRECIO
    var precioSteel = 2;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var preciobano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + preciobano + precioJacuzzi + precioPool+precioConectvity + precioTree + precioSteel;
    document.getElementById("precioskin").value = precioSteel;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;
    document.getElementById("preciosend").value = precioTotal;
}

function wood(){
    document.getElementById("aligator").style.backgroundColor= "#cccccc";
    document.getElementById("steel").style.backgroundColor= "#cccccc";
    document.getElementById("wood").style.backgroundColor= "#a3c039";
    document.getElementById("cement").style.backgroundColor= "#cccccc";

    document.getElementById("skinSend").value= "Wood";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "block";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";


    ///PRECIO
    var precioWood = 3;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var preciobano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + preciobano + precioJacuzzi +precioPool+ precioConectvity + precioTree + precioWood;
    document.getElementById("precioskin").value = precioWood;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;
    document.getElementById("preciosend").value = precioTotal;
}

function cement(){
    document.getElementById("aligator").style.backgroundColor= "#cccccc";
    document.getElementById("steel").style.backgroundColor= "#cccccc";
    document.getElementById("wood").style.backgroundColor= "#cccccc";
    document.getElementById("cement").style.backgroundColor= "#a3c039";

    document.getElementById("skinSend").value= "Cement";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "block";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    //PRECIO
    var precioCement = 4;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var preciobano = parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + preciobano + precioJacuzzi + precioPool + precioConectvity + precioTree + precioCement;
    document.getElementById("precioskin").value = precioCement;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;
    document.getElementById("preciosend").value = precioTotal;
}

//---

function sauna(){
    document.getElementById("sauna").style.backgroundColor= "#a3c039";
    document.getElementById("turco").style.backgroundColor= "#cccccc";
    //document.getElementById("jacuzzi").style.backgroundColor= "#cccccc";
    //document.getElementById("pool").style.backgroundColor= "#cccccc";

    valorsaunaOturco = 'sauna';
    document.getElementById("relaxSend").value= "Sauna";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "block";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    //PRECIO
    var precioSauna = 5;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var precioSkin =  parseInt(document.getElementById("precioskin").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + precioSkin + precioJacuzzi +precioPool+ precioConectvity + precioTree +precioSauna;
    document.getElementById("preciobano").value = precioSauna;
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;    
    document.getElementById("preciosend").value = precioTotal;

}

function turco(){
    document.getElementById("sauna").style.backgroundColor= "#cccccc";
    document.getElementById("turco").style.backgroundColor= "#a3c039";
    //document.getElementById("jacuzzi").style.backgroundColor= "#cccccc";
    //document.getElementById("pool").style.backgroundColor= "#cccccc";

    valorsaunaOturco = 'turco';
    document.getElementById("relaxSend").value= "Turco";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "block";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    //PRECIO
    var precioTurco = 6;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var precioSkin =  parseInt(document.getElementById("precioskin").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + precioSkin + precioJacuzzi +precioPool+ precioConectvity + precioTree + precioTurco;
    document.getElementById("preciobano").value = precioTurco;   /*OJO*/
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;   
    document.getElementById("preciosend").value = precioTotal;
}


var valorjacuzzi='No';
function jacuzzi(){
    if(valorjacuzzi === 'No'){
        document.getElementById("jacuzzi").style.backgroundColor= "#a3c039";
        document.getElementById("jacuzzisend").value= "Si";
        valorjacuzzi = 'Si';
        //PRECIO
        var precioJacuzzi = 10;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin =  parseInt(document.getElementById("precioskin").value);
        var precioBano =  parseInt(document.getElementById("preciobano").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioPool + precioConectvity + precioTree + precioJacuzzi;
        document.getElementById("precioJacuzzi").value = precioJacuzzi;   /*OJO*/
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;  
        document.getElementById("preciosend").value = precioTotal;
        
    }else if(valorjacuzzi === 'Si'){
        document.getElementById("jacuzzi").style.backgroundColor= "#cccccc";        
        valorjacuzzi = 'No';
        document.getElementById("jacuzzisend").value= valorjacuzzi;
        //PRECIO
        var precioJacuzzi = 0;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin =  parseInt(document.getElementById("precioskin").value);
        var precioBano =  parseInt(document.getElementById("preciobano").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano +precioPool + precioConectvity + precioTree + precioJacuzzi;
        document.getElementById("precioJacuzzi").value = precioJacuzzi;   /*OJO*/
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;
    }
  

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "block";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";
}

var valorpool='No';
function pool(){
    if(valorpool === 'No'){
        document.getElementById("pool").style.backgroundColor= "#a3c039";
        document.getElementById("poolsend").value= "Si";
        valorpool = 'Si';
        //PRECIO
        var precioPool = 10;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin =  parseInt(document.getElementById("precioskin").value);
        var precioBano =  parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioConectvity + precioTree + precioJacuzzi + precioPool;
        document.getElementById("precioPool").value = precioPool;   /*OJO*/
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;

    }else if(valorpool === 'Si'){
        document.getElementById("pool").style.backgroundColor= "#cccccc";        
        valorpool = 'No';
        document.getElementById("poolsend").value= valorpool;
        //PRECIO
        var precioPool = 0;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin =  parseInt(document.getElementById("precioskin").value);
        var precioBano =  parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTree =  parseInt(document.getElementById("treePrecios").value);
        var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioConectvity + precioTree + precioJacuzzi + precioPool;
        document.getElementById("precioPool").value = precioPool;   /*OJO*/
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;
    }

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "block";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";
}

//--

function alexa(){
    document.getElementById("alexa").style.backgroundColor= "#a3c039";
    document.getElementById("siri").style.backgroundColor= "#cccccc";
    document.getElementById("google").style.backgroundColor= "#cccccc";

    document.getElementById("conectivitySend").value= "Alexa";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "block";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    ///PRECIO
    var precioAlexa = 6;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var precioSkin =  parseInt(document.getElementById("precioskin").value);
    var precioBano =  parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioJacuzzi + precioPool+ precioTree +precioAlexa;
    document.getElementById("conectivityPrecios").value = precioAlexa;   /*OJO*/
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal; 
    document.getElementById("preciosend").value = precioTotal;
}

function siri(){
    document.getElementById("alexa").style.backgroundColor= "#cccccc";
    document.getElementById("siri").style.backgroundColor= "#a3c039";
    document.getElementById("google").style.backgroundColor= "#cccccc";

    document.getElementById("conectivitySend").value= "Siri";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "block";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "none";

    //PRECIO
    var precioSiri = 7;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var precioSkin =  parseInt(document.getElementById("precioskin").value);
    var precioBano =  parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioJacuzzi + precioPool + precioTree+ precioSiri;
    document.getElementById("conectivity").value = precioSiri;   /*OJO*/
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal; 
    document.getElementById("preciosend").value = precioTotal;
}

function google(){
    document.getElementById("alexa").style.backgroundColor= "#cccccc";
    document.getElementById("siri").style.backgroundColor= "#cccccc";
    document.getElementById("google").style.backgroundColor= "#a3c039";

    document.getElementById("conectivitySend").value= "Google";

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "block";

    document.getElementById("treePluggins").style.display= "none";

    //PRECIO
    var precioGoogle = 8;
    var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
    var precioLocation = parseInt(document.getElementById("preciolocation").value);
    var precioSkin =  parseInt(document.getElementById("precioskin").value);
    var precioBano =  parseInt(document.getElementById("preciobano").value);
    var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
    var precioPool =  parseInt(document.getElementById("precioPool").value);
    var precioTree =  parseInt(document.getElementById("treePrecios").value);
    var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioJacuzzi +precioPool + precioTree + precioGoogle;
    document.getElementById("conectivityPrecios").value = precioGoogle;   /*OJO*/
    document.getElementById("precio").innerHTML = precioTotal;
    document.getElementById("precio2").innerHTML = precioTotal;
    document.getElementById("precio3").innerHTML = precioTotal;
    document.getElementById("preciosend").value = precioTotal; 
}


var valortree = 'No';
function tree(){
    if(valortree === 'Si'){
        document.getElementById("tree").style.backgroundColor= "#cccccc";
        document.getElementById("plugginSend").value= "No";
        valortree = 'No';
        //PRECIO
        var precioTree = 0;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin =  parseInt(document.getElementById("precioskin").value);
        var precioBano =  parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano +precioJacuzzi + precioPool + precioConectvity + precioTree;
        document.getElementById("treePrecios").value = precioTree;   /*OJO*/
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;
        document.getElementById("preciosend").value = precioTotal;


    }else{


        document.getElementById("tree").style.backgroundColor= "#a3c039";
        document.getElementById("plugginSend").value= "Si";
        valortree = 'Si';
        //PRECIO
        var precioTree = 10;
        var precioCustomize = parseInt(document.getElementById("precioCustomize").value);
        var precioLocation = parseInt(document.getElementById("preciolocation").value);
        var precioSkin =  parseInt(document.getElementById("precioskin").value);
        var precioBano =  parseInt(document.getElementById("preciobano").value);
        var precioJacuzzi =  parseInt(document.getElementById("precioJacuzzi").value);
        var precioPool =  parseInt(document.getElementById("precioPool").value);
        var precioConectvity = parseInt(document.getElementById("conectivityPrecios").value);
        var precioTotal = precioCustomize + precioLocation + precioSkin + precioBano + precioJacuzzi + precioPool + precioConectvity + precioTree;
        document.getElementById("treePrecios").value = precioTree;   /*OJO*/
        document.getElementById("precio").innerHTML = precioTotal;
        document.getElementById("precio2").innerHTML = precioTotal;
        document.getElementById("precio3").innerHTML = precioTotal;   
        document.getElementById("preciosend").value = precioTotal;
    }
    

    document.getElementById("aligatorSkin").style.display= "none";
    document.getElementById("steelSkin").style.display= "none";
    document.getElementById("woodSkin").style.display= "none";
    document.getElementById("concreteSkin").style.display= "none";

    document.getElementById("saunaRelax").style.display= "none";
    document.getElementById("turkishRelax").style.display= "none";
    document.getElementById("jacuzziRelax").style.display= "none";
    document.getElementById("poolRelax").style.display= "none";

    document.getElementById("alexaConectivity").style.display= "none";
    document.getElementById("siriConectivity").style.display= "none";
    document.getElementById("googleConectivity").style.display= "none";

    document.getElementById("treePluggins").style.display= "block";
}




















function procesarpagos(){
    

    var enviarCleaning =  document.getElementById("sendCleaning").value;
    var enviarCooking =  document.getElementById("sendCooking").value;
    var enviarResting =  document.getElementById("sendResting").value;
    var enviarProductivity =  document.getElementById("sendProductivity").value;
    var enviarExterior =  document.getElementById("exterioreSend").value;
    var enviarSkin =  document.getElementById("skinSend").value;
    var enviarBano =  document.getElementById("relaxSend").value;
    var enviarPool =  document.getElementById("poolsend").value;
    var enviarJacuzzi =  document.getElementById("jacuzzisend").value;
    var enviarConectivity =  document.getElementById("conectivitySend").value;
    var enviarTree =  document.getElementById("plugginSend").value;
    var enviarPrecio =  document.getElementById("preciosend").value;

    if(enviarExterior === ''){
        document.getElementById("textoValidar").innerHTML='Debes seleccinoar un EXTERIOR';
        document.getElementById('validarCampos').style.display='block';
    }else if (enviarSkin === ''){
        document.getElementById("textoValidar").innerHTML='Debes seleccinoar un SKIN';
        document.getElementById('validarCampos').style.display='block';
    }else if (enviarBano === ''){
        document.getElementById("textoValidar").innerHTML='Debes seleccinoar un bano SAUNA O TURCO';
        document.getElementById('validarCampos').style.display='block';
    }else if (enviarConectivity === ''){
        document.getElementById("textoValidar").innerHTML='Debes seleccinoar un ASISTENTE';
        document.getElementById('validarCampos').style.display='block';
    }
    else{

    document.getElementById('precesarPagos').style.display='block';

    document.getElementById("formulrioCleaning").value= enviarCleaning ;
    document.getElementById("formulrioCooking").value= enviarCooking ;
    document.getElementById("formulrioResting").value= enviarResting ;
    document.getElementById("formulrioProductivity").value= enviarProductivity ;
    document.getElementById("formulrioExterior").value= enviarExterior ;
    document.getElementById("formulrioSkin").value= enviarSkin ;
    document.getElementById("formulrioBano").value= enviarBano ;
    document.getElementById("formulrioPool").value= enviarPool ;
    document.getElementById("formulrioJacuzzi").value= enviarJacuzzi ;
    document.getElementById("formulrioConectivity").value= enviarConectivity ;
    document.getElementById("formulrioTree").value= enviarTree ;
    document.getElementById("formulrioPrecio").value= enviarPrecio ;
}
}

function cerrarprocesarpagos(){
    document.getElementById('precesarPagos').style.display='none';
}


function aceptarCompletar(){
    document.getElementById('validarCampos').style.display='none';
}
