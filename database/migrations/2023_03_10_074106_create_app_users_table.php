<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   
    public function up(): void
    {
        Schema::create('appusers', function(Blueprint $table)
            {
                $table->id();
                $table->string('username',255);
                $table->string('password',255);
                $table->string('email',255);
                $table->string('phone',255);
                $table->string('name',255);
                // $table->timestamps();
    });
     }
   
    public function down(): void
    {
        Schema::drop('appusers');
    }
    };
