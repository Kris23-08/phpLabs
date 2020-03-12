<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container" style="margin-top: 30px;">
        <?php
            $books = array(
                "book1" => array(
                    "title" => "War and peace",
                    "pages_number" => 3000
                ),
                "book2" => array(
                    "title" => "Green Mile",
                    "pages_number" => 1000
                ),
                "book3" => array(
                    "title" => "Something else",
                    "pages_number" => 500
                ),
                "book4" => array(
                    "title" => "PHP for beginners",
                    "pages_number" => 323000
                ),
                "book5" => array(
                    "title" => "Last book",
                    "pages_number" => 10
                ),
                "book6" => array(
                    "title" => "Alphabet",
                    "pages_number" => 32
                ),
                "book7" => array(
                    "title" => "Some brochure",
                    "pages_number" => 100
                ),
                "book8" => array(
                    "title" => "Not sure what to type here",
                    "pages_number" => 10
                ),
            );

            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            // $perPage = isset($_GET['per-page']) ? (int)$_GET['per-page'] : 3;
            $perPage = 3;

            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

            $books = array_slice($books, $page, $perPage );


            foreach( $books as $book): 
            
        ?>

            <ul>
                <li>
                    <?php echo $book['title']; ?>
                </li>
            </ul>

        <?php 
            endforeach;
        ?>
    </div>

</body>
</html>