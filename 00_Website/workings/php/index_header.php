    <header>
        <nav>
            <a>
                <img class="pic-200" src="./assets/branding/rose_trans.png" alt="logo" />
            </a>
            <h1>Heading of main page</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="userForm">
                <form class="form-page" action="/workings/includes/logIn.inc.php" method="post">
                    <input class="form-input" type="text" name="uidamail" placeholder="Username/ Email" />
                    <input class="form-input" type="password" name="pwd" placeholder="Password" />
                </form>

                <div class="log-in-form-l2">
                    <button type="submit" name="logIn-submit">Log In</button>
                    <a href="workings/php/signUp.php">Sign Up</a>

                    <form action="/workings/includes/logOut.inc.php" method="post">
                        <button type="submit" name="logOut-submit">Log Out</button>
                    </form>
                </div>

            </div>

        </nav>
    </header>