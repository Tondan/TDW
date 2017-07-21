<?php


$target_dir = $dir;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Controlla se il file esiste già
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Controlla grandezza file
if ($_FILES["fileToUpload"]["size"] > 9000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// controlla tipo file es:gif ecc ecc
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// se ok=0 ERRORE
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $oid=mysql_query("INSERT INTO tdw.immagine(Link) VALUES('$target_file')");
        if(!$oid){
        echo("<br>Inserimento immagine non avvenuto correttamente");
        echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>