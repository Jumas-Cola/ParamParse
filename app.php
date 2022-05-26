<?php
require "vendor/autoload.php";

use JumasCola\ParamParse\ParamParse;

/**
 * Class App
 * @author yourname
 */
class App
{
    public function __construct($args)
    {
        $p = new ParamParse();
        $p->registerCommand("command_name", [$this, "handler"], "Some command");
        $p->parse($args);
    }

    /**
     * handler
     *
     * @return void
     */
    public function handler($args)
    {
        echo "\nCalled command: $args->command\n";

        if (!empty($args->arguments)) {
            echo "\nArguments:\n";
            foreach ($args->arguments as $value) {
                echo "\t-  $value\n";
            }
        }

        if (!empty($args->parameters)) {
            echo "\nOptions:\n";
            foreach ($args->parameters as $parameter => $options) {
                echo "\t-  $parameter\n";
                foreach ($options as $option) {
                    echo "\t\t-  $option\n";
                }
            }
        }
    }
}

new App($argv);
