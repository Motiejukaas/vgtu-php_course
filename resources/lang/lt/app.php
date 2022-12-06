<?php

return [
    'title' => 'VGTU IT Mokykla',
    'menu' => [
        'login' => 'Prisijungti',
        'logout' => 'Atsijungti',
        'about' => 'Apie mus',
        'contacts' => 'Kontaktai'
    ],
    'header' => [
        'main_page_title' => "VGTU IT Mokyklos Kursai"
    ],
    'login' => [
        'login_form' => 'Prisijungimas',
        'email' => 'El.paštas',
        'password' => 'Slaptažodis',
        'remember_me' => 'Prisiminti Mane',
        'login_button' => 'Prisijungti'
    ],
    'admin' => [
        'home' => [
            'home_dashboard' => 'Prietaisų skydelis',
            'home_title' => 'Dalyviai',
            'table' => [
                'course_id' => 'Kursas',
                'name' => 'Vardas',
                'surname' => 'Pavardė',
                'email' => 'El.paštas',
                'phone' => 'Telefono numeris',
                'birthdate' => 'Gimimo data'
            ]
        ],
        'create_course' => [
            'dropdown_title' => 'Kursų sąrašas',
            'title' => 'Kursai',
            'form' => [
                'name_lt' => 'Pavadinimas (LT)',
                'name_en' => 'Pavadinimas (EN)',
                'course' => 'Kursas',
                'price' => 'Kaina',
                'age' => 'Amžius',
                'beginning' => 'Pradžia',
                'duration' => 'Trukmė',
                'description_lt' => 'Aprašymas (LT)',
                'description_en' => 'Aprašymas (EN)',
                'save' => 'Išsaugoti',
                'dropdown' => [
                    'duration_1' => 'd.',
                    'duration_2' => 'sav.',
                    'duration_3' => 'mėn.',
                    'duration_4' => 'm.'
                ]
            ]
        ],
        'edit_pages' => [
            'dropdown_title' => 'Puslapiai',
            'save' => 'Save',
            'form' => [
                'contacts_lt' => 'Kontaktai (LT)',
                'about_lt' => 'Apie mus (LT)',
                'contacts_en' => 'Kontaktai (EN)',
                'about_en' => 'Apie mus (EN)'
            ]
        ]
    ],
    'table' => [
        'header' => [
            'course_beginning' => 'Pradžia',
            'course_duration' => 'Trukmė',
            'course_price' => 'Kaina',
            'course_age' => 'Amžius',
            'course_registration' => 'Registracija'
        ],
        'row' => [
            'duration_1' => 'd.',
            'duration_2' => 'sav.',
            'duration_3' => 'mėn.',
            'duration_4' => 'm.'
        ],
        'button_registration' => 'Registruotis',
    ],
    'registration_modal' => [
        'header' => 'Registracija',
        'header_success' => 'Registracija sėkminga!',
        'close' => 'Atšaukti',
        'save' => 'Registruotis',
        'form' => [
            'name' => 'Vardas',
            'surname' => 'Pavardė',
            'email' => 'El.paštas',
            'phone' => 'Telefono numeris',
            'birthdate' => 'Gimimo data'
        ],
        'spinner' => [
            'loading' => 'Kraunasi...',
            'please_wait' => 'Prašom palaukti'
        ]
    ]
];
