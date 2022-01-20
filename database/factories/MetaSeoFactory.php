<?php
namespace Database\Factories;
use App\Models\Team;
use App\Models\MetaSeo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class MetaSeoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = MetaSeo::class;
    public function definition()
    {
        return [
            "meta_keywords"=> "Vui Lòng Điền Thông Tin",
            "meta_desc"=> "Vui Lòng Điền Thông Tin",
            "meta_image"=> "Vui Lòng Điền Thông Tin",
            "phone_number"=> "Vui Lòng Điền Thông Tin",
            "email"=> "Vui Lòng Điền Thông Tin",
            "address"=> "Vui Lòng Điền Thông Tin",
        ];
    }
}
