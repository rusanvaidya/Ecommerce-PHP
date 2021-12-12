<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <?php include '../commonfiles/cssload.php' ?>
        <link rel="stylesheet" href="css/complain.css">
        <link rel="stylesheet" href="../static/css/menu.css">
    </head>
    <body>
        <?php include '../commonfiles/menu.php' ?>
        <div class="complain">
            <fieldset>
                <legend>Register Your Complain</legend>
                <form>
                    <input type="email" placeholder="Email">
                    <textarea placeholder="Write Your Complain"></textarea>
                    <button type="submit">Submit</button>
                </form>
            </fieldset>
            <div class="moredetails">
                <div>For More Detail Contact us on</div>
                <ul>
                    <li>info@hamrokirana.com</li>
                    <li>+9771-5200000</li>
                    <li>Kathmandu, Nepal</li>
                </ul>
            </div>
        </div>
        <?php include '../commonfiles/footer.php' ?>
    </body>
</html>