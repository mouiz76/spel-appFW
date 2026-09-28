<div class="mb-4">
    <label for="name" class="block text-sm font-medium mb-1">Naam</label>
    <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}"
           class="w-full border border-gray-300 rounded px-3 py-2 text-sm @error('name') border-red-500 @enderror" required>
    @error('name')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
