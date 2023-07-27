<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Add</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 
  
  
  
    <section class="input">
      <h2>Masukkan Buku Baru</h2>
      <form action="" method="post">
        @csrf
        <div class="input">
          <label>Judul</label>
          <input name="title" type="text" required />
        </div>
        <div class="input">
          <label>Penulis</label>
          <input name="author" type="text" required />
        </div>
        <div class="input">
          <label>Tahun</label>
          <input name="year" type="number" required />
        </div>

        </div>
        <button type="submit"name="postAdd"> Add</button>
    </form>
   
    <section class="book-shelf">
      <h2>Selesai dibaca</h2>

    @foreach($book as $books)
      <div id="incomplete-list" class="book-list">
        <article class="book-item">
          
      <table border=""style="border-collapse:collapse; border:none; border-color:snow;">
        
        <tr>
          <td>Judul</td>
          <td>&nbsp : &nbsp</td>
          <td>{{ $books->title }}</td>
       </tr>
       <tr>
          <td>Penulis</td>
          <td>&nbsp : &nbsp</td>
          <td>{{ $books->author }}</td>
       <tr>
          <td>Tahun</td>
          <td>&nbsp : &nbsp</td>
          <td>{{ $books->year }}</td>
          <br>
        </tr>
      </table>
    </article>
    <articel class="book-item">  
          <div class="action">
            <div class="flex">
              <a href="/tasks/{{$books->id}}/edit" class="btn blue">Edit</a>
              <form action="/tasks/{{$books->id}}" method="post">
                @method('delete')
                @csrf
              <button class="btn red"="">Hapus buku</button>
              </form>
            </div>
           </div>
          </div>
        </article>
  
    @endforeach
    </section>
   
   </body>
</html>