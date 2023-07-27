
   <div class="form_create">
       <form action="/tasks/{{ $books->id }}"method="post">
      @method('put')
      @csrf
      <input type="text"name="title"value="{{ $books->title }}"required > <br>
      <input type="text"name="author"value="{{ $books->author }}"required > <br>
      <input type="text"name="year"value="{{ $books->year }}"required > <br>
    
      <button submit="">update</button>
    </form>
   </div>
 