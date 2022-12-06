<?php

return [
    'title' => 'VGTU IT School',
    'menu' => [
        'login' => 'Login',
        'logout' => 'Logout',
        'about' => 'About us',
        'contacts' => 'Contacts'
    ],
    'header' => [
        'main_page_title' => "VGTU IT School Courses"
    ],
    'login' => [
        'login_form' => 'Login',
        'email' => 'E-mail',
        'password' => 'Password',
        'remember_me' => 'Remember Me',
        'login_button' => 'Login'
    ],
    'admin' => [
        'home' => [
            'home_dashboard' => 'Dashboard',
            'home_title' => 'Participants',
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
            'dropdown_title' => 'Courses list',
            'title' => 'Courses',
            'form' => [
                'name_lt' => 'Name (LT)',
                'name_en' => 'Name (EN)',
                'course' => 'Course',
                'price' => 'Price',
                'age' => 'Age',
                'beginning' => 'Beginning date',
                'duration' => 'Duration',
                'description_lt' => 'Description (LT)',
                'description_en' => 'Description (EN',
                'save' => 'Save',
                'dropdown' => [
                    'duration_1' => 'd.',
                    'duration_2' => 'wk.',
                    'duration_3' => 'mos.',
                    'duration_4' => 'yr.'
                ]
            ]
        ],
        'edit_pages' => [
            'dropdown_title' => 'Pages',
            'save' => 'Save',
            'form' => [
                'contacts_lt' => 'Contacts (LT)',
                'about_lt' => 'About us (LT)',
                'contacts_en' => 'Contacts (EN)',
                'about_en' => 'About us (EN)'
            ]
        ]
    ],
    'table' => [
        'header' => [
            'course_beginning' => 'Beginning date',
            'course_duration' => 'Duration',
            'course_price' => 'Price',
            'course_age' => 'Age',
            'course_registration' => 'Registration'
        ],
        'row' => [
            'duration_1' => 'd.',
            'duration_2' => 'wk.',
            'duration_3' => 'mos.',
            'duration_4' => 'yr.'
        ],
        'button_registration' => 'Sign up',
    ],
    'registration_modal' => [
        'header' => 'Registration',
        'header_success' => 'Registration successful!',
        'close' => 'Cancel',
        'save' => 'Register',
        'form' => [
            'name' => 'Name',
            'surname' => 'Last name',
            'email' => 'E-mail',
            'phone' => 'Phone number',
            'birthdate' => 'Date of birth'
        ],
        'spinner' => [
            'loading' => 'Loading...',
            'please_wait' => 'Please wait'
        ]
    ]
];
