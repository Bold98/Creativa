<?php
/*
    Funcion para comprimir imagenes 
*/
class Comprimir{
    public function comprimir($source, $quality){
        //Obtenemos la información de la imagen
        $imginfo= getimagesize($source);
        $imgTipo= $imginfo['mime'];
    
        //Se crea la imagen segun el formato
        switch($imgTipo){ 
            case 'image/jpeg': 
                $image = imagecreatefromjpeg($source); 
                break; 
            case 'image/png': 
                $image = imagecreatefrompng($source); 
                break; 
            case 'image/gif': 
                $image = imagecreatefromgif($source); 
                break; 
            default: 
                $image = imagecreatefromjpeg($source); 
        }
        //Se guarda la imagen 
        
        //Se devuleve la imagen comprimida
        return imagejpeg($image,null,$quality);
    }
}
    

    
?>