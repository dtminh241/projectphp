<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="account.css">
    <style>
        form div{
            display:block;
        }
    </style>
</head>
<body>
    <div class="title">
        <h2>Change Password</h2>
    </div>
    <div class="info">
        <form action="" method="post">
            <div class="password mb-3 mt-3">
                <label for="old-pw" class="form-label">Old Password:</label>
                <input type="password" class="form-control" id="old-pw" placeholder="Enter old password" name="old-pw">
            </div>

            <div class="password mb-3">
                <label for="new-pw" class="form-label">New Password:</label>
                <input type="password" class="form-control" id="new-pw" placeholder="Enter new password" name="new-pw">
            </div>
            <div class="password mb-3">
                <label for="new-pw-2" class="form-label">Retype New Password:</label>
                <input type="password" class="form-control" id="new-pw-2" placeholder="Re-enter new password" name="new-pw-2">
            </div>

            <div class="submit mb-3">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</body>
</html>