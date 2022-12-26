<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="account.css">
    <style>
        form div{
            display: flex;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="title">
            <h2>Account Information</h2>
        </div>
        <div class="info">
            <form action="" method="post">
                <div class="username mb-3 mt-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="gender mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>
                        <label class="form-check-label" for="radio1">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
                        <label class="form-check-label" for="radio2">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio3" name="gender" value="orther">
                        <label class="form-check-label" for="radio3">Orther</label>
                    </div>
                </div>
                <div class="birthday mb-3">
                    <label for="birthday" class="form-label">Birthday:</label>
                    <select class="form-select" name="day">
                        <option value="0">[Day]</option>
                        <?php
                            for ($i=1; $i < 32; $i++) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                    </select>
                    <select class="form-select" name="month">
                        <option value="0">[Month]</option>
                        <option value="1">January</option>
                        <option value="2">Feburary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    
                    </select>
                    <select class="form-select" name="month">
                        <option value="0">[Year]</option>
                        <?php
                            for ($i=2022; $i > 1980; $i--) { 
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="address mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                </div>
                <div class="email mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input disabled type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="password mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input disabled type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="phone mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                </div>
                <div class="submit mb-3">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>