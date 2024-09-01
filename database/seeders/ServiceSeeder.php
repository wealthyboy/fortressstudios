<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Film Production',
                'page_title' => 'Your One-Stop Destination for Professional Film Production Services',
                'slug' => 'film-production',
                'excerpt' => 'Top-notch film production services from pre-production to post-production, bringing your vision to life.',
                'body1' => 'Looking for top-notch film production services? Look no further than Fortress Studios! With our extensive expertise and state-of-the-art equipment, we offer unparalleled solutions for all your film production needs. From pre-production planning to post-production editing, our dedicated team is committed to delivering exceptional results that exceed your expectations.',
                'body2' => 'Trust Fortress Studios to bring your creative vision to life and make your film production dreams a reality. Contact us today to discuss your project and unlock the full potential of your cinematic masterpiece.',
                'status' => true
            ],
            [
                'title' => 'TV Commercials',
                'page_title' => 'Boost Your Brand with Compelling TV Commercials by Fortress Studios',
                'slug' => 'tv-commercials',
                'excerpt' => 'Create captivating TV commercials that elevate your brand and capture your audience’s attention.',
                'body1' => 'Capture the attention of your target audience and elevate your brand\'s visibility with captivating TV commercials by Fortress Studios. As a leading provider of TV commercial services, we specialize in creating captivating and impactful advertisements that leave a lasting impression. Our team of experienced professionals will work closely with you to understand your brand\'s unique identity and create commercials that effectively communicate your message.',
                'body2' => 'From concept development to production and post-production, we handle every aspect of the process to ensure a seamless and engaging final product. Trust Fortress Studios to deliver TV commercials that drive results and set your brand apart from the competition. Contact us today to discuss your vision and take your brand to new heights.',
                'status' => true
            ],
            [
                'title' => 'Film Equipment Rental',
                'page_title' => 'Unlock Your Creative Potential with Fortress Studios\' Equipment Rental Services',
                'slug' => 'equipment-rental',
                'excerpt' => 'Rent top-of-the-line film equipment to elevate your creative projects with ease and flexibility.',
                'body1' => 'Elevate your creative projects with top-of-the-line equipment from Fortress Studios\' equipment rental services. Whether you\'re a professional filmmaker, photographer, or content creator, our extensive inventory of high-quality cameras, lighting equipment, audio gear, and more will help bring your vision to life. With Fortress Studios\' equipment rental services, you can access industry-leading tools and technology without the hassle of purchasing and maintaining expensive equipment.',
                'body2' => 'Our dedicated team is committed to providing exceptional customer service, ensuring that you have the right equipment for your specific needs. Take your creative endeavors to new heights with Fortress Studios\' reliable and flexible equipment rental services. Contact us today to explore our inventory and unleash your creative potential.',
                'status' => true
            ],
            [
                'title' => 'Talent Management and Representation',
                'page_title' => 'Discover Your Star Potential with Fortress Studios\' Talent Management and Representation Services',
                'slug' => 'talent-management',
                'excerpt' => 'Personalized talent management and representation to help you achieve your entertainment career goals.',
                'body1' => 'Unlock your path to stardom with Fortress Studios\' talent management and representation services. Our experienced team of industry professionals is dedicated to nurturing and guiding exceptional talent in the entertainment industry. Whether you\'re an aspiring actor, model, musician, or dancer, we provide personalized representation that caters to your unique skills and aspirations.',
                'body2' => 'From securing auditions and bookings to negotiating contracts and managing your career, Fortress Studios is your reliable partner in the competitive world of entertainment. With our extensive network of industry connections and expertise, we strive to elevate your profile and help you reach new heights in your career. Contact us today to discover your star potential and join our roster of talented individuals.',
                'status' => true
            ],
            [
                'title' => 'Event Coverage Services',
                'page_title' => 'Capture Every Special Moment with Fortress Studios\' Event Coverage Services',
                'slug' => 'event-coverage',
                'excerpt' => 'Professional event coverage services to capture every moment of your special occasions.',
                'body1' => 'Make your events unforgettable with Fortress Studios\' exceptional event coverage services. From corporate conferences and product launches to weddings, parties, and live performances, our experienced team of photographers and videographers is dedicated to capturing every moment with precision and creativity. With a keen eye for detail and a passion for storytelling, we ensure that your event is beautifully documented, allowing you to relive the memories for years to come.',
                'body2' => 'Our state-of-the-art equipment and technical expertise enable us to capture stunning visuals and crystal-clear audio, ensuring a professional and polished final product. Whether you\'re looking for a highlight reel, a full-length video, or a collection of stunning photographs, Fortress Studios offers a range of customizable packages to suit your specific needs. Trust us to deliver exceptional event coverage that captures the essence and energy of your special occasion. Contact us today to discuss how we can help make your event truly memorable.',
                'status' => true
            ],
            [
                'title' => 'Documentary Production',
                'page_title' => 'Uncover Untold Stories with Fortress Studios\' Documentary Productions',
                'slug' => 'documentary-production',
                'excerpt' => 'Create impactful documentaries that resonate with audiences and uncover untold stories.',
                'body1' => 'Discover the power of storytelling with Fortress Studios\' compelling documentary productions. Our team of skilled filmmakers and storytellers is dedicated to bringing real stories to life, capturing the essence of individuals, communities, and events that deserve to be heard. With a deep commitment to authenticity and a passion for uncovering untold narratives, we strive to create thought-provoking and impactful documentaries that resonate with audiences.',
                'body2' => 'Whether it\'s a social issue, a historical event, or a personal journey, Fortress Studios approaches each project with meticulous research, insightful interviews, and captivating visuals, ensuring a compelling and engaging narrative. Our state-of-the-art equipment and technical expertise enable us to capture stunning visuals, crystal-clear audio, and cinematic compositions, resulting in a polished and professional final product. Trust Fortress Studios to bring your vision to life and create a documentary that leaves a lasting impact. Contact us today to discuss how we can collaborate on your next documentary project.',
                'status' => true
            ],
        ]);
        
        
        
    }
}
