<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin2.css">
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this employee?");
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link active">Dashboard</a></li>
                <li class="nav-item"><a href="#employee-management" class="nav-link">Employee Management</a></li>
            </ul>
        </div>

        <div class="main-content">
            <header>
                <h1>Admin Dashboard</h1>
            </header>

            <!-- Employee Management Section -->
            <section id="employee-management" class="employee-management">
                <h2>Employee Management</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Date Registered</th>
                            <th>NIC</th>
                            <th>Language</th>
                            <th>Phone Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'fetch_employees.php'; ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
