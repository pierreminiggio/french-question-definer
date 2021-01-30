<?php

namespace PierreMiniggio\FrenchQuestionDefiner;

class FrenchQuestionDefiner
{

    private static $firstQuestionWord = [
        'quel',
        'quelle',
        'quels',
        'quelles',
        'lequel',
        'laquelle',
        'lesquels',
        'lesquelles',
        'duquel',
        'desquels',
        'auquel',
        'auxquels',
        'qui',
        'quoi',
        'où',
        'que',
        'combien',
        'comment',
        'pourquoi',
        'quand',
        'faut-il',
    ];

    public function isQuestion(string $title): bool
    {
        $splitedTitle = explode(' ', $title);

        if (count($splitedTitle) === 1 || count($splitedTitle) === 0) {
            return false;
        }

        $firstWord = strtolower($splitedTitle[0]);
        $secondWord = strtolower($splitedTitle[1]);

        if (strpos(strtolower($title), 'c\'est quoi') !== false) {
            return true;
        }

        if ($firstWord === 'faut' && $secondWord === 'il') {
            return true;
        }

        if (! in_array($firstWord, static::$firstQuestionWord)) {

            return false;
        }

        foreach ($splitedTitle as $word) {
            if ($this->isAVerb($word)) {
                return true;
            }
        }

        foreach ($splitedTitle as $word) {
            if (substr($word, -1) !== 'e') {
                continue;
            }

            if ($this->isAVerb($word . 'r')) {
                return true;
            }
        }

        return false;
    }

    private function isAVerb(string $word): bool
    {
        $curl = curl_init('https://api.touslesverbes.com/verbs/exact-search/' . $word);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $res = ! empty(curl_exec($curl));
        curl_close($curl);

        return $res;
    }
}
