<html>
    <head>
        <title>C2C Shop</title>
	<style>
	li {
	  color:red;
	}
	</style>
    </head>

    <body>
        <h1>Welcome to C2C, but CUSTOM</h1>
        <ul>
            <?php

            $json = file_get_contents('http://pyapp/');
            $obj = json_decode($json);

            $products = $obj->products;

            foreach ($products as $product) {
                echo "<li>$product</li>";
            }

            ?>
        </ul>
    </body>
</html>
