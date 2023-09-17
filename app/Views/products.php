<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Listing</h1>

    <form action ="/save" method="post">
    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
        <label>code</label>
        <input type="text" name="code" placeholder="code" value="<?= isset($pro['code']) ? $pro['code'] : '' ?>">
        <br>
        <label>name</label>
        <input type="text" name="name" placeholder="name"value="<?= isset($pro['FullName']) ? $pro['FullName']:''?>">
        <br>
        <label>quantity</label>
        <input type="text" name="quantity" placeholder="quantity"value="<?=isset($pro['quantity']) ?  $pro['quantity']:'' ?>">
        <br>
        <input type="submit" value="save">

    </form>
    <table border="1">
       <tr> 
        <th>code</th>
        <th>name</th>
        <th> quantity</th> 
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