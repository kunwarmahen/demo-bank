<?php
    include "header.php";
    include "navbar.php";
?>

    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Bank at Your Fingertips.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form action="customer_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Enter your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Enter your Password" required>
                    </div>

                    <div class="flex-item">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<?php
    include "footer.php";
?>
