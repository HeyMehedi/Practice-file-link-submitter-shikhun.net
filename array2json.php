<?php
$array = [
    '0' => [
        'Basic'                                                                                                                                                                    => [
            'HTML Crash Course For Absolute Beginners',
            'CSS Crash Course For Absolute Beginners',
            'Flexbox CSS In 20 Minutes',
            'How to create free website on Github',
            'Introduction to Github Desktop',
            'Create a Website With Video Background | HTML & CSS',
        ],
        'Recorded Class'                                                                                                              => [
            'আমাদের প্লাটফর্ম থেকে শেখার গাইডলাইন - ফেসবুক লাইভ',
            'ওরিয়েন্টেশন এবং পরিচিত হওয়া সবার সাথে',
            '2021 01 11 Live class 2 - Basic Web Development',
            '2021-01-17 shikhun.net - basic web development',
        ],
        'Proffessionl' => [
            'Orientation - কি কি থাকবে পরের অংশগুলতে',
        ],
    ],
];

print_r(json_encode($array, JSON_INVALID_UTF8_SUBSTITUTE));
