<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\cart;
use App\Models\product;
use App\Models\User;
use Tests\TestCase;
use Faker\Provider\fa_IR\Person;

class ProfileTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function definition(): array
    {
        return [
            'usertype' => '1', // '1' for 'admin' and '0' for 'user'
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_no' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',

        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
    public function test_user_can_access_home_page()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewIs('home.home');
    }

    public function test_user_can_access_shop_page()
    {
        $response = $this->get(route('shop'));

        $response->assertStatus(302);
        $response->assertViewIs('home.shop');
    }

    public function test_user_can_access_contact_page()
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(302);
        $response->assertViewIs('home.contact');
    }

    // Add similar test cases for other methods in HomeController

    public function test_user_can_add_product_to_cart()
    {
        $user = factory(User::class)->create();
        $product = factory(product::class)->create();

        $response = $this->actingAs($user)->post(route('add_cart', $product->id));

        $response->assertStatus(302); // Assuming a redirect after adding to cart
        $this->assertDatabaseHas('carts', ['user_id' => $user->id, 'product_id' => $product->id]);
    }

    public function test_user_can_remove_product_from_cart()
    {
        $user = User::factory()->create();
        $cart = Cart::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get(route('remove_cart', $cart->id));

        $response->assertStatus(302); // Assuming a redirect after removing from cart
        $this->assertDatabaseMissing('carts', ['id' => $cart->id]);
    }
}
