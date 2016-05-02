<?php

class ScribdTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.scribd.com/doc/110799637/Synthesis-of-Knowledge-Effects-of-Fire-and-Thinning-Treatments-on-Understory-Vegetation-in-Dry-U-S-Forests',
            [
                'title' => 'Synthesis of Knowledge: Effects of Fire and Thinning Treatments on Understory Vegetation in Dry U.S. Forests',
                'imageWidth' => 111,
                'imageHeight' => 142,
                'type' => 'rich',
                'authorName' => 'Joint Fire Science Program',
                'authorUrl' => 'https://www.scribd.com/user/151878975/Joint-Fire-Science-Program',
                'providerName' => 'Scribd',
            ]
        );
    }
}
