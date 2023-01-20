<?php

use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase{

        public function testHappyPath(){

            $sentence = 'hola como estas';

            $finalSentence = '';

            $sentence = explode(' ',strtoupper($sentence));

            array_walk($sentence, function (&$item){

                $item[0] = strtolower(str_split($item)[0]);

            });

            $finalSentence = implode(' ', $sentence);

            $this->assertEquals('hOLA cOMO eSTAS', $finalSentence);

        }
}