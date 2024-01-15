function addTask() {

    // Get task input value
    var task_name = $('#task_name').val();
    var task_desc = $('#task_desc').val();

    console.log("Task Name: " + task_name);
    console.log("Task Description: " + task_desc);

    // Check if task is not empty
    if (task_name.trim() !== '') {
        // Use AJAX to submit form data to PHP script
        $.ajax({
            type: 'POST',
            url: 'addTask.php',  // Replace with your PHP script URL
            data: {task_name: task_name, task_desc: task_desc},
            success: function(response) {
                setTimeout(function() {
                    // Reload the page after the timeout
                    location.reload();
                }, 2000);

                // Handle success with notificiation
                UIkit.notification({message: 'Task Added Successfully',pos:'top-right'});
            },
            error: function(xhr, status, error) {
                // Handle error
                UIkit.notification({message: 'Error occurred. Try again later',pos:'top-right',timeout:5000});
            }
        });
    }
}
function closeTask(taskId) {
    // Send an AJAX request to your PHP endpoint
    $.ajax({
        type: 'POST',
        url: 'closeTask.php',  // Replace with your PHP script URL for updating task status
        data: {taskId: taskId},
        success: function(response) {
            setTimeout(function() {
                // Reload the page after the timeout
                location.reload();
            }, 500);

            // Handle success with notificiation
            UIkit.notification({message: 'Task Closed Successfully',pos:'top-right'});
        },
        error: function(xhr, status, error) {
            // Handle error
            UIkit.notification({message: 'Error occurred. Try again later',pos:'top-right',timeout:5000});
        }
    });
}

function deleteHistory() {

    // Send an AJAX request to your PHP endpoint
    $.ajax({
        type: 'POST',
        url: 'deleteHistory.php',  // Replace with your PHP script URL
        data: {},
        success: function(response) {
            setTimeout(function() {
                // Reload the page after the timeout
                location.reload();
            }, 500);

            // Handle success with notificiation
            UIkit.notification({message: 'History cleared',pos:'top-right'});
        },
        error: function(xhr, status, error) {
            // Handle error
            UIkit.notification({message: 'Error occurred. Try again later',pos:'top-right',timeout:5000});
        }
    });
}