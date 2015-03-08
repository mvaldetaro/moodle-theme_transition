<?php
/**
 * The maintenance layout.
 *
 * @package   theme_transition
 * @copyright 2015 Magno Valdetaro, magnovaldetaro.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_transition_get_html_for_settings($OUTPUT, $PAGE);

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=RobotoDraft:300,400,500|Source+Code+Pro:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

    <div id="page" class="container-fluid">
        <header id="page-header" class="clearfix">
            <?php echo $html->heading; ?>
        </header>
    </div>

    <div id="page" class="container-fluid">
        <div id="page-content" class="row-fluid">
            <section id="region-main" class="span12">
                <?php echo $OUTPUT->main_content(); ?>
            </section>
        </div>

    <footer id="page-footer">
        <?php
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
