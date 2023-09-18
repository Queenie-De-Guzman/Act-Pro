<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
   

  </head>
<body>
    <h1>Product Listing</h1>

    <form class="col-md-12" action ="/save" method="post">
    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
        <label>code</label>
        <input class="form-control" type="text" name="code" placeholder="code" value="<?= isset($pro['code']) ? $pro['code'] : '' ?>">
        <br>
        <label>name</label>
        <input class="form-control" type="text" name="name" placeholder="name"value="<?= isset($pro['name']) ? $pro['name']: ''?>">
        <br>
        <label>quantity</label>
        <input  class="form-control" type="text" name="quantity" placeholder="quantity"value="<?= isset($pro['quantity']) ?  $pro['quantity']: ''?>">
        <br>
        <input class="btn btn-primary" type="submit" value="save">

    </form>
    <table  class="table table-striped table-hover" border="1">
       <trs> 
        <th>code</th>
        <th>name</th>
        <th>quantity</th> 
        <th>action</th>
      </tr>

      <?php foreach ($product as $pr): ?>
       <tr>
        <td> <?= $pr ['code'] ?> </td>
        <td><?=$pr ['name'] ?> </td>
        <td> <?=$pr ['quantity'] ?> </td>
        <td><a href="/delete/<?= $pr['id'] ?>">delete</a>||<a href="/edit/<?= $pr['id'] ?>">edit</a></td>
       </tr>
      <?php endforeach; ?>
   </table>
</body>
</html>