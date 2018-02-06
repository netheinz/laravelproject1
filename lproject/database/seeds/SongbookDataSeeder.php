<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SongbookDataSeeder extends Seeder
{
    protected $curdate;

    public function __construct()
    {
        $this->curdate = Carbon::create(date("Y"), date("m"), date("d"));
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed user
        DB::table('users')->insert([
            'name' => 'Heinz K',
            'email' => 'heka@techcollege.dk',
            'password' => bcrypt('1234'),
            'created_at' => $this->curdate,
            'updated_at' => $this->curdate
        ]);

        //Seed artists
        DB::table('artists')->insert([
            'name' => 'Allan Olsen',
            'description' => str_random(500),
            'deleted' => 0,
            'created_at' => $this->curdate,
            'updated_at' => $this->curdate
        ]);
        DB::table('artists')->insert([
            'name' => 'Johnny Madsen',
            'description' => str_random(500),
            'deleted' => 0,
            'created_at' => $this->curdate,
            'updated_at' => $this->curdate
        ]);

        //Seed albums
        DB::table('albums')->insert([
            'title' => 'Jøwt',
            'description' => str_random(500),
            'deleted' => 0,
            'created_at' => $this->curdate,
            'updated_at' => $this->curdate
        ]);

        //Seed songs
        DB::table('songs')->insert([
            'title' => 'Op til Alaska',
            'text' => str_random(500),
            'artist_id' => 1,
            'deleted' => 0,
            'created_at' => $this->curdate,
            'updated_at' => $this->curdate
        ]);
        DB::table('songs')->insert([
            'title' => 'Vi lå jo i Herning',
            'text' => str_random(500),
            'artist_id' => 1,
            'deleted' => 0,
            'created_at' => $this->curdate,
            'updated_at' => $this->curdate
        ]);

        //Seed albumsongs
        DB::table('albumsongs')->insert([
            'album_id' => 1,
            'song_id' => 1,
            'sort_num' => 1
        ]);
        DB::table('albumsongs')->insert([
            'album_id' => 1,
            'song_id' => 2,
            'sort_num' => 2
        ]);

    }
}
