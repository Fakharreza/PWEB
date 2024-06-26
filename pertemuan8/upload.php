<?php
if (isset($_POST["submit"])){
    $targetDirectory = "documents/";
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedDocumentExtensions = array("txt", "pdf", "doc", "docx");

    $maxDocumentFileSize = 10 * 1024 * 1024; // 10 MB

    if (in_array($documentFileType, $allowedDocumentExtensions) && $_FILES["documentToUpload"]["size"] <= $maxDocumentFileSize){
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}


?>
