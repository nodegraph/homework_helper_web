<?php

// header


// index
$home = [
    "title" => "Finish <span class='text-blue-600'>homework</span> fast and boost your <span class='text-blue-600'>grades</span> sky high",
    "description" => "Homework Helper is your friendly AI tutor. Take a photo, take a screenshot, use your voice, type or handwrite to get real-time solutions and help writing essays.",
    // "screenshot" => "/assets/main_screen.png",
    "screenshots" => [
        "/assets/main_screen.png",
        "/assets/session_screen.png",
        "/assets/calculus_question.png",
        "/assets/trig_question.png",
    ],
];

// common
$common = [
    'appStoreUrl' => "https://apps.apple.com/us/app/homework-helper-24-7/id6756083397",
    'googlePlayUrl' => "https://play.google.com/store/apps/details?id=ing.omat.hw_helper", // could be null
    'microsoftStoreUrl' => "https://apps.microsoft.com/detail/9PF610SJ0FWF",
    'chromeWebStoreUrl' => "https://chromewebstore.google.com/detail/homework-helper/omedkmkklimebcbencalahkfjfkoempn",
    'tryNowUrl' => "https://domyhome.work/MainHWHelperPage",
    'appName' => "Homework Helper",
    'appVersion' => "1.0.0",
    'appTitle' => "Improve your grades and finish homework faster",
    'appDescription' => "Homework Helper is your friendly AI tutor. Take a photo, take a screenshot, use your voice, type or handwrite to get real-time solutions and help writing essays.",
    'appRatingAppStore' => [
        'totalReviews' => 10,
        'rating' => 4.5,
    ],
    'appRatingGooglePlay' => [
        'totalReviews' => 10,
        'rating' => 4.5,
    ], // could be null
    'appIcon' => "/assets/icon-foreground.png",
    'supportEmail' => "aut@omat.ing",
    'screenshotRoundedCorners' => true, // Set to false for sharp corners
];


$featuresIcons = [
    "title" => "Key Features",
    "description" => "We don't just give answers—we help you master the material with clear, step-by-step guidance.",
    "featuresList" => [
        [
            "title" => "Smart AI Tutor",
            "description" => "A friendly, intelligent agent customized to answer your specific questions.",
            "icon" => "psychology",
        ],
        [
            "title" => "Multi-Modal Input",
            "description" => "Communicate the way you want—use voice, text, photos, or screenshots.",
            "icon" => "perm_media",
        ],
        [
            "title" => "Step-by-Step Solutions",
            "description" => "Detailed breakdowns that explain the \"how\" and \"why\" behind every answer.",
            "icon" => "tips_and_updates",
        ],
        [
            "title" => "Essay & Writing Support",
            "description" => "Generate thoughtful, well-structured essays and writing assistance.",
            "icon" => "edit_note",
        ],
        [
            "title" => "Interactive Deep Dives",
            "description" => "Chat with the AI to explore topics further or request alternative solving methods.",
            "icon" => "forum",
        ],
        [
            "title" => "Always Available",
            "description" => "Get expert help anytime, whenever you need it.",
            "icon" => "schedule",
        ],
        [
            "title" => "Large Memory Context",
            "description" => "Experience seamless learning continuity. Our AI recalls your past questions and images, ensuring every answer builds upon your unique learning journey.",
            "icon" => "history",
        ],
        [
            "title" => "100% Free to Use",
            "description" => "Premium education, zero cost. Access powerful AI tutoring and unlimited solutions completely free—no subscriptions, no hidden fees.",
            "icon" => "money_off",
        ],
    ]
];

$ratings = [
    "title" => "What our users say",
    "description" => "Join thousands of students who have improved their grades and mastered complex subjects.",
    "ratingsList" => [
        [
            "title" => "Sarah M.",
            "description" => "I was struggling with Calculus, but this app explains every step clearly. It's like having a tutor in my pocket! 👌",
            "rating" => 5,
            "image" => null,
        ],
        [
            "title" => "James T.",
            "description" => "Great app for checking my history essays. It gives really constructive feedback on structure and grammar.",
            "rating" => 5,
            "image" => null,
        ],
        [
            "title" => "Emily R.",
            "description" => "Very useful and simple to use. Just snap a picture and get the answer. Highly recommend! ✨",
            "rating" => 4,
            "image" => null,
        ],
        [
            "title" => "Michael B.",
            "description" => "I think it's the best homework helper out there. The AI explains concepts so well, clean user experience, light ⭐",
            "rating" => 5,
            "image" => null,
        ],
    ]
];

