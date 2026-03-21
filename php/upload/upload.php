<?php
$allowed=['jpg', 'png', 'pdf', 'php', 'py'];
if($_SERVER['REQUEST_METHOD']==='POST')
{
    if($_FILES['documento']['error']=== UPLOAD_ERR_OK)//Verifico se c'è un errore, $_FILES array associativo. Sono 2 array associativi
    {
        $tmppath=$_FILES['documento']['tmp_name']; //tmp name chiave altro array associativo
        echo $tmppath.'<br>';
        $originalname=basename($_FILES['documento']['name']); //Prendo il nome del file Returns trailing name component of path
        echo $originalname.'<br>';
        $username=$_POST['nome'];
        echo $username.'<br>';
        $ext=strtolower(pathinfo($originalname, PATHINFO_EXTENSION));
        if(!in_array($ext, $allowed))
        {
            http_response_code(403);
            $msg='estensione non autorizzata';
            include 'message.php';
            exit();
        }
        $maxSize=2*1024*1024;
        $size=$_FILES['docuemnto']['size'];
        if($size>$maxSize)
        {
            http_response_code(413);
            $msg='File troppo grande';
            include 'message.php';
            exit();
        }
        $userDir='uploads/'.$username;
        if(!is_dir($userDir))
        {
            mkdir($userDir, 0755);
        }
        $destination=$userDir.'/'.$originalname;
        move_uploaded_file($tmppath, $destination);
        $msg='File caricato correttamente';
        include 'message.php';
    }
    else
    {
        $msg='Errore nel caricamento';
        http_response_code(500);
        include 'message.php';
    }

}