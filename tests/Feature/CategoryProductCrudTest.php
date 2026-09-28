<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryProductCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_crud(): void
    {
        $this->get(route('categories.index'))->assertOk();
        $this->get(route('categories.create'))->assertOk();

        $this->post(route('categories.store'), ['name' => 'Bordspellen'])
            ->assertRedirect(route('categories.index'));
        $category = Category::where('name', 'Bordspellen')->firstOrFail();

        $this->get(route('categories.show', $category))->assertOk()->assertSee('Bordspellen');
        $this->get(route('categories.edit', $category))->assertOk();

        $this->put(route('categories.update', $category), ['name' => 'Kaartspellen'])
            ->assertRedirect(route('categories.index'));
        $this->assertSame('Kaartspellen', $category->fresh()->name);

        $this->post(route('categories.store'), ['name' => ''])->assertSessionHasErrors('name');

        $this->delete(route('categories.destroy', $category))->assertRedirect(route('categories.index'));
        $this->assertModelMissing($category);
    }

    public function test_product_crud(): void
    {
        $category = Category::create(['name' => 'Bordspellen']);

        $this->get(route('products.index'))->assertOk();
        $this->get(route('products.create'))->assertOk()->assertSee('Bordspellen');

        $this->post(route('products.store'), [
            'name' => 'Monopoly',
            'description' => 'Klassiek spel',
            'category_id' => $category->id,
        ])->assertRedirect(route('products.index'));
        $product = Product::where('name', 'Monopoly')->firstOrFail();

        $this->get(route('products.show', $product))->assertOk()->assertSee('Monopoly');
        $this->get(route('products.edit', $product))->assertOk();

        $this->put(route('products.update', $product), [
            'name' => 'Risk',
            'description' => null,
            'category_id' => $category->id,
        ])->assertRedirect(route('products.index'));
        $this->assertSame('Risk', $product->fresh()->name);

        $this->post(route('products.store'), ['name' => 'X', 'category_id' => 999])
            ->assertSessionHasErrors('category_id');

        $this->delete(route('products.destroy', $product))->assertRedirect(route('products.index'));
        $this->assertModelMissing($product);
    }
}
