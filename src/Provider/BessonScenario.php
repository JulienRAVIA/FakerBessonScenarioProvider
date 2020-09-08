<?php

namespace Xylis\FakerCinema\Provider;

use Faker\Provider\Base as FakerProvider;

class BessonScenario extends FakerProvider
{
    protected static $basicScenarios = array(
        '{{ heroCostaud }} {{ actionVoiture }} pour poursuivre {{ mechants }}',
        '{{ heroCostaud }} {{ actionVoiture }} pour poursuivre {{ mechants }} en {{lieu }}',
        '{{ heroCostaud }} {{ actionHerosMechant }} {{ mechants }} en {{ lieuVoiture }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} en {{ lieuVoiture }} poursuivie par {{ mechants }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} poursuivie par {{ groupeMechants }} 
        en {{ lieuVoiture }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} en {{ lieuVoiture }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} dans une Audi, et il {{ actionHerosMechantConjug }} 
        {{ mechants }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} {{ sortVictime }} en {{ lieuVoiture }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} {{ sortVictime }} par {{ mechants }} en {{ lieu }}',
        '{{ heroCostaud }} {{ actionHeroVictime }} {{ victime }} {{ sortVictime }} par {{ mechants }}',
        '{{ heroCostaud }} court après {{ groupeMechants }} mongoliens qui sautent partout'
    );

    protected static $scenarios = array(
        'Un Transporteur {{ actionTransporteur }} {{ victimeTransporteur }} en {{ voiture }} poursuivie par 
        {{ mechants }}',
        'Un Transporteur {{ actionTransporteur }} {{ victimeTransporteur }} en {{ voiture }} poursuivie par 
        {{ mechants }} en {{ lieu }}',
        'Un Transporteur {{ actionTransporteur }} {{ victimeTransporteur }} en {{ voiture }} poursuivie par 
        {{ groupeMechants }} en {{ lieuVoiture }}',
        'Un Transporteur {{ actionTransporteur }} {{ victimeTransporteur }} en {{ lieuVoiture }} poursuivie par 
        {{ groupeMechants }} en {{ voiture }}',
        '{{ heroCostaud }} {{ actionVoiture }} pour poursuivre {{ groupeMechants }} qui {{ actionMechantVictime }}
         {{ victime }} en {{ lieu }}',
        '{{ heroCostaud }} {{ actionVoiture }} en {{ lieu }} pour {{ actionHerosMechantConjug }} {{ groupeMechants }} 
        en {{ voiture }}',
        '{{ heroCostaud }} fait une poursuite en {{ voiture }} avec {{ mechants }}',
        'Durendal (@CinemaDurendal) sent une larme couler sur sa joue et fait une poursuite en clé USB avec 
        {{ groupeMechants }}',
        'Durendal (@CinemaDurendal) sent une larme couler sur sa joue et fait une poursuite en {{ lieuVoiture }} 
        avec {{ groupeMechants }}',
        '{{ heroCostaud }} utilise 10% de son cerveau pour {{ actionHerosMechantConjug }} {{ mechants }}',
        '{{ heroCostaud }} utilise 10% de son cerveau et {{ actionVoiture }} pour {{ actionHerosMechantConjug }} 
        {{ groupeMechants }}',
        '{{ heroCostaud }} utilise 10% de son cerveau et {{ actionVoiture }} pour {{ actionHerosMechantConjug }} 
        {{ groupeMechants }} en {{ lieu }}',
    );

    protected static $herosCostaud = array(
        'Léon', 'Un flic', 'Nikita', 'Un Yamakasi', 'Bruce Willis', 'Un tueur a gages', 'Un chauffeur de Taxi',
        'Liam Neeson', 'Un flic déguisé en racaille', 'Jean Reno', 'Un Dauphin tueur à gages'
    );

    protected static $victime = array(
        'une pute', 'une chinoise', 'une pute devenue Agent secret', 'un chinoise déguisée en pute',
        'une pute déguisée en chinoise'
    );

    protected static $mechants = array(
        'des ninjas', 'des yamakasi', 'des chinois', 'des chinois (ça coute moins cher)', 'des roumains',
        'des méchants', 'des chinois déguisés en Yamakasi', 'des chinois déguisés en Ninjas',
        'des chinois déguisés en Racailles', 'des chinois déguisés en Roumains', 'des chinois déguisés en Père Noel'
    );

