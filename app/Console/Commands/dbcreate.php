<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crée une nouvelle base de données dans MySql/MariaDb';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $schemaName = $this->argument('name') ?: config("database.connections.mysql.database");
            $charset = config("database.connections.mysql.charset",'utf8mb4');
            $collation = config("database.connections.mysql.collation",'utf8mb4_unicode_ci');

            config(["database.connections.mysql.database" => null]);

            $query = "CREATE DATABASE IF NOT EXISTS $schemaName CHARACTER SET $charset COLLATE $collation;";

            DB::statement($query);

            config(["database.connections.mysql.database" => $schemaName]);
            $this->info("La base de données a été créée avec succès.");
        }
        catch (\Exception $e) {
            $this->error($e);
        }
    }
}
