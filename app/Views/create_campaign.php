<!DOCTYPE html>
<html>
<head>
    <title>Create Campaign</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Create Campaign</h1>
        <form action="<?= base_url('create-campaign') ?>" method="post">
            <label for="name">Campaign Name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Create Campaign</button>
        </form>
    </div>
</body>
</html>
