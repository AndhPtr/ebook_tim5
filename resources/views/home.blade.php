<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Website</title>
</head>
<body>
    <header>
        <h1>Welcome to our E-Book Website!</h1>
    </header>
    
    <main>
        <section>
            <h2>Featured E-Books</h2>
            <ul>
                @foreach($ebooks as $ebook)
                    <li>{{ $ebook->title }}</li>
                @endforeach
            </ul>
        </section>
        
        <section>
            <h2>Popular Categories</h2>
            <ul>
                @foreach($categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2022 E-Book Website. All rights reserved.</p>
    </footer>
</body>
</html>