<?php include 'templates/header.php'; ?>
<?php include 'config/db.php'; ?>

<div class="container mt-5">
    <h1>Lowongan Kerja</h1>
    <div class="row">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM jobs");
        while ($job = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $job['job_title'] . '</h5>';
            echo '<p class="card-text">' . $job['company'] . '</p>';
            echo '<p class="card-text">' . $job['location'] . '</p>';
            echo '<a href="#" class="btn btn-primary">Detail</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
