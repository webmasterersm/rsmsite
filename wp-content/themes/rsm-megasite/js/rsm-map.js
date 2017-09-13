$(document).on("ready", function(){
    
    var punto = new google.maps.LatLng(18.976971, -70.947904);

    var config = {
        zoom: 8,
        center: punto,
        mapTypeId: google.maps.MapTypeId.SATELLYTE
    };

    var mapa = new google.maps.Map( $("#map")[0], config );
    
    var mapa2 = new google.maps.Map( $("#mapa2")[0], config );
    
    google.maps.event.addListener(mapa, "click", function(event){
        
        //Coordenadas
        var coordenadas = event.latLng.toString();
        //alert("Estas son las coordenadas " + coordenadas); 
        
        //Remover los parentesis
        coordenadas = coordenadas.replace("(", "");
        coordenadas = coordenadas.replace(")", "");
        
        //coordenadas por separado
        var lista = coordenadas.split(",");
        //alert("La coordenada X " + lista[0] );
        //alert("La coordenada Y " + lista[1] );
        
        //variable para direccion, punto o coordenada
        var direccion = new google.maps.LatLng(lista[0], lista[1]);
        
        //variable para marcador
        var marcador = new google.maps.Marker({
            titulo: prompt("Titulo del marcador?"),
            position: direccion, //Posición del nuevo marcador
            map: mapa, //En que mapa se ubicará el marcador
            animation: google.maps.Animation.DROP, //Como aparecerá el marcador
            draggable: false //No permite que el marcador se arrastre
        });
        
        //Agregar evento click al marcador
        google.maps.event.addListener(marcador, "click", function(){
            alert("Oficina: " + marcador.titulo +  + marcador.position);
        });
        
        //Ubicar el marcador en el mapa
        marcador.setMap(mapa);
        marcador.setMap(mapa2);
        
    });
    
});
