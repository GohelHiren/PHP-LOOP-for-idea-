<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        div {
            background-color: black;
            height: 50px;
            width: 50px;
            display: inline-block;

        }

        table td {
            border: 1px solid black;
            padding: 10px;
            
        }
    </style>
</head>

<body>
    <table border="0" cellspacing="10">
        <tr>
            <td>
                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($i . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td>
                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($j);
                        }
                        echo ("<br>");
                    }

                    ?>
                </h1>
            </td>

            <td>
                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($k = $i; $k <= 5; $k++) {
                            echo ("&nbsp;&nbsp;");
                        }
                        for ($j = 1; $j <= $i; $j++) {
                            echo ($j . "&nbsp;&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td>

                <h1>
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("<div></div>" . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td>
                <h1>
                    <?php
                    for ($i = 5; $i >= 1; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("<div></div>" . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td>

                <h1>
                    <?php
                    
                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= 5 - $i; $j++) {
                            echo "&nbsp;&nbsp;&nbsp;";
                        }
                        for ($k = 1; $k <= $i; $k++) {
                            echo "<div></div>&nbsp;";
                        }
                        echo "<br />";
                    } ?>
                </h1>
            </td>

        </tr>
        <tr>
            <td>
                <h1>
                    <?php

                    for ($i = 1; $i <= 6; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("<div></div>" . "&nbsp;");
                        }
                        echo ("<br>");
                    }

                    for ($i = 5; $i >= 1; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("<div></div>" . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td>
                <h1>
                    <?php
                    for ($i = 5; $i >= 2; $i--) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("<div></div>" . "&nbsp;");
                        }
                        echo ("<br>");
                    }

                    for ($i = 1; $i <= 5; $i++) {
                        for ($j = 1; $j <= $i; $j++) {
                            echo ("<div></div>" . "&nbsp;");
                        }
                        echo ("<br>");
                    }
                    ?>

                </h1>
            </td>

            <td>

                <h1>
                    <?php
                    $size = 5;
                    for ($i = 1; $i <= $size; $i++) {
                        for ($j = 1; $j <= $size - $i; $j++) {
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                        for ($k = 1; $k <= $i; $k++) {
                            echo "<div></div>&nbsp;";
                        }
                        echo "<br />";
                    } ?>
                    <?php
                    $size = 5;
                    for ($i = $size; $i >= 1; $i--) {
                        for ($j = 1; $j <= $size - $i; $j++) {
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                        for ($k = 1; $k <= $i; $k++) {
                            echo "<div></div>&nbsp;";
                        }
                        echo "<br />";
                    } ?>
                </h1>
            </td>
        </tr>
        <tr>
            <td>
                <h1>
                    <?php
                    for ($i = 65; $i <= 69; $i++) {
                        for ($j = 65; $j <= $i; $j++) {
                            echo chr($j);
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td>
                <h1>
                    <?php
                    $k = chr(65);
                    for ($i = 65; $i <= 69; $i++) {
                        for ($j = 65; $j <= $i; $j++) {
                            echo (" " . $k);
                            $k++;
                        }
                        echo ("<br>");
                    }
                    ?>
                </h1>
            </td>
            <td>
                <h1>
                <?php
                  
                    for ($i = 1; $i <= 5; $i++) {
                        for ($k = $i; $k <= 5; $k++) {
                            echo ("&nbsp;&nbsp;");
                        }
                        for ($j = 1; $j <= $i; $j++) {
                            echo (1 . "&nbsp;&nbsp;");
                        }
                        echo ("<br>");
                    } 
                    ?>
                </h1>
            </td>
        </tr>
    </table>




</body>

</html>