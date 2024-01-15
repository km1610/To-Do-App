<?php include 'config.php' ; ?>
<html>
    <head>
        <title>History</title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="uk-container">
            <div class="uk-card uk-align-center uk-card-large uk-card-default uk-card-body uk-width-1-2@m">
            <ul class="uk-pagination" uk-margin>
                <li><a href="index.php"><span uk-pagination-previous></span></a></li>
            </ul>
                <h1 class="uk-card-title uk-text-center uk-heading-divider">History</h1>
                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" onclick="deleteHistory()">Clear History</button>
                <div>
                    <br>
                    <div class="uk-container">
                        <?php 

                        $query = "SELECT * FROM tasks WHERE status=0 ORDER BY id DESC";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            // Display tasks
                            while ($row = $result->fetch_assoc()) {
                                echo "<div uk-alert>
                                <s><p><b>" . $row['task_name'] . "</b> | " . $row['task_desc'] . "</p></s>
                                </div>";
                            }

                        } else {
                            echo "No tasks found";
                        }

                        // Close connection
                        $conn->close();

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
