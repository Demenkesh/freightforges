<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tracking_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Unique tracking code
            $table->enum('trip_type', ['one-way', 'non-one-way']); // Trip type

            $table->string('origin_country_id');
            $table->string('origin_state_id'); // Foreign key to origin state

            $table->string('second_destination_country_id')->nullable();
            $table->string('second_destination_state_id')->nullable();

            $table->string('final_destination_country_id');
            $table->string('final_destination_state_id'); // Final destination for non-one-way

            $table->string('transport_mode_id'); // Foreign key to transport mode
            $table->string('status')->default('pending'); // Tracking status (e.g., pending, in-progress, completed)

            // Delivery date
            $table->date('estimated_delivery_date')->nullable(); // Nullable in case there's no estimate initially

            // Sender's details
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_address');
            $table->string('sender_mobile');

            // Receiver's details
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_address');
            $table->string('receiver_mobile');

            // Shipment details
            $table->string('bill_of_lading')->nullable(); // Bill of Lading
            $table->string('shipment_type'); // e.g., Air, Sea, Land
            $table->string('shipment_content'); // Content of Shipment
            $table->integer('quantity')->default(1); // Quantity of Product
            $table->float('weight')->nullable(); // Weight of Product
            $table->decimal('total_charges', 10, 2)->nullable(); // Total Charges for shipment

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tracking_codes');
    }
};
