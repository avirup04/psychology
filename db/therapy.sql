-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2025 at 11:10 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychysh_therapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `sl` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `text` longtext NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `short_content` varchar(200) NOT NULL,
  `full_content` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `short_content`, `full_content`, `image_url`) VALUES
(1, 'Individual Counseling', 'As an individual counselling psychologist, my primary focus is on providing one-on-one therapeutic support to clients facing a wide range of emotional, psychological, and behavioral', 'As an individual counselling psychologist, my primary focus is on providing one-on-one therapeutic support to clients facing a wide range of emotional, psychological, and behavioral challenges. My role involves creating a safe and confidential space where clients can explore their thoughts, feelings, and experiences. Through a collaborative therapeutic relationship, I work with clients to help them understand and overcome their personal issues, develop coping strategies, and achieve their goals for mental and emotional well-being.', 'img/blog1.jpg'),
(2, 'Relationship & Marital Counseling', 'As a relationship and marital psychologist, my primary focus is on helping couples navigate the complexities of their relationships, fostering deeper connections,', 'As a relationship and marital psychologist, my primary focus is on helping couples navigate the complexities of their relationships, fostering deeper connections, and addressing challenges that may arise along the way. Relationships, whether new or long-term, require continuous effort, understanding, and adaptability. Every partnership is unique, and my role is to provide couples with the tools and insights they need to thrive together.', 'img/blog2.jpg'),
(3, 'Family Counselling', 'As a family psychologist, I work collaboratively with families to identify and address the underlying issues affecting their relationships. This often involves exploring each family', 'As a family psychologist, I work collaboratively with families to identify and address the underlying issues affecting their relationships. This often involves exploring each family member’s perspectives and experiences, as well as the family’s collective history and patterns of interaction. By fostering open communication and encouraging each member to express their feelings and concerns, we can begin to rebuild trust and understanding within the family unit.', 'img/blog3.jpg'),
(4, 'Adolescent Counselling', 'I strive to create a safe, non-judgmental space where adolescents feel comfortable expressing themselves. Building trust is essential, as many young people may be hesitant to open', 'I strive to create a safe, non-judgmental space where adolescents feel comfortable expressing themselves. Building trust is essential, as many young people may be hesitant to open up about their struggles. I utilize a variety of therapeutic techniques tailored to each individuals needs, such as cognitive-behavioral therapy (CBT), mindfulness practices, and family therapy, to address issues and promote healthy development.', 'img/blog4.jpg'),
(12, 'ADHD Counselling', 'I provide counseling for individuals with attention deficit hyperactivity disorder (ADHD)\r\nfocuses on developing strategies to manage symptoms like impulsivity, inattention, and', 'I provide counseling for individuals with attention deficit hyperactivity disorder (ADHD)\r\nfocuses on developing strategies to manage symptoms like impulsivity, inattention, and hyperactivity. I help them thrive in various aspects of life such as school, work, and relationships.', 'img/blog5.jpg'),
(13, 'Behavior Counselling', 'Behavioral issues involves identifying triggers and patterns of behavior, teaching coping skills and positive reinforcement techniques, and fostering healthier ways of expressing emotions', 'Behavioral issues involves identifying triggers and patterns of behavior, teaching coping skills and positive reinforcement techniques, and fostering healthier ways of expressing emotions and managing impulses.', 'img/blog6.jpg'),
(14, 'Child Issues Counselling', 'Counseling for children addresses a wide range of concerns such as behavioral problems, anxiety, depression, trauma, and family conflicts. I provide age-appropriate interventions and', 'Counseling for children addresses a wide range of concerns such as behavioral problems, anxiety, depression, trauma, and family conflicts. I provide age-appropriate interventions and support tailored to the childs developmental stage.', 'img/blog7.jpg'),
(15, 'Anger Management Counselling', 'Anger management counseling helps individuals understand the root causes of their anger, learn healthy coping mechanisms and communication skills, and develop strategies to express', 'Anger management counseling helps individuals understand the root causes of their anger, learn healthy coping mechanisms and communication skills, and develop strategies to express anger in constructive ways.', 'img/blog8.jpg'),
(16, 'Antisocial Personality Counselling', 'In antisocial personality counselling, I focus on addressing patterns of behavior characterized by disregard for the rights and feelings of others, promoting empathy,', 'In antisocial personality counselling, I focus on addressing patterns of behavior characterized by disregard for the rights and feelings of others, promoting empathy, accountability, and positive social interactions.', 'img/blog9.jpg'),
(17, 'Anxiety Counselling', 'As an anxiety counselor, my mission is to support individuals in navigating the complexities of anxiety in a safe, non-judgmental environment. Anxiety can manifest in various forms—whether', 'As an anxiety counselor, my mission is to support individuals in navigating the complexities of anxiety in a safe, non-judgmental environment. Anxiety can manifest in various forms—whether its general worry, social anxiety, panic attacks, or phobias—and my goal is to help clients understand and manage these feelings effectively. Each persons experience with anxiety is unique, so I tailor my approach to fit individual needs. Whether youre dealing with mild worry or debilitating panic, I offer practical tools and coping mechanisms to regain control, improve mental well-being, and lead a more fulfilling life.Together, we work toward achieving a sense of calm, clarity, and confidence—allowing you to thrive despite anxiety', 'img/blog10.jpg'),
(18, 'Depression Counselling', 'I identify and address underlying factors contributing to feelings of sadness, hopelessness, and low motivation, while teaching coping skills and fostering resilience.', 'I identify and address underlying factors contributing to feelings of sadness, hopelessness, and low motivation, while teaching coping skills and fostering resilience.', 'img/blog11.jpg'),
(19, 'Coping Skills Counselling', 'The vital aspect of successful life, coping skills counseling teaches individuals practical strategies to effectively manage stress, regulate emotions, problem solve, and adapt to', 'The vital aspect of successful life, coping skills counseling teaches individuals practical strategies to effectively manage stress, regulate emotions, problem-solve, and adapt to lifes challenges in healthy and productive ways.', 'img/blog12.jpg'),
(20, 'Life Coaching Counselling', 'Life coaching focuses on setting and achieving personal and professional goals, increasing self-awareness, and enhancing overall well-being through accountability and empowerment.', 'Life coaching focuses on setting and achieving personal and professional goals, increasing self-awareness, and enhancing overall well-being through accountability and empowerment.', 'img/blog13.jpg'),
(21, 'Impulse Control Disorders Counselling', 'For impulse control disorders counselling, I emphasis on identifying triggers and developing strategies to manage impulsive behaviors, promoting self-awareness,', 'For impulse control disorders counselling, I emphasis on identifying triggers and developing strategies to manage impulsive behaviors, promoting self-awareness, self-control, and healthier decision-making.', 'img/blog14.jpg'),
(22, 'Stress Counselling', 'Individuals who face challenges in managing stress, I assist in identify sources of stress, develop effective coping mechanisms, and implement stress-reduction techniques to improve', 'Individuals who face challenges in managing stress, I assist in identify sources of stress, develop effective coping mechanisms, and implement stress-reduction techniques to improve overall well-being and quality of life.', 'img/blog15.jpg'),
(23, 'School Issues Counselling', 'In school challenges, I assist students in addressing academic challenges, navigating social dynamics, managing stress, and advocating for their educational needs.', 'In school challenges, I assist students in addressing academic challenges, navigating social dynamics, managing stress, and advocating for their educational needs.', 'img/blog16.jpg'),
(24, 'Seniors Anxiety Issues Counselling', 'In old adults, I provide support and strategies to cope with anxiety related to aging, health concerns, life transitions, and loss', 'In old adults, I provide support and strategies to cope with anxiety related to aging, health concerns, life transitions, and loss, promoting resilience and well-being in later life stages.', 'img/blog17.jpg'),
(25, 'Parenting Counselling', 'In parenting counseling, I draw upon my personal life experiences as a parent to inform and shape my counseling strategies. I offer support, guidance, and strategies to', 'In parenting counseling, I draw upon my personal life experiences as a parent to inform and shape my counseling strategies. I offer support, guidance, and strategies to help parents navigate various challenges such as behavior management, communication, boundary-setting, and fostering healthy parent-child relationships.', 'img/blog18.jpg'),
(26, 'Grief and Loss Counselling', 'As a dedicated grief and loss counselor, I specialize in helping individuals process and navigate the profound emotions associated with loss. I compassionate approach creates', 'As a dedicated grief and loss counselor, I specialize in helping individuals process and navigate the profound emotions associated with loss. I compassionate approach creates a safe and supportive environment where clients can openly explore their feelings of sorrow, confusion, and pain. With a deep understanding of the grieving process, I guide clients through each stage of their journey, from shock and denial to eventual acceptance and healing.', 'img/blog19.jpg'),
(27, 'Career and Life Transition Counselling', 'As a career and life transition counselor, I help clients navigate significant changes in their professional and personal lives. This can include guiding individuals through', 'As a career and life transition counselor, I help clients navigate significant changes in their professional and personal lives. This can include guiding individuals through career shifts, job loss, retirement, or returning to work after a hiatus. I also assist people in adjusting to life changes such as relocation, divorce, or becoming parents. I focus on both practical aspects (like career planning and decision-making) and emotional well-being, ensuring my clients feel supported during uncertain times.', 'img/blog20.jpg'),
(28, 'Addiction Counselling', 'As an experienced addiction counselor, I specialize in helping individuals navigate the complex and challenging journey of recovery from substance use and behavioral addictions. I', 'As an experienced addiction counselor, I specialize in helping individuals navigate the complex and challenging journey of recovery from substance use and behavioral addictions. I bring a compassionate, non-judgmental approach to my practice, focusing on empowering clients to reclaim their lives and build sustainable, healthy coping strategies.My approach emphasizes not only treating the symptoms of addiction but also fostering personal growth and resilience. I am committed to helping clients regain control, develop a stronger sense of self-worth, and reconnect with their values, relationships, and goals in life.', 'img/blog21.jpg'),
(29, 'Sleep Disorder Councelling', 'As a sleep disorder counselor, I specialize in helping individuals who struggle with various sleep-related issues, such as insomnia, sleep apnea, restless leg syndrome, and', 'As a sleep disorder counselor, I specialize in helping individuals who struggle with various sleep-related issues, such as insomnia, sleep apnea, restless leg syndrome, and circadian rhythm disorders. I work to identify the root causes of these issues, whether they stem from anxiety, stress, medical conditions, or lifestyle factors. My approach involves providing therapeutic strategies like cognitive-behavioral therapy for insomnia (CBT-I), mindfulness techniques, and relaxation exercises to improve sleep quality and overall well-being. I also help clients establish healthy sleep hygiene habits, empowering them to achieve restorative sleep and better mental and physical health.', 'img/blog22.jpg'),
(30, 'OCD-Counselling', 'As an expert in obsessive-compulsive disorder (OCD), I provide compassionate and evidence-based counseling to individuals navigating the complexities of OCD.', 'As an expert in obsessive-compulsive disorder (OCD), I provide compassionate and evidence-based counseling to individuals navigating the complexities of OCD. With extensive training and experience in mental health, I am dedicated to helping clients understand and manage their symptoms through a variety of therapeutic approaches. .I work collaboratively with clients to develop personalized treatment plans that address their unique challenges and goals. By fostering a supportive and nonjudgmental environment, I empower clients to confront their fears, break free from compulsive behaviors, and enhance their overall quality of life.', 'img/blog23.jpg'),
(31, 'Panic Disorder Counselling', 'As a dedicated counselor specializing in panic disorder, I bring a wealth of expertise and compassion to your practice. With a deep understanding of the complexities', 'As a dedicated counselor specializing in panic disorder, I bring a wealth of expertise and compassion to your practice. With a deep understanding of the complexities of panic disorder, I help individuals navigate the challenges of this condition through tailored therapeutic interventions. My approach is grounded in evidence-based techniques, including cognitivebehavioral therapy (CBT) and mindfulness strategies, designed to empower clients in managing and reducing their panic symptoms.', 'img/blog24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `sl` double NOT NULL,
  `firstname` varchar(2000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `rating` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` mediumtext NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`sl`, `firstname`, `lastname`, `rating`, `message`, `date`, `email`, `stat`) VALUES
(6, 'Soumali ', 'Bhattacharya ', '5', 'Extremely Supportive ', '2025-04-06', NULL, 1),
(7, 'Mehedi', 'Roy', '5', 'She is truly remarkable! She has been instrumental in helping me navigate out of a challenging situation. With her deep understanding and thoughtful analysis, she provided me with clear, step-by-step guidance. I feel incredibly fortunate to have such an amazing and supportive friend like her.\r\n', '2025-04-06', NULL, 1),
(8, 'ILIUS ', 'BABAR', '5', '⭐⭐⭐⭐⭐', '2025-04-06', NULL, 1),
(9, 'Sayani', 'Bhowmick', '5', 'She is very friendly. I shared a lot of things with her without feeling insecure. ', '2025-04-06', NULL, 1),
(10, 'Rudra', 'Sen', '5', 'She will listen to you as long as you need on first session...she will not restrict you by 30 minutes or 45 minutes....she will make you comfortable and you will feel comfortable, connected and she is very empathetic, her behaviour makes her different from everyone...if you r looking to heal yourself, if you r distressed or whatever reasons make you vulnerable in life at any point , please take her sessions..and one thing most importantly, she will not make business out of her patients...', '2025-04-06', NULL, 1),
(11, 'Priyanka ', 'Biswas', '5', 'She has been very helpful.. had been through alot ups and downs and she helped me like an elder sister. ', '2025-04-06', NULL, 1),
(13, 'Nilanjan', 'Singha Roy', '5', 'Very attentive to the problems. Would definitely recommend her.', '2025-04-06', NULL, 1),
(14, 'Binayak ', 'Saha', '5', 'I had the privilege of working with Ms Sen and I can honestly say that it was a transformative experience.What sets her apart is her compassionate, empathetic nature paired with her expert knowledge of psychological techniques.I highly recommend her to anyone looking for guidance and support in their mental health journey.', '2025-04-06', NULL, 1),
(15, 'Dishari', 'Chatterjee ', '5', 'She is an excellent psychologist! Highly recommended.', '2025-04-06', NULL, 1),
(16, 'Meera', 'Chakraborty', '5', 'Dipa is one of the most promising therapists in the City, a very helpful, caring and a sensitive soul, her personal integrity always gets reflected in her professional endeavour. I wish her all the very best :) ', '2025-04-06', NULL, 1),
(17, 'Rakesh ', 'Sarkar ', '5', 'Extremely supportive, feel very comfortable and truly remarkable!', '2025-04-06', NULL, 1),
(18, 'Pratiti ', 'Chatterjee ', '5', '❤️❤️❤️❤️❤️', '2025-04-06', NULL, 1),
(19, 'Dipa ', 'Chatterjee', '5', 'I have changed 4 renowned psychologists and when I was hopeless, one of my colleague recommended her name from a facebook page..I was sceptical but took a half hearted chance and that was the finest decision I have made..for me is the best..commitment towards patient, giving time, understanding, empathy and the way she conducts everything made me better and I feel her style is very efficient..I strongly recommend you to take your chance too', '2025-04-06', NULL, 1),
(20, 'Rashni ', 'Roy', '5', 'I am extremely grateful I met you. Your thoughtful suggestions taught me how to manage my anxiety and fear without medication. Thank you for your care and concern for my well-being. ', '2025-04-06', NULL, 1),
(21, 'Swarnali ', 'Mallick ', '5', 'Excellent psychologist and friendly behaviour. ', '2025-04-07', NULL, 1),
(22, 'Chayanika', 'Lahiri', '5', 'She is very supportive. Listens the problems attentively. Definitely recommended.  ', '2025-04-07', NULL, 1),
(23, 'Rimpi ', 'Saha', '5', 'She is an outstanding person! She made my journey easier for me by her supervision, introspection and a proper diagnosis. I got proper therapies what I actually needed for my well-being. I would love to recommend her without any doubt!', '2025-04-07', NULL, 1),
(24, 'Monisha ', 'Podder', '5', 'Highly recommend...mam is so helpful and humble and genuine person❤️...', '2025-04-07', NULL, 1),
(25, 'Madhusudan ', 'Biswas ', '5', 'I had an excellent experience with Dipa Sen, a fantastic psychotherapist.', '2025-04-07', NULL, 1),
(26, 'Parna ', 'Sen', '5', 'I would highly recommend Psychologist Dipa Sen as She is extremely supportive.  She gives enough time to her patients & listen them carefully.. Her gentle approach makes u feel comfortable to open up..', '2025-04-07', NULL, 1),
(27, 'Shinjini', 'Maitra', '5', 'She is a wonderful person. Highly recommended ???? ', '2025-04-08', NULL, 1),
(28, 'Saranya', 'Bose', '5', 'I will be forever grateful to Dr. Dipa Sen for being my savior and support system. She healed me and recover my problems from the \"root\". Every little aspect of my life listened attentively. I have been recovered from my worst phase and live happily only because of her continuous support. The service is easily accessible, making it simple to get the care I needed. You will get therapy analysis at very modest estimate. Highly recommend!', '2025-04-08', NULL, 1),
(29, 'Partha', 'chanda', '5', 'Empathetic, good listener, value for money, dont suggest unnecessary tests, gives more than schedule time.', '2025-04-08', NULL, 1),
(30, 'Protiki', 'Mondal', '5', 'A good listener is a patient’s need in psychology, and that is what she is. You can trust her like anything without any hesitation. ', '2025-04-08', NULL, 1),
(39, 'Dipto ', 'Mukherjee ', '5', 'Dipa Ma\'am is an awesome person. I can discuss anything and everything with her, it feels like she is best friend of mine. Her behaviour, approach are so positive, empathetic and she is really a good listener. Her fees is very pocket friendly. Unnecessarily She never dragged her patient\'s session. I am completely cured by her treatment. Highly recommend!', '2025-04-08', NULL, 1),
(40, 'Sprihana ', 'Chakraborty ', '5', 'I\'m forever grateful to Dipa Sen for her exceptional care and support during my darkest times. Her expertise, compassion, and understanding helped me navigate the complexities of depression and find a way out of my critical mental state. She\'s an outstanding listener, and her gentle yet firm approach empowered me to confront my challenges. Her guidance and strategies have been instrumental in my recovery, and I couldn\'t be more thankful. Dipa Sen is a true professional with a heart of gold. If you\'re struggling, don\'t hesitate to reach out to her – she\'s a lifesaver', '2025-04-08', NULL, 1),
(41, 'Anwesha ', 'Kar ', '5', 'Her exceptional empathy and kindness make her an outstanding therapist. The way she guides you through life\'s complexities is truly remarkable. She\'s a treasure to have in your life, and her cheerful demeanor makes the journey even more uplifting.', '2025-04-09', NULL, 1),
(42, 'Pavel', 'Sen', '5', 'She is an excellent psychologist I\'ve ever met in my life.whenever i talk with her about my problems,crisis i always get a proper solution. She is boosting my motivation and energy to overcome from every battle in my life! Dipa Sen is very humble,empathetic and very friendly for which we feel free to discuss our problem without any 2nd thought.also her sessions are reasonable at compare to others.undoubtedly she is very good at her work.highly recommended.. ', '2025-04-09', NULL, 1),
(43, 'Manju', 'Barman', '5', 'Dr. Dipa sen ma\'am is very good in this field i get her contact from a facebook friend for that I am greatful to her . Ma\'am helped me alot to cure my anixty and panic attack Thank you ma\'am for your help you helped me when i really needed someone to hear me and encourage me to heal myself. You replied to my message in the midnight also thank you once again for that ❤️????????', '2025-04-09', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `sl` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
