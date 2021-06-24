<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablePricing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('subscription_fee_monthly')->nullable();
            $table->string('subscription_fee_annual')->nullable();
            $table->string('buying_tokens')->nullable();
            $table->string('minting_tokens')->nullable();
            $table->string('tokens_mints_per_month')->nullable();
            $table->string('edition_per_token')->nullable();
            $table->string('marketplace')->nullable();
            $table->string('wallet')->nullable();
            $table->string('gomint_sales_commission')->nullable();
            $table->string('gomint_purchase_commission')->nullable();
            $table->string('royalties_on_future_sales')->nullable();
            $table->string('gas_fees')->nullable();
            $table->string('email_marketing')->nullable();
            $table->string('analytics_dashboard')->nullable();
            $table->string('support')->nullable();
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricings');
    }
}
