<!DOCTYPE html>
<html>
<head>
    <title>Add Recipient</title>
</head>
<body>
    <h1>Add Recipient to Campaign: <?= $campaign['name'] ?></h1>
    <form action="<?= base_url('add-recipient/' . $campaign['id']) ?>" method="post">
        <label for="email">Recipient Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Add Recipient</button>
    </form>
</body>
</html>
