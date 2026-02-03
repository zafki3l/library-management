<main>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EDIT</td>
                <td>DELETE</td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td><?= htmlspecialchars($role->id) ?></td>
                    <td><?= htmlspecialchars($role->name) ?></td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>