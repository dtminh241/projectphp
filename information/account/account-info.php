<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .main{
            width: 50%;
            margin: 0 auto;
        }
        form{
            background-color: rgb(142 0 255 / 4%);
            padding: 5px 25px;
        }
        form div{
            display: flex;
        }
        .gender label{
            margin-right: 50px;
        }
        .form-check{
            padding-right: 20px;
        }
        .form-check label{
            margin: 0;
        }
        .username label{
            padding-top: 5px;
            margin-right: 30px;
        }
        .birthday label{
            margin-right: 34px;
            padding-top: 5px;
        }
        .birthday select{
            margin-left: 10px;
        }
        .address label{
            padding-top: 5px;
            margin-right: 45px;
        }
        .email label{
            padding-top: 5px;
            margin-right: 64px;
        }
        .password label{
            padding-top: 5px;
            margin-right: 35px;
        }
        .phone label{
            padding-top: 5px;
            margin-right: 55px;
        }
        .submit{
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="title">
            <h2>Thông tin cá nhân</h2>
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
                        <?php
                            for ($i=1; $i < 13; $i++) { 
                                echo '<option value="'.$i.'">Month '.$i.'</option>';
                            }
                        ?>
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