<?php

declare(strict_types=1);

namespace App\Zoo;

abstract class Animal
{
    protected string $race;
    protected string $nom;
    protected string $locomotion;

    public function __construct(string $race, string $nom)
    {     
        $this->setRace($race);
        $this->setNom($nom);
    }

    public function identify(): string
    {
        return 'Je suis un '.$this->race.' et je m\'appelle '.ucfirst($this->nom);   
    }

    public function flee(): string
    {
        return ucfirst($this->nom).' vous remarque et se met à '.$this->locomotion.' pour s\'enfuir loin de vous';
    }

    abstract public function eat(): string;

    /**
     * Get the value of race
     *
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @param string $race
     *
     * @return self
     */
    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return ucfirst($this->nom);
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of locomotion
     *
     * @return string
     */
    public function getlocomotion(): string
    {
        return $this->locomotion;
    }

    /**
     * Set the value of locomotion
     *
     * @param string $locomotion
     *
     * @return self
     */
    public function setlocomotion(string $locomotion): self
    {
        $this->locomotion = $locomotion;

        return $this;
    }
}