<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daycare Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">🌞 Finlee Daycare</div>
        <div class="nav-actions">
            <input type="text" placeholder="Search..." class="search">
            <button class="icon-btn">🔔</button>
            <button class="icon-btn">⚙️</button>
            <span class="profile">
                <img src="avatar.png" alt="Admin">
                <span class="name">Admin</span>
            </span>
        </div>
    </header>

```
<main class="dashboard">
    <section class="stats-grid">
        <div class="card orange">
            <h3>Checked In</h3>
            <p class="count"><?php echo $checkedIn ?? 111; ?></p>
        </div>
        <div class="card yellow">
            <h3>Checked Out</h3>
            <p class="count"><?php echo $checkedOut ?? 100; ?></p>
        </div>
        <div class="card green">
            <h3>Present</h3>
            <p class="count"><?php echo $present ?? 10; ?></p>
        </div>
        <div class="card red">
            <h3>Absent</h3>
            <p class="count"><?php echo $absent ?? 1; ?></p>
        </div>
    </section>

    <section class="table-section">
        <h2>Children Attendance Overview</h2>
        <table>
            <thead>
                <tr>
                    <th>Child</th>
                    <th>Status</th>
                    <th>Pickup</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 5; $i++): ?>
                <tr>
                    <td><img src="child<?= $i ?>.png" alt="Child"> Child <?= $i+1 ?></td>
                    <td><span class="status checkedin">Checked In</span></td>
                    <td>Bus #<?= rand(1,3) ?></td>
                    <td>---</td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </section>
</main>
```

</body>
</html>
