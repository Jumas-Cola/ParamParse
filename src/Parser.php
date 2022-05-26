<?php

namespace JumasCola\ParamParse;

/**
 * Class Parser
 *
 * Parse arguments to array.
 */
class Parser
{
    public function __construct($args)
    {
        $this->arguments = [];
        $this->parameters = [];
        $this->command = $args[1];

        self::parseArgs(array_slice($args, 2));
    }

    /**
     * parseArgs
     *
     * @return void
     */
    public function parseArgs($args)
    {
        foreach ($args as $arg) {
            preg_match("/\[.+=.+\]/", $arg, $matches);

            if (!empty($matches)) {
                $paramArr = explode("=", trim($arg, "[]"));
                if (array_key_exists($paramArr[0], $this->parameters)) {
                    $this->parameters[$paramArr[0]][] = $paramArr[1];
                } else {
                    $this->parameters[$paramArr[0]] = [$paramArr[1]];
                }
                continue;
            }

            $this->arguments[] = trim($arg, "{}");
        }
    }
}
