<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            [
                'name' => 'TechFlow Solutions',
                'description' => 'Revolutionized their customer management system with a custom CRM platform that increased efficiency by 300% and reduced response time by 75%. The solution integrated seamlessly with their existing infrastructure while providing real-time analytics and automated workflows.',
                'short_description' => 'Custom CRM platform that increased efficiency by 300%',
                'screenshot' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop',
                'website_url' => 'https://techflow.example.com',
                'industry' => 'Technology',
                'featured' => true,
                'metrics' => [
                    'Efficiency Increase' => '300%',
                    'Response Time Reduction' => '75%',
                    'Customer Satisfaction' => '98%',
                    'ROI' => '450%'
                ],
                'testimonial' => 'HelpfulSoftware transformed our entire customer management process. The results speak for themselves.',
                'testimonial_author' => 'Sarah Johnson',
                'testimonial_position' => 'CEO, TechFlow Solutions',
                'launch_date' => '2023-06-15',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'AWS'],
                'challenges' => 'Legacy systems were causing bottlenecks and customer complaints were increasing.',
                'solutions' => 'Built a modern, scalable CRM with real-time analytics and automated workflows.',
                'results' => 'Achieved 300% efficiency increase and 75% reduction in response times.'
            ],
            [
                'name' => 'EcoGreen Energy',
                'description' => 'Developed a comprehensive energy monitoring platform that helps businesses track and optimize their energy consumption. The platform features real-time monitoring, predictive analytics, and automated reporting that has helped clients reduce energy costs by an average of 40%.',
                'short_description' => 'Energy monitoring platform reducing costs by 40%',
                'screenshot' => 'https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?w=800&h=600&fit=crop',
                'website_url' => 'https://ecogreen.example.com',
                'industry' => 'Energy & Sustainability',
                'featured' => true,
                'metrics' => [
                    'Cost Reduction' => '40%',
                    'Energy Savings' => '35%',
                    'Carbon Footprint Reduction' => '25%',
                    'User Adoption' => '95%'
                ],
                'testimonial' => 'The platform has revolutionized how we manage our energy consumption.',
                'testimonial_author' => 'Michael Chen',
                'testimonial_position' => 'Operations Director, EcoGreen Energy',
                'launch_date' => '2023-08-20',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'IoT Sensors', 'Machine Learning'],
                'challenges' => 'Manual energy tracking was inefficient and prone to errors.',
                'solutions' => 'Created an IoT-powered platform with predictive analytics.',
                'results' => 'Achieved 40% cost reduction and 35% energy savings.'
            ],
            [
                'name' => 'HealthFirst Medical',
                'description' => 'Created a patient management system that streamlined appointment scheduling, medical records, and billing processes. The system improved patient satisfaction scores by 60% and reduced administrative overhead by 50%.',
                'short_description' => 'Patient management system improving satisfaction by 60%',
                'screenshot' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=800&h=600&fit=crop',
                'website_url' => 'https://healthfirst.example.com',
                'industry' => 'Healthcare',
                'featured' => true,
                'metrics' => [
                    'Patient Satisfaction' => '+60%',
                    'Administrative Reduction' => '50%',
                    'Appointment Efficiency' => '+45%',
                    'Error Reduction' => '80%'
                ],
                'testimonial' => 'Our patients love the new system and our staff is more productive than ever.',
                'testimonial_author' => 'Dr. Emily Rodriguez',
                'testimonial_position' => 'Medical Director, HealthFirst Medical',
                'launch_date' => '2023-04-10',
                'technologies' => ['Angular', 'Laravel', 'PostgreSQL', 'HIPAA Compliance', 'API Integration'],
                'challenges' => 'Manual processes were causing delays and patient dissatisfaction.',
                'solutions' => 'Developed a comprehensive digital health platform.',
                'results' => 'Improved patient satisfaction by 60% and reduced admin overhead by 50%.'
            ],
            [
                'name' => 'FinancePro Analytics',
                'description' => 'Built a sophisticated financial analytics platform that provides real-time insights into market trends, portfolio performance, and risk assessment. The platform has helped clients increase their investment returns by an average of 25%.',
                'short_description' => 'Financial analytics platform increasing returns by 25%',
                'screenshot' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop',
                'website_url' => 'https://financepro.example.com',
                'industry' => 'Financial Services',
                'featured' => true,
                'metrics' => [
                    'Investment Returns' => '+25%',
                    'Risk Reduction' => '30%',
                    'Analysis Speed' => '+200%',
                    'Client Retention' => '98%'
                ],
                'testimonial' => 'The analytics platform has transformed our investment strategies.',
                'testimonial_author' => 'David Thompson',
                'testimonial_position' => 'Portfolio Manager, FinancePro Analytics',
                'launch_date' => '2023-09-05',
                'technologies' => ['Python', 'Django', 'PostgreSQL', 'Machine Learning', 'Real-time Data'],
                'challenges' => 'Manual analysis was slow and prone to human error.',
                'solutions' => 'Created an AI-powered analytics platform with real-time insights.',
                'results' => 'Increased investment returns by 25% and reduced risk by 30%.'
            ],
            [
                'name' => 'RetailMax Commerce',
                'description' => 'Developed an omnichannel e-commerce platform that unified online and offline sales channels. The platform increased online sales by 180% and improved customer engagement across all touchpoints.',
                'short_description' => 'Omnichannel platform increasing sales by 180%',
                'screenshot' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=600&fit=crop',
                'website_url' => 'https://retailmax.example.com',
                'industry' => 'Retail & E-commerce',
                'featured' => false,
                'metrics' => [
                    'Online Sales' => '+180%',
                    'Customer Engagement' => '+120%',
                    'Cross-channel Conversion' => '+85%',
                    'Inventory Accuracy' => '99%'
                ],
                'testimonial' => 'The platform has revolutionized our retail operations.',
                'testimonial_author' => 'Lisa Wang',
                'testimonial_position' => 'VP of Sales, RetailMax Commerce',
                'launch_date' => '2023-07-12',
                'technologies' => ['Magento', 'React', 'MySQL', 'Payment Gateway', 'Inventory Management'],
                'challenges' => 'Disconnected sales channels were limiting growth potential.',
                'solutions' => 'Built an integrated omnichannel commerce platform.',
                'results' => 'Increased online sales by 180% and improved customer engagement by 120%.'
            ],
            [
                'name' => 'EduTech Learning',
                'description' => 'Created a comprehensive learning management system that supports both synchronous and asynchronous learning. The platform has improved student engagement by 150% and increased course completion rates by 70%.',
                'short_description' => 'Learning platform boosting engagement by 150%',
                'screenshot' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&h=600&fit=crop',
                'website_url' => 'https://edutech.example.com',
                'industry' => 'Education Technology',
                'featured' => false,
                'metrics' => [
                    'Student Engagement' => '+150%',
                    'Course Completion' => '+70%',
                    'Learning Outcomes' => '+90%',
                    'Teacher Productivity' => '+60%'
                ],
                'testimonial' => 'Our students are more engaged and learning outcomes have improved dramatically.',
                'testimonial_author' => 'Professor James Wilson',
                'testimonial_position' => 'Academic Director, EduTech Learning',
                'launch_date' => '2023-05-18',
                'technologies' => ['Laravel', 'Vue.js', 'WebRTC', 'MongoDB', 'AI Tutoring'],
                'challenges' => 'Traditional learning methods were not engaging modern students.',
                'solutions' => 'Developed an interactive LMS with AI-powered features.',
                'results' => 'Improved student engagement by 150% and course completion by 70%.'
            ],
            [
                'name' => 'LogiChain Transport',
                'description' => 'Built a logistics management system that optimizes route planning, fleet management, and delivery tracking. The system reduced delivery times by 35% and cut operational costs by 45%.',
                'short_description' => 'Logistics system reducing delivery times by 35%',
                'screenshot' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop',
                'website_url' => 'https://logichain.example.com',
                'industry' => 'Logistics & Transportation',
                'featured' => false,
                'metrics' => [
                    'Delivery Time Reduction' => '35%',
                    'Cost Reduction' => '45%',
                    'Fleet Utilization' => '+60%',
                    'Customer Satisfaction' => '96%'
                ],
                'testimonial' => 'The system has transformed our logistics operations completely.',
                'testimonial_author' => 'Robert Martinez',
                'testimonial_position' => 'Operations Manager, LogiChain Transport',
                'launch_date' => '2023-03-25',
                'technologies' => ['Node.js', 'React', 'PostgreSQL', 'GPS Integration', 'Machine Learning'],
                'challenges' => 'Inefficient routing was increasing costs and delivery times.',
                'solutions' => 'Created an AI-powered logistics optimization platform.',
                'results' => 'Reduced delivery times by 35% and operational costs by 45%.'
            ],
            [
                'name' => 'AgriTech Solutions',
                'description' => 'Developed an agricultural management platform that monitors crop health, weather conditions, and soil quality. The platform has helped farmers increase crop yields by 30% while reducing water usage by 25%.',
                'short_description' => 'Agricultural platform increasing yields by 30%',
                'screenshot' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=800&h=600&fit=crop',
                'website_url' => 'https://agritech.example.com',
                'industry' => 'Agriculture Technology',
                'featured' => false,
                'metrics' => [
                    'Crop Yield Increase' => '30%',
                    'Water Usage Reduction' => '25%',
                    'Pest Detection Accuracy' => '95%',
                    'Farmer Adoption' => '85%'
                ],
                'testimonial' => 'This platform has revolutionized how we manage our farms.',
                'testimonial_author' => 'Maria Garcia',
                'testimonial_position' => 'Farm Owner, AgriTech Solutions',
                'launch_date' => '2023-02-14',
                'technologies' => ['IoT', 'Machine Learning', 'React', 'MongoDB', 'Weather APIs'],
                'challenges' => 'Traditional farming methods were inefficient and resource-intensive.',
                'solutions' => 'Built an IoT-powered smart farming platform.',
                'results' => 'Increased crop yields by 30% and reduced water usage by 25%.'
            ],
            [
                'name' => 'RealEstate Pro',
                'description' => 'Created a comprehensive real estate management platform that streamlines property listings, client management, and transaction processing. The platform increased agent productivity by 80% and improved client satisfaction by 65%.',
                'short_description' => 'Real estate platform boosting productivity by 80%',
                'screenshot' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&h=600&fit=crop',
                'website_url' => 'https://realestatepro.example.com',
                'industry' => 'Real Estate',
                'featured' => false,
                'metrics' => [
                    'Agent Productivity' => '+80%',
                    'Client Satisfaction' => '+65%',
                    'Transaction Speed' => '+50%',
                    'Lead Conversion' => '+75%'
                ],
                'testimonial' => 'Our agents are more productive and clients are happier than ever.',
                'testimonial_author' => 'Jennifer Lee',
                'testimonial_position' => 'Broker, RealEstate Pro',
                'launch_date' => '2023-01-30',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Payment Processing', 'CRM Integration'],
                'challenges' => 'Manual processes were slowing down transactions and reducing productivity.',
                'solutions' => 'Developed an integrated real estate management platform.',
                'results' => 'Increased agent productivity by 80% and client satisfaction by 65%.'
            ],
            [
                'name' => 'FoodTech Delivery',
                'description' => 'Built a food delivery platform that connects restaurants with customers through an intuitive mobile app. The platform has increased restaurant sales by 200% and improved delivery efficiency by 55%.',
                'short_description' => 'Food delivery platform increasing sales by 200%',
                'screenshot' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=800&h=600&fit=crop',
                'website_url' => 'https://foodtech.example.com',
                'industry' => 'Food & Beverage',
                'featured' => false,
                'metrics' => [
                    'Restaurant Sales' => '+200%',
                    'Delivery Efficiency' => '+55%',
                    'Customer Retention' => '88%',
                    'Order Accuracy' => '99%'
                ],
                'testimonial' => 'The platform has transformed our restaurant business completely.',
                'testimonial_author' => 'Antonio Silva',
                'testimonial_position' => 'Restaurant Owner, FoodTech Delivery',
                'launch_date' => '2022-12-08',
                'technologies' => ['React Native', 'Node.js', 'MongoDB', 'Payment Gateway', 'GPS Tracking'],
                'challenges' => 'Limited reach was restricting restaurant growth potential.',
                'solutions' => 'Created a comprehensive food delivery ecosystem.',
                'results' => 'Increased restaurant sales by 200% and delivery efficiency by 55%.'
            ],
            [
                'name' => 'FitnessTracker Pro',
                'description' => 'Developed a comprehensive fitness tracking platform that combines wearable device integration with personalized workout plans. The platform has helped users achieve their fitness goals 3x faster than traditional methods.',
                'short_description' => 'Fitness platform achieving goals 3x faster',
                'screenshot' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=600&fit=crop',
                'website_url' => 'https://fitnesstracker.example.com',
                'industry' => 'Health & Fitness',
                'featured' => false,
                'metrics' => [
                    'Goal Achievement Speed' => '3x Faster',
                    'User Retention' => '92%',
                    'Workout Completion' => '+85%',
                    'Health Improvements' => '78%'
                ],
                'testimonial' => 'I\'ve never been more motivated to stay fit and healthy.',
                'testimonial_author' => 'Sarah Kim',
                'testimonial_position' => 'Fitness Enthusiast, FitnessTracker Pro',
                'launch_date' => '2022-11-15',
                'technologies' => ['React Native', 'Node.js', 'PostgreSQL', 'Wearable APIs', 'AI Coaching'],
                'challenges' => 'Users struggled to maintain motivation and track progress effectively.',
                'solutions' => 'Built an AI-powered fitness platform with personalized coaching.',
                'results' => 'Helped users achieve fitness goals 3x faster than traditional methods.'
            ],
            [
                'name' => 'TravelConnect Hub',
                'description' => 'Created a travel management platform that simplifies booking, itinerary planning, and travel expense management. The platform has reduced travel costs by 40% and improved traveler satisfaction by 70%.',
                'short_description' => 'Travel platform reducing costs by 40%',
                'screenshot' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&h=600&fit=crop',
                'website_url' => 'https://travelconnect.example.com',
                'industry' => 'Travel & Tourism',
                'featured' => false,
                'metrics' => [
                    'Cost Reduction' => '40%',
                    'Traveler Satisfaction' => '+70%',
                    'Booking Efficiency' => '+90%',
                    'Expense Accuracy' => '98%'
                ],
                'testimonial' => 'Travel planning has never been this easy and cost-effective.',
                'testimonial_author' => 'Mark Johnson',
                'testimonial_position' => 'Travel Manager, TravelConnect Hub',
                'launch_date' => '2022-10-22',
                'technologies' => ['Vue.js', 'Laravel', 'MySQL', 'Travel APIs', 'Expense Management'],
                'challenges' => 'Manual travel planning was time-consuming and expensive.',
                'solutions' => 'Developed an integrated travel management ecosystem.',
                'results' => 'Reduced travel costs by 40% and improved traveler satisfaction by 70%.'
            ],
            [
                'name' => 'EventMaster Pro',
                'description' => 'Built an event management platform that handles everything from planning to execution. The platform has increased event attendance by 120% and reduced planning time by 60%.',
                'short_description' => 'Event platform increasing attendance by 120%',
                'screenshot' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=800&h=600&fit=crop',
                'website_url' => 'https://eventmaster.example.com',
                'industry' => 'Event Management',
                'featured' => false,
                'metrics' => [
                    'Event Attendance' => '+120%',
                    'Planning Time Reduction' => '60%',
                    'Event Success Rate' => '95%',
                    'Client Satisfaction' => '94%'
                ],
                'testimonial' => 'Our events are more successful and easier to manage than ever.',
                'testimonial_author' => 'Emma Davis',
                'testimonial_position' => 'Event Coordinator, EventMaster Pro',
                'launch_date' => '2022-09-10',
                'technologies' => ['Angular', 'Node.js', 'MongoDB', 'Payment Processing', 'Social Integration'],
                'challenges' => 'Event planning was complex and attendance was declining.',
                'solutions' => 'Created a comprehensive event management platform.',
                'results' => 'Increased event attendance by 120% and reduced planning time by 60%.'
            ],
            [
                'name' => 'LegalTech Solutions',
                'description' => 'Developed a legal case management system that streamlines document management, client communication, and case tracking. The platform has improved case resolution time by 50% and increased client satisfaction by 80%.',
                'short_description' => 'Legal platform improving resolution time by 50%',
                'screenshot' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=800&h=600&fit=crop',
                'website_url' => 'https://legaltech.example.com',
                'industry' => 'Legal Technology',
                'featured' => false,
                'metrics' => [
                    'Resolution Time Improvement' => '50%',
                    'Client Satisfaction' => '+80%',
                    'Document Processing' => '+150%',
                    'Case Success Rate' => '92%'
                ],
                'testimonial' => 'The platform has revolutionized our legal practice.',
                'testimonial_author' => 'Attorney Michael Brown',
                'testimonial_position' => 'Senior Partner, LegalTech Solutions',
                'launch_date' => '2022-08-05',
                'technologies' => ['React', 'Laravel', 'PostgreSQL', 'Document Management', 'Secure Communication'],
                'challenges' => 'Manual case management was inefficient and error-prone.',
                'solutions' => 'Built a comprehensive legal case management platform.',
                'results' => 'Improved case resolution time by 50% and client satisfaction by 80%.'
            ]
        ];

        foreach ($brands as $brandData) {
            Brand::create($brandData);
        }
    }
}
