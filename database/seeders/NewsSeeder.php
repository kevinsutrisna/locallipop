<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        News::insert([
            [
                'name' => 'Mobile Legends Tournament',
                'detail' => 'Prepare yourself for an electrifying Mobile Legends tournament where top-tier teams battle it out for the ultimate championship glory! With adrenaline-pumping matches and strategic gameplay, this event promises to keep you on the edge of your seat. Fans will witness thrilling moments as teams showcase their exceptional teamwork and skills in this fast-paced competition. Experience every epic battle and jaw-dropping comeback that will leave everyone talking for days. \n\nNot only will the champions walk away with massive cash prizes, but they’ll also receive exclusive merchandise designed specifically for this tournament. Fans will have the chance to engage in interactive sessions, meet the players, and immerse themselves in the world of competitive gaming. This is your chance to cheer for your favorite teams and be part of a community of passionate Mobile Legends enthusiasts. Don’t miss out on this unforgettable experience that will set the benchmark for future esports events!',
                'release' => Carbon::create(2024, 12, 15),
                'image' => 'images/mobile_legends_tournament.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coswalk Parade',
                'detail' => 'Step into a world of vibrant creativity and artistic expression at the Coswalk Parade! This event is a celebration of cosplay culture where participants bring their favorite characters to life, blending fantasy and reality in an energetic parade. From anime heroes to video game legends, the streets will come alive with dazzling costumes and joyous fans. Audiences will have the chance to witness breathtaking creativity and passion as each participant embodies their character to perfection. \n\nMore than just a parade, it’s a festival of creativity that invites everyone to immerse themselves in the magic of storytelling through costumes. Engage in photo opportunities, interact with cosplayers, and enjoy a lively atmosphere filled with music, laughter, and unforgettable performances. Whether you’re a cosplayer or an admirer, the Coswalk Parade offers a unique chance to connect with like-minded enthusiasts and celebrate the beauty of fandom. Join us for this extraordinary event and make memories that last a lifetime!',
                'release' => Carbon::create(2024, 12, 16),
                'image' => 'images/coswalk_parade.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TikTok Competition',
                'detail' => 'Unleash your creativity in our exciting TikTok Competition! This is your moment to shine and showcase your talent to the world. Whether it’s dancing, acting, or unique storytelling, there’s no limit to how you can captivate the audience. Submit your best videos and stand a chance to win fabulous prizes and gain recognition from our panel of judges and the community. Each submission will be evaluated for its originality, entertainment value, and overall creativity. \n\nThe top videos will not only be awarded prizes but also featured on our official page, giving you the platform to expand your reach and inspire others. Gain exposure among thousands of viewers and leave your mark as a TikTok creator. Don’t miss this opportunity to turn your creative passion into a moment of fame. Gather your ideas, pick up your phone, and let the competition begin! Create content that will resonate with audiences and establish your identity in the world of TikTok creators!',
                'release' => Carbon::create(2024, 12, 17),
                'image' => 'images/tiktok_competition.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cosplay Contest',
                'detail' => 'Are you ready to bring your favorite characters to life in the most stunning way possible? The Cosplay Contest is your ultimate stage to showcase your creativity, craftsmanship, and passion for your favorite franchises. With detailed costumes and captivating performances, participants will compete for the title of the best cosplayer, judged by a panel of experts in the field. Show off your talent in front of an enthusiastic crowd and gain recognition for your hard work. \n\nThis is not just a contest; it’s a celebration of imagination and talent where cosplayers of all levels come together to share their love for the craft. The event also includes exciting workshops, meet-and-greet sessions, and photo booths where fans can interact with participants. With amazing prizes up for grabs, including exclusive merchandise and cash rewards, the stakes have never been higher. So, gather your materials, polish your performance, and get ready to dazzle the audience! Make this event an unforgettable moment for you and the cosplay community!',
                'release' => Carbon::create(2024, 12, 18),
                'image' => 'images/cosplay_contest.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}