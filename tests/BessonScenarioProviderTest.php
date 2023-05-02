<?php

use Xylis\FakerCinema\Provider\BessonScenario;

class BessonScenarioProviderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function generatorIsWorking()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new BessonScenario($faker));

        $this->assertNotEmpty($faker->scenario);
        $this->assertNotEmpty($faker->basicScenario);
        $this->assertIsString($faker->scenario);
        $this->assertIsString($faker->basicScenario);

        $this->assertNotEmpty($faker->scenarios);
        $this->assertNotEmpty($faker->basicScenarios);
        $this->assertCount(3, $faker->scenarios);
        $this->assertCount(3, $faker->basicScenarios(3));
        $this->assertCount(6, $faker->scenarios(6));
        $this->assertCount(6, $faker->basicScenarios(6));

        $this->assertContainsOnly('string', $faker->scenarios);
        $this->assertContainsOnly('string', $faker->basicScenarios);

        $this->assertNotContains($faker->scenario(true), BessonScenario::actionHerosMechantConjug());
        $this->assertNotContains($faker->scenario(true), array('Durendal', 'cerveau', 'pour poursuivre', 'poursuivie par'));
    }
}