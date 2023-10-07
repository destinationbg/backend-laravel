<?php

declare(strict_types=1);

return [
    'auth' => [
        'login' => [
            'title' => 'Sign-In',
            'description' => 'Welcome! Please enter your details to continue.',
        ],
        'register' => [
            'title' => 'Registration',
            'description' => 'You need to register to access the panel.',
        ],
        'forgot_password' => [
            'title' => 'Forgot Password',
            'description' => 'Please enter your details so we can send you an email with a link to reset your password and choose a new one.',
        ],
        'message' => [
            'already_have_account' => 'Already have an account?',
            'dont_have_account' => "Don't have an account yet?",
            'failed' => 'These credentials do not match our records.',
            'password' => 'The provided password is incorrect.',
            'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
        ],
    ],
];
