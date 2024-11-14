<?php

function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}


function splitURL()
{
    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/",$URL);
    return $URL;
}

function loadContoller()
{
    $URL = splitURL();
    $filename = "../app/controllers/".ucfirst($URL[0]).".php";
    if(file_exists($filename))
    {
        require $filename;
    }
    else{
        echo "Contller Not Found";
    }
}

loadContoller();
