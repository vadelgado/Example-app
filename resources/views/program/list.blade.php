<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <table border='1' style='border-collapse: collapse; width: 100%; text-align: center;'>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Facultad</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($program as $p): ?>
            <tr>
                <td><?php echo $p['codigo'] ?></td>
                <td><?php echo $p['nombre'] ?></td>
                <td><?php echo $p['facultad'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<table border='1' style='border-collapse: collapse; width: 100%; text-align: center;'>
    <thead>
        <tr>
        <th>Código</th>
        <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($student as $s): ?>
            <tr>
                <td><?php echo $s['Codigo'] ?></td>
                <td><?php echo $s['Nombre'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
