<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/subir" method="post" enctype="multipart/form-data">@csrf
        Imagen <input type="file" name="imagen" id=""> <br>
        Tipo <input type="text" name="tipo" id=""> <br>
        <input type="submit" value="Enviar">

    </form>

    @isset($subido)
    Imagen Subida: <br><br>
    {{ $originalName }} <br>
    {{ $finalName }} <br >
    {{ $fileExtension }} <br>
    {{ $fileSize }} <br>
    {{ $mimeType }} <br>

    <img width=10% width=10% src='/imagenes/{{ $finalName }}' />

    @endisset
</body>
</html>