<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Repository;
use Illuminate\Support\Facades\Http;

class UpdateRepositories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $url = config('github.api.url');
        $token = config('github.api.token');

        $response = Http::withHeaders([
            'Accept' => 'application/vnd.github+json',
            'Authorization' => "token $token",
        ])->get("$url/user/repos");

        foreach ($response->json() as $repository) {
            Repository::updateOrCreate(['github_id' => $repository['id']], [
                'github_id' => $repository['id'],
                'url' => $repository['html_url'],
                'name' => $repository['name'],
                'description' => $repository['description'],
                'stars' => $repository['stargazers_count'],
                'forks' => $repository['forks_count'],
                'language' => $repository['language'],
            ]);
        }

        return Command::SUCCESS;
    }
}
