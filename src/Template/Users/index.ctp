
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
    <td>
      <?php echo $this-> Html->link('View', ['action'=>'view']) ?>
      <?php echo $this-> Html->link('Edit', ['action'=>'edit']) ?>
      <?php echo $this-> Html->link('Delete', ['action'=>'delete']) ?>
    </td>
  </tr>
<?php endforeach; ?>

</table>
