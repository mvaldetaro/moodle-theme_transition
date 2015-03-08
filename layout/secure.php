<?php
/**
 * The secure layout.
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
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

    <?php echo $OUTPUT->standard_top_of_body_html() ?>

    <div id="page" class="container-fluid">
        <header role="banner" class="navbar navbar-default navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
            <nav role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="navbar-brand" href="<?php echo $CFG->wwwroot;?>">
                            <?php echo
                            format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                            ?>
                        </a>
                    </div>
                    <?php echo $OUTPUT->user_menu(); ?>
                    <div class="nav-collapse collapse">
                        <?php echo $OUTPUT->custom_menu(); ?>
                        <ul class="nav pull-right">
                            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <div id="page">

        <div id="page" class="container-fluid">
            <header id="page-header" class="clearfix">
                <?php echo $html->heading; ?>
            </header>
        </div>

        <div id="page" class="container-fluid">

            <div id="page-content" class="row-fluid">
                <div id="region-bs-main-and-pre" class="span9">
                    <div class="row-fluid">
                        <section id="region-main" class="span8 pull-right">
                            <?php echo $OUTPUT->main_content(); ?>
                        </section>
                        <?php echo $OUTPUT->blocks('side-pre', 'span4 desktop-first-column'); ?>
                    </div>
                </div>
                <?php echo $OUTPUT->blocks('side-post', 'span3'); ?>
            </div>

            <?php echo $OUTPUT->standard_end_of_body_html() ?>

        </div>

    </div>
</body>
</html>
