<h1> This is user index </h1>

<table>
  <tr>
    <th>Nama</th>
    <th>Email</th>
  </tr>


<?php foreach ($users as $user) : ?>
  //papar looping data disini

  <tr>
    <td><?php echo $user->name ?></td>
    <td><?php echo $user->email ?></td>
  </tr>
<?php endforeach; ?>

</table>

 
