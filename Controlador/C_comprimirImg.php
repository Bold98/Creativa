<?php
/*
    Funcion para comprimir imagenes 
*/
    function comprimir($source, $destination, $quality){
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
        imagejpeg($image,$destination,$quality);
        //Se devuleve la imagen comprimida
        return $destination;
    }
    //Ruta de subida (MUY IMPORTANTE PARA DONDE LO VAN A MANDAR) Es la que va a la BD
    $uploadPath = "Lacomprension/";

    //Si el fiche se ha enviado
    $status= $statusMsg='';
    if(isset($_POST['submit'])){
        $status='error';
        if(!empty($_FILES["image"]["name"])){
            //Información del archivo
            $fileName = basename($_FILES["image"]["name"]);
            $imageUploadPath = $uploadPath . $fileName;
            $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
            //Extenciones de imagenes permitidas
            $allowTypes = array('jpg','png','jpeg','gif');
            if (in_array($fileType,$allowTypes)){
                $imageTemp = $_FILES["image"]["tmp_name"];
                
                //Compresion del fichero
                $compressedImage = comprimir($imageTemp,$imageUploadPath,75);

                if ($compressedImage){
                    //Aqui es cuando se comprime correctamente
                }else{
                    //Aqui si falla la compresiion
                }
            }else {
                
                //Aqui si no se utilizo las extensiones adecuadas
            }
        }else{
            //Aqui es que no selecciono una imagen
        }
    }
?>