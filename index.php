<?php
require_once "parts/header.php";
require_once "parts/nav.php";?>
<div class="row">
    <div class="col-4">
        <form class="row g-3" method="post" action="home.php">
        <h3 class="display-3">Please Sign in!</h3>
            <div class="col-12">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="user" required>
            </div>
            <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pass" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Sign in</button>
            </div>
        </form>
    </div>
</div>
<?php require_once "parts/footer.php"?>