    protected static $mechant = array(
        'un chinois', 'un yamakasi', 'une racaille', 'un gros black', 'un ninja', 'un roumain', 'un flic',
        'un chinois déguisé en Ninja', 'un chinois déguisé en Yamakasi', 'un chinois déguisé en gros black',
        'un chinois déguisé en roumain', 'un chinois déguisé en racaille', 'un chinois déguisé en père noel',
        'un gros black déguisé en Yamakasi', 'un gros black déguisé en Ninja', 'un gros black déguisé en racaille',
        'un gros black déguisé en chinois', 'un gros black déguisé en roumain', 'un gros black déguisé en père noel',
        'une racaille déguisée en Yamakasi', 'une racaille déguisée en Ninja', 'une racaille déguisée en roumain',
        'une racaille déguisée en chinois', 'une racaille déguisée en chinois', 'un roumain déguisé en père noel',
        'un roumain déguisé en Yamakasi', 'un roumain déguisé en Ninja', 'un roumain déguisé en Chinois',
        'un roumain déguisé en gros black', 'un roumain déguisé en racaille', 'un roumain déguisé en père noel',
    );

    protected static $lieu = array(
        'banlieue', 'Albanie', 'Province'
    );

    protected static $voiture = array(
        'Audi', 'Taxi'
    );

    protected static $actionVoiture = array(
        'conduit une Audi', 'conduit un Taxi'
    );

    protected static $actionHerosVictime = array(
        'protège', 'sauve',
    );

    protected static $actionHerosMechant = array(
        'tabasse', 'poursuit', 'pète la gueule à',
    );

    protected static $actionHerosMechantConjug = array(
        'tabasser', 'poursuivre', 'pèter la gueule à'
    );

    protected static $sortVictime = array(
        'poursuivie', 'enlevée', 'kidnappée'
    );

    protected static $actionMechantVictime = array(
        'ont kidnappé', 'ont enlevé', 'sequestrent'
    );

    public static function heroCostaud()
    {
        return static::randomElement(static::$herosCostaud);
    }

    public static function mechants()
    {
        $mechants = array_merge(static::$mechant, static::$mechants);
        shuffle($mechants);

        return static::randomElement($mechants);
    }

    public static function groupeMechants()
    {
        return static::randomElement(static::$mechants);
    }

    public static function victime()
    {
        return static::randomElement(static::$victime);
    }

    public static function victimeTransporteur()
    {
        return static::randomElement(array('une chinoise', 'une pute'));
    }

    /**
     * @example "tabasse"
     */
    public static function actionHerosMechant()
    {
        return static::randomElement(static::$actionHerosMechant);
    }

    /**
     * @example "transporte"
     */
    public static function actionTransporteur()
    {
        return static::randomElement(array('transporte', 'protège'));
    }

    public static function sortVictime()
    {
        return static::randomElement(static::$sortVictime);
    }

    /**
     * @example  'ont enlevé'
     */
    public static function actionMechantVictime()
    {
        return static::randomElement(static::$actionMechantVictime);
    }

    /**
     * @example 'conduit un Taxi'
     */
    public static function actionVoiture()
    {
        return static::randomElement(static::$actionVoiture);
    }

    /**
     * @example "sauve"
     */
    public static function actionHeroVictime()
    {
        return static::randomElement(static::$actionHerosVictime);
    }

    public static function actionHerosMechantConjug()
    {
        return static::randomElement(static::$actionHerosMechantConjug);
    }

    public static function mechant()
    {
        return static::randomElement(static::$mechant);
    }

    public static function lieu()
    {
        return static::randomElement(static::$lieu);
    }

    public static function voiture()
    {
        return static::randomElement(static::$voiture);
    }

    public static function lieuVoiture()
    {
        $lieuxVoiture = array_merge(static::$lieu, static::$voiture);

        return static::randomElement($lieuxVoiture);
    }

    // Scenarios generators

    /**
     * @param bool $withBasic
     * @return string
     */
    public function scenario($withBasic = true)
    {
        $scenarios = ($withBasic === true)
            ? array_merge(static::$scenarios, static::$basicScenarios)
            : static::$scenarios
        ;

        return $this->generator->parse(static::randomElement($scenarios));
    }

    /**
     * @return string
     */
    public function basicScenario()
    {
        return $this->scenario(true);
    }

    /**
     * @param int $count
     * @return array
     */
    public function basicScenarios($count = 3)
    {
        $scenarios = array();

        for ($i = 0; $i < $count; $i++) {
            $scenarios[] = $this->basicScenario();
        }

        return $scenarios;
    }

    /**
     * @param bool $withBasic
     * @param int $count
     * @return array
     */
    public function scenarios($count = 3, $withBasic = true)
    {
        $scenarios = array();

        for ($i = 0; $i < $count; $i++) {
            $scenarios[] = $this->scenario($withBasic);
        }

        return $scenarios;
    }
}
