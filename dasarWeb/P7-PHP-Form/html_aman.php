<!DOCTYPE html>
<html>
    <head>
        <title>HTML Injection</title>        
    </head>
    <body>
        <h2>Form Input PHP Injection</h2>
        <?php 
            $inputErr = "";
            $input = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["input"])){
                    $inputErr = "Inputan tidak boleh kosong!";
                } else {
                    $input = $_POST['input'];
                    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                    echo "Data berhasil disimpan!";
                }
            } 
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="input">Input:</label>
            <input type="text" name="input" id="input" value="<?php echo $input; ?>">
            <span class="error"><?php echo $inputErr; ?></span><br><br>
            
            <input type="submit" name="submit" value="Submit">
        </form>
        
    </body>
</html>
