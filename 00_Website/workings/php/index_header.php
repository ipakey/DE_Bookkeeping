    <header>

        <h1 class="dancing-script-yfke">Heading</h1>
        <div class="user-login-form">

        </div>
        <nav>
            <img class="pic-200" src="/assets/branding/rose_trans.png" alt="logo" />
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <div>
                <form action="/workings/includes/logIn.inc.php" method="post">
                    <input type="text" name="uidamail" placeholder="Username/ Email" />
                    <input type="password" name="pwd" placeholder="Password" />
                    <button type="submit" name="logIn-submit">Log In</button>
                </form>
                <a href="/workings/includes/signUp.php">Sign Up</a>
                <form action="/workings/includes/logOut.inc.php" method="post">
                    <button type="submit" name="logOut-submit">Log Out</button>
                </form>
            </div>

        </nav>
    </header>