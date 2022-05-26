<?php

namespace JumasCola\ParamParse;

/**
 * Class ParamParse
 *
 * Class for registering app commands and parsing arguments for them.
 */
class ParamParse
{
    public function __construct()
    {
        $this->commands = [];
    }

    /**
     * registerCommand
     *
     * @return void
     */
    public function registerCommand($command, $handler, $description = "")
    {
        $this->commands[$command] = [
            "handler" => $handler,
            "description" => $description,
        ];
    }

    /**
     * parse
     *
     * Call handler function with parsed parameters.
     *
     * @return void
     */
    public function parse($args)
    {
        if (
            count($args) >= 2 and
            ($key = $args[1]) and
            array_key_exists($key, $this->commands)
        ) {
            $parser = new Parser($args);

            if (in_array("help", $parser->arguments)) {
                echo $this->commands[$key]["description"];
                return;
            }

            echo $this->commands[$key]["handler"]($parser);
            return;
        }

        foreach ($this->commands as $key => $val) {
            echo "$key - {$val["description"]}\n";
        }
    }
}
