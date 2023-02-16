<form method="post">
    <table width="500">
            <tr>
            <td><label>
                <input type="radio" name="RadioD" value="men_clothing" />
                Men Clothing</label></td>
            </tr>
            <tr>
            <td><label>
                <input type="radio" name="RadioD" value="women_clothing" />
                Women Clothing </label></td>
            </tr>
            <tr>
            <td><label>
                <input type="radio" name="RadioD" value="footwear" />
                Footwear</label></td>
            </tr>
            <td><label>
                <input type="radio" name="RadioD" value="gadgets" />
                Gadgets</label></td>
            </tr>
            <td><label>
                <input type="radio" name="RadioD" value="cosmetics" />
                Cosmetics</label></td>
            </tr>
        </table>
       <button type="submit" class="btn btn-primary" name="signup">Sell</button>
</form>

<?php
    if(isset($_POST["signup"])){
        $category = $_POST["RadioD"];
        echo $category;
    }
?>