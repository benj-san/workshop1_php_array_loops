<?php

$gender = $_GET['gender'];

    $wildersByGender = [
        'female' => [
            'clemence',
            'Marceline',
            'Madjoula',
            'Margot',
            'najat',
            'sophie',
            'Orianne',
            'marie'
        ],
        'male' => [
            'Jean-Roch',
            'rémi',
            'Grégoire',
            'Nathan',
            'jérémy',
            'ryad',
            'Valentin l\'autre'
        ]
    ];

var_dump($wildersByGender[$_GET['gender']]);
