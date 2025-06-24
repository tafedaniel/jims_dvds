<?php if ($dvd): ?>
    <h1><?= htmlspecialchars($dvd['name']) ?></h1>
    <p>Price: $<?= $dvd['price'] ?></p>
    <a href="../../">Back to list</a>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>