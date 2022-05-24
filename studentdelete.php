<?php

?>
<?php

if (isset($_GET['std_id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM student WHERE id = ?');
    $stmt->execute([$_GET['std_id']]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$student) {
        exit('student doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM student WHERE id = ?');
            $stmt->execute([$_GET['std_id']]);
            $msg = 'You have deleted the student!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: adminhome.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>