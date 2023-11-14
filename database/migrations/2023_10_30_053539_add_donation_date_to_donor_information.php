<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDonationDateToDonorInformation extends Migration
{
    public function up()
    {
        Schema::table('donor_information', function (Blueprint $table) {
            $table->string('donation_date')->after('postal_code');
        });
    }

    public function down()
    {
        Schema::table('donor_information', function (Blueprint $table) {
            $table->dropColumn('donation_date');
        });
    }
}

