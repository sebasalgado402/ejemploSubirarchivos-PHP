<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enviar un Archivo con PHP</title>
<style type="text/css">
*{ font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif}
.main{ margin:auto; border:1px solid #7C7A7A; width:40%; text-align:left; padding:30px; background:#85c587}
input[type=submit]{ background:#6ca16e; width:100%;
    padding:5px 15px; 
    background:#ccc; 
    cursor:pointer;
	font-size:16px;
}
</style>
</head>

<body bgcolor="#bed7c0">
<div class="main">
<h1>Enviar un Archivo</h1>
<br>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
   <p> Enviar mi archivo: <input name="subir_archivo" type="file" /></p>
   <p> <input type="submit" value="Enviar Archivo" /></p>
</form>
</div>
</body>
</html>