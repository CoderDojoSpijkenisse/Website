<?php

namespace CoderDojo\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /******************
     * MEEHELPEN
     ******************/

    /**
     * @Route("/meehelpen/opstarten", name="setup")
     */
    public function setupAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Meehelpen/setup.html.twig');
    }

    /**
     * @Route("/meehelpen/mentor-worden", name="mentors")
     */
    public function mentorAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Meehelpen/mentor.html.twig');
    }

    /**
     * @Route("/meehelpen/materiaal", name="material")
     */
    public function materialAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Meehelpen/material.html.twig');
    }

    /******************
     * Samenwerkingen
     ******************/
    /**
     * @Route("/samenwerkingen/code-qube", name="codeqube")
     */
    public function codeQubeAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Samenwerkingen/codeqube.html.twig');
    }

    /**
     * @Route("/samenwerkingen/ziggo", name="ziggo")
     */
    public function ziggoAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Samenwerkingen/ziggo.html.twig');
    }

    /**
     * @Route("/samenwerkingen/eu-code-week", name="eucodeweek")
     */
    public function euCodeWeekAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Samenwerkingen/codeweekEU.html.twig');
    }

    /**
     * @Route("/samenwerkingen/boeken", name="books")
     */
    public function booksAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Samenwerkingen/books.html.twig');
    }

    /******************
     * De Stichting
     ******************/

    /**
     * @Route("/informatie/over-coderdojo", name="about")
     */
    public function aboutAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Achtergrond/about.html.twig');
    }

    /**
     * @Route("/informatie/over-de-stichting", name="foundation")
     */
    public function foundationAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Achtergrond/stichting.html.twig');
    }

    /**
     * @Route("/informatie/nieuwsbrief", name="newsletter")
     */
    public function newsletterAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Achtergrond/newsletter.html.twig');
    }

    /******************
     * SUPPORTING
     ******************/

    /**
     * @Route("/space-games", name="space-games")
     */
    public function spaceGamesAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Supporting/spaceGames.html.twig');
    }


    /**
     * @Route("/ziggodome", name="ZiggoDome")
     */
    public function ziggodomeAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:Supporting/ziggodome.html.twig');
    }

    /**
     * @Route("/survey", name="survey")
     */
    public function surveyAction()
    {
        return $this->render('CoderDojoWebsiteBundle:Pages:survey.html.twig');
    }
}
