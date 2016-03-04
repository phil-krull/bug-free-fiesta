<html>
<head>
  <title>Pokes</title>
</head>
<body>
  <h2>Welcome <?= $this->session->userdata('alias') ?></h2>
  <h3><?= count($user) ?> people poked you!</h3>
  <div>
    <?php if($user) { ?>
      <?php foreach ($user as $key => $value) { ?>
        <p><?= $value['alias'] ?> poked you <?= $value['pokes'] ?> times.</p>
      <?php } ?>
    <? } ?>
  </div>
  <h3>People you may want to poke:</h3>
    <table>
      <tr>
        <td>Name</td>
        <td>Alias</td>
        <td>Email Address</td>
        <td>Poke History</td>
        <td>Action</td>
      </tr>
  <?php if($users) { ?>
    <?php foreach ($users as $key => $value) { ?>
      <tr>
        <td><?= $value['name'] ?></td>
        <td><?= $value['alias'] ?></td>
        <td><?= $value['email'] ?></td>
        <td><?= $value['pokes'] ?> pokes!</td>
        <td>
          <form action="/pokes/create/<?= $value['id'] ?>" method="post">
            <input type="submit" value="Poke!">
          </form>
        </td>
      </tr>
    <?php } ?>
  <?php } ?>
    </table>
  <form action="/sessions/destroy" method="post">
    <input type="submit" value="Logout">
  </form>
</body>
</html>