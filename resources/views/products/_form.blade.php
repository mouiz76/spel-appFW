<div class="mb-4">
    <label for="name" class="block text-sm font-medium mb-1">Naam</label>
    <input type="text" id="name" name="name" value="{{ old('name', $product->name ?? '') }}"
           class="w-full border border-gray-300 rounded px-3 py-2 text-sm @error('name') border-red-500 @enderror" required>
    @error('name')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="description" class="block text-sm font-medium mb-1">Beschrijving</label>
    <textarea id="description" name="description" rows="4"
              class="w-full border border-gray-300 rounded px-3 py-2 text-sm @error('description') border-red-500 @enderror">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="category_id" class="block text-sm font-medium mb-1">Categorie</label>
    <select id="category_id" name="category_id"
            class="w-full border border-gray-300 rounded px-3 py-2 text-sm @error('category_id') border-red-500 @enderror" required>
        <option value="">-- Kies een categorie --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
