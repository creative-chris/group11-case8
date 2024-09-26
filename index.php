<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
        <!-- Outlines css is ony for showing content outlines. Remove if not needed -->
        <!-- <link href="css/outlines.css" type="text/css" rel="stylesheet" media="screen"/> -->
        <!-- Link here your personal css & JS -->
    </head>
    <body>
        <script defer></script>
        <div id="container">
            <header>
                <!-- <php include("header.php"); ?> -->
            </header>
            <main>
                <!-- All pieces of the landing page are sectionized from top to bottom -->
                <div id="section1" class="section">
                    <div id="inner-section1" class="inner-section">
                        <?php include("section1.php"); ?>
                    </div>
                </div>
                <div id="section2" class="section">
                    <div id="inner-section2" class="inner-section">
                        <?php include("section2.php"); ?>
                    </div>
                </div>
                <div id="section3" class="section">
                    <div id="inner-section3" class="inner-section">
                        <?php include("section3.php"); ?>
                    </div>
                </div>
                <div id="section4" class="section">
                    <div id="inner-section4" class="inner-section">
                        <?php include("section4.php"); ?>
                    </div>
                </div>
            </main>
            <footer></footer>
        </div>
    </body>
</html>