//

// Metodos de propiedad
const reproductor = {
    reproducir : function(id) {
        console.log(`Reproduciendo cancion ${id}`);
    },
    pausar : function() {
        console.log('Pausando...');
    },
    crearPlaylist : function(nombre) {
        console.log(`Creando la playlist: ${nombre}`);
    },
    reproducirPlaylist : function(nombre) {
        console.log(`Reproducir la playlist: ${nombre}`);
    },
}

reproductor.borrarCancion = function(id) {
    console.log(`Eliminando la cancion ${id}`)
}

reproductor.reproducir(3812);
reproductor.pausar();
reproductor.borrarCancion(3813);
reproductor.crearPlaylist('Rock and Roll');
reproductor.reproducirPlaylist('Rock and Roll');





