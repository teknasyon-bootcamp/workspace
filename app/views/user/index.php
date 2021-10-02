<h1>Users</h1>
<ul>
    <?php foreach($userList as $user): ?>
        <li><a href="user/<?=$user['firstname']?>"><?= $user['firstname'] . " " . $user['lastname'] ?></a></li>
    <?php endforeach; ?>
</ul>