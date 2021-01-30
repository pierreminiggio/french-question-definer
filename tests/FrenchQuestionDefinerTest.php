<?php

namespace PierreMiniggio\FrenchQuestionDefinerTest;

use PHPUnit\Framework\TestCase;
use PierreMiniggio\FrenchQuestionDefiner\FrenchQuestionDefiner;

class FrenchQuestionDefinerTest extends TestCase
{

    public function testIsQuestion(): void
    {
        $tests = [
            ['Tutoriel PHP - Les nombres entiers (les int) - Apprendre PHP', false],
            ['Faut il être bon en maths pour devenir développeur ? Apprendre à coder', true],
            ['Stream Musique & Code ♥ Comment poser une question sur Quora (avec du code) - Node JS Web Scraping', false],
            ['Comment automatiser son compte Twitter', true],
            ['Quel framework choisir pour un développeur PHP ? Les 2 meilleurs frameworks Laravel et Symfony', true],
            ['Comment trouver une idée de projet de développement', true],
            ['Tutoriel Variables PHP et Fonctions PHP - Apprendre PHP', false],
            ['LENOVO IDEAPAD 3 Review - Retour d\'expérience après 1 mois d\'utilisation', false],
            ['Langages de programmation les plus populaires 1965 - 2019', false],
            ['Royalty Free Music - Dreamy Ukulele - Dreamy Music / Uplifting Music', false],
            ['League Of Legends M8 Speller Demo - League Of Legends Auto Caster', false],
            ['Comment scraper des publications Facebook (groupe Facebook) - Tutoriel Web Scraping Puppeteer', true],
            ['Comment créer un bot Facebook - Tutoriel Web Scraping Puppeteer', true],
            ['Comment installer PHP 8 - Apprendre PHP', true],
            ['Un jour dans la vie d\'un développeur confiné', false],
            ['Pourquoi apprendre à coder ? | Apprendre la programmation', true],
            ['Changement de State React ne fonctionne pas - Solution - React State Not Updating', false],
            ['Mise en place de la State Machine de formulaire - Live Coding', false],
            ['J\'implémente une State Machine en suivant le tuto de @Grafikart.fr - Robot3js - Live Coding', false],
            ['Lenovo Ideapad S145 Ryzen 7 - Mon nouveau PC portable #Shorts', false],
            ['Comment choisir son titre de CV Développeur - N\'ECRIS PAS DEVELOPPEUR FULL STACK !', true],
            ['Les meilleures chaînes Youtube de développeur ? @Grafikart.fr @Benjamin Code @Micode @Captain Dev...', false],
            ['Un développeur c\'est quoi ? Le questionnaire qui finance vos formations', true],
            ['Comment j\'ai automatisé mon TikTok (IL POSTE UN MEME PAR HEURE !)', false],
            ['Comment devenir Développeur PHP', true],
            ['Comment installer Sony Vegas Pro Gratuitement', true],
            ['Comment automatiser Sony Vegas Pro - Batch Rendering', true],
            ['Creation d\'une API Rest Laravel pour un jeu ! Route login - Live Coding', false],
            ['Creation d\'une API Rest Laravel pour un jeu ! Route register - Live Coding', false],
            ['Creation d\'une API Rest Laravel pour un jeu ! Doc Swagger OPEN API - Route register - Live Coding', false],
            ['Un bot qui joue à League Of Legends - League Of Legends Bot', false],
            ['Comment j\'ai codé un Bot League Of Legends - Comment développer un bot', true],
            ['Royalty Free Music - Awaken Dream - Dreamy Music / Uplifting Music', false],
            ['Comment résoudre un conflit sur Git - Comment merge sur Git', true],
            ['Comment Installer Git - Comment envoyer un fichier sur GitHub ?', true],
            ['Comment créer un compte GitHub - Comment créer un Repository Git', true],
            ['Comment fonctionne Git - Comment fonctionne GitHub', true],
            ['Comment j\'ai acheté 5 écrans pour 40€ - Comment trouver un écran pas cher pour coder', true],
            ['Apprendre à coder :  Le niveau minimum pour obtenir une mission dev back', false],
            ['Quelle formation de développeur choisir ? Université ou Titre RNCP ? - Formation Développeur Web', true],
            ['Commencer par HTML CSS ? (Réponse à Harry JMG & Benjamin Code) - APPRENDRE A CODER', false],
            ['DÉBUTANT en PROGRAMMATION, 3 choses que j\'aurais aimé savoir', false],
            ['Comment trouver un emploi rapidement grâce à LinkedIn', true],
            ['Comment devenir Développeur Web en 3 étapes', true],
            ['Où est ce que je suis passé ? Développement Web & Investissement Immobilier', false],
            ['I LEARNED MY FIRST PIANO SONG IN 55 HOURS - Yiruma River Flows In You', false],
            ['Royalty Free Music - Forward', false],
            ['Editing the sound of a toy piano using guitar pedals', false],
            ['Bientôt déménagé :P', false],
            ['Comment kite au Q click', true]
        ];

        $definer = new FrenchQuestionDefiner();

        foreach ($tests as $test) {
            list($title, $res) = $test;
            $message = $title . ' is' . (! $res ? ' not' : '') . ' a question !';
            $this->assertSame($res, $definer->isQuestion($title), $message);
        }
    }
}
