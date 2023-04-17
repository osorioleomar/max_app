<!DOCTYPE html>
<html>
<head>
    <title>Email Tracking Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Email Tracking Dashboard</h1>
        <a href="<?= base_url('create-campaign') ?>">Create Campaign</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Campaign Name</th>
                    <th>Open Link</th>
                    <th>Dashboard Link</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campaigns as $campaign): ?>
                    <tr>
                        <td><?= $campaign['name'] ?></td>
                        <td><?= base_url('open/?c=' . $campaign['id'] . '&email=...put here...') ?></td>
                        <td><a href="<?= base_url('campaign/dashboard/' . $campaign['id']) ?>">View dashboard</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
