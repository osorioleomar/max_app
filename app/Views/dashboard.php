<!DOCTYPE html>
<html>
<head>
    <title><?= $campaignName ?> Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    
    <div class="container">
        <h1><?= $campaignName ?> Dashboard</h1>
        <p>Number of Email Opens: <?= $numOpens ?></p>
        <table border="1">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Timestamp</th>
                    <th>Number of Opens</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($opens as $open): ?>
                    <tr>
                        <td><?= $open['email'] ?></td>
                        <td><?= $open['time_opened'] ?></td>
                        <td><?= $open['opens'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url('campaign') ?>" class="back-button">Back to Campaigns</a>
    </div>
</body>
</html>
