<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php if(isset($this->titulo)) echo $this->titulo;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $_layoutParams['ruta_css'].'estilos.css' ?>" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="main">
            <div id="header">
            <h1><?php echo APP_NAME;?></h1>
            </div>