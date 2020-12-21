<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                "genre_id" => 1,
                "title" => "Itaewoon Class",
                "photo" => "drama1.jpg",
                "desc" => "In a colorful Seoul neighborhood, an ex-con and his friends
                fight a mighty foe to make their ambitious dreams for their
                street bar a reality.",
                "rating" => "4.9",
            ],
            [
                "genre_id" => 1,
                "title" => "Its Okay to Not be Okay",
                "photo" => "drama2.jpg",
                "desc" => "Moon Gang-tae (Kim Soo-hyun) lives with his autistic
                older brother Moon Sang-tae (Oh Jung-se).
                They frequently moves from town to town, ever since
                Sang-tae witnessed their mother's murder.
                Gang-Tae takes up jobs as a caretaker in a psychiatric
                ward at every place they settle in. While working in a hospital,
                he meets a famous children's book writer
                Ko Moon-young (Seo Ye-ji), who some people
                suggest has antisocial personality disorder.",
                "rating" => "4.8",
            ],
            [
                "genre_id" => 1,
                "title" => "Crash Landing on You",
                "photo" => "drama3.jpg",
                "desc" => "the story of two star-crossed lovers, Yoon Se-ri (Son Ye-jin),
                a South Korean fashion entrepreneur with her company
                Se-ri's Choice, and Ri Jeong-hyeok (Hyun Bin),
                a member of the North Korean elite and a Captain in
                the North Korean Special Police Force.
                ",
                "rating" => "4.9",
            ],
            [
                "genre_id" => 1,
                "title" => "The World of The Married",
                "photo" => "drama4.jpg",
                "desc" => "A turbulent twister of lies, betrayals and revenge tears apart
                the seemingly picture-perfect marriage between a doctor
                and a filmmaker.",
                "rating" => "4.7",
            ],
            [
                "genre_id" => 2,
                "title" => "The Spongebob Movie",
                "photo" => "kids1.jpg",
                "desc" => "When his bestfriends Gary is suddenly scatched away,
                SpongeBob takes patrick on a madcap mission far beyond
                Bikini Bottom to save their pink-shelled pal.
                ",
                "rating" => "4.4",
            ],
            [
                "genre_id" => 2,
                "title" => "The Boss Baby: Back in Business",
                "photo" => "kids2.jpg",
                "desc" => "With a little help from his brother and accomplice, Tim,
                Boss Baby tries to balance family life with his job at
                Baby Corp headquarters.",
                "rating" => "3.2",
            ],
            [
                "genre_id" => 2,
                "title" => "Despicable Me 3",
                "photo" => "kids3.jpg",
                "desc" => "Former villain Gru is now an agent for the
                Anti-Villain League (AVL). He and his partner
                and wife Lucy Wilde are sent to foil the plans of Balthazar Bratt,
                a former child actor from the 1980s that turned evil
                after his TV show, “Evil Bratt”, got cancelled due
                to Bratt hitting puberty. Gru manages to stop
                Bratt from stealing the Dumont Diamond,
                a giant pink diamond, but is unable to capture him.
                As a result of failing to capture Bratt, Gru and Lucy
                are dismissed from the AVL by its irrational new director
                Valerie Da Vinci, following the retirement of the AVL's
                former director, Silas Ramsbottom.
                ",
                "rating" => "4.7",
            ],
            [
                "genre_id" => 2,
                "title" => "Bee Movie",
                "photo" => "kids4.jpg",
                "desc" => "Barry, a worker bee stuck in a dead-end job making honey,
                sues humans when he learns they've been stealing bees'
                nectar all along.",
                "rating" => "3.9",
            ],
            [
                "genre_id" => 3,
                "title" => "The Queen's Gambit",
                "photo" => "tv_show1.jpg",
                "desc" => "Sent to an orphanage at age 9, Beth develops an uncanny
                knack for chess - and a growing dependence on the green
                tranquilizers given to the children.
                ",
                "rating" => "4.8",
            ],
            [
                "genre_id" => 3,
                "title" => "Sex Education",
                "photo" => "tv_show2.jpg",
                "desc" => "Insecure Otis has all the answers when it comes to sex
                advice, thanks to his therapist mom. So rebel Meave
                proposes a school sex-therapy clinic.",
                "rating" => "4.8",
            ],
            [
                "genre_id" => 3,
                "title" => "The Snowpiercer",
                "photo" => "tv_show3.jpg",
                "desc" => "Snowpiercer is set in 2021, seven years after the world
                becomes a frozen wasteland, and follows the remnants
                of humanity, who inhabit a perpetually moving train
                consisting of 1001 carriages that circles the globe 2.7
                revolutions per year (133 days to complete a revolution).
                Built by billionaire Wilford, the train is rigidly separated by
                class, with passengers caught up in a revolutionary struggle
                against the strictly imposed social hierarchy and unbalanced
                allocation of limited resources. The show questions class
                warfare, social injustice, and the politics of survival.",
                "rating" => "3.5",
            ],
            [
                "genre_id" => 3,
                "title" => "La Casa De Papel",
                "photo" => "tv_show4.jpg",
                "desc" => "Eight Thieves take hostages and lock themselves in the Royal
                Mint of Spain as a criminal mastermind manipulates the police
                to carry out his plan.",
                "rating" => "4",
            ],
        ]);
    }
}
