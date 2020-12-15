<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <ul>
  @foreach($data as $item)
    <li>
      {{$item->tanggal}}
      {{$item->jam}}
      {{$item->instansi}}
      {{$item->keterangan}}
    </li>
  @endforeach
  </ul>
  
</body>
</html>