<!DOCTYPE html>
<html>
    <body>
        <h1>
            <?php echo 'Hello World' ?> <!-- You can write php within html -->
        </h1>
        <p>Paragraph text</p>

        <?php 
            $x = 10; 
            $y = 5;

            echo '<p>' . $x . ', ' . $y . '</p>'; // You can also print content inside html elements 
            ?>
    </body>
</html> 