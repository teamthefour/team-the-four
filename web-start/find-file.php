<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Teamthe4 - ويب ستارت | فريق الأربعة | Web Start - IT Solutions, Software , Commpanys</title>
<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body data-spy="scroll" data-offset="70">
<?php

function listFolderFiles($dir,$filename){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;

    echo '<ol>';
foreach($ffs as $ff){
echo '<li>'.$ff . ' - ' ;
if(is_dir($dir.'/'.$ff)){
echo '<br>' . $dir.'/'.$ff ;
if(file_exists($dir.'/'.$ff .'/'.$filename))
{
echo " <b>file exist</b>\n";
}
else
{
echo " <b>file doesn't exist</b>\n";
$copyfilepath = '/htdocs/github/teamthefour/index-copy-r.html';
$newfilepath = $dir.'/'.$ff .'/'.$filename;
/*      if(!copy($copyfilepath,$newfilepath))
     {
         echo "failed to copy ".$copyfilepath;
     }
     else
     {
         echo "copied ".$copyfilepath." into ".$newfilepath."\n";
     } */
}
listFolderFiles($dir.'/'.$ff,$filename);

} 
echo '</li>';
}
    echo '</ol>';
}

listFolderFiles('/admin-smarter-rtl','index.html');
//print_r($dirs); exit;
?>
</body>
</html>