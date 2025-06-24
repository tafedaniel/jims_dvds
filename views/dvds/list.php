<h1>DVD List</h1>
<ul>
    <?php foreach ($dvds as $dvd): ?>
        <li>
            <a href="dvds/<?= $dvd['id'] ?>">
                <?= $dvd['name'] ?> - $<?= $dvd['price'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>