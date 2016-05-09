<?php require('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SCROLL DEMO 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="css/normalize.css" rel="stylesheet" media="all">
    <link href="css/styles.css" rel="stylesheet" media="all">
    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>
<body>
    <header role="banner" style="display: none;">
        <h1>Main Title</h1>
        <nav role="navigation">

        </nav>
    </header>

    <div class="wrap">
        <main role="main">
            <?php
                $colours = [
                    '#233B3D',
                    '#245750',
                    '#A2A586',
                    '#D6CEA7',
                    '#F16834'
                ];
                $colours = array_merge($colours, $colours, $colours, $colours);

                for ($x = 1; $x <= count($colours); $x++) {
            ?>
                <div
                    class="section"
                    id="section_<?php echo $x; ?>"
                    style="background-color: <?php echo $colours[$x-1]; ?>"
                    data-scroll="#section_<?php echo ($x % (count($colours)) + 1); ?>"
                >
                    <span class="number" style="color: <?php echo adjustBrightness($colours[$x-1], 10); ?>">
                        <?php echo $x; ?>
                    </span>
                    <span class="arrow" style="color: <?php echo adjustBrightness($colours[$x], 30); ?>">
                        <?php
                            if($x === count($colours) ) { ?>
                                &#9757;
                        <?php
                            }
                            else { ?>
                                &#9759;
                        <?php
                            }
                        ?>
                    </span>
                </div>
            <?php
                }
            ?>
        </main>
    </div>

    <footer role="contentinfo">
        <address>
          <a href="mailto:paul@pcraig3.ca">@pcraig3</a>
        </address>
    </footer>

    <script src="node_modules/sweet-scroll/sweet-scroll.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
