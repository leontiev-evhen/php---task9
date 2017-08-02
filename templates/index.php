<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Course PHP -  Task 9</title>

        <!-- Bootstrap -->
        <link href="<?php echo PATH;?>css/bootstrap.min.css" rel="stylesheet">

        <!-- My style -->
        <link href="<?php echo PATH;?>css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container mt-50">

            <div class="row">
                <h2>Task 9</h2>
                <?php echo (isset($error) ? $error : '');?>

                <?php if (!empty($ParamsHtmlHelper)) { ?>

                    <div class="col-md-12 mt-50">
                        <h2>Params HtmlHelper</h2>
                        <?php echo $ParamsHtmlHelper;?>
                    </div>

                <?php } ?>

                <?php if (!empty($htmlSelect)) { ?>

                    <div class="col-md-12 mt-50">
                        <h2>Select</h2>
                        <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <?php echo $htmlSelect;?>
                        </div>
                    </div>

                <?php } ?>

                <?php if (!empty($htmlTable)) { ?>

                    <div class="col-md-12 mt-50">
                        <h2>Table</h2>
                        <?php echo $htmlTable;?>
                    </div>

                <?php } ?>

                <?php if (!empty($htmlList)) { ?>

                    <div class="col-md-12 mt-50">
                        <h2>List ul-ol</h2>
                        <?php echo $htmlList;?>
                    </div>

                <?php } ?>

                <?php if (!empty($htmlDlList)) { ?>

                    <div class="col-md-12 mt-50">
                        <h2>List dl</h2>
                        <?php echo $htmlDlList;?>
                    </div>

                <?php } ?>

                <?php if (!empty($htmlInput1)) { ?>

                    <div class="col-md-12 mt-50">
                        <h2>Input</h2>
                        <label><?php echo $htmlInput1;?>Input 1</label>
                        <label><?php echo $htmlInput2;?>Input 2</label>
                        <label><?php echo $htmlInput3;?>Input 3</label>
                    </div>

                <?php } ?>

            </div>

        </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="<?php echo PATH;?>js/bootstrap.min.js"></script>

    </body>
</html>

