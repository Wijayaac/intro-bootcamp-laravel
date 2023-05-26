 <div class="input__field">
     <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
     <label for="isbn">ISBN</label>
     <input type="text" name="isbn" value="{{ $isUpdate ? $book['isbn'] : old('isbn') }}" id="isbn">
 </div>
 <div class="input__field">
     <label for="title">Title</label>
     <input type="text" name="title" value="{{ $isUpdate ? $book['title'] : old('title') }}" id="title">
 </div>
 <div class="input__field">
     <label for="author">Author</label>
     <input type="number" name="author_id" value="{{ $isUpdate ? $book['author_id'] : old('author_id') }}" id="author">
 </div>
 <div class="input__field">
     <label for="image_path">Image URL / path</label>
     <input type="text" name="image_path" value="{{ $isUpdate ? $book['image_path'] : old('image_path') }}" id="image_path">
 </div>
 <div class="input__field">
     <label for="publisher">Publisher</label>
     <input type="text" name="publisher" value="{{ $isUpdate ? $book['publisher'] : old('publisher') }}" id="publisher">
 </div>
 <div class="input__field">
     <label for="category">Category</label>
     <input type="text" name="category" value="{{ $isUpdate ? $book['category'] : old('category') }}" id="category">
 </div>
 <div class="input__field">
     <label for="pages">Pages</label>
     <input type="number" name="pages" value="{{ $isUpdate ? $book['pages'] : old('pages') }}" id="pages">
 </div>
 <div class="input__field">
     <label for="language">Language</label>
     <input type="text" name="language" value="{{ $isUpdate ? $book['language'] : old('language') }}" id="language">
 </div>
 <div class="input__field">
     <label for="publish_date">Publish Date</label>
     <input type="datetime-local" name="publish_date" value="{{ $isUpdate ? $book['publish_date'] : old('publish_date') }}" id="publish_date">
 </div>
 <div class="input__field">
     <label for="subjects">Subjects</label>
     <input type="text" name="subjects" value="{{ $isUpdate ? $book['subjects'] : old('subjects') }}" id="subjects">
 </div>
 <div class="input__field">
     <label for="description">Description</label>
     <textarea name="desc" id="description" rows="10">
@if ($isUpdate)
{{ $book['desc'] }}
@else
{{ old('desc') }}
@endif
    </textarea>
 </div>

 @auth
     <button class="btn btn-success" type="submit">
         {{ $isUpdate ? 'Update' : 'Save' }}
     </button>
 @endauth
