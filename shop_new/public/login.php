    <div class="content">
        <div class="right_block">
        <?
        if(isset($_SESSION[login]) && isset($_SESSION[password])){
            echo "Wellcome, ".$_SESSION[login];
        }else{
           echo "<h1>Enter</h1><hr>";
           echo $message?$message:"";?>
            <form method="post">
                <p>Login: <input type="text" name="login" maxlength="30" placeholder="Enter your login" autofocus required></p>
                <p>Password: <input type="password" minlength="2" name="password" placeholder="Enter your password" required></p>
                <input type="submit" name="enter" value="Войти" ">
            </form>
        <?}?>
    </div>
</div>