$subjectAreas = [
    "title" => "Comprehensive Subject Coverage",
    "description" => "From Kindergarten basics to University-level complexities, we cover it all.",
    "subjects" => [
        ["title" => "🧮 Math", "description" => "Algebra, Geometry, Calculus, Trigonometry, Linear Algebra, Differential Equations."],
        ["title" => "⚛️ Physics", "description" => "Mechanics, Thermodynamics, Electromagnetism, Optics, Quantum Physics."],
        ["title" => "🧬 Biology", "description" => "Cell Biology, Genetics, Evolution, Ecology, Anatomy, Physiology."],
        ["title" => "🧪 Chemistry", "description" => "Organic, Inorganic, Physical, Analytical, Biochemistry."],
        ["title" => "📊 Statistics", "description" => "Probability, Data Analysis, Regression, Hypothesis Testing."],
        ["title" => "💻 Computer Science", "description" => "Programming (Python, Java, C++), Algorithms, Data Structures."],
        ["title" => "🌍 History", "description" => "World History, US History, European History, Ancient Civilizations."],
        ["title" => "📚 Literature", "description" => "Literary Analysis, Poetry, Drama, Essay Writing, Grammar."],
        ["title" => "💰 Economics", "description" => "Microeconomics, Macroeconomics, Finance, International Trade."],
        ["title" => "🧠 Psychology", "description" => "Cognitive, Developmental, Social, Abnormal Psychology."],
        ["title" => "🏛️ Political Science", "description" => "Government, International Relations, Public Policy."],
        ["title" => "🗺️ Geography", "description" => "Physical, Human, Regional Geography, Cartography."],
        ["title" => "🗣️ Languages", "description" => "English, Spanish, French, German, Mandarin, and more."],
        ["title" => "🏗️ Engineering", "description" => "Civil, Mechanical, Electrical, Chemical Engineering concepts."],
        ["title" => "💼 Business", "description" => "Marketing, Management, Entrepreneurship, Business Law."],
        ["title" => "📉 Accounting", "description" => "Financial Accounting, Managerial Accounting, Auditing."],
        ["title" => "🎨 Art & Music", "description" => "Art History, Music Theory, Composition."],
        ["title" => "🤔 Philosophy & Sociology", "description" => "Ethics, Logic, Social Structures, Cultural Studies."],
    ]
];

$demoVideos = [
    "title" => "See it in Action",
    "description" => "Watch how Homework Helper works on Mobile and Desktop platforms.",
    "videos" => [
        [
            "title" => "Mobile",
            "url" => "https://www.youtube.com/embed/hQ0WXiHwEsA",
            "paddingBottom" => "177.78%", // 9:16 aspect ratio
            "maxWidth" => "320px"
        ],
        [
            "title" => "Desktop",
            "url" => "https://www.youtube.com/embed/zV1zWcRxJd8",
            "paddingBottom" => "56.25%", // 16:9 aspect ratio
            "maxWidth" => "600px"
        ]
    ]
];

$bottomCta = [
    "title" => "Why Homework Helper?",
    "description" => "Versatile, Comprehensive, Intuitive, Instant, and Educational. Join thousands of students mastering their studies.",
];


// footer
$footer = [
    'description' => "Homework Helper is your friendly AI tutor. Take a photo, take a screenshot, use your voice, type or handwrite to get real-time solutions and help writing essays.",
    'navigation' => [
        [
            "title" => "FAQs",
            "link" => "/faq.php",
            "isExternal" => false,
        ],
        [
            "title" => "Contact",
            "link" => "/contact.php",
            "isExternal" => false,
        ],
        // [
        //     "title" => "Feature Request",
        //     "link" => "https://subfox.canny.io/feature-requests",
        //     "isExternal" => true,
        // ],
        // [
        //     "title" => "Press Kit",
        //     "link" => "/assets/press-kit.zip",
        //     "isExternal" => true,
        // ],
        // [
        //     "title" => "Claim Reward",
        //     "link" => "/claim-reward.php",
        //     "isExternal" => false,
        // ]
    ],
    'socials' => [
        [
            "title" => "Reddit",
            "link" => "https://www.reddit.com/r/subfox",
            "isExternal" => true,
        ],
        [
            "title" => "X",
            "link" => "https://x.com/subfoxapp",
            "isExternal" => true,
        ],
        [
            "title" => "GitHub",
            "link" => "https://github.com/subfoxapp",
            "isExternal" => true,
        ],
        [
            "title" => "Youtube",
            "link" => "https://youtube.com/@subfoxapp",
            "isExternal" => true,
        ],


    ],
    "legal" => [
        [
            "title" => "Privacy Policy (Android)",
            "link" => "/privacy-policy-android.php",
            "isExternal" => false,
        ],
        [
            "title" => "Privacy Policy (iOS)",
            "link" => "/privacy-policy-ios.php",
            "isExternal" => false,
        ],

        // [
        //     "title" => "Terms of Service",
        //     "link" => "/terms-of-services.php",
        //     "isExternal" => false,
        // ],


    ],
    "copyright" => "© 2025 Homework Helper. All rights reserved.",
    "message" => "Palo Alto, California.",
];


