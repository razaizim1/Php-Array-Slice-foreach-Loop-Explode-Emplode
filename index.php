<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <?php

        $content = ['razai', 'zim'];
        foreach ($content as $new) {
            echo "$new <br>";
        }

        for ($i = 0; $i < count($content); $i++) {
            echo "$content[$i] <br>";
        }

        $cars = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        foreach ($cars as $key => $singleCar) {
            echo $singleCar[0] . ": " . "In Stock:" . $singleCar[1] . " Sold: " . "$singleCar[2]<br>";
            // echo ;
            // echo $singleCar[2];
        }

        $content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione unde ipsa repellat fugiat sapiente aspernatur, dignissimos aliquid reprehenderit adipisci in error, nemo distinctio aperiam ullam impedit suscipit sit esse facilis quibusdam illum minima quidem. Ullam dolores maxime alias eligendi. Possimus voluptatum quam ullam sed aliquid ad eum omnis labore modi ut minus unde officia quidem, cupiditate aspernatur dolore molestiae libero fuga  sapiente porro velit. Nemo perferendis nulla harum quas asperiores esse eum perspiciatis eveniet rem vero eius consequatur eaque doloremque cupiditate iusto incidunt tempora distinctio a ipsum, aspernatur repellendus! Esse dignissimos beatae itaque ipsum eos dolorum illo sed aperiam soluta perferendis asperiores voluptatum suscipit quidem sint repellat id illum, nobis a expedita sit temporibus in labore. Amet ducimus unde perferendis iure? Similique est eum quae aperiam sequi harum magni itaque!';

        // echo $newStr;


        function readMore($str, $limit)
        {
            $strToArray = explode(' ', $str);
            $arraySlice = array_slice($strToArray, 0, $limit);
            $newStr = implode(' ', $arraySlice);
            return $newStr;
        }
        echo readMore($content, 20);

        ?>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>