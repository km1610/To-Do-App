# To-Do-App
## About
This is a simple to-do app created using PHP and MySQL. It utilizes the UIKit CSS framework to enhance the user interface.

## Usage
The to-do app allows users to manage their tasks efficiently. You can add tasks, mark them as completed, close completed tasks, and view the task history.

## Tech Stack Used
- HTML
- CSS
- PHP
- MySQL
- JavaScript (script.js)

## Functions Used
1. **Add Task:** Add a new task to the to-do list.
2. **Close Task:** Mark the task as completed, closing them and move them to the history.
3. **Delete History:** Remove all the completed tasks from the history.

## How to Run
Follow the steps below to run the to-do app:

1. **Clone the Repository:**
```GIT
git clone https://github.com/km1610/To-Do-App.git
```
2. **Database Configuration:**
Import the provided SQL file (`tasks.sql`) to set up the necessary database structure.

3. **Configuration File:**
Open `config.php` and update the database connection details.
```PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do";
```

4. Create connection
```PHP
$conn = new mysqli($servername, $username, $password, $dbname);
```

5. **Web Server:**
Use a local server (e.g., XAMPP, MAMP) or your preferred web server to host the application.

5. **Access the App:**
Open the app in your web browser:
  ```
  http://localhost/path/to/todo-app/index.php
  ```
<hr>

Feel free to explore the features and customize the app according to your preferences. 
You are welcome to contribute and enrich the to-do app with your ideas, bug reports, or code improvements. <3

