<?php
include 'pezzi/back.php';
include '../sql/db.php';

$query = $_GET['query'];
$sql = "SELECT * FROM film WHERE titolo LIKE '%$query%' OR descrizione LIKE '%$query%'";
$result = $conn->query($sql);
?>

<main>
    <h1>Cerca "<?php echo $query; ?>"</h1>
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="movie">
                <h2><?php echo $row['titolo']; ?></h2>
                <p><?php echo $row['descrizione']; ?></p>
                <p><strong>Anno:</strong> <?php echo $row['anno']; ?></p>
                <p><strong>Genere:</strong> <?php echo $row['genere']; ?></p>
                
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Nessun risultato ottenuto</p>
    <?php endif; ?>
</main>
</body>
</html>
