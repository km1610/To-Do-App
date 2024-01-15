<?php include 'config.php' ; ?>
<html>
    <head>
        <title>To-Do App</title>
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
                <h1 class="uk-card-title uk-text-center uk-heading-divider">To-Do List</h1>
                
                <div>
                    <fieldset class="uk-fieldset">
                
                        <div class="uk-margin">
                            <input id="task_name" class="uk-input" type="text" placeholder="Enter Task Name" aria-label="Input">
                        </div>

                        <div class="uk-margin">
                            <input id="task_desc" class="uk-input" type="text" placeholder="Enter Task Description" aria-label="Input">
                        </div>

                        <button class="uk-button uk-button-primary" onclick="addTask()">Add</button>
                        
                        <a class="uk-button uk-button-default" href="history.php">Check History</a>
                        
                    </fieldset>
                    <br>
                    <div class="uk-container" uk-sortable="handle: .uk-sortable-handle" id="task-container">
                        <?php 

                        $query = "SELECT * FROM tasks WHERE status=1 ORDER BY id DESC";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            // Display tasks
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='uk-sortable-hande' uk-alert><a href class='uk-alert-close' onclick='closeTask(" . $row['id'] . ")' uk-close></a><h3>" . $row['task_name'] . "</h3><p>" . $row['task_desc'] . "</p></div>";
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