// faqs
$faqs = [
    "title" => "Frequently Asked Questions",
    "description" => "Find answers to common questions about Homework Helper and how it can boost your grades.",
    "faqsList" => [
        [
            "title" => "General",
            "faqs" => [
                [
                    "title" => "What is Homework Helper?",
                    "description" => "Homework Helper is an AI-powered academic tutor designed to help students with their studies. You can take photos of problems, upload screenshots, or ask questions via voice/text to get instant, step-by-step solutions.",
                ],
                [
                    "title" => "Is Homework Helper free?",
                    "description" => "Yes! Homework Helper is 100% free to use. We believe in making quality education accessible to everyone without hidden costs or subscriptions.",
                ],
                [
                    "title" => "What subjects does it cover?",
                    "description" => "We cover a vast range of subjects including Math (Algebra, Calculus, etc.), Science (Physics, Chemistry, Biology), History, Literature, and more. From elementary school to university level.",
                ]
            ]
        ],
        [
            "title" => "Using the App",
            "faqs" => [
                [
                    "title" => "How do I ask a question?",
                    "description" => "You can snap a photo of your homework, upload a screenshot, type your question, or use voice commands. Our AI analyzes the input and provides a detailed explanation.",
                ],
                [
                    "title" => "Can it help with handwriting?",
                    "description" => "Yes, our advanced AI can recognize and interpret handwritten notes and equations, making it easy to digitize and solve problems from your notebook.",
                ],
                [
                    "title" => "Does it write essays?",
                    "description" => "Absolutely. Homework Helper can assist with essay writing by generating outlines, checking grammar, and offering structural improvements to help you write better papers.",
                ]
            ]
        ],
        [
            "title" => "Features",
            "faqs" => [
                [
                    "title" => "What is \"Interactive Deep Dives\"?",
                    "description" => "This feature allows you to have a conversation with the AI about a specific problem. If you don't understand a step, you can ask for clarification or an alternative method.",
                ],
                [
                    "title" => "Does it work offline?",
                    "description" => "Homework Helper requires an internet connection to process complex queries through our AI servers, ensuring you get the most accurate and up-to-date information.",
                ],
                [
                    "title" => "Is my history saved?",
                    "description" => "Yes, the app features a \"Large Memory Context\" which remembers your previous questions, allowing for continuity in your learning sessions.",
                ]
            ]
        ],
        [
            "title" => "Privacy & Support",
            "faqs" => [
                [
                    "title" => "Is my data safe?",
                    "description" => "We prioritize your privacy. Your data is used solely to improve your learning experience and is not sold to third parties.",
                ],
                [
                    "title" => "How can I contact support?",
                    "description" => "If you have any issues or suggestions, you can contact us via the \"Contact Us\" page in the app or website settings.",
                ]
            ]
        ]
    ]
];



// current running redeem codes campaign - removed, now handled in claim-reward.php
$redeemCodesCampaign = [
    "isActive" => false,
    "showStats" => true, // Show claimed & available code counts
    "commitMessage"=>"I agree to rate app on App Store",
    "nonActiveProps" => [
        "title" => "Coming Soon",
        "description" => "We are working on a new giveaway campaign. Stay tuned for updates.",
    ],
    "title" => "🚀 SubFox Launch Giveaway",
    "description" => "Celebrate the launch of SubFox! Get 1 month free premium and help us improve the app.",
    "messages"=>[
        "success" => "Congratulations! You've successfully claimed your SubFox premium code. Thank you for supporting our launch!",
        "noCode" => "All launch giveaway codes have been claimed. Follow us on social media for future giveaways!",
    ],
    "formFields" => [
        "email" => [
            "label" => "Email Address",
            "type" => "email",
            "description" => "We'll send you updates about SubFox and future giveaways.",
            "required" => true,
        ],
    ],
    "rules" => [
        "title" => "How to participate",
        "description" => "Help us spread the word about SubFox and get rewarded!",
        "rules" => [
            [
                "title" => "1. Upvote our launch post",
                "description" => "Show your support by upvoting our SubFox launch announcement on Reddit, ProductHunt, or social media.",
            ],
            [
                "title" => "2. Give us an honest review",
                "description" => "Download SubFox and leave a genuine review on the App Store or Google Play. We hope you'll love it enough for 5 stars! ⭐",
            ],
            [
                "title" => "3. Share your feedback",
                "description" => "Help us improve SubFox by sharing your thoughts, suggestions, or reporting any bugs you encounter.",
            ],
        ]
    ],
    "guide" => [
        "title" => "How to redeem your code",
        "description" => "Follow these simple steps to activate your 1 month free premium subscription.",
        "steps" => [
            [
                "title" => "1. Download SubFox",
                "description" => "Get SubFox from the App Store or Google Play Store using the download buttons above.",
            ],
            [
                "title" => "2. Enter your redeem code",
                "description" => "When purchasing premium in the app, look for 'Redeem Code' option and enter your code.",
            ],
            [
                "title" => "3. Enjoy premium features",
                "description" => "Your premium subscription will be activated for 1 month. Manage unlimited subscriptions and save money!",
            ],
        ]
    ],
    "buttonText" => "🎁 Claim Launch Reward",
    "maxClaimLimits" => 1, // Maximum claims per user/device
    "id" => "subfox_launch_2025" // Unique campaign identifier
];