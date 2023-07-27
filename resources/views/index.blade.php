

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>Bookshelf Apps</title>

  <link type="text/css" rel="stylesheet" href="/css/style.css" />
</head>
<body>
  <header>
    <h1>Bookshelf Apps</h1>
  </header>

  <main>
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
        <button type="submit">
          Masukkan Buku ke rak <b>Belum selesai dibaca</b>
        </button>
      </form>
    </section>
    
    <!--section class="search">
      <h2>Cari Buku (Opsional)</h2>
      <form id="search-book">
        <label for="search-book-title">Judul</label>
        <input id="search-book-title" type="text">
        <button id="search-submit" type="submit">Cari</button>
      </form>
    </section-->
    
    <section class="book-shelf">
      <h2>Belum selesai dibaca</h2>

      <div id="incomplete-list" class="book-list">
        <article class="book-item">
          <h3>Judul 1</h3>
          <p>Penulis: Penulis 1</p>
          <p>Tahun: 2022</p>

          <div class="action">
            <div class="flex">
              <a href="buku/1/edit" class="btn blue">Edit</a>
              <form action="buku/1/hapus" method="post">
                <button class="btn red">Hapus buku</button>
              </form>
            </div>
          </div>
        </article>
        <article class="book-item">
          <h3>Judul 3</h3>
          <p>Penulis: Penulis 3</p>
          <p>Tahun: 2020</p>

          <div class="action">
            <div class="flex">
              <a href="buku/3/edit" class="btn blue">Edit</a>
              <form action="buku/3/hapus" method="post">
                <button class="btn red">Hapus buku</button>
              </form>
            </div>
          </div>
        </article>
      </div>
    </section>
    
    <section class="book-shelf">
      <h2>Selesai dibaca</h2>

      <div id="complete-list" class="book-list">
        <article class="book-item">
          <h3>Judul 2</h3>
          <p>Penulis: Penulis 2</p>
          <p>Tahun: 2023</p>

          <div class="action">
            <div class="flex">
              <a href="buku/2/edit" class="btn blue">Edit</a>
              <form action="buku/2/hapus" method="post">
                <button class="btn red">Hapus buku</button>
              </form>
            </div>
          </div>
        </article>
      </div>
    </section>
  </main>

  <script type="text/javascript" src="main.js"></script>
</body>
</html>
